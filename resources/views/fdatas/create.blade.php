<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>MERCHENT NAVY EXAM</title>



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <a href="{{ url('/form') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="h-20"></a>
            <h2>Merchant Navy Exam </h2>
            @isset($student)

                <p class="text-white lead bg-info">Hello! {{ $student->name }}</p>
            @endisset
            <p class="text-white lead bg-primary ">Fill below Form to get login.</p>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-8">
                @error('student_id', 'first_name', 'last_name', 'post', 'email', 'dob', 'gender', 'mobile',
                    'fathers_name', 'fathers_occupation', 'f_mobile', 'address', 'state', 'distt', 'pincode', 'about_us',
                    'what_mn', 'why_mn', 'rel_mn')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>

                @enderror

                <form method="post" action='{{ route('fdatas.store') }}' class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <input type="hidden" name='roll_no' value="{{ $student->roll_no }}">
                    <input type="hidden" name='student_id' value="{{ $student->id }}">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="first_name" id="firstName" maxlength="10"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="lastName" maxlength="12"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="you@example.com" maxlength="50" value="" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Post <span class='text-muted'>Applying
                                    for(G.P.R./Seaman..etc)</span></label>
                            <input type="text" class="form-control" name="post" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                post is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Gender <span class='text-muted'>.....</span></label>
                            <div class="custom-control custom-radio">
                                <input id="credit" name="gender" value='Male' type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="gender" value="Female" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Female</label>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid date of birth is required.
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="mb-3 col-md-6">
                            <label for="firstName">Father's name</label>
                            <input type="text" class="form-control" name="fathers_name" id="firstName" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid father's name is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Father's occupation</label>
                            <input type="text" class="form-control" name="fathers_occupation" id="lastName"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid father's occupation is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName">Mobile No.</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" minlength="10"
                                maxlength="10" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Father's mobile<span class="text-muted">(secondary
                                    contact)</span></label>
                            <input type="number" class="form-control" name="f_mobile" id="f_mobile" minlength="10"
                                maxlength="10" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" minlength="10"
                            maxlength="75" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter a valid address.
                        </div>
                    </div>

                    <div class="row">

                        <div class="mb-3 col-md-4">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" name="state" id="state" required>
                                <option value="">----Select State----</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="distt">city/town</label>
                            <input type="text" class="form-control" name="distt" id="distt" placeholder="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="pincode">pincode</label>
                            <input type="number" class="form-control" name="pincode" id="pincode" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                pin code required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Tell us about Yourself.</label>
                        <textarea class="form-control" name="about_us" id="exampleFormControlTextarea1" rows="3"
                            maxlength="250"></textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">What <span class='text-muted'>(you think/know)</span> is merchent
                            navy?</label>
                        <textarea class="form-control" name="what_mn" id="exampleFormControlTextarea1" rows="3"
                            maxlength="250"></textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Why you want to Join Merchant Navy?</label>
                        <textarea class="form-control" name="why_mn" id="exampleFormControlTextarea1" rows="3"
                            maxlength="250"></textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Any relative in merchant navy<span
                                class="text-muted">(optional)</span></label>
                        <textarea class="form-control" name="rel_mn" id="exampleFormControlTextarea1" maxlength="50"
                            rows="1"></textarea>
                        <div class="invalid-feedback">
                            optional.
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address" required>
                        <label class="custom-control-label" for="same-address">I hereby declare that the information
                            given in this application is true and
                            correct to the best of my knowledge and belief. In case any information
                            given in this application proves to be false or incorrect, I shall be
                            responsible for the consequences. </label>
                        <div class="invalid-feedback">
                            required*
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address2" required>
                        <label class="custom-control-label" for="same-address2">I also declare that if any information
                            provided by me is found false, my
                            candidature may be rejected at any point of time </label>
                        <div class="invalid-feedback">
                            required*
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address1" required>
                        <label class="custom-control-label" for="same-address1">online exam does not
                            mean that I am eligible for appointment to the post applied by me. </label>
                        <div class="invalid-feedback">
                            required*
                        </div>
                    </div>
                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>

        <footer class="pt-5 my-5 text-center text-muted text-small">
            <p class="mb-1">&copy; 2017-2020 seashore maritime academy</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.j.js"><\/script>')

    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/form-validation.js') }}"></script>
</body>

</html>
