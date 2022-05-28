function add(item){
    let count = item.parentElement.children[1].innerHTML;
    count++;
    item.parentElement.children[1].innerHTML = count;
}

function remove(item){
    let count = item.parentElement.children[1].innerHTML;
    if(count > 0){
        count--;
    }
    item.parentElement.children[1].innerHTML = count;
}