let isPopedUp = false;
let blurry = document.getElementById('blurry');

function popUp(elem) {
    if (!isPopedUp) {
        isPopedUp = true;

        let heightBox = elem.offsetHeight;
        let widthBox = elem.offsetWidth;

        elem.style.position = "absolute";
        elem.style.height = heightBox + "px";
        elem.style.width = widthBox + "px";

        let tempHeight = window.innerHeight;
        let tempWidth = window.innerWidth;

        tempHeight /= 1.2;
        tempWidth /= 1.2;

        let tempTop = window.innerHeight/2 - tempHeight/2 - 0;
        let tempLeft = window.innerWidth/2 - tempWidth/2 - 0;

        elem.style.height = tempHeight + "px";
        elem.style.width = tempWidth + "px";

        elem.style.top = tempTop + "px";
        elem.style.left = tempLeft + "px";

        console.log(elem);
    }
}