let isPopedUp = false;
let idOpend;
let scroll = 0;

window.addEventListener("scroll", (event) => {
    scroll = this.scrollY;
});

function popUp(elem) {
    if (!isPopedUp) {
        isPopedUp = true;

        /* Pop Up anzeigen */
        idOpend = elem.id;
        //console.log(idOpend);
        elem.id = "opend";

        let tempHeight = window.innerHeight;
        let tempWidth = window.innerWidth;

        tempHeight /= 1.2;
        tempWidth /= 1.2;

        let tempTop = (window.innerHeight / 2 - tempHeight / 2 - 0) + scroll;
        let tempLeft = window.innerWidth / 2 - tempWidth / 2 - 0;

        elem.style.top = tempTop + "px";
        elem.style.left = tempLeft + "px";

        let blurry = document.getElementById('blurry');

        blurry.style.zIndex = 22;
        blurry.style.marginTop = scroll + 'px';
        elem.style.zIndex = 23;

        //document.body.style.overflowY = 'hidden';
        //document.body.style.position = 'fixed';
        
        // Pop Up Inhalt
        popUpInhalt();
    }
}

function popUpInhalt(){

}

function popUpClose() {
    if (isPopedUp) {
        isPopedUp = false;
        let opend = document.getElementById('opend');


        let blurry = document.getElementById('blurry');

        blurry.style.zIndex = -1;
        opend.style.zIndex = 0;

        opend.id = idOpend.toString();

        body.style.overflowY = 'auto';
    }
}