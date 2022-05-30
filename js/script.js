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

    if (localStorage.getItem(artikelnr) == null) {
        localStorage.setItem(artikelnr, anz);
    }else{
        let vorherAnz = parseInt(localStorage.getItem(artikelnr));
        localStorage.setItem(artikelnr, (vorherAnz + anz));
    }

    let alert = document.getElementsByClassName('alert');
    alert[0].style.display = 'block';
}


let locations = window.location.href.split('/');

if(locations[locations.length - 1] == "warenkorb.php"){
    let warenkorb = document.getElementById('warenkorb');
    
    console.log(locations[locations.length - 1]);

    // Warenkob mittels Localhost generieren lassen
}