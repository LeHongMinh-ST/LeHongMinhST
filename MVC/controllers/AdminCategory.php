<?php


class AdminCategory extends controllers
{
    private $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = $this->models("Categories");
    }

    public function Show()
    {
        $data = [
            "page" => "Category/showCategory",
            "dataCategory" => $this->CategoryModel->Categoris()
        ];
        $this->views("Admin", $data);
    }

    public function DetailCategory($slug)
    {
        $data = [
            "page" => "Category/detailCategory",
            "dataCategory" => $this->CategoryModel->getCategoryBySlug($slug)
        ];
        $this->views("Admin", $data);
    }

    public function AddCategory()
    {
        $data = [
            "page" => "Category/addCategory",
            "dataCategory" => $this->CategoryModel->Categoris(),
        ];
        $this->views("Admin", $data);
    }

    public function AddProcess()
    {
        //1.Lấy thông tin Category
        if (isset($_POST["Create"])) {
            $name = $_POST["name"];
            $parent_id = $_POST["parent_id"];
            $description = $_POST["description"];
            $slug = $this->to_slug($name);

            //xử lý hình ảnh.
            $target_dir = "public/images/";

            $file_info = pathinfo($_FILES['thumbnail']['name']);
            var_dump();
            if (isset($file_info['extension'])) {
                $target_dir .= time() . '.' . $file_info['extension'];
                if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_dir)) {
                    $thumbnail = $_FILES["thumbnail"]["name"];
                }
            }

            $dataCategory = [
                "name" => $name,
                "parent_id" => $parent_id,
                "slug"=>$slug,
                "thumbnail" => $thumbnail,
                "description" => $description
            ];

            $result = false;
            if($this->CategoryModel->InsertCategory($dataCategory))
            {
                $result = true;
            }

            $data = [
                "page" =>"Category/addCategory",
                "result" =>$result
            ];

            $this->views("Admin",$data);
        }
    }

    public function to_slug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

}