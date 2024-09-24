<?php
interface I {
    public function f();
}


class C implements I {
    public function f() {
        echo "This is function f from class C.\n";
    }
}
class A extends C {
    public function a1() {
        echo "This is function a1 from class A.\n";
    }
}
class B extends C {
    public function b1() {
        echo "This is function b1 from class B.\n";
    }
}

$a = new A();
$a->a1(); 
$a->f(); 

$b = new B();
$b->b1();
$b->f(); 