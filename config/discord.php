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
     * @var string
     * @see https://discordapp.com/developers/applications/me
     */
    'bot-token' => env('DISCORD_BOT_TOKEN'),

    /**
     * Set the initial admins by specifying their User Ids.
     *
     * @var array
     */
    'admins' => explode(',', env('DISCORD_ADMINS', '')),

    /**
     * Do not change anything below.
     * @warn Really, don't.. Leeeeroy Jenkins!
     */
    'endpoints' => [
        'gateway' => 'wss://gateway.discord.gg',
        'http-api' => 'https://discordapp.com/api/'
    ],
    'versions' => [
        'gateway' => 6,
        'http-api' => 6
    ],
];
