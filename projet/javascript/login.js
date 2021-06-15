const form = document.querySelector(".__login form"),
submitBtn = document.querySelector(".button input"),
error = document.querySelector(".error__text");

form.onsubmit = (e) =>{
    e.preventDefault(); //prevent form from submitting
}

submitBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);

    xhr.onload = () =>{
        if (xhr.readyState === XMLHttpRequest.DONE){


            if (xhr.status === 200){

                let data = xhr.response;

                if (data.trim() =="success" ){

                    window.location.href= "http://localhost/projet/users.php";
                }

                else{

                    error.style.display = "block";
                    error.textContent = data;
                }
                
        
            }

        }
    }

    let formDAta = new FormData(form);
    xhr.send(formDAta);
}