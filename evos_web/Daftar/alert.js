let date, day, month, year;
date = (new Date().getDate());
switch (new Date().getDay()) {
case 0:
    day = "Minggu";
    break;
case 1:
    day = "Senin";
    break;
case 2:
    day = "Selasa";
    break;
case 3:
    day = "Rabu";
    break;
case 4:
    day = "Kamis";
    break;
case 5:
    day = "Jumat";
    break;
case 6:
    day = "Sabtu";
    break;
}

switch (new Date().getMonth()) {
case 0:
    month = "Januari";
    break;
case 1:
    month = "Februari";
    break;
case 2:
    month = "Maret";
    break;
case 3:
    month = "April";
    break;
case 4:
    month = "Mei";
    break;
case 5:
    month = "Juni";
    break;
case 6:
    month = "Juli";
    break;
case 7:
    month = "Agustus";
    break;
case 8:
    month = "September";
    break;
case 9:
    month = "Oktober";
    break;
case 10:
    month = "November";
    break;
case 11:
    month = "Desember";
    break;
}

year = (new Date().getFullYear());
document.getElementById("demo").innerHTML = day + ", " + date + " " + month + " " + year;

function Login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "" && password == "") {
        alert('Anda harus mengisi data dengan lengkap !');
        window.location="alert.html";
    } else if (email == "nurhadi" && password == "2111035") {
        alert("Selamat anda berhasil login");
        window.location="../web/web.html";
        return false;
    } else {
        alert("Username atau Password salah!")
        window.location="alert.html";
        return true;
    }
}