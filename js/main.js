function showCommitteeQuestions(type) {
    var element = document.getElementById(type);
    clearQuestions();
    element.style.display = 'block';
    element.style.setProperty('animation-name', 'appear');
    var textarea =element.getElementsByTagName('textarea');
    for(var j=0 ; j<textarea.length; j++){
        textarea[j].disabled=false;
        textarea[j].required=true;
    }
}

function clearQuestions() {
    var element = document.getElementsByClassName("comQuestions");
    for (var i = 0; i < element.length; i++) {
        element[i].style.display = 'none';
        element[i].style.setProperty('animation-name', '');
    }
    var textarea = document.getElementsByTagName('textarea');
    for (var j = 0; j < textarea.length; j++) {
        textarea[j].value = "";
        textarea[j].disabled = true;
        textarea[j].required = false;
    }
}
