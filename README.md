Phalcon PHP - Create simple REST API in 30 seconds
====================

Use phalcon devtool and write more coding to create a simple REST API in 30 seconds

Thanks.

Get Started
-----------

### Configuration

Check your database configuration and website's base URI.

    app/config/config.php

Then you'll need to create the database and Product table:

    php -r '
    require "app/config/config.php";

    $n = $config->database->name;
    $u = $config->database->username;
    $p = $config->database->password;

    echo `echo "CREATE DATABASE {$n}" | mysql -u {$u} -p {$p}`;
    echo `cat schemas/simple_rest.sql | mysql -u {$u} -p {$p} {$n}`;
    '
    
### Devtools commands
In this demo, we used some commands as below:
    
    cd /var/www/html
    phalcon create-project rest --type=micro
    cd rest/
    phalcon model --name=product
### RUN check demo project

    Use POSTMAN or browser:
    /rest/products

    