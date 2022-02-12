<?php

namespace Pages;

class Page{
    public $pageName;
    public $hasHeader = true;
    public $hasFooter = true;
    public $model;
    public $data = null;

    public function load($path) {
        $this->getHead();

        if($this->hasHeader) {
            $this->getHeader();
        }

        $data = $this->data;

        include($path);

        if($this->hasFooter) {
            $this->getFooter();
        }

        $this->getFoot();
    }

    public function getHead()
    {
        include('views/components/head.php');
    }

    public function getFoot()
    {
        include('views/components/foot.php');
    }

    public function getHeader()
    {
        include('views/components/header.php');
    }

    public function getFooter()
    {
        include('views/components/footer.php');
    }
}