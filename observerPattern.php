<?php

namespace RefactoringGuru\Observer\Conceptual;

class Subject implements \SplSubject
{
    public $state;
    private $observers; //clients

    public function __construct()
    {
        $this->observers=new \SplObjectStorage;
    }

    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Attached an observer \n";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer \n";
    }

    public function notify(): void
    {
        echo "Subject: Notifying onservers \n";
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
}

class ObserverA implements \SplObserver
{
    public function update(\SplSubject $subject):void
    {
           echo "ObserverA is notified! \n";
    }
}

class ObserverB implements \SplObserver
{
    public function update(\SplSubject $subject):void
    { 
        echo "ObserverB is notified! \n";
    }
}

//main
$subject=new Subject();

$objA=new ObserverA();
$subject->attach($objA);

$objB=new ObserverB();
$subject->attach($objB);

//$subject->someBusinessLogic();
//$subject->someBusinessLogic();
$subject->notify();

$subject->detach($objB);
//$subject->someBusinessLogic();
$subject->notify();
?>