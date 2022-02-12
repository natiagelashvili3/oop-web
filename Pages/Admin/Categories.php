<?php

namespace Pages\Admin;

use Pages\Admin\Page;

class Categories extends Page{
    
    public function index() {
        
        $this->load('views/admin/categories/index.php');

    }

    public function add() {
        
        $this->load('views/admin/categories/add.php');
        
    }

    public function edit() {
        
        $this->load('views/admin/categories/edit.php');

    }

}