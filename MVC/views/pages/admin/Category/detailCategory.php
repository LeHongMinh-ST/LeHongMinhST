<h1 align="center"><b>XEM CHI TIẾT</b></h1>
<a href="<?php echo MAIN_URL?>AdminCategory" class="btn btn-success"><< back </a>
<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td><?php echo $data["dataCategory"]['id']; ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $data["dataCategory"]['name']; ?></td>
    </tr>
    <tr>
        <td>img</td>
        <td>

            <img src="<?php echo MAIN_URL?>public/images/<?= $data["dataCategory"]['thumbnail'] ?>" width="200px" height="200px">
        </td>
    </tr>
    <tr>
        <td>description</td>
        <td><?php echo $data["dataCategory"]['description']; ?></td>
    </tr>
    <tr>
        <td>slug</td>
        <td><?php echo $data["dataCategory"]['slug']; ?></td>
    </tr>
    <tr>
        <td>parent id</td>
        <td><?php echo $data["dataCategory"]['parent_id']; ?></td>
    </tr>
    <tr>
        <td>created at</td>
        <td><?php echo $data["dataCategory"]['created_at']; ?></td>
    </tr>
    <tr>
        <td>updated at</td>
        <td><?php
            if ($data["dataCategory"]['updated_at'] == NULL) echo "no update"; else echo $data["dataCategory"]['updated_at'];
            ?></td>
    </tr>
</table>