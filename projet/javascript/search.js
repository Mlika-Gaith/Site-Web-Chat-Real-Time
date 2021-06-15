const searchBar = document.querySelector(".search__items input"),
searchBtn = document.querySelector(".search__items button"),
usersList = document.querySelector(".users__list");


searchBar.onkeyup = () =>{
    let searchTerm = searchBar.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/search.php",true);

    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

searchBtn.onclick = ()=>{
    let searchTerm = searchBar.value;
    let xhr = new XMLHttpRequest();
    xhr.oprn("POST", "php/search.php", true);

    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}
