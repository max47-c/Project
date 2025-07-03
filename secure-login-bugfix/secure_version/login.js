function validateForm() {
    const user = document.getElementById("username").value.trim();
    const pass = document.getElementById("password").value.trim();

    if (!user || !pass) {
        alert("Please enter both username and password.");
        return false;
    }
    return true;
}
