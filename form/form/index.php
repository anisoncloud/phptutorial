<!DOCTYPE html>
<html>
<body>
<?php

class User{
    private $firstName;
    private $lastName;

    function setFirstName($firstName){
        $this->firstName =  trim(stripslashes(htmlspecialchars($firstName)));
    }
    function setLastName($lastName){
        $this->lastName = trim(stripslashes(htmlspecialchars($lastName)));
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
    $user = new User();
    $user->setFirstName($_POST['firstName']);
    $user->setLastName($_POST['lastName']);

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
