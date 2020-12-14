<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>

<section class="w3l-footer-29-main">
    <div class="footer-29">
        <div class="container">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span> Jhapa-01, Nepal</p>
                        </li>
                        <li><a href="tel:+977-9860110011"><span class="fa fa-phone"></span> +977 9860110011</a></li>
                        <li><a href="mailto:belbari@smartfarmsupport.com<" class="mail"><span class="fa fa-envelope-open-o"></span> belbari@smartfarmsupport.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
                
                <div class="footer-list-29 footer-2">
                    <h6 class="footer-title-29">Maps</h6>
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="220" id="gmap_canvas" src="https://maps.google.com/maps?q=jhapa%20nepal&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://sites.google.com/view/maps-api-v2/mapv2"></a></div><style>.mapouter{position:relative;text-align:right;height:220px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:500px;}</style></div>
                </div>

                <div class="footer-list-29 footer-3">
                    <h6 class="footer-title-29">About Us </h6>
                    <p>Belbari bahuuddeshiya Krishi Farm is a smart farm. For more details, visit About Us section. </p>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                <p class="copy-footer-29">© 2020 Belbari Bahuuddeshiya Krishi Farm. All rights reserved.</a></p>
                <ul class="list-btm-29">
                    <li><a href="#link">Privacy policy</a></li>
                    <li><a href="#link">Terms of service</a></li>

                </ul>
            </div>
        </div>
    </div>
   
    <button onclick="topFunction()" id="movetop" title="Go to top">
<span class="fa fa-angle-up"></span>
</button>
    <script>

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>

</section>
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="assets/js/all.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>

</body>

</html>
