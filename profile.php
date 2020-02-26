<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$newConnection = new Connection;
$newConnection = $newConnection ->openConnection();
//the get refers to the ?+name of $_GET in the url
$userId = $_GET['user'];
$stmt = $newConnection->prepare('SELECT * FROM students WHERE id=:id');
$stmt->execute(['id'=>$userId]);
$user= $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<form action="index.php" method="post">
    <img src="<?php echo $user['avatar']?>" alt="<?php echo $user['avatar']?>" width="300px" height="300px">
    <p><strong>id:</strong> <?php echo $user['id']?></p>
    <p><strong>first name:</strong> <?php echo $user['firstName']?></p>
    <p><strong>last name:</strong> <?php echo $user['lastName']?></p>
    <p><strong>user name: </strong><?php echo $user['username']?></p>
    <p><strong>linkedin:</strong> <?php echo $user['linkedin']?></p>
    <p><strong>github:</strong> <?php echo $user['github']?></p>
    <p><strong>email:</strong> <?php echo $user['email']?></p>
    <p><strong>preferred_language: </strong><?php echo $user['preferred_language']?></p>
    <p><strong>video: </strong><?php echo $user['video']?></p>
    <p><strong>quote: </strong><?php echo $user['quote']?></p>
    <p><strong>quote author: </strong><?php echo $user['quote_author']?></p>
    <p><strong>created date:</strong> <?php echo $user['created_at']?></p>


</body>
</html>
