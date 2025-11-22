<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class doCalculation extends Model{
        public function calculation($n1, $n2, $oper){
            switch ($oper) {
                case '+':
                    return $n1 + $n2;
                    break;
                case '-':
                    return $n1 - $n2;
                    break;
                case '*':
                    return $n1 * $n2;
                    break;
                case '/':
                    return $n2 !=0 ? $n1 / $n2 : 'Cannot divide by zero';
                    break;
                
                default:
                    'Invalid Operation!';
            }
        }
    }
?>