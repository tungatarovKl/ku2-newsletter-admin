## Как запустить проект:

1. `cd app`
2. `composer install` - установка зависимостей
3. `touch database/database.sqlite` - создание файла БД
4. В .env поменять absolute path к database.sqlite (DB_DATABASE=)
5. `php artisan migrate` - миграция существующих таблиц
6. `php artisan serve` - запуск сервера
