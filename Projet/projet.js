function zoom(image) {//permet de rendre les images full-screenable
    image.requestFullscreen()
}

// Add event listener on keypress
document.addEventListener('keypress', (event) => {

    if (event.code == "KeyQ") {
        let img = document.getElementById("precedent")
        let precedent = img.parentElement.href

        document.location.href = precedent
    }
    if (event.code == "KeyW") {
        let img = document.getElementById("suivant")
        let suivant = img.parentElement.href

        document.location.href = suivant
    }

}, false);