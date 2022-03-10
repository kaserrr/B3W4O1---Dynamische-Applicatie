<?php 
include_once 'config.php';
$urlid = $_GET['id'];
$query = 'SELECT * FROM characters WHERE id = '.$urlid . ' LIMIT 1';
$characters = $db->query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<?php foreach($characters as $row) { ?>
<header><h1><?php echo $row['name'] ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $row['avatar'] ?>">
            <div class="stats" style="background-color: <?php echo $row['color'] ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $row['health'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $row['attack'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $row['defense'] ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $row['weapon'] ?></li>
                    <li><b>Armor</b>: <?php echo $row['armor'] ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
             <?php echo $row['bio'] ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Kas Slis 2022</footer>
<?php } ?>
</body>
</html>