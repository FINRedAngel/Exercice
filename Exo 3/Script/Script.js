var Form = {};

Form.Prenom = document.querySelector("#PrenomId");
Form.PrenomT = document.querySelector("#PrenomT");
Form.PrenomT.textContent += Form.Prenom.value;

Form.Nom = document.querySelector("#NomId");
Form.NomT = document.querySelector("#NomT");
Form.NomT.textContent += Form.Nom.value;

Form.Age = document.querySelector("#AgeId");
Form.AgeT = document.querySelector("#AgeT");
Form.AgeT.textContent += Form.Age.value;

Form.Animal = document.querySelector("#AnimalId");
Form.AnimalT = document.querySelector("#AnimalT");
Form.AnimalT.textContent += Form.Animal.value;

// document.addEventListener("keypress", (e) => {
//     if(){
//         PrenomT.textContent += e.key;
//     }

//     if(){
//         NomT.textContent += e.key;
//     }

//     if(){
//         AgeT.textContent += e.key;
//     }

//     if(){
//         AnimalT.textContent += e.key;
//     }
// }