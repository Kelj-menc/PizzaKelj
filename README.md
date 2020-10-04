<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.imgur.com/YzXshIh.png" width="200" high="200"></a></p>

## About This Laravel "PizzaKelj" Project

Dont look at the name - it doesent mean anything.

I'll learn Laravel following diferent online tutorials. In a same time will try to build one real life application. Idea for the app came from my doughter and hopefully will be lounched some day and will help people. For me personally this project will be successuful if we (my doughter and I) spend some quality time togeather bulding and learning new things.

Sorry in advance - I need to say this at the begining of this jurnej becouse I'm total noob in terms of properly formating and eficiently writing code and generally in programing world. So if anyone wanna learn how to do things properly should leave this place. 


## Instaling Project
Ill write how I doing this on my system - win10 64bit, and Visual Studio Code - free source-code editor. Please contribute if you find bether or simplier way to install/clone this or any similar project in your sistem/enviroment for development purpose.

installation prerequisites:
install on your sistem 
    1.php (recommended 7+)
    2.composer - latest
    3.nodejs - latest
    4.git - latest
    5.xamp (with apache server and MySql)    
    
and add them to the path of your sistem (php/composer/npm/git/MySqul) so you can use them globaly.

--Open the console and cd into folder where you want to clone PizzaKelj project and run

   git clone https://github.com/Kelj-menc/PizzaKelj.git
    
--in the new project directory locate ....PizzaKelj\.git\config file (its hidden on my system) open it and
    add this into:
    
    [user]
    email = "your-gitregister-email@example.com"
    name = "Your-Git-Hub_username"
    
save and close.
    
    
--In the project folder (\PizzaKelj) locate '.env.example' file > make a copy of that file  > past it in a same directory and rename it in a '.env' now open that file wit some text editor and change in a DATABASE section 


    DB_DATABASE=pizzakelj and 
    DB_CONNECTION=mysql

--Fire up xamp and start server and mysql > click on admin(mysql) button > make new database > name:pizzakelj
    
--Open the console and cd into PROJECT folder (/PizzaKelj) and run
    composer update
    next run
    php artisan key:generate
    and finally
    php artisan migrate

--Open the console and cd into PROJECT folder (/PizzaKelj) and run
    php artisan serve
    
Finally in your browser you can check out this addresses for example:


http://127.0.0.1:8000/

http://127.0.0.1:8000/students

http://127.0.0.1:8000/students/create


## Programing Languigues and Frameworks

-Laravel

-PHP

-HTML

-JavaScript

-NodeJS

-MySqul/SqLite


## Contributing

Thank you for considering contributing to the project!

## Code of Conduct

The community is welcoming to all, please review and abide.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send a message. All security vulnerabilities will be promptly inspected.

## License

Project will be open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT), till my doughter doesent disaide diferently.
