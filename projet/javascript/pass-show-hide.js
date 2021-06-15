const password = document.querySelector (".__form .__field input[type='password']");
const toggleBtn = document.querySelector(".__form .__field i");


toggleBtn.addEventListener('click',function(){

    var type = password.getAttribute('type');

    if(type == 'password'){
        type = 'text';
    }
    else{
        type = 'password';
    }

    password.setAttribute('type',type);
    this.classList.toggle('fa-eye-slash');


});