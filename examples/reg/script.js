// script.js
document.addEventListener("DOMContentLoaded", function() {
    const adminForm = document.getElementById("adminForm");
    const penggunaForm = document.getElementById("penggunaForm");

    adminForm.style.display = "none";
    penggunaForm.style.display = "none";

    document.getElementById("registrationForm").addEventListener("change", function() {
        const userType = document.querySelector('input[name="userType"]:checked').value;

        if (userType === "admin") {
            adminForm.style.display = "block";
            penggunaForm.style.display = "none";
        } else if (userType === "pengguna") {
            penggunaForm.style.display = "block";
            adminForm.style.display = "none";
        }
    });
});
