document.getElementById("myForm").addEventListener("submit", function(event) {

    // Ambil nilai input
    const nama = document.querySelector("#MyNama").value.trim();
    const email = document.querySelector("#MyEmail").value.trim();
    const password = document.querySelector("#MyPassword").value.trim();
    const telepon = document.getElementById("MyTelepon").value.trim();

    // Validasi Nama
    if (nama === "") {
        alert("Name must be filled");
        event.preventDefault();
        return;
    }
    else if (nama.length < 3) {
        alert("Name must be at least 3 characters");
        event.preventDefault();
        return;
    }

    if (email === "") {
        alert("Email must be filled");
        event.preventDefault();
        return;
    }
    else if (!email.includes("@") || !email.includes(".")) {
        alert("Email format is not valid");
        event.preventDefault();
        return;
    }

    if (password === "") {
        alert("Password must be filled");
        event.preventDefault();
        return;
    }
    else if (password.length < 8) {
        alert("Password must be at least 8 characters");
        event.preventDefault();
        return;
    }

    if (telepon === "") {
        alert("No. Telepon must be filled");
        event.preventDefault();
        return;
    }
    else if (telepon.length < 10) {
        alert("No. Telepon must be at least 10 characters");
        event.preventDefault();
        return;
    }
    else if (isNaN(telepon)){
        alert("No. Telepon must contain only numbers");
        event.preventDefault();
        return;
    }

    alert("Form berhasil disubmit!");



    // Isi tabel
    const hasilBody = document.getElementById("resultBody");
    hasilBody.innerHTML = `
        <tr><td>Full Name</td><td>${nama}</td></tr>
        <tr><td>Email</td><td>${email}</td></tr>
        <tr><td>Password</td><td>${"*".repeat(password.length)}</td></tr>
        <tr><td>No. Telepon</td><td>${telepon}</td></tr>
    `;

    // Tampilkan tabel
    document.getElementById("resultTable").style.display = "table";
    // document.getElementById("myForm").addEventListener("reset", function() {
    //     document.getElementById("hasilTable").style.display = "none";
    // });
    // event.preventDefault(); 

});