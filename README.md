# php-jwt-virion

PocketMine-MP Virion (v3.1) wrapper for the `firebase/php-jwt` library. 
It uses Composer natively to pull the library during the Poggit-CI build process, meaning security updates to the underlying library are not frozen.

## Usage

To use this in your PocketMine-MP plugin via Poggit-CI, add the following to your `.poggit.yml`:

```yaml
projects:
  YourPluginName:
    path: ""
    libs:
      - src: xauth-ecosystem/php-jwt-virion/php-jwt-virion
        version: ^7.1
```

And in your `composer.json`, you do **not** need to require `firebase/php-jwt` directly if you are relying on the virion injection.

## License

This library is licensed under the CSSM Unlimited License v2.0 (CSSM-ULv2). See the [LICENSE](LICENSE) file for details. The underlying `firebase/php-jwt` library is licensed under the 3-Clause BSD License.
