<?php
/**
 * Created by PhpStorm.
 * User: anis
 * Date: 10/22/2017
 * Time: 11:19 PM
 */

class MyForms{
    private $firstName;
    private $lastName;


    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getFullName(){
        return $this->firstName.'  ' .$this->lastName;
    }
}



$formFields = array(
    "First Name"=>"firstName",
    "Last Name"=>"lastName",
    "User ID"=>"userId"
    );
?>
<form action="" method="post" >

<?php
foreach ($formFields as $label=>$fieldsName){
echo '<label for="'.$fieldsName.'">'.$label.'</label><br/>';
echo '<input type="text" name="'.$fieldsName.'"><br/>';

}

?>

    <input type="submit" value="PushMe">
</form>




