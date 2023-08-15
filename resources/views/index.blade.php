@extends('layouts.main')

@section('content')

<div class="hero-image" >
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="hero-text">
                <div class="container">
                    <form action="{{ route('basic-details') }}" method="post">
                        @csrf
                        <div class="get-a-quote">
                        <div class="row ">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Airport:</label>
                                    <input type="text" disabled value="Heathow" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Vehicle Drop Off Date:</label>
                                    <input value="{{ session('basic_details.drop_off_date') ?? old('drop_off_date') }}" type="date"
                                        id="datepicker" name="drop_off_date"
                                        class="form-control datepicker @error('drop_off_date') is-invalid @enderror">
                                    @error('drop_off_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Drop Off Time:</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <select name="drop_off_time_H" class="form-control" id="">
                                                @for ($i = 0; $i < 24; $i++)
                                                <option @if((session('basic_details.drop_off_time_H') ?? old('drop_off_time_H')) == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('drop_off_time_H')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <select name="drop_off_time_M" class="form-control" id="">
                                                @for ($i = 0; $i <= 55; $i+=5)
                                                <option @if((session('basic_details.drop_off_time_M') ?? old('drop_off_time_M')) == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('drop_off_time_M')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Vehicle Pick Up Date:</label>
                                    <input type="date" value="{{ session('basic_details.pick_up_date') ?? old('pick_up_date') }}"
                                        name="pick_up_date" class="form-control @error('pick_up_date') is-invalid @enderror">
                                    @error('pick_up_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Pick Up Time:</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <select name="pick_up_time_H" class="form-control" id="">
                                                @for ($i = 0; $i < 24; $i++)
                                                <option @if((session('basic_details.pick_up_time_H') ?? old('pick_up_time_H')) == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('pick_up_time_H')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <select name="pick_up_time_M" class="form-control" id="">
                                                @for ($i = 0; $i <= 55; $i+=5)
                                                <option @if((session('basic_details.pick_up_time_M') ?? old('pick_up_time_M')) == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('pick_up_time_M')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><button class="btn btn-lg form-control btn-light text-primary mt-4">GET A QUOTE</button></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
   
  </div>
  
    <!-- banner-section end -->


    <!-- highlights-style-two -->
    <section class="highlights-style-two my_theme">
        <div class="bg-layer" style="background-image: url(assets/images/service.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title light">
                <h2>Our Service</h2>
                <p>TenTen Parking offers the best deals on short and long term parking at London
                    Heathrow Airport. We offer affordable parking rates without compromising on quality, ensuring value for
                    money. Request a quote for London
                    Heathrow Airport parking today.</p>
            </div>
        </div>
    </section>
    <!-- highlights-style-two end -->


    <!-- courses-section -->
    <section class="courses-section">
        <div class="line-box">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="text">
                                <h6>From</h6>
                                <h2>64<span>$</span></h2>
                                <h5>Per Person</h5>
                            </div>
                        </div>
                        <div class="content-box">
                            <p><strong>TenTen Parking offers meet and greet parking service at Heathrow Airport. We offer
                                    you the best rates for the service.</strong></p>
                            <div class="inner">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt="">
                                            </div>
                                            <h6><a href="#">Quick and Easy</a></h6>
                                            <span>Our online system is easy to use, </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="assets/images/icons/icon-7.png" alt="">
                                            </div>
                                            <h6><a href="#">Attractive and Affordable</a></h6>
                                            <span>We offer a competitive meet and greet service, </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt="">
                                            </div>
                                            <h6><a href="#">Trained and Insured</a></h6>
                                            <span>Our staff are trained and insured, </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/banner/cover1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses-section end -->


    <!-- process-section -->
    <section class="process-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="inner-box">
                        <div class="sec-title">
                            <h2>Meet & Greet Service</h2>
                            <p>Our rates include the meet and greet service because it is the most convenient way to park at
                                the airport, whether you are traveling alone for work or going on holiday with children and
                                family.</p>
                        </div>
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/meet-services.jpeg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="inner-box">
                        <div class="single-item">
                            <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-20.png);">
                            </div>
                            <span class="count-text">01</span>
                            <div class="icon"><img src="assets/images/icons/icon-7.png" alt=""></div>
                            <h4><a href="#">Collect your vehicle from you at the departure terminal</a></h4>
                            <p>You will contact TenTen Parking 30 mins before you arrive at the terminal drop off point.</p>
                        </div>
                        <div class="single-item">
                            <div class="arrow-shape-2" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <span class="count-text">02</span>
                            <div class="icon"><img src="assets/images/icons/icon-36.png" alt=""></div>
                            <h4><a href="#">Take your vehicle to our secure car park</a></h4>
                            <p>Insured Driver will your vehicle will then be taken to one of our secure car parks.</p>
                        </div>
                        <div class="single-item">
                            <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-20.png);">
                            </div>
                            <span class="count-text">03</span>
                            <div class="icon"><img src="assets/images/icons/icon-11.png" alt=""></div>
                            <h4><a href="#">When you return, our staff will bring your vehicle to the terminal</a>
                            </h4>
                            <p>On arrival back to Heathrow Airport, you will call TenTen Parking. A representative will be
                                waiting in the pick up point with your car ready for collection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process-section end -->
@endsection


