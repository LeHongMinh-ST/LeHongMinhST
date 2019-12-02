<div class="container">
    <h1 align="center">Add new Category</h1>
    <hr>
    <form action="<?php echo MAIN_URL ?>AdminCategory/AddProcess" method="POST" role="form"
          enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>

        <div class="form-group">
            <label for="">thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">

        </div>

        <div class="form-group">
            <label for="">parent_id</label>
            <select class="form-control" name="parent_id">

                <option name="" id="" value="0">Mời chọn danh mục cha</option>
                <?php foreach ($data["dataCategory"] as $value) {
                    ?>
                    <option name="" id="" value='<?= $value['id'] ?>'><?= $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div>
        <button type="submit" class="btn btn-primary" name="Create">Create</button>
    </form>

    <?php
    if (isset($data["result"])) {
        ?>
        <h3>
            <?php
            if ($data["result"] == false) {
                echo "Thêm thất bại";
            }else
            {
                echo "Thêm thành công";
            }?>
        </h3>
        <?php
    }
    ?>
</div>
