<?php

namespace RefactoringGuru\Facade\Conceptual;

class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: operation1!\n";
    }

    public function operationA():string
    {
        return "Subsystem1: operationA!\n";
    }
}

class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: operation1!\n";
    }

    public function operationZ(): string
    {
        return "Subsystem2: operationZ!\n";
    }
}

class Facade
{
    protected $subsystem1;
    protected $subsystem2;

    public function __construct($subsystem1,$subsystem2)
    {
        $this->subsystem1=$subsystem1;
        $this->subsystem2=$subsystem2;
    }

    public function operation(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->operationA();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }

}

function client(Facade $facade)
{
    echo $facade->operation();
}

$sub1=new Subsystem1();
$sub2=new Subsystem2();
$facade = new Facade($sub1,$sub2);
client($facade);

?>