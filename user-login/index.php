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
        <div class="col-md-4">
            <!-- Register new user -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Register new user</h3>
                </div>
                <div class="panel-body">
                    <!-- form -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default" name="register">Submit</button>
                    </form>
                    <!-- end -->
                </div>
            </div>
            <!-- end -->
        </div>

        <div class="col-md-4">
            <!-- Login with existing user credentials -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Try to login</h3>
                </div>
                <div class="panel-body">
                    <!-- form -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default" name="login">Submit</button>
                    </form>
                    <!-- end -->
                </div>
            </div>
            <!-- end -->
        </div>

        <div class="col-md-4">
            <!-- List of all existing users -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">List of all registered users</h3>
                </div>
                <div class="panel-body">
                    <?php
                        $fetchUsers = new User();
                        $fetchUsers->fetchAllUsers();
                    ?>
                </div>
            </div>
            <!-- end -->
        </div>
    </div>
</div> <!-- /container -->

<?php require_once 'includes/footer.php'; ?>

