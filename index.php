<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="D:\SEPM Project\signup.ico">
<link rel="stylesheet" href="css/signup.css">
<title>Sign Up</title>
<script type="text/javascript" src="formvalid.js"></script>
</script>
  </head>
<body style="background-color:skyblue;">

  <table cellspacing="25">
    <tr>
      <td><img src=""D:\WEB\htdocs\bbms\image\1.jpg"" alt=""></td>
      <td></td>
      <td><h1>Welcome to Gupta Bank</h1></td>
      </tr>
      </table>
<form action="connect.php" method="POST">
  <div class="container">
    <h2>Sign Up</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" id="name" placeholder="Enter Name" name="name" required>

    <label for="Gender">Gender:</label>
    <input type="radio" name="gender" value="Male" required>Male
    <input type="radio" name="gender" value="Female" required>Female
<br>
<br>
<br>
    <label for="Phone Number"><b>Phone No.</b></label>
    <input type="number" id="phoneNumber" placeholder="Enter Phone Number" name="ph_num" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
<br>
<br>
    <label for="email"><b>Email</b></label>
    <input type="email" id="email" placeholder="Enter Email" name="email" required>
<br>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" id="password" placeholder="Repeat Password" name="psw_repeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>

      <button type="submit" class="signupbtn" onsubmit="saveFile()" required>Sign Up</button>

    </div>
  </div>
</form>
</body>
</html>
