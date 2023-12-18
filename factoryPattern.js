//example1

class Car{
    constructor(item){
        this.wheels = item.wheels;
        this.doors = item.doors;
        this.color = item.color; 
    }
}

class Truck{
    constructor(item){
        this.wheels = item.wheels;
        this.doors = item.doors;
        this.color = item.color; 
    }
}

class Factory{

    create= (item,type) =>{
        
        if(!type){
            return "Error with type";
        }

        let vehicle;

        if(type=== "car"){
            vehicle=new Car(item);
        }else if(type=== "truck"){
            vehicle=new Truck(item);
        }

        vehicle.type=type;

        vehicle.startEngine = ()=> console.log(`Reving ${type} engine`);

        vehicle.driveVehicle = ()=> console.log(`Driving ${type}...`);

        vehicle.stopEngine = ()=> console.log(`Stop ${type} engine`);

        return vehicle;
    }
};

//main
const vehicleFactory=new Factory();

const car=vehicleFactory.create({
    wheels: 4,
    doors: 2,
    color: "black",
}, "car");

console.log(car)
console.log(car.startEngine())
console.log(car.driveVehicle())


const truck=vehicleFactory.create({
    wheels: 4,
    doors: 2,
    color: "yellow",   
}, "truck")
console.log(truck)

console.log(truck.startEngine())
console.log(truck.stopEngine())