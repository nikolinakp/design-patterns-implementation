<?php

namespace RefactoringGuru\Singleton\Conceptual;

class Singleton
{
    private static $instance=[];

    protected function __construct(){}

     protected function __clone() {}

    public function __wakeup()
    {
        throw new \Exeption("Cannot unserialize a singleton");
    }
 
    public static function getInstance() 
    {       
        if(self::$instance==null)
        {
            self::$instance=new Singleton();
        }
       
         return self::$instance;
    }   
}

function clientCode()
{
    $s1=Singleton::getInstance(); 
    $s2=Singleton::getInstance();
    if($s1 === $s2){
        echo "Singleton works";
    }else{
        echo "Singleton failed";
    }

}

clientCode();
?>