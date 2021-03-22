@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
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
                    'tehsil', 'postoffice', 'distt', 'state', 'pincode', 'mobile', 'mobile1', 'mSub', 'mUni', 'mYoP', 'mPer',
                    'iSub', 'iUni', 'iYoP', 'iPer', 'gSub', 'gUni', 'gYoP', 'gPer', 'pSub', 'pUni', 'pYoP', 'pPer', 'height',
                    'weight', 'eyeVision', 'colorBlindness', 'identificationMark', 'languageKnown', 'photoImg')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>

                @enderror

                <form method="post" action='{{ route('aform.store') }}' class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <input type="hidden" name='registrationDate' value="{{ date('Y-m-d') }}">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="rollNo">Roll No:</label>
                            <input class="form-control" type="number" name="rollNo" id="rollNo" maxlength="10"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid Roll Number is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="course">The Course Of</label>
                            <input class="form-control" type="text" name="course" id="course" maxlength="32" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid course Name required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="name">Applicant Name:</label>
                            <input class="form-control" type="text" name="name" id="name" maxlength="32" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid Name is required.
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Date Of Birth</label>
                            <input type="date" class="form-control" name="dOb" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid date of birth is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Medically Fit <span class='text-muted'>.....</span></label>
                            <div class="custom-control custom-radio">
                                <input name="isMedicalFit" value='Yes' type="radio" class="custom-control-input" checked
                                    required>
                                <label class="custom-control-label" for="isMedicalFit">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input name="isMedicalFit" value="No" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="isMedicalFit">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="fatherName">Father's Name:</label>
                            <input class="form-control" type="text" name="fatherName" id="fatherName" maxlength="32"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Father's name is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="fatherOccupation">Father's occupation:</label>
                            <input class="form-control" type="text" name="fatherOccupation" id="fatherOccupation"
                                maxlength="10" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid father's occupation is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="motherName">Mother's Name:</label>
                            <input class="form-control" type="text" name="motherName" id="motherName" maxlength="10"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mother's name is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="motherOccupation">Mother's occupation:</label>
                            <input class="form-control" type="text" name="motherOccupation" id="motherOccupation"
                                maxlength="10" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mother's occupation is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="gender">Gender:<span class='text-muted'></span></label>
                            <div class="custom-control custom-radio">
                                <input name="gender" value='Male' type="radio" class="custom-control-input" checked
                                    required>
                                <label class="custom-control-label" for="Male">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input name="gender" value="Female" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="Female">Female</label>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"
                                maxlength="50" value="" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="mobile">Mobile No.</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" minlength="10"
                                maxlength="10" placeholder="" value="" maxlength="32" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName">Father's mobile<span class="text-muted">(secondary
                                    contact)</span></label>
                            <input type="number" class="form-control" name="mobile1" id="mobile1" minlength="10"
                                maxlength="10" placeholder="" value="" maxlength="32" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                    </div>

                    <p class="px-2 text-white bg-primary">Permanent Address:</p>
                    <div class="row">
                        <div class="mb-4 col-md-4">
                            <label for="houseNo">House no.:</label>
                            <input type="text" class="form-control" name="houseNo" id="houseNo" maxlength="10"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="landmark">Landmark:</label>
                            <input type="text" class="form-control" name="landmark" id="landmark" maxlength="32"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>

                        <div class="mb-4 col-md-4">
                            <label for="tehsil">village/tehsil:</label>
                            <input type="text" class="form-control" name="tehsil" id="tehsil" maxlength="32" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                pin code required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-4 col-md-4">
                            <label for="distt">city/town</label>
                            <input type="text" class="form-control" name="distt" id="distt" maxlength="32" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>

                        <div class="mb-4 col-md-4">
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

                        <div class="mb-4 col-md-4">
                            <label for="pincode">pincode</label>
                            <input type="number" class="form-control" name="pincode" id="pincode" maxlength="32"
                                placeholder="" value="" required>
                            <div class="invalid-feedback">
                                pin code required.
                            </div>
                        </div>
                    </div>
                    <p class="px-2 text-white bg-primary">Educational Qulification:</p>
                    <table class="table table-bordered table-responsive table-sm">
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
                                <td><input type="text" name="mSub" maxlength="12" placeholder="" value="" required></td>
                                <td><input type="text" name="mUni" maxlength="32" placeholder="" value="" required></td>
                                <td><input type="number" name="mYoP" maxlength="4" placeholder="" value="" required>
                                </td>
                                <td><input type="number" name="mPer" maxlength="4" placeholder="" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>12th</td>
                                <td><input type="text" name="iSub" maxlength="12" placeholder="" value="" required></td>
                                <td><input type="text" name="iUni" maxlength="32" placeholder="" value="" required></td>
                                <td><input type="number" name="iYoP" maxlength="4" placeholder="" value="" required>
                                </td>
                                <td><input type="number" name="iPer" maxlength="4" placeholder="" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Grad</td>
                                <td><input type="text" name="gSub" maxlength="12" placeholder="" value="" required></td>
                                <td><input type="text" name="gUni" maxlength="32" placeholder="" value="" required></td>
                                <td><input type="number" name="gYoP" maxlength="4" placeholder="" value="" required>
                                </td>
                                <td><input type="number" name="gPer" maxlength="4" placeholder="" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Post-Grad</td>
                                <td><input type="text" name="pSub" maxlength="12" placeholder="" value="" required></td>
                                <td><input type="text" name="pUni" maxlength="32" placeholder="" value="" required></td>
                                <td><input type="number" name="pYoP" maxlength="4" placeholder="" value="" required>
                                </td>
                                <td><input type="number" name="pPer" maxlength="4" placeholder="" value="" required>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <p class="px-2 text-white bg-primary">Personal Details:</p>
                    <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="height">Height<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="height" maxlength="12" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="weight">Weight<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="weight" maxlength="12" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="eyeVision">Eye Vision<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="eyeVision" maxlength="12" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="colorBlindness">Color Blindness<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="colorBlindness" maxlength="12" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-6 col-md-6">
                            <label for="identificationMark">Identification Mark<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="identificationMark" maxlength="12" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="mb-6 col-md-6">
                            <label for="languageKnown">Language Known<span class='text-muted'></span>:</label>
                            <input type="text" class="form-control" name="languageKnown" maxlength="12" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                    </div>

                    <p class="px-2 my-2 text-white bg-primary">Photo Upload:</p>

                    <div class="row">
                        <div class="mb-6 col-md-6">
                            <label for="photoImg">Photo:</label>
                            <input type="file" class="form-control" name="photoImg" id="photoImg" placeholder="" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>

                    </div>

                    <hr class="mb-4">


                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
