function montre(calque){
        var el = document.getElementById(calque);
        el.style.display = (!el.style.display || el.style.display == "none") ? "block" : "none";
}