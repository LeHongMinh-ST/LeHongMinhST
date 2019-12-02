<?php
class Post extends Connection
{
    public function getAllPost()
    {
        $qr  = "SELECT * FROM posts";
        return $this->asoccDB($qr);
    }

    public function getPostByslug($slug)
    {
        $qr = "SELECT * FROM posts WHERE slug = '$slug'";
        $arr = $this->asoccDB($qr);
        return $arr[0];
    }

    public function getPostInPage($start)
    {
        $qr  = "SELECT * FROM posts LIMIT $start, 6";
        return $this->asoccDB($qr);
    }

    public function getPostbyCategories($id,$start)
    {
        $qr = "SELECT * FROM posts Where category_id = '$id' LIMIT $start, 2";
        return $this->asoccDB($qr);
    }

    public function countPostInCategoryById($ID)
    {
        $qr = "SELECT * FROM posts WHERE category_id = '$ID'";
        return $this->countRow($qr);
    }

    public function countAllPost()
    {
        $qr = "SELECT * FROM posts ";
        return $this->countRow($qr);
    }
}
?>
