<?php
    /**
     * Author: Bora
     * Contact: manasijevic.bora@gmail.com
     * Date: 11/13/2015
     * Project name: RegistrationLoginSystem_oop
     * File name: index.php
     * Desc:
     */
?>
<?php require_once 'includes/header.php'; ?>

<?php
    // If the form is submitted to register user
    if(isset($_POST['register'])) {
        $registerUser = new User(); // We instantiate the object
        $registerUser->register($_POST['username'], $_POST['email'], $_POST['pass']);
    }

    // If the form is submitted for loging in user
    if(isset($_POST['login'])) {
        $loginUser = new User();
        $loginUser->logIn($_POST['username'], $_POST['pass']);
    }
?>

<div class="container">

    <div class="page-header">
        <h1>Registration and Login system v1 <small>Demonstrating usage of php oop</small></h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert"> <i class="glyphicon glyphicon-ok"></i> Successfully logged in.
                <a href="index.php">Wanna go back?</a></div>
        </div>
    </div>
</div> <!-- /container -->

<?php require_once 'includes/footer.php'; ?>

