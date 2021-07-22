<?php
require 'db.php';
$people = R::findAll("users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изучаю comit</title>
    <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>ПРОВЕРКА</h1>
    <!--<p><?php echo $i ?></p>-->
    <form action="forma1.php" method="POST">
        <input type="text" name="firstname" placeholder="ИМЯ">
        <input type="text" name="lastname" placeholder="ФАМИЛИЯ">
        <input type="number" name="age" placeholder="ВОЗРАСТ">
        <input type="text" name="work" placeholder="ДОЛЖНОСТЬ">
        <textarea name="about" cols="30" rows="10" placeholder="ОБЯЗАННОСТИ"></textarea>
        <button type="submit">отправить</button>
    </form>
    <h2>Пользователи</h2>
    <ul>
        <?php
            foreach($people as $item){
echo "<li>$item->firstname</li>";

            }

        ?>
    </ul>
        <script src="script.js"></script>
</body>
</html>