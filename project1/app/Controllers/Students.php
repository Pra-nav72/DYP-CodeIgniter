<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;

    class Students extends Controller{
        public function profile(){
            
            $data = [
            "name" => "pranav",
            "college" => "DYPIMCAM",
            'department' => "MCA",
            'email' => "prnv@gmail.com"
            ];
            

            // echo view("stu");
            echo view("stu", $data);

        }
    }

?>