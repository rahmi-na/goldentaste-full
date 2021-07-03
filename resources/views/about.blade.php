@extends('layouts.master-about')
@section('title', 'About Us')
@section('content-about')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Our Team -->
    <div class="rw jcc mb-team-6 circle-blend circle-warning">
        <div class="col-lg-6 text-center mx-auto mb-7">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Our Team</h5>
            <p class="mb-0">ini adalah nama anggota yang mengerjakan website sebagai tugas dari UAS Pemrograman Web<span class="fw-bold"></span></p>
        </div>
        <div class="col-xxl-9">
            <div class="row flex-center g-0">
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team1.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1">Rahmi Nurazizah <br> (2019-318)</h5>
                    <p class="jabatan">Ceo</p>
                </div>
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team2.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1"> Brilliant Alifia <br> (2019-302)</h5>
                    <p class="jabatan">Ceo</p>
                </div>
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team3.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1">Sukma <br> (2019-337)</h5>
                    <p class="jabatan">Ceo</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+62 812 311 2019</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>Universitas Muhammadiyah Malang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 21:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>goldentaste@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.98634612373!2d112.58863158377933!3d-7.921516809146221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881f5405daac1%3A0xb39e4847109109e4!2sUniversity%20of%20Muhammadiyah%20Malang%2C%20Campus%20III!5e0!3m2!1sen!2sid!4v1624421320329!5m2!1sen!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Universitas Muhammadiyah Malang</h4>
                <ul>
                    <li>Phone: +62 812 311 2019</li>
                    <li>Address: Jalan Raya Tlogomas No. 246 Tlogomas, Babatan, Tegalgondo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="{{route('messages.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input name="name" placeholder="Your name" type="text1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input name="email" placeholder="Your Email" type="text2">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" placeholder="Your message" type="text3"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
    @endsection

    