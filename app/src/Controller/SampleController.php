<?php 

namespace App\Controller;

use App\Controller\AppController;

class SampleController extends AppController {
    public function index() {
      $result = "";
      if ($this->request->isPost()) {
          $result = $this->request->date['HelloForm']['date'];
      } else {
          $result = "※何か書いて送信してください。";
      }
      $this->set('result', $result);
    }
}