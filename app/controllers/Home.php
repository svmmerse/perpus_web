<?php 

class Home extends Controller {
    private $title = 'Home';

        public function index(){

            if ( !isset($_POST['login']) ) {
                $data['judul'] = "Perpustakaan UNEJ";
                $this->view('perpustakaan/login/home',$data);
            }else {
                $this->model('Login_models')->login($_POST);
            }
        }
}

