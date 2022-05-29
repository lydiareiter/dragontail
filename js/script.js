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