# userSeed-laravel
Fill your users table with one artisan command, initiate with very simple command

# How it woks

This package you will help to show some data of users, with just one command you will to fill the table 'users', and can choose by english names and portuguese names.

# Pre-requisites

Laravel >= 5.4 version


# Instruction to install

1. Register the Service Provider in config(app.php)

        /*
         * Package Service Providers...
         */
        
        ...
         
        Wrogati\UserSeed\Providers\CmdTableServiceProvider::class,
        Wrogati\UserSeed\Providers\UserSeedServiceProvider::class,
        
2. Configure the alias in config(app.php)
        
        ...
        
        'US' => Wrogati\UserSeed\Controllers\UserSeedController::class,
        