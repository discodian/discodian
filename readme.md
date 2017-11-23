# Discodian

*Discodian (Discord Custodian), the extensible php toolkit for creating your own Discord bot.*

> This is a work in progress. You can expect a first release before December 2017.

## Installation

```bash
composer create-project discodian/discodian
```

## Configuration

Copy `.env.example` to `.env` and add any necessary configuration settings.

Make sure to get a bot token from the [developer portal](https://discordapp.com/developers/applications/me).

- New App.
- Under section "Bot" click "Create a Bot User".
- Under section "Bot" click "click to reveal" next to Token. This is the bot token.
- Feel free to configure the bot to your liking.

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
is provided via this readme.
