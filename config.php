<?php

error_reporting(0);
$server = 'localhost';
$username = 'root';
$password = '';
$database ='jobs';

$conn = mysqli_connect($server,$username,$password,$database);

if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}
echo"";

if (isset($_POST['submit'])) {
    $Name=$_POST['Name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$Name','$email','$password','$number')";
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    }else{
        echo "Error: Could not able to execute $sql." . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    try{
    $query = "SELECT * FROM users WHERE 'email' = '$email' AND 'password' = '$password'";
    }catch(mysqli_sql_exception $e){
        var_dump($e);
        exit;
    }
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
        // $_SESSION['email'] = $login_user;
        header("location: index.php");
    }else{
        $error = "Incorrect emailid or password.";
    }
}    

if(isset($_POST['apply'])){
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];

    $sql = "INSERT INTO `jobs`(`cname`, `position`, `skills`, `CTC`) VALUES ('$cname','$position','$skills','$CTC')";
    $POST_array = array();
    if(mysqli_query($conn,$sql)){
        echo "New Job Posted";
    }else{
        echo "Error: Failed to Post the Job $sql." . mysqli_error($conn);
    }
}

if (isset($_POST['applynow'])) {
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql= "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    // var_dump($sql);
    // die();
    mysqli_query($conn,$sql);
}
?>