    <?php

    include_once 'view/vue_entete.php';

    ?>

    <div class="main-content">
        <section class="event_offer--container">
            <h1 class="fw-bolder text-center my-3 mb-5 mb-md-5 fs-2">Notre offre pour l'événementiel d'entreprise et l'onboarding</h1>

            <div class="text-center my-5 mx-3 mx-md-0">
                <p>
                    RoadMaker est une solution digitale permettant de gamifier vos processus d’intégration, vos événements d’entreprise et vos formations.
                    Cette plateforme intuitive et facile à utiliser offre un large éventail de fonctionnalités.
                </p>
                <p>
                    Choisir RoadMaker, c’est renforcer la motivation et l’engagement de vos employés,
                    améliorer l’efficacité des événements et des formations, favoriser la cohésion d’équipe et le sentiment d’appartenance.
                </p>
                <p >
                    Idéal pour les entreprises désireuses de moderniser leurs pratiques et d'offrir des expériences d'apprentissage interactives et engageantes,
                    RoadMaker contribue à fidéliser et à motiver les collaborateurs tout en optimisant les résultats en termes d'apprentissage,
                    de performance et d'engagement. Demandez votre démo gratuite dès aujourd'hui et découvrez comment RoadMaker peut transformer vos initiatives d'entreprise !
                </p>
            </div>

            <div class="videos--event--container d-flex flex-column flex-lg-row gap-3 align-items-center justify-content-around my-3 my-lg-0">
                <div class="video--event--container--item d-flex flex-column justify-content-center align-items-center ">
                    <iframe src="https://www.youtube-nocookie.com/embed/znzft3dg71M?si=3roXZzk6HrvIXkwR"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" class="video--education" allowfullscreen>
                    </iframe>
                    <h3 class="fw-bold fs-5 text-center mx-5 mx-lg-0 mb-5">RoadMaker pour vos parcours d'intégration</h3>
                </div>
                <div class="video--event--container--item d-flex flex-column justify-content-center align-items-center mx-3 mx-lg-0">
                    <iframe  src="https://www.youtube-nocookie.com/embed/WXOEMKQKqA8?si=fcrBLk20RyusGd1o"
                             title="YouTube video player" frameborder="0"
                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                             referrerpolicy="strict-origin-when-cross-origin" class="video--education" allowfullscreen>

                    </iframe>
                    <h3 class="fw-bold fs-5 text-center mx-5 mx-lg-0 mb-5">RoadMaker pour vos parcours de formation</h3>
                </div>
            </div>
            <div class="d-flex  flex-column my-4">
                <strong class="mb-5 text-center">
                    Demandez votre démo gratuite dès aujourd'hui et découvrez comment RoadMaker peut transformer vos activités !
                </strong>
                <div class="d-flex flex-row align-items-center justify-content-center mb-sm-5 mb-md-0 gap-3">
                    <a href=""
                       class="button__reservation text-white border-0 py-3 px-4 rounded-2 fs-6 fw-semibold w-25  text-center text-decoration-none mb-5 "
                       role="button"
                       onclick="Calendly.initPopupWidget({url: 'https://calendly.com/mindful-house-contact?primary_color=00b6f0'});return false;">
                        Réservez une démo
                    </a>
                    <a href="index.php#contact"
                       class="button__reservation text-white border-0 py-3 px-4 rounded-2 fs-6 fw-semibold w-25 text-center text-decoration-none mb-5 "
                       role="button">
                        Nous contacter
                    </a>
                </div>
            </div>
        </section>
        <div class="back_to_last_page--container">
            <a href="index.php?section=index#offer" class="back_to_last_page--link d-flex justify-content-center align-items-center text-decoration-none">
                <div class="back_to_last_page--icon d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <span class="fw-bold ms-2">Retour</span>
            </a>
        </div>
    </div>

    <?php

    include_once('view/vue_footer.php');

    ?>