<?php 
namespace App\controller;

class ProductsController extends AppController {
    
    public function index() {
        $data = $this->Products->find('all');
        $this->set('data', $data);
    }

    public function view() {
        $data = $this->Products->find('all');
        $this->set('data', $data);
    }

    public function add() {
        $data = $this->Products->find('all');
        $this->set('data', $data);
    }

    public function edit() {
        $data = $this->Products->find('all');
        $this->set('data', $data);
    }

    public function delete() {
        $data = $this->Products->find('all');
        $this->set('data', $data);
    }
}
?>