function showPreview(imageSrc) {
    var modal = document.getElementById("previewModal");
    var modalImg = document.getElementById("previewImg");
    modal.style.display = "block";
    modalImg.src = imageSrc;
}

function closePreview() {
    var modal = document.getElementById("previewModal");
    modal.style.display = "none";
}
