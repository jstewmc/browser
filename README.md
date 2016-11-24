# browser
A web browser.

```php
namespace Jstewmc\Browser;

// create a new browser
$browser = (new Browser())
    ->setPlatform('Macintosh')
    ->setName('Safari')
    ->setVersion('10.0.1');
    
// get the browser's information
$browser->getPlatform();  // returns "Macintosh"
$browser->getName();      // returns "Safari"
$browser->getVersion();   // returns "10.0.1"
```

That's about it!

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## License

[MIT](https://github.com/jstewmc/browser/blob/master/LICENSE)

## Version

### 0.1.0, November 24, 2016

* Initial release
