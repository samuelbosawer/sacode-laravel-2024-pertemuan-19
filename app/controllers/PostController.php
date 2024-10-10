<?php 

class PostController{

    public function index()
    {
       require_once '../app/views/post/index.php';
    }


    public function create()
    {
        require_once '../app/views/post/create.php';
    }

    public function show()
    {
        require_once '../app/views/post/show.php';

    }

    public function edit()
    {
        require_once '../app/views/post/edit.php';


    }






}