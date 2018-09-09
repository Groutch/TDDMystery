<?php
class Mystery {
    
    private $mysteryNum;
    private $life;
    
    public function __construct(){
        $this->mysteryNum = rand(0,9) ;
        $this->life = 3;
    }
    
    public function getLife(){
        return $this->life;
    }
    
    public function getMN(){
        return $this->mysteryNum;
    }
    
    public function testMystery($param){
        
        if ($this->life>=0){
            $this->life--;
            if ($param > $this->mysteryNum){
                return "C'est moins!";
            }
            if ($param < $this->mysteryNum){
                return "C'est plus!";
            }
            if ($param == $this->mysteryNum){
                return "Bravo! C'est gagné!";
            }
        }else{
            return "Tu as perdu, relance la page!"
        } 
    }
}