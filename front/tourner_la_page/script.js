/**
 * 
 * Doit permettre, à la détection d'un marqueur, 
 * de décider de la page à afficher.
 * 
 * Puis, lorsque fait, aller chercher ladite page et
 * la rendre au niveau du marqueur
 * 
 * Il y aura X marqueurs, divisés en :
 *  - pair / impair (gauche / droite)
 *  - Couple 1
 *  - Couple 2
 *  - Couple 3
 * 
 * Lorsque l'on quitte couple 1 pour arriver sur couple 2
 * on tourne la page pour avancer.
 * Si on arrive à couple 3 on recule.
 * 
 * Idem pour couple 2 vers, respectivement, 3 et 1.
 * Idem pour couple 3 vers, respectivement, 1 et 2.
 * 
 * Il y aura aussi 4 marqueurs pour les 4 pages de couverture.
 * Il faudra donc trouver les infos.
 * 
 */


// Créer event perso
var markerPopInEvent = new Event('markerPopIn');

/**
 * 
 * Il y a deux manières : on peut faire un event isVisible, qui trigger PopIn 
 * si jamais il y a eu changement d'anim (retenir dernière anim visible)
 * 
 * Ou bien un seul event qui fait toute la logique
 * 
 */
if(document.querySelector("a-marker").object3D.visible == true) {   //
    trigger('markerPopIn')
}

artoolkitMarker.addEventListener('markerFound', function (event) {   // Three js
    // ...
})
