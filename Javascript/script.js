// const michel = {};
// const david = {};
// michel.poid1 = 78;
// michel.taille1 = 1.69;
// michel.poid2 = 95;
// michel.taille2 = 1.88;

// david.poid1 = 92;
// david.taille1 = 1.95;
// david.poid2 = 85;
// david.taille2 = 1.76;

// let michelIMC1 = (michel.poid1 / (michel.taille1 ** 2)).toFixed(1);
// let michelIMC2 = (michel.poid2 / (michel.taille2 ** 2)).toFixed(1);

// let davidIMC1 = (david.poid1 / (david.taille1 ** 2)).toFixed(1);
// let davidIMC2 = (david.poid2 / (david.taille2 ** 2)).toFixed(1);


// console.log("Michel IMC1 total: " + michelIMC1);
// console.log("Michel IMC2 total: " + michelIMC2);

// console.log("David IMC1 total: " + davidIMC1);
// console.log("David IMC2 total: " + davidIMC2);

// if(michelIMC1 > davidIMC1){
//     console.log(`L'IMC 1 de Michael(${michelIMC1}) est supérieur à celui de David(${davidIMC1}) !`);
// }
// else{
//     console.log(`L'IMC 1 de David(${davidIMC1}) est supérieur à celui de Michael(${michelIMC1}) !`);
// }

// if(michelIMC2 > davidIMC2){
//     console.log(`L'IMC 2 de Michael(${michelIMC2}) est supérieur à celui de David(${davidIMC2}) !`);
// }
// else{
//     console.log(`L'IMC 2 de David(${davidIMC2}) est supérieur à celui de Michael(${michelIMC2}) !`);
// }


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const min = 100;
// const team1 = (96 + 108 + 89)/3; 
// const team2 = (88 + 91 + 110)/3;

// if(team1 > min && team1 > team2){
//     console.log(`Match 1: L'equipe 1 gagne avec ${team1} point !`);
// }
// else if(team2 > min && team2 > team1){
//     console.log(`Match 1: L'equipe 2 gagne avec ${team2} point !`);
// }
// else{
//     console.log(`Match 1: Match Nul !`);
// }

// team1 = (97 + 112 + 101)/3; 
// team2 = (109 + 95 + 123)/3;

// if(team1 > min && team1 > team2){
//     console.log(`Match 2: L'equipe 1 gagne avec ${team1} point !`);
// }
// else if(team2 > min && team2 > team1){
//     console.log(`Match 2: L'equipe 2 gagne avec ${team2} point !`);
// }
// else{
//     console.log(`Match 2: Match Nul !`);
// }

// team1 = (97 + 112 + 101)/3; 
// team2 = (109 + 95 + 106)/3;

// if(team1 > min && team1 > team2){
//     console.log(`Match 3: L'equipe 1 gagne avec ${team1} point !`);
// }
// else if(team2 > min && team2 > team1){
//     console.log(`Match 3: L'equipe 2 gagne avec ${team2} point !`);
// }
// else{
//     console.log(`Match 3: Match Nul !`);
// }


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const day = 'monday';

// switch (day){
//     case 'monday':
//         console.log('Learning Javascript');
//         break;
    
//     case 'tuesday':
//         console.log('Learning Javascript advanced');
//         break;

//     default:
//         console.log('End of the world 😢');
// }

// console.log('✔ End of the instruction ✔');


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const firstName = 'Maggie';
// const age = 17;

// if(age >= 18){
//     console.log('You have a driver license');
// }
// else{
//     console.log(`Sorry you can't have a driver license, please come back in ${18 - age} year.`)
// }

// const result = age >= 18 ? 'You have a driver license' : `Sorry you can't have a driver license, please come back in ${18 - age} year.`;

// console.log(result);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const pourboire = 100;
// const pourboireMin = 50;
// const pourboireMax = 300;

// const pourboirePer = pourboire >= pourboireMin && pourboire <= pourboireMax ? 15 : 20 ;

// const tip = pourboire * (pourboirePer/100);

// console.log(`Le pourboire pour ${pourboire}€ est de ${pourboirePer}%, il a payer ${tip}€`);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// logger("Hello", "Bye");

// function logger(v1, v2){
//     const fistName = "Vincent";

//     console.log(`${v1} ${fistName}, ${v2}`);
// }


// const fullName = function(v1, v2){
//     return `${v1} ${v2}`;
// }

// console.log(fullName("Vincent", "LEAB"));


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const calcAge = (year) => {
//     return 2023 - year;
// }

// console.log(`Hello, my name is ${fullName('Vincent', 'LEAB')} and my age is ${calcAge(1993)}`);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const dolphinScrore1 = 44 + 23 + 71;
// const dolphinScrore2 = 85 + 54 + 41;
// const koalaScrore1 = 65 + 54 + 49;
// const koalaScrore2 = 23 + 34 + 27;

// const calcAverage = (score) => {
//     return score/3;
// }

// function checkWinner(avgDolphins, avgKoalas){
//     const dolphinsAvg = calcAverage(avgDolphins);
//     const koalasAvg = calcAverage(avgKoalas);

//     const winner = dolphinsAvg > koalasAvg ? dolphinsAvg : koalasAvg;

//     const loser = dolphinsAvg < koalasAvg ? dolphinsAvg : koalasAvg;

//     const team = (dolphinsAvg*2) < koalasAvg ? "Koala"
//     : (koalasAvg*2) < dolphinsAvg ? "Dolphins"
//     : "Personne";


//     console.log(dolphinsAvg + " vs " + koalasAvg);
//     console.log(`${team} gagne, ${winner} vs ${loser}`);
// }

// checkWinner(dolphinScrore1, koalaScrore1);
// console.log(" ")
// checkWinner(dolphinScrore2, koalaScrore2);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const players = ["Test 1", "Test 2", "Test 3"];
// console.log(players);

// players.push("Test 4", "Test 5")
// console.log(players);

// players.unshift("Test 0")
// console.log(players);

// players2 = ["Test 6", "Test 7", "Test 8"];
// players.push(players2)
// console.log(players);

// players.pop();
// players.shift();
// console.log(players);

// console.log(players.indexOf("Test 3"));
// console.log(players.includes("Test 3"));


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const bills = [125, 555, 44];

// const totalBill = addition(bills);

// const totalTip = addition([calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])]);

// function addition(A){
//     return (A[0] + A[1] + A[2]);
// }

// function calcTip(bill){
//     const pourboireMin = 50;
//     const pourboireMax = 300;
//     const pourboirePer = bill >= pourboireMin && bill <= pourboireMax ? 15 : 20 ;
//     const tip = (bill*pourboirePer)/100;

//     console.log(`Le pourboire pour ${bill}€ est de ${pourboirePer}%, il a payer ${tip}€`);

//     return tip;
// }

// console.log(`Le total Bill est ${totalBill}€ et le total tip ${totalTip}€`);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const michel = {
//     poid: 78,
//     taille: 1.69,
//     calcBMI: function(){
//         return (michel.poid / (michel.taille ** 2)).toFixed(2);
//     },
// };

// const david = {
//     poid: 92,
//     taille: 1.95,
//     calcBMI: function(){
//         return (david.poid / (david.taille ** 2)).toFixed(2);
//     },
// };

// michel.IMC = michel.calcBMI();

// david.IMC = david.calcBMI();

// console.log("Michel IMC total: " + michel.IMC);

// console.log("David IMC total: " + david.IMC);

// if(michel.IMC > david.IMC){
//     console.log(`L'IMC de Michael(${michel.IMC}) est supérieur à celui de David(${david.IMC}) !`);
// }
// else{
//     console.log(`L'IMC de David(${david.IMC}) est supérieur à celui de Michael(${michel.IMC}) !`);
// }


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const michael = {
//     firstName: 'Michael',
//     lastName: 'Miller',
//     weight: 78,
//     height: 1.69,
  
//     calcBMI: function () {
//       console.log(this);
//       return michael.weight / michael.height ** 2;
//     },
//   };
  
//   const user = {
//     firstName: 'David',
//     lastName: 'Smith',
//     weight: 92,
//     height: 1.95,
  
//     // Mot clé this
//     calcBMI: function () {
//       console.log(this.firstName);
//       return this.weight / this.height ** 2; // david.weight / david.height ** 2
//       // return david.weight / david.height ** 2;
//     },
  
//     // une methode "fullName"
//     // retourner une concat de "firstName" et "lastName"
//     fullName: function () {
//       // return david.firstName + " " + david.lastName;
//       return `${this.firstName} ${this.lastName}`;
//     },
//   };
  
//   const person = {
//     firstName: 'John',
//     lastName: 'Doe',
//     birthYear: 1999,
//     city: 'Paris',
//     job: 'Tester',
//     hobbies: 'coding',
  
//     // une methode "summary"
//     summary: function () {
//       return `My name is ${this.firstName} ${
//         this.lastName
//       }, my age is ${2023 - this.birthYear} I'm living in ${
//         this.city
//       } and my job is ${this.job}... I love ${this.hobbies}`;
//     },
//   };
  
  
//   const michaelIMC = michael.calcBMI().toFixed(2);
//   const davidIMC = david.calcBMI().toFixed(2);
  
//   const result = `David Smith's BMI (${davidIMC}) is ${
//     michael.calcBMI() < david.calcBMI() ? 'higher' : 'lower'
//   } than Michael Miller's (${michaelIMC})!`;


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const bills = [22, 595, 176, 440, 37, 105, 10, 1100, 86, 52];
// const tips = [];
// const totals = [];
// let i = 0;

// while(i <= (bills.length - 1)){
//     tips.push(calcTip(bills[i]));
//     i++;
// }

// function calcTip(bill){
//     const pourboireMin = 50;
//     const pourboireMax = 300;
//     const pourboirePer = bill >= pourboireMin && bill <= pourboireMax ? 15 : 20 ;
//     const tip = (bill*pourboirePer)/100;

//     totals.push(bill + tip);

//     console.log(`Le pourboire pour ${bill} € est de ${pourboirePer}%, il a payer ${tip} € pour un total de ${bill + tip} €`);

//     return tip;
// }

// i = 0;
// let total = 0;
// while(i <= (totals.length - 1)){
//     total += totals[i];
//     i++;
// }

// console.log(`Le total Bill et tip est de ${total} €.`);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const A = [200, 99, 50, 199];
// let i = 0;
// let result = 0;

// while(i <= A.length){
//     if(A[i] > result){
//         result = A[i];
//     }
//     i++
// }

// console.log(result);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const planeRef = "air&788pl&sn&fr&air-portugal";
// const planeArray = planeRef.split('&');
// console.log(planeArray);

// const airCompany = planeArray.join(' ');
// console.log(airCompany);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const name = ["mary jane watson", "monkey d luffy", "jessica ann smith davis", "mickael jackson"];
// const name2 = [];

// for (let i = 0; i < name.length; i++) {
//     name2.push(capitalizeName(name[i]));
// }

// console.log(name2);

// function capitalizeName(array){
//     array = array.split(" ");
//     array2 = [];

//     for (let i = 0; i < array.length; i++) {
//         const itemName = array[i];
//         itemName2 = (itemName[0].toUpperCase() + itemName.slice(1));
//         array2.push(itemName2);
//     }
//     array2 = array2.join(" ");

//     return array2;
// }


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// const nom = "Vincent";
// nom2 = nom.padStart((nom.length + 3), "*").padEnd((nom.length + 6), "*");
// console.log(nom2);


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


// "use strict";

// const title = document.querySelector('h1');
// const button = document.querySelector('button');

// title.setAttribute('data-ok', 'It Ok!');

// const navItems = document.querySelectorAll('.nav-item');

// for (let i = 0; i < navItems.length; i++) {
//   const item = navItems[i];

//   item.addEventListener('click', function () {
//     const active = document.querySelector('.active');

//     if (active) {
//       console.log('Active class exist');
//       active.classList.remove('active');
//     }

//     item.classList.add('active');
//     console.log('Item clicked');
//   });
// }

// let A = 0;

// button.addEventListener('click', function(){
//     console.log("Click Me");
//     if(A == 0){
//         title.style.color = "blue";
//     }
//     else{
//         title.style.color = "red";
//     }
//     A = 1 - A;
// });

// const accordion = document.querySelector('.accordion');
// const accordionContent = document.querySelector('.accordioncontent');

// let B = 0;

// accordion.addEventListener('click', function(){
//     if(B == 0){
//         accordionContent.style.display = "block";
//     }
//     else{
//         accordionContent.style.display = "none";
//     }
//     B = 1 - B;
// });

// function showResult(elem) {
//     document.getElementById("showresulthere").innerHTML = Number(elem.value) + 2;
//   }


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


