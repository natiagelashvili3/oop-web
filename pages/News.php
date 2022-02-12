<?php

class News extends Page{
    
    public function index() {
        
        $this->load('views/news/index.php');

    }

    public function add() {
        
        $this->load('views/news/add.php');
        
    }

    public function edit() {
        
        $this->load('views/news/edit.php');

    }

}