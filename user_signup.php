<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('background2.jfif');
  min-height: 100%;
  background-position: bottom;
  background-size: cover;
}
.agileits-top p a:hover {
    color: #000000;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
<div class="w3-row w3-padding-5">
  <div class="w3-twothird w3-container">
  <a href="https://www.instagram.com/hanifahazza__/" title="W3.CSS" target="_blank" class="w3-hover-opacity"><i class="fa fa-instagram" style="font-size:36px"></i></a>
  </div>
</div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo "><b>SIGN UP</b></h1>
    <div class="agileits-top">
  <form action="aksi_user.php" method=POST>
    <table>
        <tr>
            <td width="130">Email :</td>
            <td><input type="text" name="email"></td></br>
        </tr>
        <tr>
            <td width="130">Username :</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="130">Password :</td>
            <td><input type="Password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <header class="w3-display-container w3-wide">
                  <div class="w3-display-center w3-padding-small">
                  <h1><a href="home2.php"><button class="w3-button w3-black w3-padding-small w3-large w3-opacity w3-hover-opacity-off" type="submit" value="Simpan" name="proses">Register</button></a></h1>
                  </div>
                </header>
                <p >
                  Have already an account? 
                  <a href="user_login.php">Login Now!</a>
                </p>
            </div>
            </td>
        </tr>
    </table>
  </form>
  </div>
</div>

</body>
</html>