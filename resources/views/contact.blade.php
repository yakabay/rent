@extends('layout.master')

@section('content')
<section class="probootstrap-slider flexslider2 page-inner">
    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="page-title probootstrap-animate">
                        <div class="probootstrap-breadcrumbs">
                            <a href="#">Home</a><span>About</span>
                        </div>
                        <h1>Contact</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg);"></li>
        <li style="background-image: url(img/slider_4.jpg);"></li>
        <li style="background-image: url(img/slider_2.jpg);"></li>
    </ul>
</section>
<!-- END: slider  -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="#" method="post" class="probootstrap-form mb60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-md-push-1">
                <h4>Contact Details</h4>
                <ul class="with-icon colored">
                    <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                    <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                    <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>

                <h4>Feedback</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#">Learn More</a></p>
            </div>
        </div>
    </div>
</section>
<div id="map"></div>
@endsection
