// Récupération des éléments de base 
var btn = document.getElementById("btn")
const selected = document.getElementById('selected')
const dl = document.getElementById('dl')
const display = document.getElementById('display')

btn.addEventListener("click", () => {
    //recupération de l'id du produit selectionné et appel à requete() avec le résultat
    const index = [...dl.options].map(o => o.value).indexOf(text.value)
    var idasked = dl.options[index].id
    requete(idasked)
})


/**
 * Permet gràce à une requête asynchrone de récupérer les infos en base de donnée concernant le produit selectionné
 * Celle ci passe par le framework et si tout se passe bien la réponse est envoyé dans la fonction de renderGr
 * @param {num} idasked 
 */
function requete(idasked) {
    var xhr = new XMLHttpRequest()
    xhr.open("post", "http://localhost:1597/products/get", true)
    xhr.responseType = "json"
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            renderGr(this.response)
        } else if (this.readyState == 4 && this.response == 404) {
            alert("404")
        }
    }
    xhr.send(JSON.stringify({ idasked }));
}

/**
 * Crée tout les elements requis pour l'affichage des données reçues
 * @param {obj} response 
 */
function renderGr(response) {

    var groupes = JSON.stringify(response);
    var grobj = JSON.parse(groupes);

    grobj.forEach(element => {
        var box = document.createElement("div");
        box.classList.add('column', 'is-half')
        display.appendChild(box);

        var link = document.createElement("a")
        link.href = "http://localhost:1597/tests/" + element.id;
        box.appendChild(link)

        var card = document.createElement("div")
        card.classList.add('notification', 'has-text-centered')
        element.has_product_passed_test == 1 ? card.className += " is-success" : card.className += ' is-danger'
        link.appendChild(card)

        var tgname = document.createElement("p")
        tgname.innerHTML = element.tgname
        card.appendChild(tgname)

        var lilBox = document.createElement("div")
        lilBox.className += "box"
        card.appendChild(lilBox)

        var serial = document.createElement("p")
        serial.innerHTML = element.serial_number
        lilBox.appendChild(serial)

        var name = document.createElement("p");
        name.innerHTML = element.name;
        lilBox.appendChild(name)
    });
}
