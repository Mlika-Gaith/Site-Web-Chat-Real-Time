const confirm = document.querySelector(".button_collections .confirmation");
const cancel = document.querySelector(".button_collections .cancel");

confirm.addEventListener('click', function(){
    window.location.replace("http://localhost/projet/php/delete.php");
})

cancel.addEventListener('click', function(){
    window.location.href = "http://localhost/projet/edit_account.php"
})