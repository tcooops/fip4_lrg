<?php
    include("connect.php");
    include("functions.php");

    if(isset($_GET["id"])) {
        $targetID = $_GET["id"];
        $result = getSingleMatch($pdo, $targetID);

        return $result;
    } else {
        $allUsers = getAllMatches($pdo);

        return $allUsers;
    }
