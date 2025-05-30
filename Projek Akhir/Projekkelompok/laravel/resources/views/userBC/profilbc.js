
$(document).ready(function() {

    const photoUploadElement = document.getElementById('photo-upload');
    if (photoUploadElement) {
        photoUploadElement.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            const profilePictureElement = document.getElementById('profile-picture');

            reader.onload = function(e) {
                if (profilePictureElement) {
                    profilePictureElement.src = e.target.result;
                }
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    }
});