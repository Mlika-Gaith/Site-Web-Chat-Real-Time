const form = document.querySelector(".typing__area"),
destination = document.querySelector(".destination").value,
inputField = document.querySelector(".typing__area .input__field"),
sendBtn = document.querySelector(".typing__area button"),
chatBox = document.querySelector(".chat__box");


form.onsubmit = (e) =>{
    e.preventDefault(); //prevent form from submitting
}

sendBtn.onclick = () =>{
    

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert_chat.php", true);
    

    xhr.onload = () =>{

        if(xhr.readyState === XMLHttpRequest.DONE){

            if(xhr.status === 200){
                inputField.value = "";
                scrollToBottom();
            }

        }


    }

    let formData = new FormData(form);
    xhr.send(formData);
    
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(() =>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "php/get_chat.php", true);

    xhr.onload = () =>{
        if (xhr.readyState === XMLHttpRequest.DONE){
            if (xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                  }
                
            }
        }
    }

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("destination="+destination);
    

}, 500); /*refresh every 0.5s;*/

function scrollToBottom (){
    chatBox.scrollTop = chatBox.scrollHeight;
}