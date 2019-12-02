<section class="site-section">
    <div class="container">

        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Xin chào tôi là Lê Hồng Minh</h2>
                        <p class="mb-5"><img src="<?php echo MAIN_URL?>public/images/img_1.jpg" alt="Image placeholder" class="img-fluid"></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit quia minus pariatur!</p>
                        <p>Dignissimos iste consectetur, nemo magnam nulla suscipit eius quibusdam, quo aperiam quia quae est explicabo nostrum ab aliquid vitae obcaecati tenetur beatae animi fugiat officia id ipsam sint? Obcaecati ea nisi fugit assumenda error totam molestiae saepe fugiat officiis quam?</p>
                        <p>Culpa porro quod doloribus dolore sint. Distinctio facilis ullam voluptas nemo voluptatum saepe repudiandae adipisci officiis, explicabo eaque itaque sed necessitatibus, fuga, ea eius et aliquam dignissimos repellendus impedit pariatur voluptates. Dicta perferendis assumenda, nihil placeat, illum quibusdam. Vel, incidunt?</p>
                        <p>Dolorum blanditiis illum quo quaerat, possimus praesentium perferendis! Quod autem optio nobis, placeat officiis dolorem praesentium odit. Vel, cum, a. Adipisci eligendi eaque laudantium dicta tenetur quod, pariatur sunt sed natus officia fuga accusamus reprehenderit ratione, provident possimus ut voluptatum.</p>
                    </div>
                </div>

                <div class="row mb-5 mt-5">
                    <div class="col-md-12 mb-5">
                        <h2>My Latest Posts</h2>
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
