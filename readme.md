![Preview](http://i.imgur.com/Sa2ap4h.png)

# osmena-times

> A rush project made with Laravel 4.2 & Bootstrap 3. Suit your needs with the yolodes (yolo + codes).

Special mention to:

- Nesbot\Carbon
- FakerPHP (fzaninotto\Faker)

## Setup

The usual Laravel setup. Anyway, I'll still *explain*.

Requirements:

- MySQL >= 5.3
- Composer

By default, the app uses a database named ```osmena-times```. Make sure to create a MySQL database. You may configure the connection settings in ```app/config/database.php```.

```bash
$ composer update
$ php artisan migrate
$ php artisan db:seed
```

![Preview](http://imgur.com/pcIwMvs.png)
