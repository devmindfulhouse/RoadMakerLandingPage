// Sélectionner les modales
const errorModal = document.querySelector(".modal__error");
const closeErrorModalButton = document.querySelector("#close__modal__error");
const loadingModal = document.querySelector(".loading__modal");
const consentModal = document.querySelector("#modal__consent");

// Sélectionner les boutons de la modale de consentement
const acceptButton = document.querySelector("#accept-ga");
const declineButton = document.querySelector("#decline-ga");

// Sélectionner les éléments de la modale de contact
const contactModal = document.querySelector("#modal__contact");
const closeContactModalButton = document.querySelector("#close__modal__contact");

//let pour date d'expiration du cookie
let expiryDate = new Date();

// Fonction d'animation pour les modales
function animateModal(modal) {
    modal.animate(
        [
            { opacity: 0, transform: "scale(0.7)" },
            { opacity: 1, transform: "scale(1)" },
        ],
        {
            duration: 300,
            easing: "ease-out",
        }
    );
}

// Fonction pour afficher la boîte de dialogue modale de consentement
function showConsentModal() {
    //Permet de récupéer la valeur du cookie consentCookies si elle existe
    const consentValue = document.cookie.split(";").find((cookie) => cookie.trim().startsWith("consentCookies="))?.split("=")[1];

    if (consentValue === "true") {
        loadGoogleTagManager();
    } else if (consentValue !== "true") {
        consentModal.showModal();
        animateModal(consentModal);
    }
}

function loadGoogleTagManager() {
    const gaScript = document.createElement("script");
    gaScript.text = "(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WH5QRF83');";
    document.head.prepend(gaScript);

    const gaNoScript = document.createElement("noscript");
    gaNoScript.innerHTML = "<iframe src='https://www.googletagmanager.com/ns.html?id=GTM-WH5QRF83' height='0' width='0' style='display:none;visibility:hidden'></iframe>";
    document.body.prepend(gaNoScript);
}

acceptButton.addEventListener("click", () => {
    expiryDate.setMonth(expiryDate.getMonth() + 13);
    document.cookie = `consentCookies=true; expires=${expiryDate.toUTCString()}; path=/`;
    loadGoogleTagManager();
    consentModal.close();
});


declineButton.addEventListener("click", () => {
    expiryDate.setMonth(expiryDate.getMonth() + 13);
    document.cookie = `consentCookies=false; expires=${expiryDate.toUTCString()}; path=/`;
    consentModal.close();

});


window.addEventListener("DOMContentLoaded", showConsentModal);

// Fonction pour envoyer un email
function sendEmail(e) {
    e.preventDefault();
    var params = {
        from_name: document.getElementById("name").value,
        name: document.getElementById("name").value,
        subject: document.getElementById("subject").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
        reply_to: document.getElementById("email").value,
    };

    const serviceID = "service_qs8497q";
    const templateID = "template_odukf0c";

    loadingModal.showModal();
    animateModal(loadingModal); // Animer le modal de chargement
    document.body.style.overflow = "hidden";

    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            document.getElementById("name").value = "";
            document.getElementById("subject").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
            contactModal.showModal();
            animateModal(contactModal);
            loadingModal.close();
        })
        .catch((err) => console.error(err));

    if (contactModal) {
        document.body.style.overflow = "";
        closeContactModalButton.addEventListener("click", () => {
            contactModal.close();
        });
    }
}