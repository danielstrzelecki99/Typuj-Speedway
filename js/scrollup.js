const scrollupButton = document.getElementById("scrollup")

scrollupButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
})