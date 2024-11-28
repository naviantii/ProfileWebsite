@extends('page_template')

@section('content')
<section class="services section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                    {{-- <img src="{{ asset('assets/images/aerial-view-man-using-computer-laptop-wooden-table.jpg') }}" class="avatar-image img-fluid" alt=""> --}}

                    <h2 class="text-white ms-4 mb-0">Skill</h2>
                </div>

                <div class="row pt-lg-5">
                    <div class="col-lg-6 col-12">
                        <div class="services-thumb">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Programming</h3>
                            </div>

                            <p>Ability using PHP, HTML, CSS, JS, Python, Java </p>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-globe"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="services-thumb services-thumb-up">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Graphic Design</h3>
                            </div>

                            <p>Making graphic design using software Adobe Illustrator, CorelDraw, Adobe Photoshop, Figma, Canva</p>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-lightbulb"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="services-thumb">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Animation</h3>
                            </div>

                            <p>Making 2D and 3D animation using Adobe Animate and Blender</p>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-file-play"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="services-thumb services-thumb-up">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Game Development</h3>
                            </div>

                            <p>Developing game 2D using Unity and Construct 2</p>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="projects section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-12 ms-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('assets/images/white-desk-work-study-aesthetics.jpg') }}" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Portfolio Projects</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            @foreach($projects as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <h3 class="projects-tag">{{ $item->title }}</h3>

                            <p style="margin-bottom: 0; text-align:justify; font-size:15px">{{  $item->description }}</p>

                            <p class="link-project" style="text-decoration: underline; color:#535da1">
                                <a href="{{ $item->link }}" target="_blank" style="color:#535da1;">Click here to see project.</a>
                            </p>
                            
                            <a href="{{ $item->photo }}" class="popup-image">
                                <img style="margin-top:20px;" src="{{ $item->photo }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection