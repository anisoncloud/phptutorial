<!DOCTYPE html>
<html>
<body>
<?php

class UserController{

    function index(){
        echo 'something';
    }



}

//user model
class User{
    private $firstName;
    private $lastName;

    function __construct($user)
    {
        $this->firstName =  trim(stripslashes(htmlspecialchars($user['firstName'])));
        $this->lastName = trim(stripslashes(htmlspecialchars($user['lastName'])));
    }


    function getFirstName(){
        return $this->firstName;
    }
    function getLastName(){
        return $this->lastName;
    }
    function getFullName(){
        return $this->firstName.' '. $this->lastName;
    }
}

if (isset($_POST['firstName']) && isset($_POST['firstName'])) {
    $userData = ['firstName'=>$_POST['firstName'], 'lastName'=>$_POST['lastName']];
    $user = new User($userData);
    echo $user->getFullName();
}

?>

<form method="POST" action="">

    First Name:<input type="text" name="firstName"><br>
    Last Name: <input type="text" name="lastName">

    <input type="submit" value="Submit">
</form>


</body>
</html>
