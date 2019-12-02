<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhâp đi rồi mới vào được</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo MAIN_URL?>public/loginstyle/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo MAIN_URL?>public/loginstyle/css/style.css">
</head>
<body>

<div class="main"
<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?php echo MAIN_URL?>public/images/signin-image.jpg" alt="sing up image"></figure>
                <a href="<?php echo MAIN_URL?>Admin/Register" class="signup-image-link">Chưa có tài khoản thì tạo đi!</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sing In</h2>
                <form method="POST" class="Login-form validate-form" id="login-form" action="<?php echo MAIN_URL?>Admin/Process">
                    <div class="form-group wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label for="your_name" ><i class="zmdi zmdi-email material-icons-name "></i></label>
                        <input type="email" class="input100" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group wrap-input100 validate-input" data-validate="Password is required">
                        <label for="your_pass"  ><i class="zmdi zmdi-lock "></i></label>
                        <input type="password" class="input100" name="pass" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Có nhớ mật khẩu không</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="<?php echo MAIN_URL?>public/loginstyle/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo MAIN_URL?>public/loginstyle/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>