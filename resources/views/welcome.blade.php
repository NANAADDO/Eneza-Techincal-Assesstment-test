@extends('layouts.app')


@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-inner">
                <div class="col-md-10">

                    <div class="mb-5 element-animate">
                        <div class="block-17">
                            <h2 class="heading text-center mb-4">Find Oneline Courses That Suits You</h2>
                            <form action="" method="post" class="d-block d-lg-flex mb-4">
                                <div class="fields d-block d-lg-flex">
                                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Keyword search..."></div>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Category Course</option>
                                            <option value="">Laravel</option>
                                            <option value="">PHP</option>
                                            <option value="">JavaScript</option>
                                            <option value="">Python</option>
                                        </select>
                                    </div>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Difficulty</option>
                                            <option value="">Beginner</option>
                                            <option value="">Intermediate</option>
                                            <option value="">Advance</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="search-submit btn btn-primary" value="Search">
                            </form>
                            <p class="text-center mb-5">We have more than 500 courses to improve your skills</p>
                            <p class="text-center"><a href="#" class="btn py-3 px-5">Register Now</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->



    <section class="site-section pt-3 element-animate">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-book"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Knowledge is power</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-student"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Senior High School</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
                        <div class="media-body">
                            <h3 class="heading">College of Arts &amp; Sciences</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-professor"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Unmatched Proffessor</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->




    <!-- loader -->

@endsection