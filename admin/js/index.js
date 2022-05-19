let img = document.getElementById('img');
let image = document.getElementById('image');
let galleryImg = document.getElementById('gallery-img');
let galleryImage = document.getElementById('gallery-image');
let galleryForm = document.getElementById('gallery-form');

img.onclick = function () {
    image.click();
}

image.onchange = function (evt) {
    const tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    if (FileReader && files && files.length) {
        const fr = new FileReader();
        fr.onload = function () {
            img.src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}

galleryImg.onclick = function () {
    galleryImage.click();
}

galleryImage.onchange = function () {
    galleryForm.submit();
}