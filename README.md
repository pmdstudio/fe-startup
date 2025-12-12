## About FE Starter

FE Starter (Front End Starter) is a small web application based on Laravel framework with Bootstrap and Fontawesome installed. It's ready for download and start your next front-end project.

-   [Laravel 12](https://laravel.com/).
-   [Bootstrap 5 UI](https://getbootstrap.com).
-   [Fontawesome 7 free](https://fontawesome.com).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Front-end Bootstrap 5 + Laravel 12 Skeleton

Това е стартов Laravel 12 проект, конфигуриран със:

-   Laravel Mix
-   Bootstrap 5
-   FontAwesome Free
-   SCSS структура
-   JSON-базирано съдържание (`data.json`)
-   Базови Blade layout-и (header, footer, home, empty)

Проектът е подготвен за бърза разработка на статични UI страници, които по-късно могат да бъдат интегрирани в реална Laravel система.

---

## 📥 Клониране на репото

```bash

# 1. Клониране на проекта
git clone https://github.com/pmdstudio/fe-startup.git
cd your-repo

# 2. Composer зависимости
composer install
php artisan key:generate

# 3. NPM зависимости
npm install

# 4. Laravel Mix билд
npm run dev

# 5. Следене за промени (watch mode)
npm run watch

# 6. Production билд (minify + versioning)
npm run prod

# 7. Стартиране на локален сървър
php artisan serve

# 8. Полезни Laravel команди при проблеми с кеша
php artisan cache:clear
php artisan config:clear
php artisan view:clear

```
