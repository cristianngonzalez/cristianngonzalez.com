

## Before to start
<p>
    This proyect uses Laravel and others composer dependencies that we need to install.
    <code>
        composer install --ignore-platform-req=ext-fileinfo
    </code>
</p>

<p>
    Also we need to install Javascript dependencies by npm
    <code>
        npm install
    </code>
</p>

## Database
<p> 
    We need to create a .env file , then we have to create a mysql database and spicify in the .env with the relatives parameters.
    Finally we have to run migrations and seeders
    <code>
         php artisan migrate:fresh --seed
    </code>
</p>

## Database
<p>
    This proyect uses local and public storage, we need to set availably disk.
    <code>
        php artisan storage:link
    </code>
</p>

## Server
<p>
    When the fowards steps has been doing, we can server the project locally
    <code>
        php artisan serve
    </code>
</p>