<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;


    class Hello extends Controller{
        public function index(){
            echo "hello world";
        }

        public function farewell(){
            echo "goodbye!";
        }
    }

?>