function pilihDokter(namaDokter) {
    
    document.getElementById('dokter').value = namaDokter;
    
    window.location.href = '#buat-janji';
}

function validateForm() {
    
    var dokter = document.getElementById('dokter').value;
    
    if (dokter === "") {
        alert("Silakan pilih dokter sebelum membuat janji.");
        return false; 
    }
    return true; 
}
