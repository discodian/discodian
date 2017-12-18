# Discodian

*Discodian (Discord Custodian), the extensible php toolkit to create your own Discord bot.*

> Please note [sharding is not yet supported](https://github.com/discodian/discodian/issues/2).

[![Packagist](https://img.shields.io/packagist/v/discodian/core.svg)](https://packagist.org/packages/discodian/core)
[![Packagist](https://img.shields.io/packagist/dt/discodian/core.svg)](https://packagist.org/packages/discodian/core)
[![Join our Discord server](https://discordapp.com/api/guilds/380697983102222345/embed.png)](https://discord.gg/erybZg6)

## Requirements

- PHP 7.1 or up.
- Some knowledge about [composer](http://getcomposer.org).

## Installation

```bash
composer create-project discodian/discodian
```

## Configuration

Make sure to get a bot token from the [developer portal](https://discordapp.com/developers/applications/me).

- New App.
- Under section "Bot" click "Create a Bot User".
- Under section "Bot" click "click to reveal" next to Token. This is the bot token.
- Feel free to configure the bot to your liking.

Copy `.env.example` to `.env` if it doesn't exist yet and add any necessary configuration settings.

## Run

Fire up the bot using the following command:

```bash
php discodian
```

## Extensions

Create a composer-based package and make sure you use type "discodian-extension" in the composer.json
definition. Here's an excerpt to give an indication;

```json
{
    "name": "github-username/discodian-amazing-extension",
    "description": "Kick ass awesome extension for Discodian",
    "type": "discodian-extension"
}
```

In the root path of your package create a file `bootstrap.php`, you can use this file to hook into
the Discodian ecosystem.

```php
<?php

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(x, function () {
        
    });
};
```

### Developing the extension

I recommend creating a `workbench` directory inside the project. For each extension you write
you can create a folder, eg `amazing-extension` which houses your extension composer.json file
and the bootstrap.php file. 

Use [Studio](https://github.com/franzliedke/studio) while in the project directory to load
the extension. This generates a studio.json file. You can now install your extension from
the project directory using `composer require github-username/discodian-amazing-extension`. This
will generate a symlink from the vendor folder to your workbench.

## Contributing

We adhere to the PSR standards. If you're interested in working on a Pull Request
make sure to open one early on, simply prefix it with "WIP" to indicate a "Work
in Progress" version. This allows early guidance towards the best result and less
wasted time on your and our behalf.

In case your contribution is merged into a package of Discodian, you grant Discodian
full permission to use your contribution without any need for attribution.

## Credits

Part of this library was copied from and inspired by the Team Reflex source copyrighted 
by David Cole. Although the license claim has been dropped for some files, attribution
is provided via this readme. Thank you for the hard work, it is very much appreciated!
