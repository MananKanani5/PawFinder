// preloader

var myVar;

function myFunction() {
myVar = setTimeout(showPage, 1000);
}

function showPage() {
document.getElementById("loader").style.display = "none";
document.getElementById("main").style.display = "block";
}



// JavaScript for FAQ accordion
const accordions = document.querySelectorAll(".accordion");

accordions.forEach((accordion) => {
    accordion.addEventListener("click", () => {
        accordion.classList.toggle("active");
        const panel = accordion.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
});


//Form Select & Options
// Define options for the second dropdown based on the selected category
 const optionsByCategory = {
    dog: ["Labrador Retriever","Bulldog", "German Shepherd", "Golden Retriever", "Beagle", "Pomeranian", "Dachshund", "Boxer", "Pug", "Rottweiler", "Shih Tzu"],
    cat: ["Persian", "Siamese", "Maine Coon", "Ragdoll", "British Shorthair", "Abyssinian", "Bengal", "Burmese", "Scottish Fold", "Sphynx"],
    rabbit: ["Holland Lop", "Netherland Dwarf", "Mini Rex", "Lionhead", "Mini Lop", "Flemish Giant", "English Angora", "Polish", "Himalayan", "Harlequin"],
    turtle: ["Red-eared Slider", "Indian Tent Turtle", "Three-striped Roofed Turtle", "Indian Flapshell Turtle", "Indian Softshell Turtle", "Black Pond Turtle", "Indian Spotted Pond Turtle", "Leith's Softshell Turtle", "Indian Peacock Softshell Turtle", "Indian Narrow-headed Softshell Turtle"],
    cow: ["Jersey Cow", "Holstein Friesian", "Gir Cow", "Sahiwal Cow", "Rathi Cow", "Ongole Cow", "Red Sindhi Cow", "Tharparkar Cow", "Kankrej Cow", "Hariana Cow"],
};

// Function to populate the second dropdown based on the selected category
function populateSecondSelect() {
    const firstSelect = document.getElementById("pettype");
    const secondSelect = document.getElementById("petbreed");
    const selectedCategory = firstSelect.value;

    // Clear the second dropdown
    secondSelect.innerHTML = '<option value="">Select a Breed *</option>';

    // Populate the second dropdown with options based on the selected category
    if (selectedCategory in optionsByCategory) {
        optionsByCategory[selectedCategory].forEach(option => {
            const optionElement = document.createElement("option");
            optionElement.value = option;
            optionElement.textContent = option;
            secondSelect.appendChild(optionElement);
        });
    }
}




const photoUpload = document.getElementById("photo-upload");
const selectedPhotos = document.getElementById("selected-photos");
const previewContainer = document.getElementById("preview-container");

function removeImage(imgContainer) {
    const file = imgContainer.file;
    const fileList = Array.from(photoUpload.files);
    const index = fileList.findIndex((f) => f === file);

    if (index !== -1) {
        fileList.splice(index, 1);
        photoUpload.files = new FileList(fileList);
    }

    imgContainer.remove();
    updatePhotoCount();
}

function updatePhotoCount() {
    const selectedFiles = photoUpload.files;
    const fileCount = selectedFiles.length;

    if (fileCount === 0) {
        selectedPhotos.innerHTML = "<p>No photos selected</p>";
    } else if (fileCount === 1) {
        selectedPhotos.innerHTML = `<p>${fileCount} photo selected</p>`;
    } else {
        selectedPhotos.innerHTML = `<p>${fileCount} photos selected</p>`;
    }
}

photoUpload.addEventListener("change", function () {
    const selectedFiles = photoUpload.files;

    // Clear existing previews
    previewContainer.innerHTML = "";

    for (let i = 0; i < selectedFiles.length; i++) {
        const file = selectedFiles[i];
        const imageType = /image.*/;

        if (file.type.match(imageType)) {
            const imgContainer = document.createElement("div");
            imgContainer.className = "preview-image";

            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.width = 100; // Set the width of the thumbnail
            imgContainer.appendChild(img);

            const removeButton = document.createElement("button");
            removeButton.className = "remove-button";
            removeButton.textContent = "Remove";
            removeButton.addEventListener("click", function () {
                removeImage(imgContainer);
            });

            imgContainer.appendChild(removeButton);
            imgContainer.file = file;
            previewContainer.appendChild(imgContainer);
        }
    }

    updatePhotoCount();
});


function removeImage(imgContainer) {
    const file = imgContainer.file;
    const fileList = Array.from(photoUpload.files);
    const index = fileList.findIndex((f) => f === file);

    if (index !== -1) {
        fileList.splice(index, 1);
        // Create a new FileList object to update the input field
        const newFileList = new DataTransfer();
        fileList.forEach((file) => newFileList.items.add(file));
        photoUpload.files = newFileList.files;
    }

    imgContainer.remove();
    updatePhotoCount();
}



