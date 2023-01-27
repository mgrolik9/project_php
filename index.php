<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
        input {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
            font-size: 20px;
            border-radius: 12px;
            font-family: 'Lato';
            font: black;
            transition-duration: 0.4s
        }
        input:hover {
            background-color: #e7e7e7;
            color: black;
        }
        h1 {
            text-align: center;
            color: #800080;
            font-size: xx-large;
            font-family:'Lato';
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Baza filmowa</h1>
        <h2> Zobacz liste najlepiej ocenionych filmow </h2>
    <form method="post" action="table.php">
        <input type="submit" name="button1"
                class="button" value="Zobacz"/>
    </form>
    </br>
    </br>
        <h2> Wylosuj film</h2>
        <form method="post" action="random_movie.php">
            <input type="submit" name="button2"
                    class="button" value="Losuj" />
        </form>
    </section>
</body>
</html>