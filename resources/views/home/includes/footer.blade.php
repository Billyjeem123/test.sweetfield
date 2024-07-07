
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Company
                </h4>
                <a class="btn btn-link" href="about.blade.php">About Us</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
                <a class="btn btn-link" href="menu.blade.php">Reservation</a>
                <a class="btn btn-link" href="#">Privacy Policy</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Contact
                </h4>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>58 charity road abule
                    Egba Lagos, Nigeria
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>+234 9063307812, +234
                    9137122644
                </p>
                <p class="mb-2">
                    <i class="fab fa-whatsapp me-3"></i>+234 9088020882
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>Sweettaste
                    Signature@gmail.com
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social"
                       href="https://www.instagram.com/Sweettaste Signature?igsh=NzBwOWU2enRmdzhz"
                       target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Opening
                </h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Newsletter
                </h4>
                <p>Be the first to get updated on our events and new cuisines.</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                           placeholder="Your email" />
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;
                    <a class="border-bottom" href="#">Sweettaste Signature</a>, All
                    Right Reserved. Designed By
                    <a class="border-bottom" href="#">Kaykodes</a><br /><br />
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript /assets/libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/lib/wow/wow.min.js"></script>
<script src="/assets/lib/easing/easing.min.js"></script>
<script src="/assets/lib/waypoints/waypoints.min.js"></script>
<script src="/assets/lib/counterup/counterup.min.js"></script>
<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="/assets/js/main.js"></script>



<!-- Your content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Toastr script -->
<script>
    @if (session('success'))
    toastr.success("{{ session('success') }}");
    @endif
    @if (session('error'))
    toastr.error("{{ session('error') }}");
    @endif
</script>

<!-- Other scripts -->
</body>

</html>
