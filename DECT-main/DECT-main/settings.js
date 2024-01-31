function reset() {
    var test = confirm('weet je zeker dat je wilt resetten?');
    if (test == false) {
        event.preventDefault();
    } 
}