function showContent() {
    element = document.getElementById("datosEnvio");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display='none';
    }
    else {
        element.style.display='Block';
    }
}