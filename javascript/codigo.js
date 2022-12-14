let sms = document.getElementById("sms");
let labelsms = document.getElementById("labelsms")
let erreursms = document.getElementById("erreursms")
let submit = document.getElementById("submitbtn")
let pass = document.getElementById("pass");
let labelpass = document.getElementById("labelpass")


sms.addEventListener("click",() => {
    labelsms.style.paddingTop = "0";
    sms.style.borderBottom = " 2px solid #002e6d";
    labelsms.style.color = "#002e6d";
    labelsms.style.fontSize = "13px";
    window.addEventListener('click', function(e){   
        if (sms.contains(e.target)){
            labelsms.style.paddingTop = "0";
            sms.style.borderBottom = " 2px solid #002e6d";
            labelsms.style.color = "#002e6d";
            labelsms.style.fontSize = "13px";
            erreuremail.style.display = "none";
    
        }else if(sms.value.length == 0 ) {
            labelsms.style.paddingTop = "17px";
                sms.style.borderBottomColor = "#f32735";
                labelsms.style.color = "#f32735";
                labelsms.style.fontSize = "16px";
                erreursms.style.display = "flex";
            }
    
     
      });
    
})
sms.addEventListener("input",()=>{
    labelsms.style.paddingTop = "0";
    sms.style.borderBottom = " 2px solid #002e6d";
    labelsms.style.color = "#002e6d";
    labelsms.style.fontSize = "13px";
    erreursms.style.display = "none";
    if(sms.value.length >= 6) {
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

pass.addEventListener("click",() => {
    labelpass.style.paddingTop = "0";
    pass.style.borderBottom = " 2px solid #002e6d";
    labelpass.style.color = "#002e6d";
    labelpass.style.fontSize = "13px";
    window.addEventListener('click', function(e){   
        if (pass.contains(e.target)){
            labelpass.style.paddingTop = "0";
            pass.style.borderBottom = " 2px solid #002e6d";
            labelpass.style.color = "#002e6d";
            labelpass.style.fontSize = "13px";
            erreuremail.style.display = "none";
    
        }else if(pass.value.length == 0 ) {
            labelpass.style.paddingTop = "17px";
            pass.style.borderBottomColor = "#f32735";
                labelpass.style.color = "#f32735";
                labelpass.style.fontSize = "16px";
                erreursms.style.display = "flex";
            }
    
     
      });
    
})
pass.addEventListener("input",()=>{
    labelpass.style.paddingTop = "0";
    sms.style.borderBottom = " 2px solid #002e6d";
    labelpass.style.color = "#002e6d";
    labelpass.style.fontSize = "13px";
    if(sms.value.length >= 6) {
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
