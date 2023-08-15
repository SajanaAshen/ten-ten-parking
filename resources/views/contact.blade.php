@extends('layouts.main')

@section('content')
<?php
if (isset($_POST['username'])) {
    $errors = '';
    if (!isset($_POST['username']) || empty($_POST['username'])) {
        $errors .= 'Name field is required. ';
    }
    if (!isset($_POST['phone']) || empty($_POST['phone'])) {
        $errors .= 'Phone field is required. ';
    }
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors .= 'Email field is required';
    }
    if (!isset($_POST['drop_off_date']) || empty($_POST['drop_off_date'])) {
        $errors .= 'Drop off date field is required. ';
    }
    if (!isset($_POST['pickup_date']) || empty($_POST['pickup_date'])) {
        $errors .= 'Pickup field is required. ';
    }
    if (!isset($_POST['message']) || empty($_POST['message'])) {
        $errors .= 'Message field is required. ';
    }

    if ($errors == '') {
        $recaptcha_secret = '6LdDBuwlAAAAAB6-mIzlG-BqpEcmCV46fLpy3pO7';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);

        if ($curl_response == false) {
            die("Error: " . curl_error($curl));
        }

        $json_response = json_decode($curl_response, true);

        if ($json_response["success"] == true && $json_response["score"] >= 0.5) {
            try {
                $to = "info@tentenparking.co.uk";
                $subject = "New enquiry";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $msg = "Name: " . $_POST['username'];
                $msg .= "<br>Phone: " . $_POST['phone'];
                $msg .= "<br>Email: " . $_POST['email'];
                $msg .= "<br>Drop off date: " . $_POST['drop_off_date'];
                $msg .= "<br>Pickup date: " . $_POST['pickup_date'];
                $msg .= "<br>Message: " . $_POST['message'];
                mail($to, $subject, $msg, $headers);
                $message = '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
            } catch (\Throwable $th) {
                $message = '<div class="alert alert-danger" role="alert">Something went wrong... Please try again later.</div>';
            }
        } else {
            $message = '<div class="alert alert-danger" role="alert">The reCAPTCHA verification failed. Please try again</div>';
        }
    }else{
        $message = '<div class="alert alert-danger" role="alert">'.$errors.'</div>';
    }
}
?>
        <!-- Page Title -->
        <section class="page-title">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-section -->
        <section class="contact-section mb-5">
            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                            <div class="inner-box" style="background-image: url(assets/images/background/contact-1.jpg);">
                                <div class="inner">

                                    <div class="single-item">
                                        <div class="icon-box"><img src="assets/images/icons/icon-54.png" alt=""></div>
                                        <h4>Quick Contact</h4>
                                        <p><a href="tel:07518402614">07518402614</a><br /><a href="mailto:info@tentenparking.co.uk">info@tentenparking.co.uk</a></p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><img src="assets/images/icons/icon-55.png" alt=""></div>
                                        <h4>Off.Hours</h4>
                                        <p>Monday - Satday: 9am to 6.30pm <br />Sunday: Holiday</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="sec-title light">
                                    <h2>Send your enquiry</h2>
                                    <p>Complete the enquiry form & we will be in touch as soon as possible.</p>
                                </div>
                                <?php
                                if (isset($_POST['username'])) {
                                    echo $message;
                                }
                                ?>

                                <form method="post" action="" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="username" placeholder="Your Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone" required="" placeholder="Phone">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label for="">Email Address</label>
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="">Drop off Date</label>
                                            <input type="date" name="drop_off_date" placeholder="Drop off date" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="">Pickup Date</label>
                                            <input type="date" name="pickup_date" required="" placeholder="Pickup date">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label for="">Message</label>
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" data-sitekey="6LdDBuwlAAAAAN4KOXg8R6mz-25s8R6uQGV1iVJB" data-callback='onSubmit' class="theme-btn g-recaptcha" name="submit-form">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script>
            function onSubmit(token) {
                // submit the form to the server
                document.getElementById("contact-form").submit();
            }

            grecaptcha.ready(function() {
                grecaptcha.execute('6LdDBuwlAAAAAN4KOXg8R6mz-25s8R6uQGV1iVJB', {
                    action: 'submit'
                }).then(function(token) {
                    // add the token to the form before submitting it
                    document.getElementById("g-recaptcha-response").value = token;
                });
            });
        </script>
        <!-- contact-section end -->

@endsection

@push('scripts')
        <!-- map script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/map-helper.js"></script>
@endpush

@push('header')
<script src="https://www.google.com/recaptcha/api.js?render=6LdDBuwlAAAAAN4KOXg8R6mz-25s8R6uQGV1iVJB"></script>
@endpush