## Этап 1 
Создать базу данных phpMyAdmin
## Этап 2
Создать в корне файл dbconnect.php и вставит в него следующий код :
```php
    <?php
    require_once 'libs/rb-mysql.php';
    R::setup('mysql:host=localhost;dbname=ucucom','root','');
    if(!R::testConnection()){
        exit('NOT CONNECTION WITH BASE');
    }
```