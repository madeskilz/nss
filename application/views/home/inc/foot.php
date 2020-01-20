<div class="space-40"></div>
<div id="footer" class="shop-footer bg-faded">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-btm-20">
                <div class="footer-col">
                    <h3>NorthSouth Security</h3>
                    <p>
                        ...your safety, our priority.
                    </p>
                </div>
                <div class="space-20"></div>
                <div class="footer-col">
                    <h3>Follow us</h3>
                    <ul class=" list-inline social-btn">
                        <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like On Facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon ion-logo-googleplus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On googleplus"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon ion-logo-pinterest" data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon ion-logo-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="skype"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 margin-btm-20">
                <div class="footer-col">
                    <h3>contact info</h3>
                    <p><i class="icon ion-md-home"></i> 530A Aina Akingbala Street, Omole Phase 2, Ikeja, Lagos.</p>
                    <p><i class="icon ion-md-call"></i> 0810 552 9574 | 056 290 461</p>
                    <p><i class="icon ion-ios-mail"></i> info@northsouthsecurity.net</p>
                </div>
            </div>
            <div class="col-md-5">
                <?php if ($active != "support") { ?>
                    <div class="footer-col">
                        <h3>Get in touch</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name...">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject...">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Massage..." rows="7"></textarea>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-lg theme-btn-color">Send massege</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } else { ?>
                    <style>
                        #map {
                            width: 100%;
                            height: 400px;
                            background-color: grey;
                        }
                    </style>
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var c = {
                                lat: 6.6300393,
                                lng: 3.370273
                            };
                            var map = new google.maps.Map(
                                document.getElementById('map'), {
                                    zoom: 15,
                                    center: c
                                });
                            var marker = new google.maps.Marker({
                                position: c,
                                map: map
                            });
                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe1xG5fyId7xczyUtjRNDrgqJRs-sJwsk&callback=initMap">
                    </script>
                <?php } ?>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="row">
            <div class="col-md-12 text-center footer-bottom">
                <a href="<?= base_url() ?>"> <img src="<?= base_url("assets/img/logo.png") ?>" class="img-logo" alt=""></a>
                <div class="space-20"></div>
                <span>&copy;<?= date("Y") ?>. All Right Reserved. powered by <a target="_blank" href="http://schoolville.com">Schoolville Ltd.</a></span>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop"><i class="icon ion-ios-arrow-dropup"></i></a>
<script src="<?= base_url("assets/js/plugins/plugins.js") ?>"></script>
<script src="<?= base_url("assets/js/app.js") ?>"></script>
</body>

</html>