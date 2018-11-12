<?php
    if(!isset($_POST))
    {
        header("Location: ./index.php");
        die();        
    } else {
        session_start();
        $_SESSION[""] = $_POST[""]

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CSGO</title>
    </head>
    <body>
        <form method="post" action="./">
            <label>
                Name:
                <input type="text" name="name">
            </label>
            <label>
                Player:
                <input type="text" name="name">
            </label>
            <input type="submit">
        </form>
    </body>
</html>