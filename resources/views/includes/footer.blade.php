<footer class="container col-12 site-footer float-left">
    <div class="page-container col-12 float-left">
        <div class="slider-pro-partners" id="g3partners">
            <div class="sp-slides">
                <div class="sp-slide">
                    <a href="https://www.mericabourbon.com" target="_blank">
                        <img class="sp-image" src="/storage/images/MERICA-BOURBON-PROFILE-PHOTO.jpg"/>
                    </a>
                </div>
                <div class="sp-slide">
                    <a href="https://www.gruntfit.com" target="_blank">
                    <img class="sp-image" src="/storage/images/1GF-LOGO-600x400.png"/>
                </div>
                <div class="sp-slide">
                    <a href="https://www.alphaoutpost.com" target="_blank">
                    <img class="sp-image" src="/storage/images/alphaoutpost-logo-01.png"/>
                </div>
                <div class="sp-slide">
                    <a href="https://www.gruntstyle.com" target="_blank">
                    <img class="sp-image" src="/storage/images/gslogo-large-white.png"/>
                </div>
                <div class="sp-slide">
                    <a href="https://www.realtree.com/" target="_blank">
                    <img class="sp-image" src="/storage/images/realtree.png"/></a>
                </div>
            </div>
        </div>
    </div> 
   <div class="page-container col-12 float-left">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <p class="footer-underline"><span style="font-weight:bold">G3</span> <i>Dynamics</i></p>
                <div class="social-links">
                    <a href="https://www.facebook.com/GruntStyleShootingTeam/" target="_blank"><img class="social-icons" src="/storage/images/facebook.png"/></a>
                    <a href="#" target="_blank"><img class="social-icons" src="/storage/images/twitter.png"/></a>
                    <a href="https://www.instagram.com/gruntstyleshootingteam/" target="_blank"><img class="social-icons" src="/storage/images/instagram.png"/></a>
                    <a href="https://www.youtube.com/channel/UC2kL4UoXIAxTPURNkvX6a8Q" target="_blank"><img class="social-icons" src="/storage/images/youtube.png"/></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p class="footer-underline"><i>infoRMATION</i></p>
                <div class="list-group-footer">
                    <a href="/privacy-policy" class="footer-text">Privacy Policy</a></li>
                    <li class="list-group-item-footer"><a href="https://www.facebook.com/GruntStyleShootingTeam/" target="_blank" class="footer-text">Contact Us</a></li>
                </div>
            </div>
        </div>
   </div>
   <div class="page-container col-12 float-left">
        @php
            $date = date('Y');
        @endphp
        <div class="copyright">
            &copy; {{ $date }} - G3 Dynamics, LLC
        </div>
    </div>
</footer>


<div class='footer_scripts'>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
@yield('scripts')
</div>