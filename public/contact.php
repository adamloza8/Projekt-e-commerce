<?php require_once("../resources/config.php"); ?>



<?php include(TEMPLATE_FRONT .  "/header.php");?>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Skontaktuj się z nami</h2>
                    <h3 class="section-subheading bg-danger"><?php display_message() ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form name="sentMessage" id="contactForm" method="post">
                    <?php

                    if(isset($_POST['submit'])) {
                        $to = "email@address.com";
                        $from_name = $_POST['name'];
                        $subject = $_POST['subject'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        $headers = "From: {$from_name} {$email}";

                        $send_email = mail($to, $subject, $message, $headers);

                        if(!$send_email) {
                            set_message('Błąd!');
                            redirect('contact.php');
                        } else {
                            set_message('Wysłano!');
                            redirect('contact.php');
                        }
                    }


                    ?>
                        <div class="row">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Twoje imię *" id="name" required data-validation-required-message="Proszę podać swoje imię.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Twój adres e-mail *" id="email" required data-validation-required-message="Proszę wprowadzić swój adres e-mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Twój temat *" id="phone" required data-validation-required-message="Proszę wprowadzić temat.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Twoja wiadomość *" id="message" required data-validation-required-message="Proszę wprowadzić wiadomość."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="submit" class="btn btn-xl">Wyślij wiadomość</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php include(TEMPLATE_FRONT .  "/footer.php");?>
