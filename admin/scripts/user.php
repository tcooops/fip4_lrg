<?php 
function createUser($fname, $username, $password, $email, $level){
    $pdo = Database::getInstance()->getConnection();
    $create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email, user_ip, user_level)';
    $create_user_query .= ' VALUES(:fname, :username, :password, :email, "no", :level )';

    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_result = $create_user_set->execute(
        array(
            ':fname'=>$fname,
            ':username'=>$username,
            ':password'=>$password,
            ':email'=>$email,
            ':level'=>$level
        )
    );
 
    if($create_user_result){
        sleep (3);
        header( "refresh:3;url=../admin/admin_login.php" );
        return 'Success! Your profile has been created. You will be redirected in 3 seconds';
    }else{
        return 'Profile was not created.';
        
    }
}

function getSingleUser($user_id){
    //echo 'Fetch User ID' .$user_id;
    $pdo = Database::getInstance()->getConnection();
    $get_user_query = 'SELECT * FROM tbl_user WHERE user_id = :id';
    $get_user_set =$pdo->prepare($get_user_query);
    $results = $get_user_set->execute(
        array(
            ':id'=>$user_id
        )
    );

    if($results && $get_user_set->rowCount()){
        return $get_user_set;
    }else{
        return false;
    }
}

//EDIT USER
function editUser($user_data){
    $pdo = Database::getInstance()->getConnection();

    $update_user_query = 'UPDATE tbl_user SET user_fname = :fname, user_name=:username, user_pass=:password, user_email=:email, user_level=:user_level, WHERE user_id=:id';
    $update_user_set = $pdo->prepare($update_user_query);
    $update_user_result = $update_user_set->execute(
        array(
            ':fname'=>$user_data['fname'],
            ':username'=>$user_data['username'],
            ':password'=>$user_data['password'],
            ':email'=>$user_data['email'],
            ':id'=>$user_data['id'],
            ':user_level'=>$user_level['user_level']
        )
    );

    if($update_user_result){
        header( "refresh:3;url=../admin/index.php" );
        //redirect_to("../admin/index.php");
        return 'Your profile has been updated. You will be redirected in 3 seconds';
    }else{
        return 'Profile was not updated.';
    }
}

function isCurrentUserAdminAbove(){
    return !empty($_SESSION['user_fname']);
}

function isUsernameExists($username){
    $pdo = Database::getInstance()->getConnection();
    
    $user_exists_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name = :username';
    $user_exists_set = $pdo->prepare($user_exists_query);
    $user_exists_result = $user_exists_set->execute(
        array(
            ':username'=>$username
        )
    );

    return !$user_exists_result || $user_exists_set->fetchColumn()>0;
}

//NAME OF USER LEVEL
function get_user_level($user_id){
    $levels = array(
        0 => 'Member',
        1 => 'Admin'
    );
    return $levels[$id];
}

