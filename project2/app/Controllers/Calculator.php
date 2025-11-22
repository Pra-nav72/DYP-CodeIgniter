<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\doCalculation;

    class Calculator extends Controller{
        public function index(){
            return view('calculator_form');
        }

        public function calculate(){
            $model = new doCalculation();

            $num1= $this->request->getPost('num1');
            $num2= $this->request->getPost('num2');
            $operation = $this->request->getPost('oper');

            $result = $model->calculation($num1, $num2, $operation);

            return view('cal_result.php', ['result'=>$result]);
        }
    }
?>