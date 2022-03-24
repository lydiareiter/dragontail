let isPopedUp = false;
let blurry = document.getElementById('blurry');
let opend = document.getElementById('opend');
let idOpend;

function popUp(elem) {
    if (!isPopedUp) {
        isPopedUp = true;

        idOpend = elem.id;
        elem.id = "opend";

        let tempHeight = window.innerHeight;
        let tempWidth = window.innerWidth;

        tempHeight /= 1.2;
        tempWidth /= 1.2;

        let tempTop = window.innerHeight/2 - tempHeight/2 - 0;
        let tempLeft = window.innerWidth/2 - tempWidth/2 - 0;

        elem.style.top = tempTop + "px";
        elem.style.left = tempLeft + "px";

        elem
    }
}