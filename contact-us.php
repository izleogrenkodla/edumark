<?php 

        $title ='Contact Us - Alaknanda EduMark - The Enrolment Specialist';

        require'include/head.php';

?>



        <!-- Contact Form -->
        <div id="contact" class="soft-contact-form-area event-contact-form-area event-speaker-area pt-100 pb-70">
            <div class="speaker-shape">
                <img src="assets/img/event/speaker/shape1.png" alt="Shape">
                <img src="assets/img/event/speaker/shape2.png" alt="Shape">
            </div>
            <div class="container">
                <div class="seo-section-title">
                                
                                <h2> Get in touch </h2>
                </div>
                <form action="contact-mail.php" method="POST" class="contact-validation-active">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name"  class="form-control" required data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="email" name="email"  class="form-control" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" name="mobile"  required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                         <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" name="quote"  required data-error="Please enter your quote" class="form-control" placeholder="Get a Free Strategy">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                       <!--  <div class="col-sm-6 col-lg-6">

                            <div class="form-group">
                                <input type="text" name="msg_subject" iclass="form-control" required data-error="Please enter your quote" placeholder="Get a Free Strategy">
                                <div class="help-block with-errors"></div>
                            </div>                    

                        </div> -->


                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        


                        <div class="col-md-12 col-lg-12 text-center">
                            <button type="submit" value="Send" class="soft-contact-btn btn" > SEND MESSAGE </button>

                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- End Contact Form -->
         <!-- Subscribe -->
            <div class="export-subscribe-area">
                <div class="subscribe-shape">
                    <img src="assets/img/event/subscribe-shape.png" alt="Shape">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="subscribe-item">
                            <h2>We are a ROI-focused and data-driven team providing you with Industry leading strategies.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Subscribe -->

        <!-- Map -->
        <div class="event-map-area">
            <div class="container-fluid p-0">

                <iframe  id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.4968243463927!2d80.26959041430523!3d13.067668616299942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526616641e0f61%3A0x2e78122a989c14a!2sAlakananda%20Advertising%20Channai!5e0!3m2!1sen!2sin!4v1591108965509!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </div>
        <!-- End Map -->



        <script type="text/javascript">
            
            function myAlert(){

                alert("Thank You !!");
            }
        </script>



<?php

    require'include/foot.php';
?>