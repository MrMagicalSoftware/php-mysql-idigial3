<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

    echo $_POST["email"] . " " . $_POST["pass"];

    if($_POST["email"] == "admin@admin.com" && $_POST["pass"]== "123456"){
        echo "do something.....";
    }




?>


</body>
</html>