<?php
include_once("BaseModel.php");
class HomeModel extends BaseModel
{
    public function getProducts(){

        $conn = $this->getConnection();

        $products = $conn->query("SELECT p.name, p.url, p.image_url, p.description FROM products p WHERE p.active=1")->fetch_all(MYSQLI_ASSOC);

        return $products;
    }

}