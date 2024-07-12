// script.js
function previewImage(element) {
    var modal = document.getElementById("previewModal");
    var modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = element.querySelector("img").src;
}

function closePreview() {
    var modal = document.getElementById("previewModal");
    modal.style.display = "none";
}

// Close the modal when the user clicks on the image
document.getElementById("modalImage").onclick = function() {
    closePreview();
};

// Close the modal when the user presses the "Esc" key
document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        closePreview();
    }
});

function showMore() {
    var gallery = document.getElementById('gallery');
    var showMoreBtn = document.getElementById("showMoreBtn");

    // Logic to add more images to the gallery
    var newPhotos = `
        <div class="photo" onclick="previewImage(this)">
            <img src="images/333.jpg" alt="Image 3">
            <div class="overlay">
                <div class="text">Preview</div>
            </div>
        </div>
        <div class="photo" onclick="previewImage(this)">
            <img src="images/444.jpg" alt="Image 4">
            <div class="overlay">
                <div class="text">Preview</div>
            </div>
        </div>
        <!-- Add more photos as needed -->
    `;

    gallery.insertAdjacentHTML('beforeend', newPhotos);

    // Change the "Show more" button to "Show less"
    showMoreBtn.textContent = "Show less";
    showMoreBtn.setAttribute("onclick", "showLess()");
}

function showLess() {
    var gallery = document.getElementById('gallery');
    var photos = gallery.querySelectorAll('.photo');
    var showMoreBtn = document.getElementById("showMoreBtn");

    // Logic to hide the additional images added by showMore function
    for (let i = 0; i < photos.length; i++) {
        if (i >= 2) { // Assuming initial photos are 2
            gallery.removeChild(photos[i]);
        }
    }

    // Change the "Show less" button back to "Show more"
    showMoreBtn.textContent = "Show more";
    showMoreBtn.setAttribute("onclick", "showMore()");
}
