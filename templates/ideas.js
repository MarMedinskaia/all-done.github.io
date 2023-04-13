let images = new Array();
images[0] = "images/andriyko-podilnyk-VehdYPKnX8Y-unsplash.jpg";
images[1] = "images/anton-SnKfmC1I9fU-unsplash.jpg";
images[2] = "images/jonathan-kemper-4z3lnwEvZQw-unsplash.jpg";
images[3] = "images/firosnv-photography-1wBmbnvv4TE-unsplash.jpg";

let i=0;

function prevImage() {
    let image = document.getElementById("langara");
    if (i==0) {
        i = images.length-1;
    } else {
        i = i-1;
    }
    image.src = images[i];
}

function nextImage() {
    let image = document.getElementById("langara");
    if (i==images.length-1) {
        i = 0;
    } else {
        i = i+1;
    }
    image.src = images[i];
}