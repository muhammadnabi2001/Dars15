<?php
namespace App\Controllers;
use App\Models\Product;

class CategoryController
{
    public function index()
    {

        include realpath(__DIR__."/../Models/index.php");
    }
    public function test()
    {
        include realpath(__DIR__."/../Views/categorys/test.php");
    }
    public function create()
    {
        include realpath(__DIR__."/../Models/create.php");
    }
    public function update()
    {
        include realpath(__DIR__."/../Models/update.php");
    }
    public function delete()
    {
        include realpath(__DIR__."/../Models/delete.php");
    }
    public function search()
    {
        include realpath(__DIR__."/../Models/search.php");
    }
}
?>