<?php 
include_once("partials/header.php"); 

if(isset($_POST['signup_button'])):

    // Include database connection 
    include('connection/connection.php'); 

    // Initialize variables
    $fname = $lname = $email = $phoneno = $tel = $dob = ""; 

    $fname = $_POST['f_name']; 
    $lname = $_POST['l_name']; 
    $email = $_POST['user_email']; 
    $tel = $_POST['phone']; 
    $dob = $_POST['dateofbirth']; 
    $password = md5($_POST['user_password']); 

    // Check if the email exists by selecting all records and limiting the result to that particular queried email: 
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1"; 
    $result = $mysqli->query($query); 
    $key  = mysqli_fetch_assoc($result); 
    $useremail  = $key["email"]; 

    if($useremail):
        ?> 
            <!-- Notification Area  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        
                        <!-- Show error message  -->
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <?php echo $email; ?> already exists.
                        </div>
                    </div>
                </div>
            </div>
        <?php           
     else: 
        
        // Insert into database query 
        $register   = "INSERT INTO users (f_name, l_name, password, phone_number, dateofbirth, email, created_at) VALUES ('". $fname."', '". $lname."', '". $password."', '". $tel."', '". $dob."', '". $email."', now())";
        
        if($mysqli->query($register) === true): 
            ?> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Congratulations <?php echo $fname; ?>, you have successfully registered
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php       

            header('Location: login.php'); 
        else:
            echo "error '".$mysqli->connect_error."'";
        endif; 
    endif; 

endif; 
?>
    <section class="register py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="images/login.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <form method="post" action="register.php" autocomplete="off" >
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="form-group">
                            <input type="text" name="f_name" id="" class="form-control" placeholder="First name " aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="text" name="l_name" id="" class="form-control" placeholder="Last Name " aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="email" name="user_email" id="" class="form-control" placeholder="email@example.com" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="password" name="user_password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" id="" class="form-control" placeholder="Phone Number" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="date" name="dateofbirth" id="" class="form-control" placeholder="Date of Birth" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup_button" class="btn">Register <i class="icon ion-ios-unlock"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php 
include_once("partials/footer.php"); 