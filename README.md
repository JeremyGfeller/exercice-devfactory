## Information

+ MySQL
+ Laravel
+ Vue 3
+ Bootstrap 5
+ Category DB schema, Model and seeder data is already provided for you.

## Install

You can follow the Laravel installation instructions here [https://laravel.com/docs/8.x/installation](https://laravel.com/docs/8.x/installation) for how to get it installed on your system, using your preferred method.

Once done, you can run the following commands to:

Compile JS/CSS assets

```
npm install
npm run dev
```

Install PHP packages (may already be done depending on your installation method)

```
composer install
```

Migrate the database and seed the Categories

```
php artisan migrate
php artisan db:seed
```

## Goal of the exercise

Create a vue component to see the list of categories on 3 levels. Selecting a parent item will create a second list with only the children of the selected item, and the same again for the children of the children.

![lvl1](https://user-images.githubusercontent.com/1737065/140910778-05cd6ac9-7fde-4570-8521-c039702302ce.jpg)
![lvl2](https://user-images.githubusercontent.com/1737065/140910812-16d60c7f-348a-4e85-ae20-6742866e49fa.jpg)
![lvl3](https://user-images.githubusercontent.com/1737065/140910824-869eac88-025c-4453-bedb-62d6df98a6db.jpg)
