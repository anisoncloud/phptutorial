<?php
// include database and object files
include_once 'classes/Database.php';
include_once 'classes/User.php';
//include_once 'objects/category.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$user = new User($db);
//$category = new Category($db);
// set page headers
$page_title = "Create User";
include_once("includes/header.php"); 



// if the form was submitted - PHP OOP CRUD Tutorial
if(isset($_POST['registernow'])){
 
    // set product property values
    $user->userid = $_POST['userid'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->email = $_POST['email'];
    $user->phone = $_POST['phone'];
    $user->description = $_POST['description'];
    $user->password = $_POST['password'];
    // create the product
    if($user->create()){
        // try to upload the submitted file
// uploadPhoto() method will return an error message, if any.
    //echo $product->uploadPhoto();
        echo "<div class='alert alert-success'>Product was created.</div>";
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create product.</div>";
    }
}
?>

   
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Register Now</h2>
             <?php
echo "<div class='right-button-margin'>";
    echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";
?>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contactForm" method="post" novalidate="novalidate">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="userid" name="userid" type="userid" placeholder="User Id *" required="required" data-validation-required-message="Please enter your user ID.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Your First Name *" required="required" data-validation-required-message="Please enter your First name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Your Last Name *" required="required" data-validation-required-message="Please enter your Last name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="description" name="description" type="text" placeholder="Eenter something about your self *" required="required" data-validation-required-message="Please Eenter something about your self.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Eenter password *" required="required" data-validation-required-message="Please Eenter password.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" name="registernow"class="btn btn-primary btn-xl text-uppercase" type="submit">Register Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   <?php include("includes/footer.php");?>