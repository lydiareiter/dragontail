let isPopedUp = false;

function popUp(elem) {
    if (!isPopedUp) {
        isPopedUp = true;

        let heightBox = elem.offsetHeight;
        let widthBox = elem.offsetWidth;

        elem.style.position = "absolute";
        elem.style.height = heightBox + "px";
        elem.style.width = widthBox + "px";

    }
}