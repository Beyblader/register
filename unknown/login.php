<?php 
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['email'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate( $_POST['uname']);
    $pass = validate( $_POST['password']);
    $age = validate( $_POST['age']);
    $email = validate( $_POST['email']);

    if(empty($uname)){
           header("Location: index.php?error=Username is required");
    }
        else if(empty($pass)){
        header("Location: index.php?error=Password is required");
    }
    else if(empty($age)){
        header("Location: index.php?error=Age is required");
    }
    else if(empty($email)){
        header("Location: index.php?error=Email is required");
    } else {
       $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND '$age' AND '$email'";

       $result = mysqli_query($conn, $sql);

       if(mysqli_num_rows($result)=== 1){
        $row = mysqli_fetch_assoc($result);
        if($row['user_name']=== $uname && $row['password']=== $pass && $row['age']=== $age && $row['email']=== $email){
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
              
            header("Location: home.php");
            exit();

        }else{
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
        
    }else{
    header("Location: index.php?error=Incorrect User name or password");
    exit();

    
           }


    }

}else{
    header("Location: index.php?error");
    exit();
}

?>