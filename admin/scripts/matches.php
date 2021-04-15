<?php
// to get all matches
function allMatches($con) {
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("select id, names, matchlocation,refs, matchdate from tbl_matches");
    $stmt->execute();
    return $stmt->fetchAll();
}

//add schedule
function addMatch($names, $matchlocation, $refs, $matchdate){
    $pdo = Database::getInstance()->getConnection();
    $create_match_query = 'INSERT INTO tbl_matches(names, matchlocation, refs, matchdate)';
    $create_match_query .= ' VALUES(:names, :matchlocation, :refs, :matchdate )';

    $create_match_set = $pdo->prepare($create_match_query);
    $create_match_result = $create_match_set->execute(
        array(
            ':names'=>$names,
            ':matchlocation'=>$matchlocation,
            ':refs'=>$refs,
            ':matchdate'=>$matchdate
        )
    );
 
    if($create_match_result){
        sleep (3);
        header( "refresh:3;url=admin_editschedule.php" );
        return 'Success! You have added a new schedule. You will be redirected in 3 seconds';
    }else{
        return 'A new schedule was not created.';
        
    }
}
