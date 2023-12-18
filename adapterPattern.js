function Target(){
    this.request = function()
    {
        return "Terget: The default target's behavior.";
    }
}

function Adaptee(){
    this.specialRequest = function()
    {
        return ".eetpadA eht fo roivaheb laicepS";
    }
}

function Adapter(adaptee){
    var myAdaptee=new Adaptee();
    myAdaptee=adaptee;

    this.specialRequest = function()
    {
      return "(Translated) Special behavior of the Adaptee";
    }
}

//main
var target=new Target();
function clientCode(target)
{
    console.log(target.request()); 
}
clientCode(target);

var test = new Adaptee();
console.log(test.specialRequest());

var adapter=new Adapter(test);
console.log(adapter.specialRequest());



