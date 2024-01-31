function settings() {
    location.replace("settings.php");
}

function nameChange() {
    var test = confirm("Are you sure u want to change you're name");
    if (test == false) {
        event.preventDefault();
    } 
}
function prestatieReset() {
    var test = confirm("Are you sure you want to reset you're achievements?");
    if (test == false) {
        event.preventDefault();
    } 
}
function accountReset() {
    var test = confirm("Are you sure you want to reset you're account?");
    if (test == false) {
        event.preventDefault();
    } 
}
function accountDelete() {
    var test = confirm("Are you sure you want to delete you're account");
    if (test == false) {
        event.preventDefault();
    } 
}