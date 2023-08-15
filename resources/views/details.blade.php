@extends('layouts.main')

@section('content')
    <div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card card-height">
                            <div class="card-body">
                                <h5>Sign In</h5>
                                <p class="mb-2">Please sign in to your member account to redeem points.</p>
                                <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                                <input type="text" class="form-control mb-2" placeholder="Password" name="password">
                                <button class="btn btn-primary form-control">Sign in</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-height">
                            <div class="card-body">
                                <h5>Sign Up</h5>
                                <p class="mb-2">Sign Up to receive amazing discounts.</p>
                                <input type="text" class="form-control mb-2" placeholder="First name" name="f_name">
                                <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                                <button class="btn btn-primary form-control">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('book') }}" method="post" id="booking-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-height">
                                <div class="card-body">
                                    <h5 class="mb-2">Customer Details</h5>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <select name="title" class="form-control @error('title') is-invalid @enderror">
                                          <option value="" selected disabled>Select Title</option>
                                            <option @if(old('title') == 'Rev') selected @endif value="Rev">Rev</option>
                                            <option @if(old('title') == 'Mr') selected @endif  value="Mr">Mr</option>
                                            <option @if(old('title') == 'Mrs') selected @endif  value="Mrs">Mrs</option>
                                            <option @if(old('title') == 'Ms') selected @endif  value="Ms">Ms</option>
                                            <option @if(old('title') == 'Miss') selected @endif  value="Miss">Miss</option>
                                            <option @if(old('title') == 'Dr') selected @endif  value="Dr">Dr</option>
                                        </select>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" value="{{ old('first_name') }}"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    placeholder="First Name" name="first_name" id="">
                                                @error('first_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input value="{{ old('last_name') }}" type="text"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    placeholder="Last Name" name="last_name" id="">
                                                @error('last_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input value="{{ old('customer_email') }}" type="email"
                                                    class="form-control @error('customer_email') is-invalid @enderror"
                                                    placeholder="Email" name="customer_email" id="">
                                                @error('customer_email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input value="{{ old('phone') }}" type="number"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="Phone" name="phone" id="">
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="mb-2">Vehicle Details</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Vehicle Make & Model</label>
                                                <input value="{{ old('model') }}" type="text"
                                                    class="form-control @error('model') is-invalid @enderror"
                                                    placeholder="Vehicle Make & Model" name="model" id="">
                                                @error('model')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Vehicle Colour</label>
                                                <input value="{{ old('colour') }}" type="text"
                                                    class="form-control @error('colour') is-invalid @enderror"
                                                    placeholder="Vehicle Colour" name="colour" id="">
                                                @error('colour')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Vehicle Reg No</label>
                                                <input value="{{ old('reg_no') }}" type="text"
                                                    class="form-control @error('reg_no') is-invalid @enderror"
                                                    placeholder="Vehicle Reg No" name="reg_no" id="">
                                                @error('reg_no')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-height">
                                <div class="card-body">
                                    <h5 class="mb-2">Travel Details</h5>
                                    <div class="form-group">
                                        <label for="">Drop Off Terminal</label>
                                        <select name="terminal_in" id=""
                                            class="form-control @error('terminal_in') is-invalid @enderror">
                                            <option>Terminal 1</option>
                                            <option>Terminal 2</option>
                                            <option>Terminal 3</option>
                                            <option>Terminal 4</option>
                                            <option>Terminal 5</option>
                                        </select>
                                        @error('terminal_in')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pick Up Terminal</label>
                                        <select name="terminal_out" id=""
                                            class="form-control @error('terminal_out') is-invalid @enderror">
                                            <option>Terminal 1</option>
                                            <option>Terminal 2</option>
                                            <option>Terminal 3</option>
                                            <option>Terminal 4</option>
                                            <option>Terminal 5</option>
                                        </select>
                                        @error('terminal_out')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vehicle Drop Off Time</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="meeting_h" id=""
                                                    class="form-control @error('meeting_h') is-invalid @enderror">
                                                    @for ($i = 0; $i < 24; $i++)
                                                    <option @if($i == session('basic_details.drop_off_time_H')) selected @endif>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                @error('meeting_h')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <select name="meeting_m" id=""
                                                    class="form-control @error('meeting_m') is-invalid @enderror">
                                                    @for ($i = 0; $i <= 55; $i+=5)
                                                    <option @if($i == session('basic_details.drop_off_time_M')) selected @endif>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                @error('meeting_m')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vehicle Pick Up Time</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="coming_h" id=""
                                                    class="form-control @error('coming_h') is-invalid @enderror">
                                                    @for ($i = 0; $i < 24; $i++)
                                                    <option @if($i == session('basic_details.pick_up_time_H')) selected @endif>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                @error('coming_h')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <select name="coming_m" id=""
                                                    class="form-control @error('coming_m') is-invalid @enderror">
                                                    @for ($i = 0; $i <= 55; $i+=5)
                                                    <option @if($i == session('basic_details.pick_up_time_M')) selected @endif>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                @error('coming_m')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Arrival Flight No</label>
                                        <input value="{{ old('arr_flight_no') }}" type="text" class="form-control @error('arr_flight_no') is-invalid @enderror"
                                            placeholder="Arrival Flight No" name="arr_flight_no" id="">
                                        @error('arr_flight_no')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" class="@error('terms_and_conditions') is-invalid @enderror" name="terms_and_conditions" id="condition">
                                        <label for="condition">I Accept Terms & Conditions <a href="/terms-and-conditions">View
                                                Conditions</a></label>
                                                @error('terms_and_conditions')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" class="@error('cancellation_policy') is-invalid @enderror" name="cancellation_policy" id="policy">
                                        <label for="policy">I Accept Cancellation Policy <a href="/terms-and-conditions">View
                                                Policy</a></label>
                                                @error('cancellation_policy')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="meeting_date" value="{{ session('basic_details.drop_off_date') }}">
                    <input type="hidden" name="coming_back" value="{{ session('basic_details.pick_up_date') }}">
                </form>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Booking Summery
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><b>Airport:</b> Heathrow</li>
                            <li><b>Service:</b> Meet & Greet</li>
                            <li><b>Vehicle Drop Off Date:</b> {{ \Carbon\Carbon::parse(session('basic_details.drop_off_date'))->format('d/m/y') }}</li>
                            <li><b>Vehicle Pick Up Date:</b> {{ \Carbon\Carbon::parse(session('basic_details.pick_up_date'))->format('d/m/y') }}</li>
                        </ul>
                        <button class="btn btn-primary form-control mt-2" onclick="submitForm()">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        function submitForm() {
            var form = document.getElementById("booking-form");
            form.submit();
        }
    </script>
@endpush
