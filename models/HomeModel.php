<?php

namespace Models;

class HomeModel extends Database {

    public function getHomeCategories() {
        $stm = $this->connection->query('SELECT * FROM categories WHERE home = 1');
        $stm->execute();
        return $stm->fetchAll();
    }
    
}