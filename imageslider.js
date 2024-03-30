var images = ['kaji.jpg','arman.jpg','arrman.jpg','arman2.jpg','habib.jpg'];

var i =0;

function slideShow() {

    document.getElementById("image").src=images[i];



    if(i<images.length-1){

        i++;

    }

    else {

        i=0;

    }

    setTimeout("slideShow()" , 2000);

}

window.onload = slideShow;