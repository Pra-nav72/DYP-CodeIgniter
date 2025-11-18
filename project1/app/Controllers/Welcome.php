<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index() {
        echo "Hello from Welcome controller!";
    }

    //Route problem--> wab/-->expected a value
    public function about($name) {
        echo "About ".$name." page";
    }

    public function page(){
        echo view("firstpage");
    }

    
    //send data to view
    public function intro(){

        //data is in key=>value array
        $data =[
            "title" => "Pranav Kumar", 
            "address" => "Akurdi, Pune",
            "skill" => ["HTML", "CSS", "JS", "java", "C", "Python", "SQL"]
        ];

        echo view("pass_data", $data);
    }
    // remapping method calls in controller class if error
    // public function remap(string $method, ...$params){

    //     if(method_exists($this, $method)){
    //         return $this->$method(...$params);
    //     }
    //     else{
    //         return $this->page();
    //     }
    // }
    
}
?>