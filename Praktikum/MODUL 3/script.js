function tampil(){
    alert("Halo") 
}

// mengambil file di dokumen yang punya id "warna"
let warna = document.getElementById("warna")

warna.addEventListener('change', (event) =>{
    document.body.style.backgroundColor = warna.value
});

let x = window.prompt("Masukkan Nama Anda")
alert('Hallo ' + x);