<section class="site-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel owl-theme home-slider">
                    <?php
                    $randomPost = array_rand($data["post"],3);
                    for ($i = 0; $i < 3; $i++) { ?>
                        <div>
                            <a href="<?php echo MAIN_URL."Posts/Show/".$data["post"][$randomPost[$i]]['slug']?>" class="a-block d-flex align-items-center height-lg"
                               style="background-image: url('<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$randomPost[$i]]["thumbnail"] ?>'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                    <span class="category">
                                        <?php
                                        $created = $data["post"][$randomPost[$i]]["category_id"]-1;
                                        echo $data["Category"][$created]["name"];
                                        ?>
                                    </span>
                                        <span class="mr-2"><?php echo date("F j, Y", strtotime($data["post"][$randomPost[$i]]["created_at"])) ?></span>
                                        &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3><?php echo $data["post"][$randomPost[$i]]["title"] ?></h3>
                                    <p><?php echo $data["post"][$randomPost[$i]]["description"] ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="row">
            <?php
            $randomPost = array_rand($data["post"],3);
            for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo MAIN_URL."Posts/Show/".$data["post"][$randomPost[$i]]['slug']?>" class="a-block d-flex align-items-center height-md"
                       style="background-image: url('<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$randomPost[$i]]["thumbnail"] ?>'); ">
                        <div class="text">
                            <div class="post-meta">
                            <span class="category">
                                <?php
                                $created = $data["post"][$randomPost[$i]]["category_id"]-1;
                                echo $data["Category"][$created]["name"];
                                ?>
                            </span>
                                <span class="mr-2"><?php echo date("F j, Y", strtotime($data["post"][$randomPost[$i]]["created_at"])) ?></span>
                                &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h3><?php echo $data["post"][$randomPost[$i]]["title"] ?></h3>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>


</section>
<!-- END section -->

<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Lifestyle Category</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    <?php foreach ($data["PostInPage"] as $value) { ?>
                        <div class="col-md-6">
                            <a href="<?php echo MAIN_URL."Posts/Show/".$value['slug']?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="<?php echo MAIN_URL ?>public/images/<?php echo $value["thumbnail"] ?>"
                                     alt="Image placeholder">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                    <span class="category">
                                        <?php
                                        $created = $value["category_id"];
                                        echo $data["Category"][$created - 1]["name"];
                                        ?>
                                    </span>
                                        <span class="mr-2"><?php echo date("F j, Y", strtotime($value["created_at"])) ?> </span>
                                        &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h2><?php echo $value["title"] ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <?php if ($data["totalPage"] > 1 && $data["curent_page"] > 1){?>
                                    <li class="page-item"><a class="page-link" href="<?php echo MAIN_URL .'Home/'.($data["curent_page"]-1) ?>">Prev</a></li>
                                <?php } ?>
                                <?php for($i = 1 ;$i<=$data["totalPage"];$i++){
                                    if($i==$data["curent_page"]) {?>
                                        <li class="page-item active" ><a class="page-link" href="#"><?php echo $i?></a></li>
                                    <?php } else{?>
                                        <li class="page-item" ><a class="page-link" href="<?php echo MAIN_URL .'Home/'.$i ?>"><?php echo $i?></a></li>
                                    <?php }
                                }?>
                                <?php if ($data["curent_page"] < $data["totalPage"] && $data["totalPage"] > 1){?>
                                    <li class="page-item"><a class="page-link" href="<?php echo MAIN_URL .'Home/'.($data["curent_page"]+1)  ?>">Next</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row mb-5 mt-5">

                    <div class="col-md-12">
                        <h2 class="mb-4">More Blog Posts</h2>
                    </div>

                    <div class="col-md-12">
                        <?php
                        $randomPost = array_rand($data["post"],3);
                        for ($i = 0; $i < 3; $i++) { ?>
                        <div class="post-entry-horzontal">
                            <a href="<?php echo MAIN_URL."Posts/Show/".$data["post"][$randomPost[$i]]['slug']?>">
                                <div class="image element-animate" data-animate-effect="fadeIn"
                                     style="background-image: url(<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$i]["thumbnail"] ?>);">
                                </div>
                                <span class="text">
                                    <div class="post-meta">
                                        <span class="category">
                                            <?php
                                            $created = $data["post"][$randomPost[$i]]["category_id"]-1;
                                            echo $data["Category"][$created]["name"];
                                            ?>
                                        </span>
                                        <span class="mr-2"><?php echo date("F j, Y", strtotime($data["post"][$randomPost[$i]]["created_at"])) ?> </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                     </div>
                                    <h2><?php echo $data["post"][$randomPost[$i]]["title"]?></h2>
                                </span>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <!-- END main-content -->

            <?php require_once "MVC/views/blocks/home/sibarHome.php" ?>
            <!-- END sidebar -->

        </div>
    </div>
</section>
