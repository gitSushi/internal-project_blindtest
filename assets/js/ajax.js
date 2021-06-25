var btn = document.getElementById("btn")
const selected = document.getElementById('selected')
const dl = document.getElementById('dl')
const msg = document.getElementById('msg')

btn.addEventListener("click", (e) => {
    //recupération de l'id 
    const index = [... dl.options].map(o => o.value).indexOf(text.value)
    if (index === - 1) {
        msg.innerHTML = "Aucun id à afficher."
    } else {
        var idasked = dl.options[index].id
    }
   requete(idasked)
})

function requete(idasked){
    
     //requete
     var xhr = new XMLHttpRequest()
     xhr.open("post","http://localhost:1597/products/get", true)
     xhr.responseType = "json"
     xhr.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
                renderGr(this.response)
         }else if(this.readyState == 4 && this.response == 404){
             alert("404")
         }

     }     
     xhr.send(JSON.stringify({idasked}));
}

function renderGr(response) {
    console.log(response);
    var groupes = JSON.stringify(response);
    var grobj = JSON.parse(groupes);
   
    grobj.forEach(element => {
        var box = document.createElement("div");
        msg.appendChild(box);
        var name = document.createElement("p");
        name.innerHTML = element.name;
        box.appendChild(name)
        var serial = document.createElement("p")
        serial.innerHTML = element.serial_number
        box.appendChild(serial)
        var tgname = document.createElement("p")
        tgname.innerHTML = element.tgname
        box.appendChild(tgname)
        var passed = document.createElement("p")
        passed.innerHTML = element.has_product_passed_test
        box.appendChild(passed)
    });

    

}