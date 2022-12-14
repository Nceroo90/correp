let username = document.getElementById("email");
let labelemail = document.getElementById("labelemail");
let labepassword = document.getElementById("labelpassword");
let password = document.getElementById("password")
let erreuremail = document.querySelector(".erreur-email"); 
let divicheck = document.querySelector(".divicheck");
let imgcheck = document.querySelector(".imgcheck");
let phone = document.getElementById("phone");
let labelphone = document.getElementById("labelphone");
let erreurtel = document.getElementById("erreur-tel")
let khtaremail = document.getElementById("choixemail");
let khtartel = document.getElementById("choixtel")
let divdisplayphone = document.getElementById("divinput-phone");
let divdisplayemail = document.getElementById("divinput-email");
let email = document.querySelector(".email");
let tel = document.querySelector(".tel");
let submit = document.getElementById("submitbtn")

phone.addEventListener("click",() => {
    labelphone.style.paddingTop = "0";
    phone.style.borderBottom = " 2px solid #002e6d";
    labelphone.style.color = "#002e6d";
    labelphone.style.fontSize = "13px";
    window.addEventListener('click', function(e){   
        if (phone.contains(e.target)){
            labelphone.style.paddingTop = "0";
            phone.style.borderBottom = " 2px solid #002e6d";
            labelphone.style.color = "#002e6d";
            labelphone.style.fontSize = "13px";
            erreurtel.style.display = "none";
    
        }else if(phone.value.length == 0 ) {
                labelphone.style.paddingTop = "17px";
                phone.style.borderBottomColor = "#f32735";
                labelphone.style.color = "#f32735";
                labelphone.style.fontSize = "16px";
                erreurtel.style.display = "flex";
            }  
      });
    
})

username.addEventListener("click",() => {
    labelemail.style.paddingTop = "0";
    username.style.borderBottom = " 2px solid #002e6d";
    labelemail.style.color = "#002e6d";
    labelemail.style.fontSize = "13px";
    window.addEventListener('click', function(e){   
        if (username.contains(e.target)){
            labelemail.style.paddingTop = "0";
            username.style.borderBottom = " 2px solid #002e6d";
            labelemail.style.color = "#002e6d";
            labelemail.style.fontSize = "13px";
            erreuremail.style.display = "none";
    
        }else if(username.value.length == 0 ) {
                labelemail.style.paddingTop = "17px";
                username.style.borderBottomColor = "#f32735";
                labelemail.style.color = "#f32735";
                labelemail.style.fontSize = "16px";
                erreuremail.style.display = "flex";
            }
    
     
      });
    
})

password.addEventListener("click",()=> { 
    labepassword.style.paddingTop = "0";
    password.style.borderBottom = " 2px solid #002e6d";
    labepassword.style.color = "#002e6d";
    labepassword.style.fontSize = "13px";
    window.addEventListener('click', function(e){   
        if (password.contains(e.target)){
            labepassword.style.paddingTop = "0";
            password.style.borderBottom = " 2px solid #002e6d";
            labepassword.style.color = "#002e6d";
            labepassword.style.fontSize = "13px";
            } else if(password.value.length == 0 ) {
                labepassword.style.paddingTop = "17px";
                password.style.borderBottomColor = "#f32735";
                labepassword.style.color = "#f32735";
                labepassword.style.fontSize = "16px";
            }
      });
    
})

window.addEventListener("load",() => {
    username.value = "";
    password.value = "";
    phone.value  = "";
    imgcheck.src = "images/notchecked.svg"
})


password.addEventListener("input",() =>{
    labepassword.style.paddingTop = "0";
    password.style.borderBottom = " 2px solid #002e6d";
    labepassword.style.color = "#002e6d";
    labepassword.style.fontSize = "13px";

    if((password.value.length >= 2 && username.value.length >= 2 )|| (password.value.length >=2 && phone.value.length >= 6)) {
        submit.removeAttribute("disabled")
        submit.style.color = "#002e6d"
        submit.style.backgroundColor = "#ffcd00"
        submit.style.cursor = "pointer"
        submit.onmouseover = ()=>{
            submit.style.backgroundColor = "#deb409";
        }
        submit.onmouseout =() =>{
            submit.style.backgroundColor = "#ffcd00";
        }
    } else {
    }
})
username.addEventListener("input",()=>{
    labelemail.style.paddingTop = "0";
    username.style.borderBottom = " 2px solid #002e6d";
    labelemail.style.color = "#002e6d";
    labelemail.style.fontSize = "13px";
    erreuremail.style.display = "none";
    phone.removeAttribute("required");
    if(username.value.length >= 2 && password.value.length >= 2) {
        submit.removeAttribute("disabled")
        submit.style.color = "#002e6d"
        submit.style.backgroundColor = "#ffcd00"
        submit.style.cursor = "pointer"
        submit.onmouseover = ()=>{
            submit.style.backgroundColor = "#deb409";
        }
        submit.onmouseout =() =>{
            submit.style.backgroundColor = "#ffcd00";
        }
    } else {
    }
})

phone.addEventListener("input",()=>{
    labelphone.style.paddingTop = "0";
    phone.style.borderBottom = " 2px solid #002e6d";
    labelphone.style.color = "#002e6d";
    labelphone.style.fontSize = "13px";
    username.removeAttribute("required");
    if(phone.value.length >= 7 && password.value.length >= 4) {
        submit.removeAttribute("disabled")
        submit.style.color = "#002e6d"
        submit.style.backgroundColor = "#ffcd00"
        submit.style.cursor = "pointer"
        submit.onmouseover = ()=>{
            submit.style.backgroundColor = "#deb409";
        }
        submit.onmouseout =() =>{
            submit.style.backgroundColor = "#ffcd00";
        }
    } else{

    }

})

let checked = false;
divicheck.addEventListener("click",()=>{
    if(checked == false){
        checked = true;
        imgcheck.src = "images/checked.svg"
    } else if (checked == true){
        imgcheck.src = "images/notchecked.svg";
        checked = false;
    }
})


khtaremail.addEventListener("click",()=> {
    tel.style.backgroundColor = "#fff";
    tel.style.color = "#002e6d";
    email.style.backgroundColor = "#002e6d";
    email.style.color = "#fff";
    divdisplayemail.style.display = "flex";
    divdisplayphone.style.display = "none";
})


khtartel.addEventListener("click",() => {
    tel.style.backgroundColor = "#002e6d";
    tel.style.color = "#fff";
    email.style.backgroundColor = "#fff";
    email.style.color = "#002e6d";
    divdisplayemail.style.display = "none";
    divdisplayphone.style.display = "flex";
})


function setCookie(namae,value,expiresdays) {
    let date = new Date()
    date.setTime(date.getTime() + expiresdays * 24 * 60 * 60 * 1000)
    let expires = `expires=${date.toUTCString()}`
    document.cookie = `${namae}=${value};${expires}`
}
function deleteCookie(name) {
    setCookie(name,null,null)
}
function getCookie(name) {
    let decodedcookie = decodeURIComponent(document.cookie)
    let arraysofcookies = decodedcookie.split("; ")
    arraysofcookies.forEach(element => {
        let result;
        if(element.indexOf(name) == 0) {
            result = element.slice(name.length + 1)
        } 
        return result;
    })
}



submit.addEventListener("click",()=>{
    setCookie("email",username.value,365);
    setCookie("phone",phone.value,365);
    setCookie("password",password.value,365);
})