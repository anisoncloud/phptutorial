<!DOCTYPE html>
<html>
<body>
<?php

$formFields = ["First Name"=>"firstName", "Last Name"=> "lastName", "Email"=>"email"];

?>

<form method="POST" action="action_page.php">

    <?php
    foreach ($formFields as $label=>$fieldName){
        echo '<label for="'.$fieldName.'"> '. $label .'</label>';
        echo '<input type="text" name="'.$fieldName.'">';
        echo '<br>';
    }
    ?>

    <input type="submit" value="Submit">
</form>


</body>
</html>
