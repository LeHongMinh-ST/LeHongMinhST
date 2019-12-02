<?php

class Categories extends Connection
{
    public function Categoris()
    {
        $qr = "SELECT * FROM categories";
        return $this->asoccDB($qr);
    }

    public function getCategoryBySlug($slug)
    {
        $qr = "SELECT * FROM categories where slug = '$slug' ";
        $arr = $this->asoccDB($qr);
        return $arr[0];
    }

    public function getCategoryById($id)
    {
        $qr = "SELECT * FROM categories where id = '$id' ";
        $arr = $this->asoccDB($qr);
        return $arr[0];

    }

    public function InsertCategory($data)
    {
        $qr = "INSERT INTO categories( name,parent_id,thumbnail,slug, created_ad) Value('{$data["name"]}','{$data["parent_id"]}','{$data["slug"]}','{$data["thumbnail"]}','{$data["description"]}',CURRENT_TIMESTAMP())";
        return $this->execute($qr);
    }

}

?>