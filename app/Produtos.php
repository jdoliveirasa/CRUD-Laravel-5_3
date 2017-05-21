<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
}


/*

composer create-project --prefer-dist laravel/laravel blog

apache (vhosts)
<VirtualHost *:80>
     ServerName blog
     DocumentRoot C:/wamp/www/blog/public
     SetEnv APPLICATION_ENV "development"
     <Directory C:/wamp/www/blog/public>
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>

hosts
127.0.0.1   blog

http://adonaidiofanes.com.br/blog/como-criar-crud-no-laravel-5-3/
php artisan migrate

*/