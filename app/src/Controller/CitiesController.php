<?php 
namespace App\controller;

class CitiesController extends AppController {
    public function index(){
        $data = $this->Cities->find('all');
        $this->set('data', $data);
    }

    public function largeareashow()
    {

    }
}
?>