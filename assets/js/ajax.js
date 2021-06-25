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
        msg.innerHTML = dl.options[index].id
        var idasked = dl.options[index].id
    }
   requete(idasked)
})

function requete(idasked){
     //requete
     var xhr = new XMLHttpRequest()
     xhr.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             // msg.innerHTML += this.responseText 
             var datas = this.response.users
             for(var i = 0;i<datas.length;i++){
                 msg.innerHTML += "Bonjour je suis " + datas[i].nom + ". "
             }
             console.log(this.response);
         }else if(this.readyState == 4 && this.response == 404){
             alert("404")
         }
     }
     xhr.open("GET","/assets/js/text.txt", true)
     xhr.responseType = "json"
     xhr.send()
     console.log(idasked);
}


   