<?php 
    namespace App\Controllers;
    use CodeIgniter\Controller;
    //using inbuilt table class
    use CodeIgniter\View\Table;

    class Tables extends Controller{
        
        public function tables(){

            $table = new Table();
            $user = [
                ["Name", "city", "zip"],
                ["pranav", "Rajgir", "803116"],
                ["RRR", "KGF", "800001"],
                ["X", "MMT", "412101"]
            ];

            // echo "from the array";
            // echo $table->generate($user);

            $table->setHeading(["Name", "city", "zip"]);
            $table->addRow(["pranav", "Rajgir", "803116"]);
            $table->addRow(["vivek", "Pune", "412101"]);
            $table->addRow(["Ankit", "Patna", "800001"]);
           
            //nl2br --> add new line in place of \n
            $records["users"] = $table->generate();
            // echo nl2br("\n\n\n using in-built table's method");
            $records["data"] = $table->generate($user);

            echo view("tables", $records);
        }
    }
?>