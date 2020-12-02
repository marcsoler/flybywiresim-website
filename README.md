<img src="https://raw.githubusercontent.com/flybywiresim/fbw-branding/master/png/FBW-WebOps.png">

### Server Requirements
- PHP >= 7.3
- [Composer](https://getcomposer.org/)
- [NodeJS](https://nodejs.org/)

## How to deploy on localhost
- Fork the repository
- Clone the fork to your machine using ```git clone```
- Run ```npm install && npm run dev```
- To deploy on localhost use ```php artisan serve --port 80```
- To run without ```php artisan serve``` you need XAMMP or equivelent software. Rename ```server.php``` to ```index.php``` and move ```public/.htaccess``` to ```root```

*Built using [laravel](https://laravel.com/docs) PHP Framework*