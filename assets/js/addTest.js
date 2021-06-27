/**
 * OPTIMIZATION IDEA FOR addEventListener :
 * ALL UNDER THE SAME CLASS
 * THEN LOOP ...
 */

const testGroupId = document.querySelector("#testGroupId").value;
const tests = document.querySelector("#tests");
// console.log(testGroupId);
let testName = "";
let description = "";
let minVal = "";
let maxVal = "";
let testResult = "";

document.querySelector("#testName").addEventListener("change", event => {
    testName = event.target.value;
});

document.querySelector("#description").addEventListener("change", event => {
    description = event.target.value;
});

document.querySelector("#minVal").addEventListener("change", event => {
    minVal = event.target.value;
});

document.querySelector("#maxVal").addEventListener("change", event => {
    maxVal = event.target.value;
});

document.querySelector("#testResult").addEventListener("change", event => {
    testResult = event.target.value;
});

document.querySelector("#btnAddTest").addEventListener("click", event => {
    event.preventDefault();

    const xhr = new XMLHttpRequest();
    xhr.responseType = "json";
    xhr.open("POST", "http://localhost:1597/test/addtest");
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            // console.log(xhr.response);

            // // ADD -> CLEARING THE FORM'S FIELDS
            // testName = "";
            // description = "";
            // minVal = "";
            // maxVal = "";
            // testResult = "";

            const article = document.createElement("article");
            article.classList.add("message");
            const msgHeader = document.createElement("div");
            msgHeader.classList.add("message-header");
            const msgBody = document.createElement("div");
            msgBody.classList.add("message-body");

            tests.append(article);
            article.append(msgHeader);
            article.append(msgBody);

            const { testName, description, minVal, maxVal, testResult } = xhr.response;
            const arrDatas = [minVal, maxVal, testResult];
            const labels = ["Minimum : ", "Maximum : ", "Resultat (entre 0 et 1) : "];

            const pHeader = document.createElement("p");
            pHeader.innerHTML = testName;
            msgHeader.append(pHeader);

            const levelDescription = document.createElement("div");
            levelDescription.classList.add("level");
            const divDescription = document.createElement("div");
            divDescription.classList.add("level-item", "has-text-centered");
            const pDescription = document.createElement("p");
            pDescription.innerHTML = description;
            const strongDescription = document.createElement("strong");
            strongDescription.innerHTML = "Description : ";

            msgBody.append(levelDescription);
            levelDescription.append(divDescription);
            divDescription.append(pDescription);
            pDescription.prepend(strongDescription);

            const levelNumber = document.createElement("div");
            levelNumber.classList.add("level");
            const divNumber = document.createElement("div");
            divNumber.classList.add("level-item", "has-text-centered", "is-justify-content-space-around");

            msgBody.append(levelNumber);
            levelNumber.append(divNumber);

            for (let i = 0; i < 3; i++) {
                const p = document.createElement("p");
                p.innerHTML = arrDatas[i];
                const strong = document.createElement("strong");
                strong.innerHTML = labels[i];
                p.prepend(strong);
                divNumber.append(p);
            }
        }
    };

    xhr.send(JSON.stringify({
        testGroupId,
        testName,
        description,
        minVal,
        maxVal,
        testResult
    }));
});