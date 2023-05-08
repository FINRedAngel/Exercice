var Box = {};

Box.title = document.querySelector("h1");
Box.Question = document.querySelector("h2");
Box.title.style.color = "red";
Box.Button1e = document.getElementById("Button1");
Box.Button2e = document.getElementById("Button2");
Box.Reset = document.getElementById("Reset");
Box.AllAsset = [Box.Question, Box.Button1e, Box.Button2e];
Box.Response = document.querySelectorAll(".Reponse1, .Reponse2");

async function ButtonPays(Box){ 
    if(Box.pays.textContent){
        if(Box.pays.textContent == "Paris"){
            Box.Response[0].style.display = "inline-block";
        }
        else if(Box.pays.textContent == "Lyon"){
            Box.Response[1].style.display = "inline-block";
        }

        for (let i = 0; i < Box.AllAsset.length; i++) {
            Box.AllAsset[i].style.display = "none";
        }
        
        Box.Reset.style.display = "inline-block";
    }
    else{
        for (let i = 0; i < Box.AllAsset.length; i++) {
            Box.AllAsset[i].style.display = "inline-block";
        }

        for (let i = 0; i < Box.Response.length; i++) {
            Box.Response[i].style.display = "none";
        }

        Box.Reset.style.display = "none";
    }  
}

Box.Button1e.addEventListener("click", () =>{
    Box.pays = document.getElementById("Button1");
    ButtonPays(Box);
});

Box.Button2e.addEventListener("click", () =>{
    Box.pays = document.getElementById("Button2");
    ButtonPays(Box);
});

Box.Reset.addEventListener("click", () =>{
    Box.pays = "";
    ButtonPays(Box);
});