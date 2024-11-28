@extends('page_template')

@section('content')
<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <img src="{{ asset('assets/images/photo_ptik.png') }}" class="about-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <div class="about-thumb">

                    <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                        <h2 class="text-white me-4 mb-0">About Me</h2>

                        <img src="{{ asset('assets/images/my_photo.png') }}" class="avatar-image img-fluid" alt="">
                    </div>

                    <h3 class="pt-2 mb-3">Get to know me a little bit!</h3>

                    <p>Hello! My name is Nanditya Vianti Putri, people usually call me Vianti. I'm a 7th semesters' college student at Sebelas Maret University on study program Informatics and Computer Engineering Education.</p>

                    <p>I have interest in programming, design, and still learn more about it. Then, here's my profile! enjoy</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="featured section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="profile-thumb">
                    <div class="profile-title">
                        <h4 class="mb-0">Identity</h4>
                    </div>

                    <div class="profile-body">
                        <p>
                            <span class="profile-small-title">Name</span> 
                            <span>{{ $name }}</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Birthday</span> 
                            <span>{{ $birthday }}</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Phone</span> 
                            <span><a href="tel:{{ $call }}">{{ $call }}</a></span>
                        </p>

                        <p>
                            <span class="profile-small-title">Email</span> 
                            <span><a href="mailto:{{ $email }}">{{ $email }}</a></span>
                        </p>
                        <p>
                            <span class="profile-small-title">Address</span> 
                            <span>{{ $address }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="profile-thumb">
                    <div class="profile-title">
                        <h4 class="mb-0">Education</h4>
                    </div>

                    <div class="profile-body">
                        <p>
                            <span class="profile-small-title">Elementary School<br> [2009 - 2015]</span>
                            <span>SDN Kleco 1 Surakarta</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Junior High School <br> [2015 - 2018]</span>
                            <span>SMPN 2 Surakarta</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Senior High School <br> [2018 - 2021]</span>
                             <span>SMAN 6 Surakarta</span>
                        </p>

                        <p>
                            <span class="profile-small-title"> &ensp; &ensp; &ensp; University &ensp; &ensp; &nbsp; <br> [2021 - present]</span>
                            <span>Sebelas Maret University</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="clients section-padding" id="section_4">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 col-12">
                <h3 class="text-center mb-5">Organization Experience</h3>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height organization">
                <img src="{{ asset('assets/images/Logo_OSIS.svg') }}" class="clients-image img-fluid" alt="">
                <p><br><b>Pengurus OSIS SMAN 6 Surakarta</b>
                    <br>Staff Seksi Ekstrakurikuler
                    <br>2018 - 2019</p>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height organization">
                <img src="{{ asset('assets/images/Logo_OSIS.svg') }}" class="clients-image img-fluid" alt="">
                <p><br><b>Pengurus OSIS SMAN 6 Surakarta</b>
                    <br>Koordinator Seksi Budi Pekerti
                    <br>2019 - 2020</p>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height organization">
                <img src="{{ asset('assets/images/Logo LPM.png') }}" class="clients-image img-fluid" alt="">
                <p><br><b>Pengurus LPM Motivasi FKIP UNS</b>
                    <br>Staff Artistik
                    <br>2022</p>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height organization">
                <br><img src="{{ asset('assets/images/Mikroptik.png') }}" class="clients-image img-fluid" alt="">
                <p><br><b>Pengurus HMP MIKROPTIK FKIP UNS</b>
                    <br>Staff Bendahara
                    <br>2022 - 2023</p>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height organization">
                <img src="{{ asset('assets/images/Logo LPM.png') }}" class="clients-image img-fluid" alt="">
                <p><br><b>Pengurus LPM Motivasi FKIP UNS</b>
                    <br>Kabiro Artistik
                    <br>2023</p>
            </div>

        </div>
    </div>
</section>

<section class="featured section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 col-12">
                <h3 class="text-center mb-5">Other Experience</h3>
            </div>

            <div class="col-lg-4 col-4 ms-auto clients-item-height organization">
                <img style="border-radius:100%;" src="{{ asset('assets/images/adhyasta.JPG') }}" class="clients-image img-fluid" alt="">
                <p><br><b style="color: var(--secondary-color);">[Volunteer]</b>
                    <br><b>PKKMB FKIP UNS 2022</b>
                    <br>Kakak Pembimbing (Adhyasta)
                    <br>Jul 2022 - Aug 2022</p>
            </div>

            <div class="col-lg-4 col-4 ms-auto clients-item-height organization">
                <img style="border-radius:100%;" src="{{ asset('assets/images/rakernas.JPG') }}" class="clients-image img-fluid" alt="">
                <p><br><b style="color: var(--secondary-color);">[Volunteer]</b>
                    <br><b>Rapat Kerja Nasional VII <br> PERMIKOMNAS 2022</b>
                    <br>Staff Humas
                    <br>Oct 2022</p>
            </div>

            <div class="col-lg-4 col-4 ms-auto clients-item-height organization">
                <img style="border-radius:10%;" src="{{ asset('assets/images/rs-indriati-solo-baru.png') }}" class="clients-image img-fluid" alt="">
                <p><br><b style="color: var(--secondary-color);">[Intern]</b>
                    <br><b>Rumah Sakit Indriati Solo Baru</b>
                    <br>Bidang TI
                    <br>Jan 2024 - Feb 2024</p>
            </div>
        </div>
    </div>
</section>

<section class="contact section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                    <img src="{{ asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg') }}" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Contact Me</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-6 col-12 pe-lg-0">
                <div class="contact-info contact-info-border-start d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">Skill</strong>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="{{ route('portofolio') }}#section_2" class="footer-menu-link">Programming</a></li>

                        <li class="footer-menu-item"><a href="{{ route('portofolio') }}#section_2" class="footer-menu-link">Graphic Design</a></li>

                        <li class="footer-menu-item"><a href="{{ route('portofolio') }}#section_2" class="footer-menu-link">Animation</a></li>

                        <li class="footer-menu-item"><a href="{{ route('portofolio') }}#section_2" class="footer-menu-link">Game Development</a></li>
                    </ul>

                    <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                    <ul class="social-icon">
                        <li class="social-icon-item"><a href="https://instagram.com/naviantiii" target="_blank" class="social-icon-link bi-instagram"></a></li>

                        <li class="social-icon-item"><a href="https://github.com/naviantii" target="_blank" class="social-icon-link bi-github"></a></li>

                        <li class="social-icon-item"><a href="https://www.linkedin.com/in/nanditya-vianti-putri-828ab3249/" target="_blank" class="social-icon-link bi-linkedin"></a></li>

                        <li class="social-icon-item"><a href="https://www.researchgate.net/profile/Nanditya-Putri" target="_blank" class="social-icon-link bi-journals"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-12 ps-lg-0">
                <div class="contact-info d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">About</strong>

                    <p class="mb-2">
                        College student at Sebelas Maret University. Feel free to get in touch with me.
                    </p>

                    <strong class="site-footer-title d-block mt-3 mb-2">Email</strong>

                    <p>
                        <a href="mailto:{{ $email }}">
                            {{ $email }}
                        </a>
                    </p>

                    <strong class="site-footer-title d-block mt-3 mb-2">Call</strong>

                    <p class="mb-0">
                        <a href="tel:{{$call}}">
                            {{ $call }}
                        </a>
                    </p>

                    <strong class="site-footer-title d-block mt-3 mb-2">Address</strong>

                    <p class="mb-0">
                        {{ $address }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection