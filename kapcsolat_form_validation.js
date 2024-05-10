function ellenoriz() {
    var rendben = true;
    var fokusz = null;

    var szoveg = document.getElementById("szoveg");
    if (szoveg) {
        if (szoveg.value.length == 0) {
            rendben = false;
            szoveg.style.border = '2px solid #f99';
            fokusz = szoveg;
        } else {
            szoveg.style.border = '2px solid #9f9';
        }
    }

    var email = document.getElementById("email");
    if (email) {
        var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (!checkPattern.test(email.value)) {
            rendben = false;
            email.style.border = '2px solid #f99';
            fokusz = email;
        } else {
            email.style.border = '2px solid #9f9';
        }
    }

    var nev = document.getElementById("nev");
    if (nev) {
        if (nev.value.length < 8) {
            rendben = false;
            nev.style.border = '2px solid #f99';
            fokusz = nev;
        } else {
            nev.style.border = '2px solid #9f9';
        }
    }

    if (fokusz) {
        fokusz.focus();
    }

    return rendben;
}
