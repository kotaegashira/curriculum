<?php 
namespace App\controller;

class LargeareasController extends AppController {
    public function index(){
        $data = $this->Largeareas->find('all');
        $this->set('data', $data);
    }
}
?>