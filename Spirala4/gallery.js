var modal = document.getElementById("Modal");
var modalImg = document.getElementById("imgModal");
var captionText = document.getElementById("caption");

var img1 = document.getElementById("img1");
img1.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}

var img2 = document.getElementById("img2");
img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}
var img3 = document.getElementById("img3");
img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
       
        modal.style.display = 'none';
    }
};
