<?php 
namespace App\Controller;

class TeamsController extends AppController {
    public function index() {
        $data = $this->Teams->find('all');
        $this->set('data', $data);
    }

    public function download() {
        $_body = $this->Teams->find()->all();
        $_serialize = '_body';
        $_header = ['id', 'user_id', 'login_time', 'logout_time', 'created', 'modified', 'created_user', 'modified_user'];
        $_footer = ['これはフッターです'];
        $_csvEncoding = 'CP932';
        $_newline = "\r\n";
        $_eol = "\r\n";

        $this->response = $this->response
        ->withType('csv')
        ->withDownload('login_history.csv');

        $this->viewBuilder()->setClassName('CsvView.Csv');
        $this->set(compact('_body', '_serialize', '_header', '_footer', '_csvEncoding', '_newline', '_eol'));
    }

}

