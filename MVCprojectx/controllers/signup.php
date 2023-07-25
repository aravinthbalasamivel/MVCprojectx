<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="\MVCprojectx\style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
                 
          <label>Phone Number</label>
          <input type="number" placeholder="Enter phone number" id="num" required /><br>

          <label>Birth Date</label>
          <input type="date" placeholder="Enter birth date" id="dob" required /><br>

          <label>Address1</label>
          <input type="text" placeholder="Enter Flat number/Door number" id="a1" required /><br>
          <label>Address2</label>
          <input type="text" placeholder="Enter street address" id="a2" required /><br>
          
          <label>Country</label>
          <select>
                <option hidden id="con">Country</option>
                <option>India</option>
                <option>Japan</option>
                <option>America</option>
                <option>Nepal</option>
              </select>
              <div class="gender-box">
          <h3>Gender</h3>
          <div>
            <label> <input type="radio" name="gender" id="gender" id="M" value= "M" onclick="show1();"> Male </label><br> 
            <label> <input type="radio" name="gender" id="gender" id="F" value= "F" onclick="show2();"> Female </label><br>
            <label> <input type="radio" name="gender" id="gender" id="T" value= "T" onclick="show3();"> Transgender </label><br>
            </div>
        <div class="marital-box">
          <h3>Marital status</h3>
          <div class="marital-option">
            <div id="M" class="hide"> 
              <label> <input type="radio" name="marital" id="status" id="M" value= "M"> Married </label> 
              </div>
              <div id="UM" class="hide"> 
              <label> <input type="radio" name="marital" id="status"  id="UM" value= "UM"> Unmarried </label>  
              </div>
              <div id="D" class="hide"> 
              <label> <input type="radio" name="marital" id="status" id="D" value= "D"> Divorce </label>  
              </div>
              <div id="J" class="hide"> 
              <label> <input type="radio" name="marital" id="status"  id="J" value= "J"> Judicially_Separated </label>
              </div>
              <div id="W" class="hide">  
              <label> <input type="radio" name="marital" id="status" id="W" value= "W"> Widow </label>  
              </div>
              <div id="WR" class="hide">
              <label> <input type="radio" name="marital" id="status" id="WR" value= "WR"> Widower </label>   
              </div>
          <label>City</label>   
          <input type="text" placeholder="Enter your city" id="city" required /><br>
          <label>Region</label>
          <input type="text" placeholder="Enter your region" id="reg" required /><br>
          <label>Pin Code</label>
          <input type="number" placeholder="Enter postal code" id="code" required /><br>
          <div class="container">
          <div class="captcha-container">
        <input type="text" name="captchaInput" placeholder="Enter CAPTCHA" required>
        <img src="#" alt="CAPTCHA Image" id="captchaImage">
        <button type="button" id="refreshCaptcha">Refresh CAPTCHA</button>
      </div>


     	<button class="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
     <script src="captcha.js"></script>
     <script src="script.js"></script>
</body>
</html>