# foundation

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Sergi Tur Badenas``` ```acacha``` ```https://github.com/acacha``` ```sergiturbadenas@gmail.com``` ```Scool``` ```foundation``` ```Foundation classes for Scool``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer in your Laravel project executes:

``` bash
$ composer require scool/foundation
```

## Usage

Modify your **App\User** class to:

```php
<?php

namespace App;

use Scool\Foundation\User as ScoolUser;

class User extends ScoolUser
{
    
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sergiturbadenas@gmail.com instead of using the issue tracker.

## Credits

- [Sergi Tur Badenas][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Scool/foundation.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Scool/foundation/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Scool/foundation.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Scool/foundation.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Scool/foundation.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Scool/foundation
[link-travis]: https://travis-ci.org/Scool/foundation
[link-scrutinizer]: https://scrutinizer-ci.com/g/Scool/foundation/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Scool/foundation
[link-downloads]: https://packagist.org/packages/Scool/foundation
[link-author]: https://github.com/acacha
[link-contributors]: ../../contributors
