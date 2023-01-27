<?php

include_once 'connect.php';
$sql = "SELECT * FROM movies order by RAND() LIMIT 1";
$result = $db->query($sql);
$items=$result->fetch_assoc();

$award = $db->prepare("SELECT * FROM `awards` WHERE `movie_id` = ?");
$award->bind_param("i",$id);
$id = (int) $items['movie_id'];
$award->execute();
$awards = $award->get_result();
$items_award=$awards->fetch_assoc();

$genre = $db->prepare("SELECT * FROM `genre` WHERE `movie_id` = ?");
$genre->bind_param("i",$id_2);
$id_2 = (int) $items['movie_id'];
$genre->execute();
$genres = $genre->get_result();
$items_genre=$genres->fetch_assoc();

$db->close();

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Random movie</title>
    <style>
        body {
            text-align: center;
        }
        h1 {
            text-align: center;
            color: #800080;
            font-size: xx-large;
            font-family:'Lato';
        }
        h2, h3 {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Wylosowano film:</h1>
    <h1><?php echo $items['title'];?></h1>
    <h2>Rok wydania: </h2><h3><?php echo $items['year'];?></h3>
    </br>
    <h2>Ocena: </h2><h3><?php echo $items['rating'];?></h3>
    </br>
    <?php
        if (!empty($items_genre)) {
         
    ?>
    <h2>Gatunek: </h2><h3><?php echo $items_genre['name'];?></h3>
    <?php
    }
    ?>
    </br>
    <?php
        if (!empty($items_award)) {
         
    ?>
    <h2>Nagrody: </h2><h3><?php echo $items_award['name'];?></h3>
        </br>
    <h2>Rok przyznania:</h2><h3><?php echo $items_award['year'];?></h3>
    <?php
    }
    ?>
</body>
</html>