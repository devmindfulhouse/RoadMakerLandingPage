const errorModal = document.querySelector(".modal__error");
const closeErrorModalButton = document.querySelector("#close__modal__error");
const loadingModal = document.querySelector(".loading__modal");

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
  const modal = document.querySelector("#modal__contact");

  const closeModalButton = document.querySelector("#close__modal__contact");

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
      modal.showModal();
      animateModal(modal);
      loadingModal.close();
    })
    .catch((err) => console.error(err));

  if (modal) {
    closeModalButton.addEventListener("click", () => {
      modal.close();
    });
  }
}
