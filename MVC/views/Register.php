<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí đi rồi mới được vào</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo MAIN_URL?>public/loginstyle/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo MAIN_URL?>public/loginstyle/css/style.css">
</head>
<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="<?php echo MAIN_URL?>Admin/handlingRegister" method="POST" class="register-form validate-form" id="register-form">
                        <div class="form-group wrap-input100 validate-input">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" class="input100" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" class="input100" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" class="input100" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng kí"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?php echo MAIN_URL?>public/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="<?php echo MAIN_URL?>Admin/Login" class="signup-image-link">Nếu là thành viên rồi thì đăng kí làm cái giề!</a>
                </div>
            </div>
            <?php if (isset($data["result"])){?>
                <h3 style="text-align: center">
                    <?php
                    if ($data["result"] == true)
                    {
                        echo "Đăng kí thành công";
                    }else
                    {
                        echo "Đăng kí thất bại!";
                    }
                    ?>
                </h3>
            <?php }?>
        </div>
    </section>



</div>

<!-- JS -->
<script src="<?php echo MAIN_URL?>public/loginstyle/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo MAIN_URL?>public/loginstyle/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>