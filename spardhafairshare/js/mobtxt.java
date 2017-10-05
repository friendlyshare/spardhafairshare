function IsMobileNumber(txtMobId) {
var mob = /^[1-9]{1}[0-9]{9}$/;
var txtMobile = document.getElementById(txtMobId);
if (mob.test(txtMobile.value) == false) {
    alert("Please enter valid mobile number.");
    txtMobile.focus();
    return false;
}
return true;