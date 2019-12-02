<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="<?php echo MAIN_URL ?>Admin"><i class="menu-icon fa fa-laptop"></i>Bảng điều khiển</a>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="menu-icon fa fa-table"></i>Quản Lý Danh Mục</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="<?php echo MAIN_URL ?>AdminCategory">Danh Mục Hiện Tại</a></li>
                    <?php if($_SESSION['user']['auth'] == 1 ){?>
                    <li><i class="fa fa-table"></i><a href="tables-data.html">Danh Mục Đã Tắt</a></li>
                    <?php }?>
                    <li><i class="fa fa-table"></i><a href="<?php echo MAIN_URL?>AdminCategory/addCategory">Tạo Danh Mục</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="menu-icon fa fa-table"></i>Quản Lý Bài Viết</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="<?php echo MAIN_URL ?>AdminCategory">Bài viết hiện tại</a></li>
                    <?php if($_SESSION['user']['auth'] == 1 ){?>
                    <li><i class="fa fa-table"></i><a href="tables-data.html">Bài viết chờ duyệt</a></li>
                    <?php }?>
                    <li><i class="fa fa-table"></i><a href="<?php echo MAIN_URL?>AdminCategory/AddCategory">Tạo Bài Viết</a></li>
                </ul>
            </li>
            <?php if($_SESSION['user']['auth'] == 1 ){?>
            <li>
                <a href="../../../../index.php"><i class="menu-icon fa fa-comment-o"></i>Quản lý người dùng</a>
            </li>
            <?php }?>
            <li>
                <a href="<?php echo MAIN_URL ?>Home"><i class="menu-icon fa fa-home"></i>Trang chủ</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
