class Subject
{
    constructor()
    {
        this.observers=[];
    }

    attach = function(observer){
        this.observers.push(observer);
    }

    detach = function(observer){
        var index=this.observers.indexOf(observer);
        if(index > -1)
        {
            this.observers.splice(index,1);
        }
    }

    notify = function(observer){
        var index=this.observers.indexOf(observer);
        if(index > -1)
        {
           this.observers[index].notify(index);
        }
    }

    notifyAllObservers = function(){
        for(var i=0; i<this.observers.length; i++)
        {
            this.observers[i].notify(i);
        }
    }
}

class Observer{
    notify= function(index){
        console.log("Observer " + index + " is notified!");
    }
}

var subject=new Subject();

var observer1=new Observer();
var observer2=new Observer();

subject.attach(observer1);
subject.attach(observer2);

//subject.notify(observer2);
subject.notifyAllObservers();