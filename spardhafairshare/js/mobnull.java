if(number.value == "") {
    window.alert("Error: Cell number must not be null.");
    number.focus();
    return false;
}

if(number.length != 10) {
    window.alert("Phone number must be 10 digits.");
    number.focus();
    return false;
}