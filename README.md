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
This wrapper is open-sourced software licensed under the MIT license. The underlying `firebase/php-jwt` library is licensed under the 3-Clause BSD License.
