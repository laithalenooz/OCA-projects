@extends('layout.publicmain')
@section('content')
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact With Us</h1>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Contact Page Area Start Here -->
        <section class="contact-page-wrap">
            <div class="contact-box-left">
                <div class="container">
                    <div class="section-heading heading-dark">
                        <h3 class="item-heading-big">About Us</h3>
                    </div>
                    <p>Foodacity is a recipe blog written by passionate Chefs and kitchen lovers. Since its existence it has covered such diverse subjects.
                        Interested in working with us? Occasionally we create sponsored posts for brands that are a good fit for Foodacity. We’re also available for recipe development & photography. Send us a quick email for more info!
                        And by the way, this blog is for anyone who loves to cook!</p>
                    <div class="contact-address">
                        <ul>
                            <li>
                                <div class="item-icon"><i class="fas fa-map"></i></div>
                                Amman, Jordan - 18111
                            </li>
                            <li>
                                <div class="item-icon"><i class="far fa-envelope"></i></div>
                                info@foodacity.com
                            </li>
                            <li>
                                <div class="item-icon"><i class="fas fa-phone"></i></div>
                                +962 7777 000, +962 7777 011
                            </li>
                            <li>
                                <div class="item-icon"><i class="fas fa-fax"></i></div>
                                +9856000, +9856010
                            </li>
                        </ul>
                    </div>
                    <div class="section-heading heading-dark">
                        <h3 class="item-heading-big">Send Us Message</h3>
                    </div>
                    <form class="contact-form-box" action="https://submit-form.com/kpxNoNbF" target="_self">
                        <input
                            type="hidden"
                            name="_redirect"
                            value="http://127.0.0.1:8000/submit-recipe"
                          />
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Name *" class="form-control" name="name" data-error="Name field is required"
                                    required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" placeholder="E-mail *" class="form-control" name="email" data-error="E-mail field is required"
                                    required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" placeholder="Subject *" class="form-control" name="subject"
                                    data-error="Subject field is required" required>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Type your text" class="textarea form-control" name="message" id="form-message"
                                    rows="7" cols="20" data-error="Message field is required" required></textarea>
                            </div>
                            <div class="col-12 form-group mb-0 mt-3">
                                <input type="submit" class="item-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-box-right">
                <div class="google-map-wrap-layout1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433870.82677449274!2d35.66744179477717!3d31.835453336764523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2sAmman!5e0!3m2!1sen!2sjo!4v1609513993470!5m2!1sen!2sjo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <!-- Contact Page Area End Here -->
@endsection
