## Как запустить проект:

1. `cd app`
2. `composer install` - установка зависимостей
3. `touch database/database.sqlite` - создание файла БД
4. В .env поменять absolute path к database.sqlite (DB_DATABASE=)
5. `php artisan migrate` - миграция существующих таблиц
6. `php artisan serve` - запуск сервера
----
## Как работает сообщение через http
1. `app/resources/views/newsletter.blade.php` Имеет форму отправки
2.  Создаем новый контролер `php artisan make:controller NewsController`
3.  Создаем новый путь с методом Post `app/routes/web.php` 
4.  Прописываем основную логику `app/Http/Controllers/NewsController.php` 
5.  Прописываем .env  адрес локального Go микросервиса `SERVER_ADDRESS`
6.  Прописываем тип базы данных /app/config/database.php -> `'default' => env('DB_CONNECTION', 'sqlite'),`
6.  Отправляем запрос на `env('SERVER_ADDRESS')`
7.  В зависимости от ответа, отправляем сообщение и переходим в основную страницу