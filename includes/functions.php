<?php
    // include the file we just wrote - connect
     // like a JS import statement

    $result = array();

    function getAllMatches($conn) {
        $query = "SELECT * FROM tbl_matches";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result));
    }

    ///////
    function getSingleMatch($conn, $id) {
        $query = "SELECT * FROM tbl_matches WHERE id=" . $id . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result));
    }