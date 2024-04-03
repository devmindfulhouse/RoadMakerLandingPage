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

window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }

function showConsentModal() {
    // Récupérer la valeur du cookie consentCookies si elle existe
    const consentValue = document.cookie.split(";").find((cookie) => cookie.trim().startsWith("consent="))?.split("=")[1];

    if (consentValue === "accepted") {
        loadGoogleTagManager();
    } else {
        consentModal.showModal();
        animateModal(consentModal);

        // Ajouter des écouteurs d'événements aux boutons d'acceptation et de refus
        const acceptButton = document.querySelector("#accept-ga");
        const declineButton = document.querySelector("#decline-ga");

        acceptButton.addEventListener("click", () => {
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'analytics_storage': 'granted'
            });
            consentModal.close();

            document.cookie = "consent=accepted; path=/";

            window.dataLayer.push({ 'event': 'consent_given' });

            loadGoogleTagManager();
        });

        declineButton.addEventListener("click", () => {
            gtag('consent', 'update', {
                'ad_storage': 'denied',
                'ad_user_data': 'denied',
                'ad_personalization': 'denied',
                'analytics_storage': 'denied'
            });
            consentModal.close();

            document.cookie = "consent=denied; path=/";

            window.dataLayer.push({ 'event': 'consent_denied' });
        });
    }
}

function loadGoogleTagManager() {
    // Définir le consentement par défaut à 'denied'
    gtag('consent', 'default', {
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied',
        'analytics_storage': 'denied'
    });


    var gtagScript = document.createElement('script');
    gtagScript.async = true;
    gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-XRVLXRSCPX';

    var firstScript = document.getElementsByTagName('script')[0];
    firstScript.parentNode.insertBefore(gtagScript,firstScript);

}



// Appeler la fonction showConsentModal lorsque le DOM est complètement chargé
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