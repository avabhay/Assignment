 <?php ?>
 <style>
  <?php include 'addcss.css';?>
</style>

<?php
	if (isset($_POST['submit'])) {
		
		$con = mysqli_connect('localhost','root','','Syscom');
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$mobile_no = $_POST['phone'];
    if($con->connect_error){
      die("".$con->connect_error);
    }
    
		$data = mysqli_query($con,"INSERT INTO registration (fname,lname,email,password,mobile) VALUES('$fname','$lname','$email','$password','$mobile_no')" );
  }

      if(isset($_GET['email'])){
        echo "<div class=invalidCreds >Invalid email or password</div>";
      }
      if(isset($_POST['login']) ) {
        $con = mysqli_connect('localhost','root','','Syscom');
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $query="SELECT * FROM registration WHERE email='$email'and password='$password'";
        $connection=mysqli_query($con,$query);
        $retreve=mysqli_fetch_array($connection);
          if(null != $retreve && $retreve['email']==$email && $retreve['password']==$password)
          {
                ?>
              <html>  
              <head>  
              <meta name="viewport" content="width=device-width, initial-scale=1">   
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script>
                  <?php include 'jsfile.js';  ?>
                </script>
                <script>
                  $(document).ready(function(){
                    $("#for_login").hide();
                    $("#for_signup").show();
                    $("#login").removeClass('active');
                    $("#signup").addClass('active');
                    $("#login").click(function(){
                      $("#signup").removeClass('active');
                      $("#login").addClass('active');
                      $("#for_login").show();
                      $("#for_signup").hide();
                    });
                    $("#signup").click(function(){
                       $("#login").removeClass('active');
                      $("#signup").addClass('active');
                       $("#for_login").hide();
                      $("#for_signup").show();
                    });
                  });
                </script> 
            </head>  
            <body> 
            <center><div>
              <img class="image" src="https://i.ibb.co/DfFJX2S/download.jpg" alt="logo">
              <center>
                
                  <button  id="login" class="btn active">Login</button>  
                 <button  id="signup" class="btn">Signup</button>
               
              </center>

                <div id="for_login">
                  <form  name="login_form" onsubmit="return ValidationLoginForm();" method="POST">
                    <input type="email" placeholder="Email*" name="email" required>
                    <input type="password" id="mypsw"  placeholder="Password*" name="psw" required>
                    <input type="checkbox"  onclick="showPassword();">Show Password
                    <a href="#" id="show_psw">Forget Password</a>
                        <center><button type="submit" name="login" class="registerbtn1">Login</button> </center>   

                  </form>
                </div>
            <div id="for_signup">
              <form  name="sign_form" onsubmit="return ValidationSignupForm();" method="POST"> 
            <input type="text" name="firstname" placeholder= "First Name*" size="15" required  value="<?php echo $retreve['fname'] ?>" /> 
            <input type="text" name="lastname" placeholder="Last Name*" size="15"required  value="<?php echo $retreve['lname'] ?>" />
             <input type="email" placeholder="Email*" name="email" required  value="<?php echo $retreve['email'] ?>"> 
                <input type="password" placeholder="Password*" name="psw" required  value="<?php echo $retreve['password'] ?>" >
                <spam> *The password must contain at least one uppercase,one lowercase,one numeric value and one special character</spam>
                <input type="password" placeholder="Confirm Password*" name="psw_repeat" required value="<?php echo $retreve['password'] ?>">
              <input type="text" name="phone" placeholder="Mobile Number*" size="10" required  value="<?php echo $retreve['mobile'] ?>"  />
              <input type="checkbox">
                  <label> Subscribe to Newsletter</label>  
                <center><button type="submit" name="submit" class="registerbtn1">Signup</button> </center>   
            </form>
            </div>    

            </div></center>
            </body>  
            </html>     
            <?php
      }else {
          header("location: sysassig.php?email=invalid&&password=invalid");
         // echo '<script>alert("Your Email or Password is invalid");</script>';
         }
      }else {
        ?>
            <html>  
            <head>  
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                <?php include 'jsfile.js';  ?>
              </script>
              <script>
              $(document).ready(function(){
                $("#for_login").show();
                $("#for_signup").hide();
                $("#login").click(function(){
                  $("#signup").removeClass('active');
                  $("#login").addClass('active');
                  $("#for_login").show();
                  $("#for_signup").hide();
                });
                $("#signup").click(function(){
                   $("#login").removeClass('active');
                  $("#signup").addClass('active');
                   $("#for_login").hide();
                  $("#for_signup").show();
                });
              });
              </script> 
            </head>  
            <body> 
            <center><div>
              <img class="image" src="https://i.ibb.co/DfFJX2S/download.jpg" alt="logo">
              <center>
                  <button  id="login" class="btn active">Login</button>  
                 <button  id="signup" class="btn">Signup</button>
              </center>
                <div id="for_login">
                  <form  name="login_form" onsubmit="return ValidationLoginForm();" method="POST">
                    <input type="email" placeholder="Email*" name="email" required>
                    <input type="password" id="mypsw"  placeholder="Password*" name="psw" required>
                    <input type="checkbox"  onclick="showPassword();">Show Password
                    <a href="#" id="show_psw">Forget Password</a>
                        <center><button type="submit" name="login" class="registerbtn1">Login</button> </center>                     
                  </form>
                </div>
            <div id="for_signup">
              <form  name="sign_form" onsubmit="return ValidationSignupForm();" method="POST"> 
                <input type="text" name="firstname" placeholder= "First Name*" size="15" required /> 
                <input type="text" name="lastname" placeholder="Last Name*" size="15"required />
                <input type="email" placeholder="Email*" name="email" required  > 
                <input type="password" placeholder="Password*" name="psw" required   >
                <spam> *The password must contain at least one uppercase,one lowercase,one numeric value and one special character</spam>
                <input type="password" placeholder="Confirm Password*" name="psw_repeat" required>
                <input type="text" name="phone" placeholder="Mobile Number*" size="10" required />
                <input type="checkbox">
                <label> Subscribe to Newsletter</label>  
                <center><button type="submit" name="submit" class="registerbtn1">Signup</button></center>   
            </form>
            </div>    
            </div></center>
            </body>  
            </html>     
      <?php
    }
     ?>

            
     
