<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box search-form-wrap">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="<?php echo MAIN_URL ?>/public/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>Lê Hồng Minh</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="<?php echo MAIN_URL ?>Home/About" class="btn btn-primary btn-sm">Read my bio</a></p>
                <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
            </div>
        </div>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <h3 class="heading">Popular Posts</h3>
        <div class="post-entry-sidebar">
            <ul>
                <?php
                $randomPost = array_rand($data["post"],3);
                for ($i = 0; $i < 3; $i++) { ?>
                <li>
                    <a href="<?php echo MAIN_URL."Posts/Show/".$data["post"][$randomPost[$i]]['slug']?>">
                        <img src="<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$randomPost[$i]]["thumbnail"] ?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4><?php echo $data["post"][$randomPost[$i]]["title"]?></h4>
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
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Categories</h3>
        <ul class="categories">
            <?php foreach ($data["Category"] as $value) {?>
            <li><a href="<?php echo MAIN_URL."Category/News/".$value['slug']?>"><?php echo $value["name"]?> </a></li>
            <?php }?>
        </ul>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Tags</h3>
        <ul class="tags">
            <?php foreach ($data["Category"] as $value) {?>
            <li><a href="<?php echo MAIN_URL."Category/News/".$value['slug']?>"><?php echo $value["slug"]?></a></li>
            <?php }?>
        </ul>
    </div>
</div>
