<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/poppins.css">
	

    <!-- Main css -->
    <link rel="stylesheet" href="css/style - si.css">
</head>
<body>

    <div class="main">

        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><br/><br/>
						<img src="images/man.png" height="300px" width="300px" alt="sing up image" >
						
						</figure>
                        
                    </div>

                    <div id="demo3" class="signin-form" >
                        <h2 class="form-title" >SIGN IN</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i><b>&nbsp;&nbsp;&nbsp;NAME</b></label>
                                <input type="text" name="your_name" id="your_name" placeholder="User Name or Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i><b>&nbsp;&nbsp;&nbsp;PSW</b></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="LOGIN"/>
                            </div>OR<br/><br/>
							<a href="doctorreg.php" ><b>Create an account</b></a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

   <!-- JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
    <script src="js/card.js"></script>
	<!-- End Script -->
	
</body>
</html>