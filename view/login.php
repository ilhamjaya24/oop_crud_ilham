<?php 


include '../controller/auth.php';
$ctrl = new auth();




 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif
 }

 body {
     background: #ecf0f3
 }

 .wrapper {
     max-width: 350px;
     min-height: 500px;
     margin: 80px auto;
     padding: 40px 30px 30px 30px;
     background-color: #ecf0f3;
     border-radius: 15px;
     box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
 }

 .logo {
     width: 80px;
     margin: auto
 }

 .logo img {
     width: 100%;
     height: 80px;
     object-fit: cover;
     border-radius: 50%;
     box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
 }

 .wrapper .name {
     font-weight: 600;
     font-size: 1.4rem;
     letter-spacing: 1.3px;
     padding-left: 10px;
     color: #555
 }

 .wrapper .form-field input {
     width: 100%;
     display: block;
     border: none;
     outline: none;
     background: none;
     font-size: 1.2rem;
     color: #666;
     padding: 10px 15px 10px 10px
 }

 .wrapper .form-field {
     padding-left: 10px;
     margin-bottom: 20px;
     border-radius: 20px;
     box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
 }

 .wrapper .form-field .fas {
     color: #555
 }

 .wrapper .btn {
     box-shadow: none;
     width: 100%;
     height: 40px;
     background-color: #03A9F4;
     color: #fff;
     border-radius: 25px;
     box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
     letter-spacing: 1.3px
 }

 .wrapper .btn:hover {
     background-color: #039BE5
 }

 .wrapper a {
     text-decoration: none;
     font-size: 0.8rem;
     color: #03A9F4
 }

 .wrapper a:hover {
     color: #039BE5
 }

 @media(max-width: 380px) {
     .wrapper {
         margin: 30px 20px;
         padding: 40px 15px 15px 15px
     }
 }
	</style>
</head>
<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<div class="wrapper">
    <div class="logo"> <img src="../img/logo_ijk_ilhamjayakusumah.png" alt=""> </div><br>
    <div class="text-center mt-4 name">Iqro-in Aja, Yuk.</div><br>
    <form class="p-3 mt-3" action="<?php echo $ctrl->login(); ?>" method="post">
        <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span> <input type="text" name="user" id="user" placeholder="Username" required> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="pass" id="pass" placeholder="Password"></div>
        <div class="form-group">
                            <img src="captcha.php" alt="gambar" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="code" value="" placeholder="kode captcha" maxlength="5"/>
                        </div>
                      <!--   <input class="btn btn-lg btn-success btn-block" type="submit" value="Register"> -->
        <button name="login" type="submit" class="btn mt-3">Login</button>

    </form>
    <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div> -->
</div>
</body>
</html>


