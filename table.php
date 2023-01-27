<?php
include_once 'connect.php';
$sql = " SELECT * FROM movies ORDER BY rating DESC LIMIT 10";
$result = $db->query($sql);
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Top movies</title>
    <style>
        body {
            text-align: center;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #800080;
            font-size: xx-large;
            font-family:'Lato';
        }
 
        td {
            background-color: #e5cbf7;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
<h1> Top 10 filmow</h1>
    </br>
<table class="hidden" id="matable">
            <tr>
                <th>Nr.</th>
                <th>Title</th>
                <th>Year</th>
                <th>Rating</th>
            </tr>
            <?php
                $num=0;
                while($rows=$result->fetch_assoc())
                {
                    $num++;
            ?>
            <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['year'];?></td>
                <td><?php echo $rows['rating'];?></td>
            </tr>
            <?php
                }
            ?>
</table>
</body>
</html>