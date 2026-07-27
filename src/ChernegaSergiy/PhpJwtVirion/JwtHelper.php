<?php

declare(strict_types=1);

namespace ChernegaSergiy\PhpJwtVirion;

use ChernegaSergiy\PhpJwtVirion\Exception\JwtException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Throwable;

final class JwtHelper{

    public function __construct(
        private string $secret,
        private string $algorithm = "HS256"
    ){}

    /**
     * @param array<string, mixed> $payload
     */
    public function encode(array $payload) : string{
        return JWT::encode($payload, $this->secret, $this->algorithm);
    }

    /**
     * @return array<string, mixed>
     * @throws JwtException
     */
    public function decode(string $jwt) : array{
        try{
            $decoded = JWT::decode($jwt, new Key($this->secret, $this->algorithm));
            return (array) $decoded;
        }catch(Throwable $e){
            throw new JwtException("Invalid JWT: " . $e->getMessage(), 0, $e);
        }
    }
}
