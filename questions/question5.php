<!DOCTYPE html>
<html lang="en">
<title>Customer advice</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../w3.css">
<link rel="stylesheet" href="../w3-black.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 { sans-serif;}
    .sideBar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
    }
    h1 {text-align: center;}
</style>
<?php
include_once("../header.php");
if($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone" AND $_POST["choice4"] == "yes" AND $_POST["choice4"])
    include_once("threeOptions.php");
else if ($_POST["choice3"] == "Private" AND $_POST["choice4"]=="yes")
    include_once("twoMonths.php");
else if ($_POST["choice3"] == "Trader" AND $_POST["choice4"]=="yes")
    include_once("sixMonths.php");
else if ($_POST["choice3"]=="Privates" AND $_POST["choice4"]=="yes")
    include_once("singleOption.php");
include_once ("choices.php");
?>

<body>
<!-- Main content-->
</body>
</html>
