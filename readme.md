# Laravel Authentication Demo (JWT)

1. Install dependencies  
    `composer install`

2. Copy .env.example file and save as .env, configurate database connection and app URL

3. Install Homestead
    Mac/Linux:  
    `php vendor/bin/homestead make`  

    Windows:  
    `//vendor//bin//homestead make`  

4. Create host address for project, edit hosts file (will need admin rights):  
    Mac/Linux:  
    `nano /etc/hosts`  

    Windows:  
    `C:\Windows\System32\drivers\etc\hosts`  

5. Generate application key  
    `php artisan key:generate`

6. Generate JWTAuth secret key for token signing:  
    `php artisan jwt:secret`

7. Create and run Homestead virtual machine
    `vagrant up`

8. After virtual machine is running, run migrations
    `php artisan migrate`

9. Now the Demo is ready for use, try:  
        To register a user:

        URL:
            <Host>/api/register  
        Data:  
        {  
            "name" : "User One",  
            "email: : user@test.com",  
            "password" : "123456",  
            "password_confirmed" : "123456"  
        }  

    To login user:  
        
        URL:
            <Host>/api/login  
        Data:        
        {  
            "email: : user@test.com",
            "password" : "123456"
        }