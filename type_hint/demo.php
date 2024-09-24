<?php
declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

$a = new A();
$b = new B();

$a->a1();
$a->f();  

$b->b1(); 
$b->f();  

class Demo {
    public function typeXReturnY(string $type) {
        echo __FUNCTION__ . "<br>";
        
        switch ($type) {
            case 'I':
                return new class implements I {
                    public function f() {
                        echo "This is function f from anonymous class implementing I.<br>";
                    }
                };
            case 'A':
                return new A();
            case 'B':
                return new B();
            case 'C':
                return new C();
            default:
                return null; 
        }
    }
}

$demo = new Demo();

$instanceA = $demo->typeXReturnY('A');
$instanceB = $demo->typeXReturnY('B');
$instanceI = $demo->typeXReturnY('I');

if ($instanceI !== null) {
    $instanceI->f();
}

if ($instanceA !== null) {
    $instanceA->a1();
    $instanceA->f();  
}

if ($instanceB !== null) {
    $instanceB->b1(); 
    $instanceB->f();   
}
?>
