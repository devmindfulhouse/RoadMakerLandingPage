const consentModal = document.querySelector("#modal__consent");


const acceptButton = document.querySelector("#accept-ga");
const declineButton = document.querySelector("#decline-ga");

// Fonction pour afficher la boîte de dialogue modale de consentement
function showConsentModal() {
    consentModal.showModal();
    animateModal(consentModal);

}

// Gérer le clic sur le bouton "Accepter"
acceptButton.addEventListener("click", () => {
    // Activer Google Analytics
    var gaScript = document.createElement("script");
    gaScript.text =
        "(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WH5QRF83');";
    document.head.insertAdjacentElement("afterbegin", gaScript);

    // Ajouter la balise noscript pour Google Tag Manager
    var gaNoScript = document.createElement("noscript");
    gaNoScript.innerHTML =
        "<iframe src='https://www.googletagmanager.com/ns.html?id=GTM-WH5QRF83' height='0' width='0' style='display:none;visibility:hidden'></iframe>";


    consentModal.close(); // Fermer la boîte de dialogue modale

});


declineButton.addEventListener("click", () => {
    // Désactiver Google Analytics
    consentModal.close();

});

// Afficher la boîte de dialogue modale de consentement au chargement de la page
window.addEventListener("DOMContentLoaded", showConsentModal);