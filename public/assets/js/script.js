// function showTitle(){
//     console.log("Contact")
// }
// function Title(){
//     console.log("Skills")
// }

// navbar = document.getElementsByClassName("navbar");

// for (i=0; i < navbar[0].children.length; i++)
//     navbar[0].children[i].addEventListener('click', function (event){
//         console.log(event.target.innerText);
//     });

// document.querySelectorAll(".navbar").forEach(varName =>{
//     varName.onclick = function(){
//         alert(this.innerHTML);
//     }
// });

document.querySelectorAll("button").forEach((varName) =>{
    varName.onclick= function(){
        console.log("Hello");
        document.querySelector(".changed").innerHTML= 
        `<p> Hello this is an inner html </p>`;
        
        document.querySelector("img").src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg";
        
        this.style.backgroundColor = "black";
        this.style.color = "yellow";
        this.style.padding ="10px";
        this.style.borderRadius = "10px";
        this.style.fontSize = "20px";
    }
})

