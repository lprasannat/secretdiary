function validateFirstName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter first name');
    }
    /*else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }*/
    else {
       textbox.setCustomValidity('');
    }
    return true;
}
function validateLastName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter last name');
    }
    /*else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }*/
    else {
       textbox.setCustomValidity('');
    }
    return true;
}
function validateUserName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter user name');
    }
    /*else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }*/
    else {
       textbox.setCustomValidity('');
    }
    return true;
}

function validateEmail(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Required email address');
    }
    else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
       textbox.setCustomValidity('');
    }
    return true;
}
function validatePassword(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter password');
    }
    else if ((textbox.value.length)!=13){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
       textbox.setCustomValidity('');
    }
    return true;
}


