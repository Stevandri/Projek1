

document.getElementById('profile-form').addEventListener('submit', function(event) {
    // ... (Kode untuk menyimpan perubahan profil) ...
});

document.getElementById('change-photo-btn').addEventListener('click', function() {
    document.getElementById('photo-upload').click();
});

document.getElementById('photo-upload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('profile-picture').src = e.target.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    }
});