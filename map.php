<?php
include('carte.php');
session_start();
if (!isset($_SESSION['email'])) {
    header("location:../user/login.php");
}
?>
<div class="l">
    <div class="ll">
        <h3> Carte </h3>
        <div id="maCarte"></div>
    </div>
</div>

<!-- Fichiers Javascript -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<script>
    // On initialise la carte
    var carte = L.map('maCarte').setView([36.161, 1.32], 10);

    // On charge les "tuiles"
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        minZoom: 1,
        maxZoom: 20
    }).addTo(carte);

    let xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = () => {
        // La transaction est terminée ?
        if (xmlhttp.readyState == 4) {
            // Si la transaction est un succès
            if (xmlhttp.status == 200) {
                // On traite les données reçues
                let donnees = JSON.parse(xmlhttp.responseText)

                // On boucle sur les données (ES8)

                console.log(donnees.length)

                Object.entries(donnees.agences).forEach(agence => {
                    // On crée un marqueur pour l'agence
                    let marker = L.marker([agence[1].latitude, agence[1].longitude]).addTo(carte)
                    marker.bindPopup(agence[1].name)

                })
            } else {
                console.log(xmlhttp.statusText);
            }
        }
    }

    xmlhttp.open("GET", "liste.php");

    xmlhttp.send(null);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(carte);
    }

    carte.on('click', onMapClick);
</script>
</body>

</html>