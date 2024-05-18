# laravel-pusher-chat-app
A Laravel Pusher Chat App is a straightforward messaging application built with Laravel and Pusher. It enables users to exchange messages, reply to specific messages, delete sent messages,  track has last seen status, and display read receipts with ticks indicating when messages are read by the recipient...

![Animation](https://github.com/Reaper1994/laravel-pusher-chat-app/assets/23649642/959323a7-ccbf-40ce-8cd3-cc910b48aa93)
![Animation-2](https://github.com/Reaper1994/laravel-pusher-chat-app/assets/23649642/894589ed-590e-4a99-a5fb-6d0d27116995)


## Requirements

- PHP v8.3
- Composer v2.7.4
- Mysql
- Pusher
- React
- Scout (Mellisearch)

## Setup

1. Run `composer install` to install the PHP dependencies.
2. Run `npm install` to install the Node.js dependencies.
3. Run `php artisan migrate:fresh --seed` to migrate the database and seed it with data.


## www.pusher.com

- Create Account
- Create App
- Copy API Keys

## Environment Configuration

1. Copy the `.env.example` file and rename it to `.env`.
2. Populate the following API keys in the `.env` file:

    - `SCOUT_DRIVER=meilisearch`
      
    - `BROADCAST_DRIVER=pusher`
    - `PUSHER_APP_ID`
    - `PUSHER_APP_KEY`
    - `PUSHER_APP_SECRET`
    - `PUSHER_APP_CLUSTER`

3. Additionally, for client-side environment variables, update your `.env` file as follows:

    ```plaintext
    VITE_APP_NAME="${APP_NAME}"
    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ```

    These variables will be used in your client-side code, so make sure to replace `${...}` placeholders with actual values.

# NPM packages used
 Laravel echo
 hero icons-react 

Done by Osmar Rodrigues - @Reaper1994
