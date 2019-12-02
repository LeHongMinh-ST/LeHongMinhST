<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>Cuộc sống của minh đẹp trai</h3>
                <p>
                    <img src="<?php echo MAIN_URL ?>public/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Latest Post</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <?php
                                $randomPost = array_rand($data["post"],3);
                                for ($i = 0; $i < 3; $i++) { ?>
                                <li>
                                    <a href="<?php echo MAIN_URL."Posts/Show/".$data["post"][$randomPost[$i]]['slug']?>">
                                        <img src="<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$randomPost[$i]]["thumbnail"] ?>" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4><?php echo $data["post"][$i]["title"]?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?php echo date("F j, Y", strtotime($data["post"][$randomPost[$i]]["created_at"])) ?></span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="mb-5">
                            <h3>Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo MAIN_URL ?>Home">Home</a></li>
                                <li><a href="<?php echo MAIN_URL ?>Category">Categories</a></li>
                                <li><a href="<?php echo MAIN_URL ?>Home/About">About Us</a></li>
                                <li><a href="<?php echo MAIN_URL ?>Home/Contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3>Social</h3>
                            <ul class="list-unstyled footer-social">
                                <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                                <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Minh đẹp trai</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
