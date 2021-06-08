<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartHome</title>
    <!--<link rel="icon" href="img/logo.png">-->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<section class="header">
    <div class="logo"></div>
    <div class="material_icon"></div>
    <div class="account"></div>
    <div class="nav-bar">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="bar">
                <li><a class="nav-item" href="../php/index.php">Home</a></li>
                <li><a class="nav-item" href="../php/consumption.php">Consumption</a></li>
                <li><a class="nav-item" href="../php/media_controller.php">Media controller</a></li>
                <li><a class="nav-item" href="../php/network_traffic.php">Network traffic</a></li>
                <li><a class="nav-item" href="../php/rooms.php">Rooms</a></li>
                <li><a class="nav-item" href="../php/admin_panel.php">Admin panel</a></li>
        </ul>
    </div>
</section>
';