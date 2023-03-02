<?php
include "./head.php";
include "./header.php";
?>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Me contacter</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adresse:</h4>
                            <p>6 Rue François Robillard | 28110, Lucé</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>E-mail:</h4>
                            <p><a href="mailto:arthur.felix160@gmail.com">arthur.felix160@gmail.com</a></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Appeler moi:</h4>
                            <p><a href="tel:0652823331">06.52.82.33.31</a></p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Chargement...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

<?php
include "./footer.php";
?>