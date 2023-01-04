<?php
use PHPUnit\Framework\TestCase;
require './src/calculator.php';

class calculatorTest extends TestCase {
        public function testfactorial(){
                $a=new Calculator;
                $this->assertEquals(1,$a->Factorial(0),'Error from fact (0)');
                
                $b=new Calculator;
                $this->assertEquals(1,$b->Factorial(1),'Error from fact (1)');
                
                $c=new Calculator;
                $this->assertEquals(120,$c->Factorial(5),'Error from fact (5)');
                
                $d=new Calculator;
                $this->assertEquals($c->Factorial(5),(5*($d->Fact(5))),"n! !=n*( (n-1)!)");

                $x=new Calculator;
                $this->assertEquals(null,($x->Factorial(-3)),"Fact (-3) is error ");
                $this->assertEquals(null,($x->Factorial(-1.5)),"Fact (-1.5) is error ");
                $this->assertEquals(null,($x->Factorial(false)),"Fact (false) is error ");
                $this->assertEquals(null,($x->Factorial('abc')),"Fact ('abc') is error ");


        }        
}





?>

