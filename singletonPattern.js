var Singleton=(function(){
    var instace;

    function createInstance(){
        var object=new Object("I am the instance");
        return object;
    }

    return{
        
        getInstance: function(){
            if(!instace){
                instace=createInstance();
            }
            return instace;
        }
    };
})();

function main()
{
    let instace1=Singleton.getInstance();
    let instace2=Singleton.getInstance();

   console.log(instace1===instace2);
}
main();