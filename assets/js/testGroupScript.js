const btn = document.querySelector("#submit");

btn.addEventListener("submit", (event) => {

    console.log(event.target);
    event.preventDefault();

    const prodId = 1;
    const art = document.querySelector('#products');
    const recup = 1;
    console.log(art);

    // const xhr = new XMLHttpRequest();
    // // xhr.responseType = "json";

    // xhr.open("POST", "http://localhost:1597/testgroup/create");

    // xhr.setRequestHeader("Content-Type", "application/json");

    // xhr.onreadystatechange = function () {
    //     if (xhr.status === 200 && xhr.readyState === 4) {
    //         console.log("response HERE");
    //         console.log(xhr.response);
    //     }
    // };


    // xhr.send(JSON.stringify({ test: "test" }));
});