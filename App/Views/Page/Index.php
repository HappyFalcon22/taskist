<?php

use Core\Session;
use Core\View;

$session = new Session();
$user = $session->get("user");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <?php View::render("Components/NavBar"); ?>
    <div class="container-fluid">
        <h1>Home Page</h1>
    </div>
</body>

</html>