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

<body >
    <div class="container">
        <div class="text-center">
            <a href="{{ url('/form') }}"><img src="{{ asset('img/admit-header.png') }}" alt=""
                    style="height: 100px;width:100%"></a>
            <h2 class="text-white bg-info">Admission Form</h2>
            @isset($student)

                <p class="text-white lead bg-info">Hello! </p>
            @endisset

        </div>

        <div class="row justify-content-center">

            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @isset($success)
                    <div class="alert alert-success">
                        <p>{{ $success }}</p>
                    </div>
                @endisset

                @error('registrationDate', 'rollNo', 'course', 'name', 'dOb', 'isMedicalFit', 'fatherName',
                    'fatherOccupation', 'motherName', 'motherOccupation', 'gender', 'email', 'houseNo', 'landmark', 'city',
                    'tehsil', 'postoffice', 'distt', 'state', 'pincode', 'mobile', 'mobile1', 'mSub', 'mUni', 'mYoP',
                    'mPer', 'iSub', 'iUni', 'iYoP', 'iPer', 'gSub', 'gUni', 'gYoP', 'gPer', 'pSub', 'pUni', 'pYoP', 'pPer',
                    'height', 'weight', 'eyeVision', 'colorBlindness', 'identificationMark', 'languageKnown', 'photoImg')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>

                @enderror

                <form method="post" action='{{ route('aform.store') }}' class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <input type="hidden" name='registrationDate' value="{{ date('Y-m-d') }}">
                    <div class="row">
                        <div class="mb-3 col-md-8">
                            <div class="form-group ">
                                <label for="rollNo">Roll No:</label>
                                <input class="form-control" type="number" name="rollNo" id="rollNo" maxlength="10"
                                    placeholder="" value="{{ $aform->rollNo }}" requried />

                            </div>

                            <label for="course">The Course Of</label>
                            <input class="form-control" type="text" name="course" id="course" maxlength="32"
                                placeholder="" value="{{ $aform->course }}" requried>

                            <label for="name">Applicant Name:</label>
                            <input class="form-control" type="text" name="name" id="name" maxlength="32" placeholder=""
                                value="{{ $aform->name }}" requried>

                        </div>
                        <div class="mb-3 col-md-4">
                            <img class="float-right px-5 py-5 boader-danger" src="{{ asset('img/blank-photo.jpg') }}"
                                width=250 height=250>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Date Of Birth</label>
                            <input type="text" class="form-control" name="dOb" placeholder=""
                                value="{{ $aform->dOb }}" requried>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Medically Fit <span class='text-muted'>.....</span></label>
                            <div class="custom-control ">
                                <input name="isMedicalFit" value='Yes' type="checkbox" class="custom-control-input"
                                    requried checked>
                                <label class="custom-control-label" for="isMedicalFit">Yes</label>
                            </div>
                            <div class="custom-control ">
                                <input name="isMedicalFit" value="No" type="checkbox" class="custom-control-input"
                                    requried>
                                <label class="custom-control-label" for="isMedicalFit">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="fatherName">Father's Name:</label>
                            <input class="form-control" type="text" name="fatherName" id="fatherName" maxlength="32"
                                placeholder="" value="{{ $aform->fatherName }}" requried>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="fatherOccupation">Father's occupation:</label>
                            <input class="form-control" type="text" name="fatherOccupation" id="fatherOccupation"
                                maxlength="10" placeholder="" value="{{ $aform->fatherOccupation }}" requried>

                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="motherName">Mother's Name:</label>
                            <input class="form-control" type="text" name="motherName" id="motherName" maxlength="10"
                                placeholder="" value="{{ $aform->motherName }}" checked requried>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="motherOccupation">Mother's occupation:</label>
                            <input class="form-control" type="text" name="motherOccupation" id="motherOccupation"
                                maxlength="10" placeholder="" value="{{ $aform->motherOccupation }}" requried>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="gender">Gender:<span class='text-muted'></span></label>
                            <div class="custom-control ">
                                <input name="gender" value='Male' type="checkbox" class="custom-control-input" checked
                                    requried>
                                <label class="custom-control-label" for="Male">Male</label>
                            </div>
                            <div class="custom-control ">
                                <input name="gender" value="Female" type="checkbox" class="custom-control-input"
                                    requried>
                                <label class="custom-control-label" for="Female">Female</label>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder=""
                                maxlength="50" value="{{ $aform->email }}" requried>

                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="mobile">Mobile No.</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" minlength="10"
                                maxlength="10" placeholder="" value="{{ $aform->mobile }}" maxlength="32"
                                placeholder="" value="{{ $aform->rollNo }}" requried>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Father's mobile<span class="text-muted">(secondary
                                    contact)</span></label>
                            <input type="number" class="form-control" name="mobile1" id="mobile1" minlength="10"
                                maxlength="10" placeholder="" value="{{ $aform->mobile1 }}" maxlength="32"
                                placeholder="" value="{{ $aform->rollNo }}" requried>

                        </div>
                    </div>

                    <p class="px-2 text-white bg-primary">Permanent Address:</p>
                    <div class="row">
                        <div class="mb-4 col-md-4">
                            <label for="houseNo">House no.:</label>
                            <input type="text" class="form-control" name="houseNo" id="houseNo" maxlength="10"
                                placeholder="" value="{{ $aform->houseNo }}" requried>

                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="landmark">Landmark:</label>
                            <input type="text" class="form-control" name="landmark" id="landmark" maxlength="32"
                                placeholder="" value="{{ $aform->landmark }}" requried>

                        </div>

                        <div class="mb-4 col-md-4">
                            <label for="tehsil">village/tehsil:</label>
                            <input type="text" class="form-control" name="tehsil" id="tehsil" maxlength="32"
                                placeholder="" value="{{ $aform->tehsil }}" requried>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-4 col-md-4">
                            <label for="distt">city/town</label>
                            <input type="text" class="form-control" name="distt" id="distt" maxlength="32"
                                placeholder="" value="{{ $aform->distt }}" requried>

                        </div>

                        <div class="mb-4 col-md-4">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="distt" id="distt" maxlength="32"
                                placeholder="" value="{{ $aform->state }}" requried>

                        </div>

                        <div class="mb-4 col-md-4">
                            <label for="pincode">pincode</label>
                            <input type="number" class="form-control" name="pincode" id="pincode" maxlength="32"
                                placeholder="" value="{{ $aform->pincode }}" requried>

                        </div>
                    </div>
                    <p class="px-2 text-white bg-primary">Educational Qulification:</p>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Board/university</th>
                                <th>Year Of Passing</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>10th</td>
                                <td><input type="text" name="mSub" maxlength="12" placeholder=""
                                        value="{{ $aform->mSub }}"></td>
                                <td><input type="text" name="mUni" maxlength="32" placeholder=""
                                        value="{{ $aform->mUni }}"></td>
                                <td><input type="number" name="mYoP" maxlength="4" placeholder=""
                                        value="{{ $aform->mYoP }}">
                                </td>
                                <td><input type="number" name="mPer" maxlength="4" placeholder=""
                                        value="{{ $aform->mPer }}">
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>12th</td>
                                <td><input type="text" name="iSub" maxlength="12" placeholder=""
                                        value="{{ $aform->iSub }}"></td>
                                <td><input type="text" name="iUni" maxlength="32" placeholder=""
                                        value="{{ $aform->iUni }}"></td>
                                <td><input type="number" name="iYoP" maxlength="4" placeholder=""
                                        value="{{ $aform->iYoP }}">
                                </td>
                                <td><input type="number" name="iPer" maxlength="4" placeholder=""
                                        value="{{ $aform->iPer }}">
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Grad</td>
                                <td><input type="text" name="gSub" maxlength="12" placeholder=""
                                        value="{{ $aform->gSub }}"></td>
                                <td><input type="text" name="gUni" maxlength="32" placeholder=""
                                        value="{{ $aform->gUni }}"></td>
                                <td><input type="number" name="gYoP" maxlength="4" placeholder=""
                                        value="{{ $aform->gYoP }}">
                                </td>
                                <td><input type="number" name="gPer" maxlength="4" placeholder=""
                                        value="{{ $aform->gPer }}">
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Post-Grad</td>
                                <td><input type="text" name="pSub" maxlength="12" placeholder=""
                                        value="{{ $aform->pSub }}"></td>
                                <td><input type="text" name="pUni" maxlength="32" placeholder=""
                                        value="{{ $aform->pUni }}"></td>
                                <td><input type="number" name="pYoP" maxlength="4" placeholder=""
                                        value="{{ $aform->pYoP }}">
                                </td>
                                <td><input type="number" name="pPer" maxlength="4" placeholder=""
                                        value="{{ $aform->pPer }}">
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <p class="px-2 text-white bg-primary">Personal Details:</p>
                    <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="height">Height<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="height" maxlength="12" placeholder=""
                                value="{{ $aform->height }}" requried>

                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="weight">Weight<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="weight" maxlength="12" placeholder=""
                                value="{{ $aform->weight }}" requried>

                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="eyeVision">Eye Vision<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="eyeVision" maxlength="12" placeholder=""
                                value="{{ $aform->eyeVision }}" requried>

                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="colorBlindness">Color Blindness<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="colorBlindness" maxlength="12" placeholder=""
                                value="{{ $aform->colorBlindness }}" requried>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-6 col-md-6">
                            <label for="identificationMark">Identification Mark<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="identificationMark" maxlength="12"
                                placeholder="" value="{{ $aform->identificationMark }}" requried>

                        </div>
                        <div class="mb-6 col-md-6">
                            <label for="languageKnown">Language Known<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="languageKnown" maxlength="12" placeholder=""
                                value="{{ $aform->languageKnown }}" requried>

                        </div>
                    </div>
                    <hr class="mb-4">
                    <br><br><br><br>
                    <p class="px-2 text-white bg-primary">DECLARATION BY APPLICANT:</p>
                    <p>I ...........................................................confirm that the informations and
                        documents submitted by me
                        are true to the
                        best o my knowledge. I have not given any material or information that could affect my
                        selection. I
                        agree that if my marksheet
                        and any other document found fake, academy has right to take any kind of action against me. Also
                        I
                        have read and understood
                        contents of the prospectus and letters provided to me and agreed to all terms and conditions
                        containde therein. I agree that after completion of
                        my course, I will get foreign CDC(i.e. Panama/Liberian/Palau) & placement according to my
                        eligibility & performance during the training.More over
                        whatever charges occur during placement will be paid by me.
                        SMA declared that information regarding INDIAN CDC read by me personally and understood. I am
                        fully
                        agreed by DG SHIPPING notice.
                    </p>
                    <p> I agree that if I cancel my reserved seat even before the commencement of the course or after
                        admission or I withdraw/discountinue the
                        course on my own decision or dismissed from the academyby the manage for any reason, the fee
                        whatever I paid will not be refunded and I am liable
                        to pay the full course fee without any due. Also i shall abide by the rules & regulation
                        Seashore
                        Maritime Academy Pvt. Ltd. will be reinforced time to time.
                    </p>
                    <hr class="mb-4">
                    <div class="row text-bold">
                        <div class="text-left col-md-6">
                            <p class="">Date : {{ date('d-m-Y') }}</p>
                        </div>
                        <div class="text-right col-md-6">
                            <p class="py-0">Signature of Applicant:..........................</p>
                        </div>
                    </div>
                    <p class="px-2 text-white bg-primary">DECLARATION BY PARENTS/GUARDIANS:</p>
                    <p>I (Parent/Guardian Name)...........................................................
                        (Relatiionship)..............................
                        of (Aplicant Name) ..........................................................undertake the
                        responsibility of paying fee mentioned in the
                        fee structure on prescribed dated. Also assure that we have gone through the letters and
                        prospectus
                        provided to us and understood all rules,
                        regulations and procedures mentioned there in.Alos I confirm that the applicant has signed the
                        form
                        in my presence.

                    </p>
                    <hr class="mb-4">
                    <div class="row text-bold">
                        <div class="text-left col-md-6">
                            <p class="">Date : {{ date('d-m-Y') }}</p>
                        </div>
                        <div class="text-right col-md-6">
                            <p class="py-0">Signature of Parents/Gurdians:..........................</p>
                        </div>
                    </div>

                    <p class="px-2 text-white bg-primary">FOR OFFICE USE ONLY:</p>
                    <div class="row">
                        <div class="px-5 col-md-12">
                            <p class="px-1 py-1 border border-dark text-bold">Selected for : </p>
                        </div>
                        <div class="px-5 col-md-12">
                            <h4 class="">CHECKLIST:</h4>
                            <p class="text-dark"><input type="checkbox"> Self attested copy of last qualified marksheet.
                            </p>
                            <p class="text-dark"><input type="checkbox">Self attested copy of any diploma / degree (if
                                done)
                            </p>
                            <p class="text-dark"><input type="checkbox">Self attested copy of date of birth certificate
                            </p>
                            <p class="text-dark"><input type="checkbox">Medical fitness certificate</p>
                            <p class="text-dark"><input type="checkbox">Copy of passport (if have)</p>
                            <p class="text-dark"><input type="checkbox">2 Passport sized photograph</p>
                            <p class="text-dark"><input type="checkbox">Signature of applicant</p>
                            <p class="text-dark"><input type="checkbox">Signature of parents / guardians</p>
                            <p class="text-dark"><input type="checkbox">Receipts of all payment made</p>
                            <p class="text-dark"><input type="checkbox">Copy or letters provided</p>
                        </div>
                        <div class="px-5 mb-2 col-md-12">
                            <p class="px-1 py-1 border border-dark text-bold">Verified by : </p>
                        </div>
                    </div>
                    <p>I here by stated that admission done by me is my on will and No one force me for this it's my on
                        decision & I alos read
                        all terms & condition given above I am agree with all that.</p>
                    <div class="row text-bold">
                        <div class="text-left col-md-6">
                            <p class="">Date : {{ date('d-m-Y') }}</p>
                        </div>
                        <div class="text-right col-md-6">
                            <p class="py-0">Signature of Applicant:..........................</p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <br>
        <br>
        <br><br><br><br>
        <div class="text-center">
            <a href="{{ url('/form') }}"><img src="{{ asset('img/admit-header.png') }}" alt=""
                    style="height: 100px;width:100%"></a>
            <h2 class="text-white bg-info">Agreement Letter</h2>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pt-2 col-md-12">
                        <h4 class="text-right text-bold">Date:{{ date('d-m-Y') }}</h4><br><br>
                        <h4 class="py-2">To Whom it may concern,</h4>
                        <h4 class="py-2">
                            i would like to Mr.....................................................
                            S/o Mr................................................
                        </h4>
                        <h4 class="py-2">
                            as a candidate for..................................................
                            Post Address.................................

                        </h4>
                        <h4 class="py-2">
                            Vill/P.O. ..................................................
                            Teh. & Distt................................................
                        </h4>
                        <h4 class="py-2">
                            Pin Code.............................................
                            Mobile No. ..........................................
                        </h4>


                        </p>
                        <br>
                        <br>
                        <h4 class="py-2">The institute is responsible to all process (coaching/training & joining) of
                            Candidate.</h4>
                        <h4 class="py-2">If any student takes addmission in the institute and drop the training in
                            middle
                            time, in
                            this situation institute will
                            not be refund any fees amount.
                        </h4>
                        <h4 class="py-2">If any candidate of their training joining time leaving the ship to his
                            personal
                            problem in
                            such a case the
                            company is not responsible for his current joining.
                        </h4>
                        <h4 class="py-2">
                            the company provide you after placement onboard ship starting salary package are given
                            below.
                        </h4>
                        <div class="px-2 py-2">
                            <h4 class="py-2"><span class="fa fa-angle-double-right"></span> Ship in aboard salary
                                package ($
                                250 $300)</h4>
                            <h4 class="py2"><span class="fa fa-angle-double-right"></span> Ship in India salary package
                                (₹10000 to ₹15000) </h4>
                            <h4 class="py2"><span class="fa fa-angle-double-right"></span> Accommodation and dearness
                                allowance are non chargable.</h4>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br>
                <div class="row text-bold">
                    <div class="text-left col-md-6">
                        <h4 class="">Date : {{ date('d-m-Y') }}</h4>
                    </div>
                    <div class="text-right col-md-6">
                        <h4 class="py-0">Signature of Applicant:..........................</h4>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.j.js"><\/script>')

    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/form-validation.js') }}"></script>
</body>

</html>