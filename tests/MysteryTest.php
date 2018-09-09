<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "./src/Mystery.php";

final class mysteryTest extends TestCase
{
     
    public function testString(){
        $mystery = new Mystery();
        $this->assertEquals("C'est plus!", $mystery->testMystery($mystery->getMN()-1));
        $this->assertEquals("C'est moins!", $mystery->testMystery($mystery->getMN()+1));
        $this->assertEquals("Bravo! C'est gagné!", $mystery->testMystery($mystery->getMN()));
    }
    
    public function testLife(){
        $mystery = new Mystery();
        $mystery->testMystery(-1);
        $this->assertEquals(2, $mystery->getLife());
    }
    
    
}


?>
