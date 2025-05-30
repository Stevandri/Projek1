// Pastikan document ready jika menggunakan jQuery
$(document).ready(function() {
    // Hapus event listener untuk 'profile-form' jika tidak digunakan
    // document.getElementById('profile-form').addEventListener('submit', function(event) {
    // });

    // Hapus event listener untuk 'change-photo-btn' jika tidak ada elemen dengan ID tersebut
    // document.getElementById('change-photo-btn').addEventListener('click', function() {
    //     document.getElementById('photo-upload').click();
    // });

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