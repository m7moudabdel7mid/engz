# EngZ
A very Simple Url Shortner built on Laravel Framework 5.3 for demonstrate purpose.

## What's New
this Url-Shortner simply can generate a very short url slugs that consists of only english characters and numbers [a-z][0-9].  
it will genrate 36 Url slugs consists of 1 character or digit.  
1296 url slugs that consists of only 2 characters.  
+36k url slugs that consists of only 3 characters.  
+1.6m url slugs that consists of only 4 characters.  
+60m url slugs that consists of only 5 characters.  

Which means that you can generate More than a Million and half url slugs with a 4 characters length.  
And if you need more then you can generate more than 60 million slugs only 5 characters length.  

And the most important thing is that all slugs consists of only english characters and digits, so the generated urls will look just great and very neat.  


## Installation

Clone the repository-
```
https://github.com/m7moudm7mmed/EngZ.git
```

Then cd into the folder with this command-
```
cd engz
```

Then run a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `engz` and then do a database migration using this command-
```
php artisan migrate
```


At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```


Then go to `http://localhost:8000` from your browser and test the app.



## Ask a question?

If you have any question please contact at m7moudm7mmed@gmail.com

## Screenshot

![Home Page](/screenshots/1.png)
![Statistcs Page](/screenshots/2.png)
