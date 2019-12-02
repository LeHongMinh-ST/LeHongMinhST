<section class="site-section py-lg">
    <div class="container">

        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4"><?php echo $data["dataPost"]["title"]?></h1>
                <div class="post-meta">
                    <span class="category"><?php echo $data["Category_Slug"]["name"]?></span>
                    <span class="mr-2"><?php echo date("F j, Y", strtotime($data["dataPost"]["created_at"]))?></span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <div class="post-content-body">
                    <?php echo $data["dataPost"]["description"];?>
                    <div class="row mb-5">
                        <div class="col-md-12 mb-4 element-animate">
                            <img src="<?php echo MAIN_URL ?>/public/images/<?php echo $data["dataPost"]["thumbnail"]?>" alt="Image placeholder" class="img-fluid">
                        </div>
                    </div>
                    <?php echo $data["dataPost"]["content"];?>
                </div>
                <div class="pt-5">
                    <p>Categories:  <a href="<?php echo MAIN_URL."Category/News/".$data["Category_Slug"]['slug']?>"><?php echo $data["Category_Slug"]["name"]?></a>  Tags: <a href="<?php echo MAIN_URL."Category/News/".$data["Category_Slug"]['slug']?>">#<?php echo $data["Category_Slug"]["name"]?></a>
                </div>
            </div>

            <!-- END main-content -->

            <?php require_once "MVC/views/blocks/home/sibarHome.php" ?>
            <!-- END sidebar -->

        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3 ">Related Post</h2>
            </div>
        </div>
        <div class="row">
            <?php
                $randomPost = array_rand($data["post"],3);
                for ($i = 0;$i <3;$i++){?>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo MAIN_URL ?>public/images/<?php echo $data["post"][$randomPost[$i]]["thumbnail"] ?>'); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category"><?php $id_category =$data["post"][$randomPost[$i]]["category_id"]-1; echo $data["Category"][$id_category]["name"]?></span>
                            <span class="mr-2"><?php echo date("F j, Y", strtotime($data["post"][$randomPost[$i]]["created_at"])) ?></span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3><?php echo $data["post"][$randomPost[$i]]["title"]?></h3>
                    </div>
                </a>
            </div>
            <?php }?>
        </div>
    </div>


</section>
