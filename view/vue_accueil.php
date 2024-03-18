
<?php

include_once('view/vue_entete.php')

?>
            <div class="slider--container">
                <img src="assets/imgs/mans_innovation_mans_sonorejpg.jpg" alt="" role="presentation" class="img__slider active">
                <img src="assets/imgs/placeholder.webp" alt="" role="presentation" class="img__slider">
                <img src="assets/imgs/placeholder.webp" alt="" role="presentation" class="img__slider">
                <div class="slider--container__next">
                     <i class="fa-solid fa-circle-chevron-right"></i>
                </div>
                <div class="slider--container__prev">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </div>
                <div class="slider--container__dot">
                    <i class="fa-solid fa-circle slider_dot"></i>
                    <i class="fa-solid fa-circle slider_dot"></i>
                    <i class="fa-solid fa-circle slider_dot"></i>
                </div>
            </div>
            <article class="solution--container py-5" id="solution">
                <h1 class="fw-bolder fs-2  ms-1 text-white d-flex justify-content-center mb-3">La solution</h1>
                <p class="fw-semibold text-white text-wrap mx-3 text-center ">RoadMaker est une solution numérique pour la gamification des parcours d’intégration (onboarding, pré-boarding, formation, teambuilding…).</p>
                <p class="fw-semibold text-white text-wrap mx-3 text-center ">Ces parcours sont destinés à être implémentés pour des managers, des formateurs, des acteurs du développement pédagogique et culturel des territoires entre autres.</p>
                <p class="fw-semibold text-white text-wrap mx-4 text-center ">En outre, la solution RoadMaker est réfléchie pour permettre à ces acteurs de transmettre des informations qualifiées d’une manière ludique, à travers un support numérique (smartphone, tablette) et surtout sans avoir de compétences en programmation ni en développement.</p>

                <div class="d-flex justify-content-center mt-4">
                    <button type="button" class="button__solution bg-white border-0 p-2 text-center rounded rounded-pill fs-6 fw-bold">Réserver une démo</button>
                </div>
            </article>
            <section id="specificities">
                <div class="d-flex flex-column flex-lg-row gap-md-3  px-4 py-5  ">
                    <div class="argument--container__item d-flex flex-column align-items-center text-center">
                        <i class="fa-solid fa-puzzle-piece mb-2 pt-3 "></i>
                        <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Conception de vos propres parcours</h2>
                        <p class="fs-6 fw-normal mb-1 text-wrap mx-2">La mise en place d'une interface simple permet avec des copie/coller ou des glisser/déposer de créer son propre parcours à partir de la localisation GPS ou de scan de QR code.</p>
                    </div>
                    <div class="argument--container__item d-flex flex-column align-items-center text-center">
                        <i class="fa-solid fa-database  mb-2 pt-3 "></i>
                        <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Accès à la data par des tableaux de bord</h2>
                        <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Les utilisateurs ont accès à une interface dédiée pour permettre de créer les parcours et récupérer l'ensemble des informations des participants et usagers.</p>
                    </div>
                    <div class="argument--container__item d-flex flex-column align-items-center text-center">
                        <i class="fa-solid fa-compass mb-2 pt-3 "></i>
                        <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Capter et orienter le public à des fins pédagogiques</h2>
                        <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Les projets pédagogiques générés dans la solution JEMos permettent aux utilisateurs de valider, comprendre, découvrir des informations à partir d'un lieu défini sur la carte.</p>
                    </div>
                    <div class="argument--container__item d-flex flex-column align-items-center text-center">
                        <i class="fa-solid fa-person-rays mb-2 pt-3 "></i>
                        <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Une solution agile pour s'adapter aux utilisateurs</h2>
                        <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Quelque soit l'objectif du créateur de parcours dans la solution JEMos, les nombreuses fonctionnalités de création permettent de répondre aux besoins sans être un expert en informatique.</p>
                    </div>
                </div>
            </section>
            <section class="usage--container my-2 p-2" id="usages">
                <h1 class="text-white fw-bolder text-center my-3 mb-sm-4 fs-2 ">Les premiers usages de la solution RoadMaker </h1>
                <div class="usage--container__pictures d-flex justify-content-around my-2 flex-column flex-lg-row">
                    <div class="usage--container__pictures__item d-flex flex-column align-items-center mb-sm-4">
                        <img src="assets/imgs/CAMPUS-EXPRESS.jpg" alt="" role="presentation" class="rounded-4 w-100 w-lg-50">
                        <h3 class="text-white text-wrap fw-bold text-align-center fs-5 mt-2">Expérimentation Campus Express</h3>
                    </div>
                    <div class="usage--container__pictures__item d-flex flex-column align-items-center">
                        <div class="video--iframe rounded-4 w-100 mt-3 mt-lg-0">
                            <iframe class="rounded-4 w-100 w-lg-50" src="https://www.youtube.com/embed/Lq98waDaXRE?si=GODCznr3r7DPaOgL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <h3 class="text-white text-wrap fw-bold text-center fs-5 mt-2"> Intégration à la bibliothèque universitaire du Mans <br>grâce à RoadMaker </h3>
                    </div>
                </div>
            </section>
            <section class="target--container" id="target_application">
                <h1 class=" fw-bolder text-center my-4 mx-4 fs-2 ">Les secteurs d'applications de la solution RoadMaker</h1>
                <div class="d-flex justify-content-around p-2 mt-3 flex-column flex-lg-row">

                    <div class="target--application__item d-flex flex-column align-items-center text-center">
                        <img src="assets/imgs/workerhouse.jpg" alt="" role="presentation" class="rounded-3  mb-2">
                        <h3 class="fw-bold mb-2 text-wrap mx-2">Formation professionnelle sur site</h3>
                        <p class="fw-normal mb-5 mb-lg-1  text-wrap mx-3">La formation professionnelle est une préoccupation permanente pour maintenir les salariés en veille et le niveau de performance. C'est pourquoi, la mise en place de parcours RoadMaker sur le site va inciter de manière ludique les équipes à prendre de l'information de manière quotidienne.</p>
                    </div>
                    <div class="target--application__item d-flex flex-column align-items-center text-center">
                        <img src="assets/imgs/austincompany.jpg" alt="" role="presentation" class="rounded-3  mb-2">
                        <h3  class="fw-bold mb-2 text-wrap mx-2">Evénementiel d'entreprise</h3>
                        <p class="fw-normal  mb-5 mb-lg-1 text-wrap mx-3">La notion de partage et d'interaction pour ainsi créer un effet de groupe est l'un des atouts de la solution RoadMaker. Ainsi, vous pouvez créer un parcours de team building coopératif pour permettre à vos équipes de créer du lien tout en apportant un contenu pédagogique en lien avec l'entreprise.</p>
                    </div>
                    <div class="target--application__item d-flex flex-column align-items-center text-center">
                        <img src="assets/imgs/industry.jpg" alt="" role="presentation" class="rounded-3  mb-2">
                        <h3  class="fw-bold mb-2 text-wrap mx-2">Sécurité et qualité industrielle</h3>
                        <p class="fw-normal  text-wrap mx-3">La solution RoadMaker va permettre de proposer aux travailleurs de site industriel de créer des parcours d'intégration des salariés pour ainsi mettre en avant les risques sécuritaires le site. En conséquence, c'est une manière ludique d'intégrer le personnel et accélérer sa prise de poste en sécurité.</p>
                    </div>
                </div>
                <div class="d-flex justify-content-around p-2 my-5 flex-column flex-lg-row">
                    <div class="target--application__item d-flex flex-column align-items-center text-center">
                        <img src="assets/imgs/museum.jpg" alt="" role="presentation" class="rounded-3  mb-2">
                        <h3  class="fw-bold mb-2 text-wrap mx-2">Tourisme et lieux culturels</h3>
                        <p class="fw-normal mb-5 mb-lg-1 text-wrap mx-3">Permettre à des visiteurs de s'approprier un lieu de manière ludique en gardant l'aspect pédagogique. Ainsi, il est aussi possible de mettre en avant un site spécifique pour une mise en valeur renforcée.</p>
                    </div>
                    <div class="target--application__item d-flex flex-column align-items-center text-center">
                        <img src="assets/imgs/scholar.jpg" alt="" role="presentation" class="rounded-3  mb-2">
                        <h3  class="fw-bold mb-2 text-wrap mx-2">Education et Pédagogie d'apprentissage</h3>
                        <p class="fw-normal text-wrap mx-3">Les enseignants peuvent utiliser la solution RoadMaker pour apporter une innovation pédagogique et ludique à leurs enseignements. D'autre part c'est un moyen de créer un lien renforcé avec et entre les étudiants.</p>
                    </div>
                </div>
            </section>
            <section class="partners--section py-4" id="partners">
                <h3 class="fw-bold fs-2 text-center text-white pb-4">Ils nous font déjà confiance</h3>
                <div class="d-flex justify-content-around flex-column flex-lg-row mx-4">
                    <div class="d-flex flex-column flex-lg-row gap-lg-5 justify-content-around">
                        <div class="card rounded-3 bg-white mb-2 p-2 h-100 w-100 w-lg-50  partners--container__card">
                            <img src="assets/imgs/le-mans-universite-logo.png" class="img-fluid mx-auto d-block w-100 h-100" alt="...">
                            <div class="card-body text-center fw-bold ">
                                <p class="card-text">Notre partenaire terrain</p>
                            </div>
                        </div>
                        <div class="card rounded-3 bg-white mb-2 p-2 h-100 w-100 w partners--container__card">
                            <img src="assets/imgs/PEPS.png" class="img-fluid mx-auto d-block  w-100 h-100" alt="...">
                            <div class="card-body text-center fw-bold ">
                                <p class="card-text">Notre première récompense</p>
                            </div>
                        </div>
                        <div class="card rounded-3 bg-white mb-2 p-2 h-100 w-100 w-lg-50 partners--container__card text-center">
                            <img src="assets/imgs/ccc.png" class="img-fluid mx-auto d-block  w-75 h-100" alt="...">
                            <div class="card-body text-center fw-bold">
                                <p class="card-text">Notre partenaire institutionnel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="d-flex flex-column align-items-center my-4">
                    <div class="contact--container__header text-center mb-3">
                        <h1 class="fw-bold text-center fs-2">Contactez-nous</h1>
                        <p class="fs-6 text-center text-wrap mx-3">Pour tout complément d'information ou question, n'hésitez pas à nous envoyer un message avec vos cordonnées. Notre équipe vous contactera rapidement</p>
                    </div>
                    <form action="" class="contact--container__form w-75 d-flex flex-column rounded-3 " onsubmit="sendEmail(event)">
                        <div class="">
                            <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                <label for="name" class="text-white fw-bold mb-2">Nom :</label>
                                <input type="text" name="name" id="name" placeholder="Votre nom" class="w-100 p-2 rounded-4 border-0 " required>
                            </div>
                            <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                <label for="email" class="text-white fw-bold mb-2">Email :</label>
                                <input type="email" name="email" id="email" placeholder="Votre email"  class="w-100 p-2 rounded-4 border-0  "required>
                            </div>
                            <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                <label for="subject" class="text-white fw-bold mb-2">Sujet du mail :</label>
                                <input type="text" name="subject" id="subject" placeholder="Votre sujet"  class="w-100 p-2 rounded-4 border-0 "required>
                            </div>
                            <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                <label for="message" class="text-white fw-bold mb-2">Message :</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"  class="w-100 p-2 rounded-4 border-0 "required></textarea>
                            </div>
                        </div>
                        <div class="contact--container__button d-flex justify-content-center mb-3">
                            <button type="submit" class="button__contact text-white border-0 py-2 px-5 rounded-pill fs-6 fw-semibold " id="openModal">Envoyer</button>
                        </div>
                    </form>
                </div>
            </section>

            <!--Loading Modal-->
            <dialog class="loading__modal justify-content-center align-items-center flex-column rounded-4 text-center" id="loading__modal">

                    <div class="loading__modal__header">
                        <img src="assets/imgs/Dual Ring-1s-200px.gif" alt="" role="presentation">

                    </div>
                    <div class="loading__modal__body d-flex flex-column align-items-center text-wrap m-auto p-auto">
                        <h1 class="fs-5 fw-bold">Envoi en cours</h1>
                    </div>

            </dialog>

            <!-- Modal contact -->
            <dialog class="modal__contact justify-content-center align-items-center flex-column rounded-4 text-center" id="modal__contact">
                <div class="icon__modal__contact">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="modal__contact__header">
                    <h1 class="fs-2 fw-bold ">Message envoyé</h1>
                </div>
                <div class="modal__contact__body d-flex flex-column align-items-center text-wrap m-auto p-auto">
                    <p class="">Votre message a bien été envoyé. Nous vous recontacterons dans les plus brefs délais.<br>Un email récapitulatif de votre demande à été envoyé à l'adresse que vous nous avez communiqué.</p>
                </div>
                <div class="modal__contact__footer">
                    <button class="modal__contact__footer__button fw-semibold  text-white border-0 rounded-pill px-4 py-2 fs-6  mb-2" id="close__modal__contact">Fermer</button>
                </div>
            </dialog>

<?php

include_once('view/vue_footer.php')

?>




            <!--<button id="back-to-top" title="Back to the top" class="position-fixed  justify-content-center text-center p-2"><i class="fa-solid fa-arrow-up"></i></button>-->
            <script src="assets/js/app.js"></script>
            <script src="assets/js/sendEmail.js"></script>
            <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            </script>
            <script type="text/javascript">
            (function(){
                emailjs.init("FQqiYv2tNHs-Gfnz7");
            })();
            </script>
        </body>
    </html>