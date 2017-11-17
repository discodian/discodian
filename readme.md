# Discodian

*Discodian (Discord Custodian), the extensible php toolkit for creating your own Discord bot.*

> This is a work in progress. You can expect a first release before November 24th 2017.

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
