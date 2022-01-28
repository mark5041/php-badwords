

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <input type="text" name="censured">
        <input type="submit">
    </form>
    

    <?php

        $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quisquam nostrum. Consequuntur dicta, sint qui dolore quisquam, perspiciatis eaque illo incidunt aliquam harum facere ducimus dolorem aliquid ad officia quae."; 
        echo "<p> Frase completa: ".$string."</p>";
        if(isset($_GET["censured"]))
        {
            $censured = $_GET["censured"];
            $censuredString = str_ireplace($censured, "***", $string);
            echo "<p> Frase censurata: ".$censuredString."</p>";
            echo "<p> lunghezza completa: ".strlen($string)."</p>";
            echo "<p> lunghezza frase censurata: ".(strlen($string) - strlen($censured))."</p>";
        }
    ?>


</body>
</html>