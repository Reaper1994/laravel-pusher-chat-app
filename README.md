# laravel-pusher-chat-app
## Requirements

- PHP v8.3
- Composer v2.7.4
- Laravel version used 11
- Web Server (HTTPS)

## Setup

- `composer require pusher/pusher-php-server`

## Code

- `app/Http/Controllers/PusherController.php`
    - index()
    - broadcast()
    - receive()


- `app/Events/PusherBroadcast.php`


## www.pusher.com

- Create Account
- Create App
- Copy API Keys

## Env

Copy `.env.example` and name `.env` and populate the following API keys

- `BROADCAST_DRIVER`


- `PUSHER_APP_ID`
- `PUSHER_APP_KEY`
- `PUSHER_APP_SECRET`
- `PUSHER_APP_CLUSTER`
