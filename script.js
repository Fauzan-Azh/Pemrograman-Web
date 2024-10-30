    document.getElementById('beasiswaForm').addEventListener('submit', function(event) {
    event.preventDefault();
    

    const nama = document.getElementById('nama');
    const tanggalLahir = document.getElementById('tanggalLahir');
    const nowa = document.getElementById('nowa');
    const domisili = document.getElementById('domisili');
    
    const errors = document.getElementsByClassName('error');
    for(let error of errors) {
        error.textContent = '';
    }
    
    let isValid = true;
    
    if (nama.value.trim() === '') {
        document.getElementById('errorNama').textContent = 'Nama harus diisi';
        isValid = false;
    }
    if (tanggalLahir.value === '') {
        document.getElementById('errorTanggalLahir').textContent = 'Tanggal lahir harus diisi';
        isValid = false;
    }
    if (nowa.value.trim() === '') {
        document.getElementById('errorNowa').textContent = 'Nomor WhatsApp harus diisi';
        isValid = false;
    }
    if (domisili.value.trim() === '') {
        document.getElementById('errorDomisili').textContent = 'Domisili harus diisi';
        isValid = false;
    }
    if (isValid) {
        console.log('Form submitted successfully!');
        console.log({
            nama: nama.value,
            tanggalLahir: tanggalLahir.value,
            nowa: nowa.value,
            domisili: domisili.value
        });

        alert('Yeaayy Form berhasil disubmit! :))');
        this.reset(); 
    }
});