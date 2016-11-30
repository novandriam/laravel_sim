function enableNextInput(field) {
    var form = field.form,
        i,
        nextElement;
    for (i = 0; i < form.elements.length; i += 1) {
        if (form.elements[i] === field) {
            nextElement = form.elements[i + 1];
            if (nextElement.type !== 'submit') {
                nextElement.focus();
            } else {
                // If using ajax
                // do ajax submission ...
                // then clear existing fields, and focus the first field
                // form.elements[0].focus();
 
                // If not using ajax, submit by clicking the submit button
                nextElement.click();
            }
        }
    }
    return false;
}
function pickingKeyHandler(evt) {
    evt = evt || event;
    var charCode = evt.charCode || evt.keyCode,
        targ = evt.target || evt.srcElement;
 
    // allow all keypresses to occur, except for the Enter key
    if (charCode !== 13) {
        return;
    }
 
    // When the Enter key has been pressed
    return enableNextInput(targ);
}
function init(form) {
    form.elements[0].focus();
    form.onkeypress = pickingKeyHandler;
    document.getElementsByName('submit')[0].parentNode.style.display = 'none';
}
var form = document.getElementById('picking');
init(form);