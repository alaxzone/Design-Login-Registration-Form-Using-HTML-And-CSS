<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login and Reigistration Form</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="hero">
    	<div class="form-box">
        	<div class="button-box">
            	<div id="btn"></div>
           	  <button type="button" class="toggle-btn" onclick="login()">Log In</button>
              <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
			<div class="social-icon">
        	<img src="fb.png" />
            <img src="tw.png" />
            <img src="gp.png" />
			</div>
            <form id="login" class="input-group">
            	<input type="text" class="input-field" placeholder="User ID" required>
               	<input type="text" class="input-field" placeholder="Enter Password" required>
            	<input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>


                
            </form>
            <form id="register" class="input-group">
            	<input type="text" class="input-field" placeholder="User Id" required>
               	<input type="text" class="input-field" placeholder="Email Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
            	<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>


                
            </form>
        </div>
        </div>	
     
</body>
   <script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		
		function register(){
		x.style.left="-400px";
		y.style.left="50px";
		z.style.left="110px";
		}
		function login(){
		x.style.left="50px";
		y.style.left="450px";
		z.style.left="0";
		}
		</script>
</html>
