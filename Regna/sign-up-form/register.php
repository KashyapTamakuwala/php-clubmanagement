<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

 
<div class="container">
  <form action="/clubmanagement/regna/sign-up-form/getnewmember.php" method="post">
    <div class="row">
      <h2 style="color:#7ed321;">Registration</h2>
      <div class="input-group input-group-icon">
        <input type="text" name="fname" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="email" placeholder="Email Address"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
        
        <input type="text" name="address" placeholder="Enter your address"/>
       
        <!-- <div class="input-icon"><i class="fa fa-key"></i></div> -->
      </div>
      <div class="input-group input-group-icon">
        
        <input type="number" name="phone" placeholder="Enter your Contact number"/>
        <!-- <div class="input-icon"><i class="fa fa-key"></i></div> -->
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="dd" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" name="mm" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" name="yyyy" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
      <input type="submit" name="submit" value="Register" />
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script src="js/index.js"></script>




</body>

</html>
