@extends('sensorial.pages.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Customer.css') }}">
@endsection

@section('title', 'My Profile')

@section('content')

    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="box">
                        <h3 class=" mt-5 h-1" lng-tag="Good Afternoon Nancy" style="text-transform: capitalize">Welcome
                            {{ auth()->user()->name_en }} </h3>
                        <p class="fw-bold text-black-50 mt-4 w-75" lng-tag="Learn about networking">Learn about
                            networking and start your journey to
                            Cisco 200-301Learnabout networking andstart your journey to Cisco 200-301 .
                        </p>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">10</p>
                            <p class="fw-bold " lng-tag="Certification">Certification </p>
                        </div>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">10</p>
                            <p class="fw-bold " lng-tag="end Courses">end Courses </p>
                        </div>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">12</p>
                            <p class="fw-bold " lng-tag="InProgress">InProgress </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="image text-center mt-4">
                        <img src="img/wemon-group.png" alt="" class="img-fluid wemon-group">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->


    <!-- section-2 -->
    <section class="section-5 gray pt-5 pb-5">
        <div class="container position-relative">
            <h3 class="h-1" lng-tag="Course you are taking">Course you are taking </h3>
            <p class="fw-bold text-black-50" lng-tag="Professor">Professor, School of Electrical & Electronic
                Engineering
            </p>
            <div class="row mt-5 multiple-items">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="image text-center">
                                <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                                    alt="" class="img-fluid width">
                            </div>
                            <div class="content">
                                <p class="fw-bold" lng-tag="Motion" style="text-transform: capitalize">
                                    {{ $course->course->course_name }}</p>
                            </div>
                            <div class="content-1">
                                <p class="fw-bold text-black-50 p-7" lng-tag="Lesson 5 from 20"><img
                                        src="{{ asset('requirement/pages/img/book.svg') }}" alt=""
                                        class="img-fluid book">Lesson 5
                                    from 20</p>
                                <span class="span-1">5%</span>
                            </div>
                            <a class="form-control fw-bold continue mt-2"
                                href="{{ route('viewCourse', $course->course->id) }}" lng-tag="Countinue">Countinue <i
                                    class="fa-solid fa-arrow-right arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- section-2 -->

    <!-- section 5 -->
    <section class="section-5 section-2-private">
        <div class="container position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.905" height="21.105" viewBox="0 0 23.905 21.105">
                <defs>
                    <symbol id="heart" viewBox="0 0 23.905 21.105">
                        <path class="heart-box" data-name="Icon feather-heart"
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            transform="translate(-1.323 -3.497)" fill="none" stroke="#9f007e" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />

                    </symbol>

                    <symbol id="heart-fill" viewBox="0 0 23.905 21.105">
                        <path
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            fill="#9f007e" stroke="#9f007e" transform="translate(-1.323 -3.497)" fill="none"
                            stroke="#9f007e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </symbol>

                </defs>
            </svg>

            <p class="p-25" lng-tag="What to learn next">What to learn next</p>

            <div class="row mt-5 multiple-items" dir="ltr">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-1.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">

                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-2.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 -->

    <!-- section-4 -->
    <section class="section-4 section-2-private">
        <div class="container">
            <h4 class="h-1" lng-tag="Grow in your rule with this topic">Grow in your rule with this topic</h4>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <img src="img/coding-1.png" alt="" class="img-fluid code">
                        <span lng-tag="Design">Design</span>
                        <p class="mt-3" lng-tag="devices-1">All devices come with free delivery or pickup as standard.
                            See
                            information on
                            available
                            shopping options for your location.</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <img src="img/coding-2.png" alt="" class="img-fluid code">
                        <span lng-tag="Coding">Coding</span>
                        <p class="mt-3" lng-tag="devices-1">All devices come with free delivery or pickup as standard.
                            See information on
                            available
                            shopping options for your location.</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <img src="img/coding-3.png" alt="" class="img-fluid code">
                        <span lng-tag="Marketing">Marketing</span>
                        <p class="mt-3" lng-tag="devices-1">All devices come with free delivery or pickup as standard.
                            See information on
                            available
                            shopping options for your location.</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section-4 -->

@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
