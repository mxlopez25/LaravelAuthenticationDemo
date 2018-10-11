Laravel Authentication Demo (JWT)

Install dependencies
    composer install

Copy .env.example file and save as .env, configurate database connection and app URL

Install Homestead
    Mac/Linux:
    php vendor/bin/homestead make

    Windows:
    //vendor//bin//homestead make

Create host address for project, edit hosts file (will need admin rights):
    Mac/Linux:
    nano /etc/hosts

    Windows
    C:\Windows\System32\drivers\etc\hosts

Generate application key
    php artisan key:generate

Generate JWTAuth secret key for token signing:
    php artisan jwt:secret

Create and run Homestead virtual machine
    vagrant up

After virtual machine is running, run migrations
    php artisan migrate

Now the Demo is ready for use:
    To register users:
        URL: <Host>/api/register
        Data: {
            "name" : "User One",
            "email: : user@test.com",
            "password" : "123456",
            "password_confirmed" : "123456"
        }

    To login user:
        URL: <Host>/api/login
        Data: {
            "email: : user@test.com",
            "password" : "123456"
        }