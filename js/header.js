document.getElementById("header_iconMenu").addEventListener("click", ()=> {
    document.getElementById("header_iconMenu").style.display = "none"
    document.getElementById("header_closeIcon").style.display = "block"
    document.getElementById("mobileMenu").style.display = "block"
})

document.getElementById("header_closeIcon").addEventListener("click", ()=> {
    document.getElementById("header_iconMenu").style.display = "block"
    document.getElementById("header_closeIcon").style.display = "none"
    document.getElementById("mobileMenu").style.display = "none"
})