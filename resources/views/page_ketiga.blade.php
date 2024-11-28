@extends('page_template')

@section('content')
<section class="projects section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                    {{-- <img src="{{ asset('assets/images/aerial-view-man-using-computer-laptop-wooden-table.jpg') }}" class="avatar-image img-fluid" alt=""> --}}

                    <h2 class="text-white ms-4 mb-0">Gallery</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-6 col-12" style="max-height:55%">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Editorial Layouting</p>

                        <h4 class="projects-title">AK-47 LPM Motivasi Newspaper Layouting</h4>
                    </div>

                    <a href="{{ asset('galeri/layouting.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/layouting.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Social Media Design</p>

                        <h4 class="projects-title"> Live report instastory on @educationweekmtv</h4>
                    </div>

                    <a href="{{ asset('galeri/live-report1.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/live-report1.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Social Media Design</p>

                        <h4 class="projects-title"> Live report instastory on @hmp_mikroptik</h4>
                    </div>

                    <a href="{{ asset('galeri/live-report2.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/live-report2.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Social Media Design</p>

                        <h4 class="projects-title"> Feeds instagram on @educationweekmtv</h4>
                    </div>

                    <a href="{{ asset('galeri/feed1.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/feed1.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Social Media Design</p>

                        <h4 class="projects-title"> Feeds instagram on @educationweekmtv</h4>
                    </div>

                    <a href="{{ asset('galeri/feed2.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/feed2.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Social Media Design</p>

                        <h4 class="projects-title"> Feeds instagram on @educationweekmtv</h4>
                    </div>

                    <a href="{{ asset('galeri/feed3.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/feed3.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Branding</p>

                        <h4 class="projects-title">Pekan Pendidikan FKIP UNS 2023 Mascot</h4>
                    </div>

                    <a href="{{ asset('galeri/maskot.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/maskot.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Branding</p>

                        <h4 class="projects-title">Team's ID Card</h4>
                    </div>

                    <a href="{{ asset('galeri/id-card.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/id-card.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Branding</p>

                        <h4 class="projects-title">Workshop MMT</h4>
                    </div>

                    <a href="{{ asset('galeri/mmt.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/mmt.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Clothing</p>

                        <h4 class="projects-title">PJTD LPM Motivasi 2023 T-shirt</h4>
                    </div>

                    <a href="{{ asset('galeri/tshirt.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/tshirt.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration</p>

                        <h4 class="projects-title">Cover Illustration LPM Motivasi Magazine</h4>
                    </div>

                    <a href="{{ asset('galeri/cover.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/cover.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration</p>

                        <h4 class="projects-title">LPM Motivasi Magazine Illustration</h4>
                    </div>

                    <a href="{{ asset('galeri/ilustrasi1.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/ilustrasi1.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration</p>

                        <h4 class="projects-title">Free Illustration</h4>
                    </div>

                    <a href="{{ asset('galeri/ilustrasi2.jpg') }}" class="popup-image">
                        <img src="{{ asset('galeri/ilustrasi2.jpg') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration</p>

                        <h4 class="projects-title">PJTD LPM Motivasi 2023 T-shirt Illustration</h4>
                    </div>

                    <a href="{{ asset('galeri/ilustrasi3.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/ilustrasi3.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration </p>

                        <h4 class="projects-title">Student Character</h4>
                    </div>

                    <a href="{{ asset('galeri/karakter1.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/karakter1.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Illustration </p>

                        <h4 class="projects-title">Teacher Character</h4>
                    </div>

                    <a href="{{ asset('galeri/karakter2.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/karakter2.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Comic</p>

                        <h4 class="projects-title">Comic on instagram @lpmmotivasi </h4>
                    </div>

                    <a href="{{ asset('galeri/komik1.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/komik1.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p style="font-size: 16px; font-weight:bold" class="projects-tag">Comic</p>

                        <h4 class="projects-title">Comic on LPM Motivasi Magazine</h4>
                    </div>

                    <a href="{{ asset('galeri/komik2.png') }}" class="popup-image">
                        <img src="{{ asset('galeri/komik2.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection