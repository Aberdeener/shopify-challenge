# Shopify Internship Technical Challenge Submission

👋 Hi, thanks for checking out my submission :)

It is written in PHP using the Laravel framework.

There are some basic CRUD tests located in the `tests` directory.

## :clipboard: Requirements
:white_check_mark: Basic CRUD functionality of Products and Collections

:white_check_mark: Extra functionality
    - "Ability to assign/remove inventory items to a named group/collection"

## :package: Installation
To get this running, you'll first need to install PHP onto your computer.
- There are installation instructions [here](https://www.php.net/manual/en/install.php)
- *Make sure you install PHP `7.2`, `7.4` or `8.0`, other versions are not supported by Laravel.*
- To make sure PHP is installed correctly, you can run the following command in your terminal `php -v`

Secondly, we need [Composer](https://getcomposer.org) to manage our dependencies.
- Check out the install guides [here](https://getcomposer.org/doc/00-intro.md) for most operating systems.
- Make sure Composer is working by running `composer -V` in your command line.
---

After you have Composer installed, you have to download this Git repository.
- The easiest way is to click the "Download ZIP" button on the main repository page.
    - <img width="442" alt="Screen Shot 2022-01-06 at 15 03 53" src="https://user-images.githubusercontent.com/26070412/148464758-1a5c079f-c58b-42d4-b9c1-6282ab088ad3.png">
- Once it is downloaded, extract it to an easy to access directory, like your Desktop.
---

Next, you'll have to install MySQL server onto your computer.
- If you are on Windows, use the installer from [here](https://dev.mysql.com/downloads/installer/).
- If you are on Linux, use this [installation guide](https://dev.mysql.com/doc/mysql-shell/8.0/en/mysql-shell-install-linux-quick.html).
- If you are on macOS, use this [installation guide](https://dev.mysql.com/doc/refman/8.0/en/macos-installation-pkg.html).
- Use the MySQL command line to login and create a database for this application:
    - `mysql -u root -p`
    - `CREATE DATABASE <name>;`
    - *Take note of what you named the database!*
---

Now we have to download all of the dependencies of the application with Composer.
- Enter the directory you extracted this repository into in your terminal and run `composer install`.
- *Depending on your internet connection, this might take up to a couple minutes.*
---

Almost done!
- Copy the `.env.example` file and rename it `.env`.
    - Open the `.env` file and on lines 11-16 enter the MySQL information which matches your setup.
        - *Use the name of the database you created in previous steps on line 14*
        - *Sometimes the default username is `root` with no password*
- Open your terminal back to the repository directory and execute `php artisan migrate:fresh`
    - This will create all of the database tables the application needs.
- Execute `php artisan db:seed`
  - This will create some sample data for the application.
- Finally, execute `php artisan serve`.
  - Open the URL mentioned in your terminal (e.g. http://localhost:8000) in your browser.

🎉 Congrats! You're all set up!

## :test_tube: Tests
To run the tests for this app, simply open your terminal to the directory where you extracted the repository and execute `php artisan test`.
