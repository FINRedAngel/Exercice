var title = document.querySelector("h1");
title.style.color = "red";

var button1 = document.getElementById("Button1");
var button2 = document.getElementById("Button2");
var response = document.querySelector("p");

var goodResponse = document.querySelector(".Reponse1");
var badResponse = document.querySelector(".Reponse2");


button1.addEventListener("click", () =>{
    response.style.visibility = "visible";
    response.classList.add("show_response");
});

button2.addEventListener("click", () =>{
    response.style.visibility = "visible";
    badResponse.classList.add("show_response");
});

const mouse = document.querySelector(".mouse");

window.addEventListener("mousemove", (e) => {
    mouse.style.left = e.pageX + -25 + "px";
    mouse.style.top = e.pageY + -25 + "px";
});

window.addEventListener("click", (e) => {
    mouse.style.border = "5px solid red";
});

window.addEventListener("clickafter", (e) => {
    mouse.style.border = "1px solid red";
});

const enter = document.querySelector(".content");

enter.addEventListener("mouseenter", () => {
    enter.style.background = "red";
});

enter.addEventListener("mouseleave", () => {
    enter.style.background = "blue";
});

const keypressContainer = document.getElementById("key");

document.addEventListener("keypress", (e) => {
    console.log(e)
    keypressContainer.textContent += e.key;
    const ring = () => {
        const audio = new audio();
        audio.src = "./k.mp3";
        audio.play();
    }

    if(e.charCode == 112){
        console.log('Delete Key Pressed')
        ring();
    }
});
