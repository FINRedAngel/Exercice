'use strict';

const newgame = document.querySelector('.btn--new');
const roll = document.querySelector('.btn--roll');
const hold = document.querySelector('.btn--hold');
const score1 = document.querySelector('#score--0');
const score2 = document.querySelector('#score--1');
const currentScore1 = document.querySelector('#current--0');
const currentScore2 = document.querySelector('#current--1');
const rollImg = document.querySelector('.dice');
const playerBG1 = document.querySelector('.player--0');
const playerBG2 = document.querySelector('.player--1');

let number = 0;
let dice = 0;

newgame.addEventListener('click', function(){
    rollImg.attributes.src.value = `dice-0.png`;
    score1.textContent = 0;
    score2.textContent = 0;
    currentScore1.textContent = 0;
    currentScore2.textContent = 0;
;});

document.addEventListener("keydown", (event) => {
    if (event.key == 'ArrowUp') {
        rollDice();
    }
});

roll.addEventListener('click', function(){
    rollDice();
;});

document.addEventListener("keydown", (event) => {
    if (event.key == 'ArrowDown') {
        keepDice();
    }
});

hold.addEventListener('click', function(){
    keepDice();
;});

function rollDice(){
    number = (Math.random()*5 + 1).toFixed(0);
    rollImg.attributes.src.value = `dice-${number}.png`;
    if(dice == 0){
        if(number == 1){
            currentScore1.textContent = 0
            playerBG1.classList.remove('player--active');
            playerBG2.classList.add('player--active');
            dice = 1 - dice;
            rollImg.attributes.src.value = `dice-x.gif`;
            score1.textContent = 0;
        }
        score1.textContent = number;
    }
    else{
        if(number == 1){
            currentScore2.textContent = 0
            playerBG2.classList.remove('player--active');
            playerBG1.classList.add('player--active');
            dice = 1 - dice;
            rollImg.attributes.src.value = `dice-x.png`;
            score2.textContent = 0;
        }
        score2.textContent = number;
    }
}

function keepDice(){
    if(dice == 0){
        currentScore1.textContent = parseInt(number) + parseInt(currentScore1.textContent);
        playerBG1.classList.remove('player--active');
        playerBG2.classList.add('player--active');
        score1.textContent = 0;
    }
    else{
        currentScore2.textContent = parseInt(number) + parseInt(currentScore2.textContent);
        playerBG2.classList.remove('player--active');
        playerBG1.classList.add('player--active');
        score2.textContent = 0;
    }
    dice = 1 - dice;
}