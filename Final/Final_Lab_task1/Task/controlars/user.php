<?php
    require_once '../models/db_conn.php';
?>
<?php
    if(isset($_POST["login"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        if(getUser($username,$password)){
            header("Location: ../views/dashboard.php");
        }
        else{
            echo "Invalid Credentials!";
        }
    }
    if(isset($_POST["register"])){
        $name=htmlspecialchars($_POST["name"]);
        $email=htmlspecialchars($_POST["email"]);
        $phoneNumber=htmlspecialchars($_POST["phoneNumber"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        addUser($name,$username,$email,$password,$phone);
        header("Location: ../views/login.php");
    }
    
    function getUser($username,$password){
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=doQuery($query);
        if(count($result)>0){
            return true;
        }
        return false;
    }
    function getUsers(){
        $query="SELECT * FROM users";
        return doQuery($query);
    }
    function addUser($name,$username,$email,$password,$phone){
        $query="INSERT INTO users VALUES('$name','$username','$password','$email','$phone')";
        doNoQuery($query);
    }
?>