<?php

namespace Pages;

use Pages\Page;
use Models\HomeModel;

class Home extends Page {

    function __construct() {
        $this->model = new HomeModel();
        Parent::__construct();
    }

    public function index() {

        $this->data['categories'] = $this->model->getHomeCategories();
        
        $this->load('views/frontend/home/index.php');
        
    }

}