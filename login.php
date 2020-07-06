<?php 
include_once("partials/header.php"); 

                     // Include database connection 
                     include('connection/connection.php'); 
                        
                    $uemail = $upassword = ""; 

                    // Check if login form is submitted
                     if(isset($_POST['login'])):
                            $uemail     = $_POST['user_email'];
                            $upassword  = md5($_POST['user_password']);
                            // Select all users first with the provided condition
                            $query = "SELECT * FROM users WHERE email = '".$uemail."' AND password = '".$upassword."'"; 

                            $result = $mysqli->query($query); 

                            if($result->num_rows > 0){
                                session_start(); 
                                $row = $result->fetch_assoc();
                                $_SESSION['auth']= true; 
                                $_SESSION['auth_id']= $row['user_id']; 
                                header("Location: index.php");
                            } else 
                            
                            $mysqli->close(); 
                        endif; 
                        ?>
    <section class="register py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="images/login.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <form method="post" action="login.php" autocomplete="off" >
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="form-group">
                            <input type="email" name="user_email" id="" class="form-control" placeholder="email@example.com" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="password" name="user_password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn">Login <i class="icon ion-ios-unlock"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php 
include_once("partials/footer.php"); 