<?php

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
