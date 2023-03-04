function validateFormRegister() {
    var nameRegex = /^[A-Z]+[A-Za-z]{3,}/;
    var name = document.getElementById('name-input').value;

    var surnameRegex = /^[A-Z]+[A-Za-z]{3,}$/;
    var surname = document.getElementById('surname-input').value;

    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;   
    var email = document.getElementById('email-input').value;

    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var password = document.getElementById('password-input').value;

    var confirmPassword = document.getElementById('confirm-input').value;

    if (name == "" && surname == "" && email == "" && password == "" && confirmPassword == "") {
        alert("All fields must be filled!");
        return;

    } if (name == "") {
        alert("Write Name!");

    } else if (!nameRegex.test(name)) {
        alert("Name is wrong!\nName should start with upper case!\nName should have mminimum 3 characters!");

    } if (surname == "") {
        alert("Write Surname!");

    } else if (!surnameRegex.test(surname)) {
        alert("Surname is wrong!\nSurname should start with upper case!\nSurname should have mminimum 3 characters!");

    } else if (email == "") {
        alert("Write Email!");

    } else if (!emailRegex.test(email)) {
        alert("Email is wrong!");

    } else if (password == "") {
        alert("Write Password!");

    } else if (!passwordRegex.test(password)) {
        alert("Password is wrong!\nPassword should have 8 characters,at least one letter and one number!");

    } else if (confirmPassword == "") {
        alert("Write confirmed password!");

    } else if (password != confirmPassword) {
        alert("Passwords doesn't match!");

    } else{
        alert("Registred succesfully!");
        window.location.href = "Login.php";
    }
}
