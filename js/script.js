function add(item){
    let count = item.parentElement.children[1].innerHTML;
    item.parentElement.children[1].innerHTML = parseInt(count) + 1;
}

function remove(item){
    let count = item.parentElement.children[1].innerHTML;
    if(count > 0){
        count--;
    }
    item.parentElement.children[1].innerHTML = count;
}

function addCart(item){
    let anz = parseInt(item.parentElement.children[0].children[1].innerHTML);
    let artikelnr = parseInt(item.parentElement.parentElement.parentElement.id);

    if(localStorage.length != 0){
        if(already(anz, artikelnr) == false){
            localStorage.setItem(localStorage.length, artikelnr + "/" + anz);
        }
    }else{
        localStorage.setItem(localStorage.length, artikelnr + "/" + anz);
    }

    item.parentElement.children[0].children[1].innerHTML = 1;
    
    let alert = document.getElementsByClassName('alert');
    alert[0].style.display = 'block';
}

function already(anz, artikelnr){
    for (let index = 0; index < localStorage.length; index++) {
        let arr = localStorage[index].split('/');
        if(arr[0] == artikelnr){
            anz += parseInt(arr[1]);
            localStorage[index] = artikelnr + "/" + anz;
            return true;
        }
    }
    return false;
}


let locations = window.location.href.split('/');

if(locations[locations.length - 1] == "warenkorb.php"){
    let warenkorb = document.getElementById('warenkorb');
    
    console.log(locations[locations.length - 1]);

    // Warenkob mittels Localhost generieren lassen
}