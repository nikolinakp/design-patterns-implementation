class Subsystem1 
{
    operation1 = function(){
        return "Subsystem1: operation1!\n";
    }

    operationA = function(){
        return "Subsystem1: operationA!\n";
    }
}

class Subsystem2 
{
    operation1 =  function(){
        return "Subsystem2: operation1!\n";
    }

    operationZ = function() {
        return "Subsystem2: operationZ!\n";
    }
}

class Facade {
    constructor(sub1,sub2){
        this.subsystem1=sub1;
        this.subsystem2=sub2;
    }

    operation = function(){
       var text1 = "Facade initializes subsystems:\n";
       var examle1 = this.subsystem1.operation1();
       var example2 = this.subsystem2.operation1();
       var text2 = "Facade orders subsystems to perform the action:\n";
       var example3 = this.subsystem1.operationA();
       var example4 = this.subsystem2.operationZ();

       var result=text1 + examle1 + example2 + text2 + example3 + example4;

       return result;
    }
}

var client = function(facade){
    console.log(facade.operation());
}

var sub1=new Subsystem1();
var sub2=new Subsystem2();
var facade = new Facade(sub1,sub2);
client(facade);