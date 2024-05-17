# laravel-pusher-chat-app
A Laravel Pusher Chat App is a straightforward messaging application built with Laravel and Pusher. It enables users to exchange messages, reply to specific messages, delete sent messages,  track has last seen status, and display read receipts with ticks indicating when messages are read by the recipient...


## Requirements

- PHP v8.3
- Composer v2.7.4
- Mysql
- Pusher
- React
- Scout (Mellisearch)

## Setup

- `composer require pusher/pusher-php-server`


## www.pusher.com

- Create Account
- Create App
- Copy API Keys

## Env

Copy `.env.example` and name `.env` and populate the following API keys

- `BROADCAST_DRIVER`=pusher
- `PUSHER_APP_ID`
- `PUSHER_APP_KEY`
- `PUSHER_APP_SECRET`
- `PUSHER_APP_CLUSTER`

# NPM packages used
 Laravel echo
 hero icons-react command - npm install hero icons-react
