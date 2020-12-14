<?php 
    include 'header.php'; 
?>

</section>
    <div class="contact-form section-gap pt-5" id="contact">
        <div class="container py-lg-5 py-md-4">


            <div class="contacts12-main mb-5">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                    <div class="main-input">
                        <div class="d-grid">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Full Name" class="contact-input">
                            <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone Number" class="contact-input">
                        </div>
                        <div class="d-grid">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder=" Email Address" class="contact-input" required="">
                            <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject" class="contact-input">
                        </div>
                    </div>
                    <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage" placeholder="Leave your message" required=""></textarea>
                    <div class="text-right">
                        <button class="btn btn-secondary btn-theme2">Submit</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-address">
                                <ul>
                                    <li class="icon-color"><span class="fa fa-map-marker"></span> <span>Jhapa, Province No 1
                                         <br>Nepal</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="contact-address">
                                <ul>
                                    <li class="icon-color"><span class="fa fa-phone"></span> <span><a class="" href="tel:+(977) 9860110011">Phone :+(977) 9860110011</a>
                                    <a class="" href="tel:+(977) 9860110011">Fax :+(977) 986011011</a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                            <div class="contact-address">
                                <ul>
                                    <li class="icon-color"><span class="fa fa-mail-reply"></span><span>
                                     <a href="mailto:belbari@smartfarmsupport.com"> belbari@smartfarmsupport.com</a>
                                     <a href="mailto:belbarismartfarm@gmail.com"> belbarismartfarm@gmail.com</a>
                                 </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section>
    
<?php 
    include 'footer.php'; 
?>

