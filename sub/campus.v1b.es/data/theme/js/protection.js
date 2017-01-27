/**
 * Created by Henry on 18/01/2017.
 */

function TheLogin() {

    var password = 'pepper';

    if (this.document.login.pass.value == password) {
        top.location.href="correct.html";
    }
    else {
        window.alert("Incorrect password, please try again.");
    }
}

