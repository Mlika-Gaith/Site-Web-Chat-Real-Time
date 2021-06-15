
const form = document.querySelector(".__signup form"),
submitBtn = form.querySelector(".button input"),
error = document.querySelector(".error__text");


form.onsubmit = (e) =>{
    e.preventDefault(); //prevent form from submitting
}

submitBtn.onclick = () =>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);

    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE){


            if (xhr.status === 200){  

                let data = xhr.response;
                
                if (data.trim() == "success"){
                    window.location.replace("http://localhost/projet/users.php");
                }

                else{
                    
                    error.style.display = "block";
                    error.textContent = data;
                    console.log(data);
                }
                   
            }


        }

    }


    let formData = new FormData(form);
    xhr.send(formData);

}