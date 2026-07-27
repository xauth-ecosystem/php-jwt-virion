#!/bin/bash
echo "Installing firebase/php-jwt via Composer..."
composer require firebase/php-jwt

echo "Copying source files to src/Firebase/JWT..."
mkdir -p src/Firebase/JWT
cp -r vendor/firebase/php-jwt/src/* src/Firebase/JWT/

echo "Cleaning up..."
rm -rf vendor composer.lock

echo "Update complete. The files in src/Firebase/JWT are ready to be committed."
