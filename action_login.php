<?php
    session_start();
    require('database/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM pegawai where username = '$username' and password='$password'"));
    if($query){
        $data_session = [
            'isLoggedIn'=> true,
        ];
    $_SESSION = $data_session;
    header('Location: dashboard.php');
    die();

    }else{
        echo "<script>
        alert('Username / Password Salah');
        window.location.href='login.php';
       </script>";
    }
?>