document.getElementById("ensemble_image").style.right='100%'//centre l'image du milieu dans le div "fenetre"


function desactive(){//desactive l'effet de zoom des images ainsi que la flèche

    //zoom
    let slide = document.getElementById("ensemble_image")

    let DOM=slide.children

    for (let i = 0; i < 3; i++){

        DOM[i].setAttribute("class","image_slide")
    }

    //bouton
    let fleche = document.getElementsByClassName("fleche")

    for (let i = 0; i < 2; i++){

        fleche[i].setAttribute("onclick","")
    }

}

function active(){//active l'effet de zoom sur les images ainsi que la flèche

    //zoom
    let slide= document.getElementById("ensemble_image")

    let DOM=slide.children

    for (let i = 0; i < 3; i++){

        DOM[i].setAttribute("class","image_slide zoom")
    }

    //bouton
    let fleche = document.getElementsByClassName("fleche")

    fleche[0].setAttribute("onclick","gauche()")
    fleche[1].setAttribute("onclick","droite()")
}

function ordre_droite(){

    let slide= document.getElementById("ensemble_image")

    let DOM=slide.children

    let debut=DOM[0]

    slide.appendChild(debut)
}

function droite(){

    desactive()

    let slide= document.getElementById("ensemble_image")

    let position="100%"

    let position_prochaine='200%'

    //objet définissant l'animation à faire. Pour la synthaxe, voir CSS : transform
    let mouvement = [
        { right:position},
        { right:position_prochaine }
    ]

    //objet définissant la durée de l'animation (en ms) et son comportement
    let timing = {
        duration: 500,
        easing: "linear",//fait l'animation de manière régulière
        fill: "none"//mode fill de base: retourne à la position de base
    }

    //ligne lancant l'animation sur l'objet DOM selectionné
    slide.animate(
        mouvement,
        timing
    );

    setTimeout(ordre_droite,500)
    setTimeout(active,500)

}

function ordre_gauche(){

    let slide= document.getElementById("ensemble_image")

    let DOM=slide.children

    let fin=DOM[2]

    slide.insertBefore(fin,DOM[0])
}

function gauche(){

    desactive()

    let slide= document.getElementById("ensemble_image")

    let position="100%"

    let position_prochaine='0%'

    //objet définissant l'animation à faire. Pour la synthaxe, voir CSS : transform
    let mouvement = [
        { right:position},
        { right:position_prochaine }
    ]

    //objet définissant la durée de l'animation (en ms) et son comportement
    let timing = {
        duration: 500,
        easing: "linear",//fait l'animation de manière régulière
        fill: "none"//mode fill de base: retourne à la position de base
    }

    //ligne lancant l'animation sur l'objet DOM selectionné
    slide.animate(
        mouvement,
        timing
    );

    setTimeout(ordre_gauche,500)
    setTimeout(active,500)

}


function test(){
    
    desactive()
}