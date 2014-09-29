osmena-times
==========

A rush project made with Laravel 4.2 & Bootstrap 3. Suit your needs with the yolodes (yolo + codes).

Special mention to:

- Nesbot\Carbon
- FakerPHP (fzaninotto\Faker)

Some screenshots:

- [img1](http://imgur.com/Sa2ap4h)
- [img2](http://imgur.com/pcIwMvs)

##Instructions##

The usual Laravel setup. Anyway, I'll still *explain*.

Requirements:

- MySQL >= 5.3
- Composer

By default, the app uses a database named ```osmena-times```. Make sure to create a MySQL database. You may configure the connection settings in ```app/config/database.php```.

```bash
$ git remote add origin [url]
$ git pull origin master

$ composer update
$ php artisan migrate
$ php artisan db:seed
```
