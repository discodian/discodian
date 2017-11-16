<?php

/*
 * This file is part of the Discodian bot toolkit.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://discodian.com
 * @see https://github.com/discodian
 */

return [
    /**
     * Set up an application and mark it as Bot.
     *
     * @see https://discordapp.com/developers/applications/me
     */
    'bot-token' => env('DISCORD_BOT_TOKEN'),

    'endpoints' => [
        'gateway' => 'wss://gateway.discord.gg',
        'http-api' => 'https://discordapp.com/api/'
    ],
    'versions' => [
        'gateway' => 6,
        'http-api' => 6
    ]
];
