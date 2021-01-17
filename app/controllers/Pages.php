
<?php
class Pages extends Controller {

    public function __construct() {
        //$this->userModel = $this->model('User');    --> call model method fron config.php file and User class from model
    }

    public function index() {
        // a method from User model
        // $users = $this->userModel->getUsers();  


        // $data = [
        //     'users' => $users 
        // ];

        // $this->view('pages/index', $data);
        $this->view('pages/index');
    }
}