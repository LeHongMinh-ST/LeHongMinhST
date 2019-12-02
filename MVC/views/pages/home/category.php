<section class="site-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="mb-4">Category: <?php echo $data["Category_Slug"]["name"]; ?></h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row mb-5 mt-5">

                    <div class="col-md-12">
                        <?php
                        foreach ($data["postCategory"] as $value) { ?>
                        <div class="post-entry-horzontal">
                            <a href="<?php echo MAIN_URL."Posts/Show/".$value['slug']?>">
                                <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(<?php echo MAIN_URL ?>public/images/<?php echo $value["thumbnail"]?>);"></div>
                                <span class="text">
                      <div class="post-meta">
                        <span class="category"><?php echo $data["Category_Slug"]["name"]?></span>
                        <span class="mr-2"><?php echo date("F j, Y", strtotime($value["created_at"])) ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php echo $value["title"];?></h2>
                    </span>
                            </a>
                        </div>
                        <?php }?>
                        <!-- END post -->

                    </div>
                </div>

                <?php if($data["countPage"]>1){?>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">

                                <?php if ($data["countPage"] > 1 && $data["curent_page"] > 1){?>
                                    <li class="page-item"><a class="page-link" href="<?php echo MAIN_URL .'Category/News/' .$data["Category_Slug"]["slug"] ."/".($data["curent_page"]-1) ?>">Prev</a></li>
                                <?php } ?>
                                <?php for($i = 1 ;$i<=$data["countPage"];$i++){
                                        if($i==$data["curent_page"]) {?>
                                            <li class="page-item active" ><a class="page-link" href="#"><?php echo $i?></a></li>
                                        <?php } else{?>
                                    <li class="page-item" ><a class="page-link" href="<?php echo MAIN_URL .'Category/News/' .$data["Category_Slug"]["slug"] ."/".$i ?>"><?php echo $i?></a></li>
                                <?php }
                                }?>
                                <?php if ($data["curent_page"] < $data["countPage"] && $data["countPage"] > 1){?>
                                    <li class="page-item"><a class="page-link" href="<?php echo MAIN_URL .'Category/News/' .$data["Category_Slug"]["slug"] ."/".($data["curent_page"]+1) ?>">Next</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php }?>

            </div>

            <!-- END main-content -->

            <?php require_once "MVC/views/blocks/home/sibarHome.php" ?>
            <!-- END sidebar -->

        </div>
    </div>
</section>
