@extends('admin.layout')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit-Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('fdatas.index')}}">forms-list</a></li>
                        <li class="breadcrumb-item active">form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row fluid justify-content-center">
            <div class="mt-2 ml-5 mr-5 ">
                <form method="post" action='{{route('fdatas.update',$fdata->id)}}' class="needs-validation " novalidate>
                    @csrf
                    @method('put')
                    <input type="hidden" name='roll_no' value="{{$fdata->roll_no}}">
                    <input type="hidden" name='fdata_id' value="{{$fdata->id}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="first_name" id="firstName" maxlength="10" placeholder="" value="{{$fdata->first_name}}" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="lastName" maxlength="12" placeholder="" value="{{$fdata->last_name}}" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" maxlength="50" value="{{$fdata->email}}" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Post <span class='text-muted'>Applying for(G.P.R./Seaman..etc)</span></label>
                            <input type="text" class="form-control" name="post" id="lastName" placeholder="" value="{{$fdata->post}}" required>
                            <div class="invalid-feedback">
                                post is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Gender <span class='text-muted'>.....</span></label>
                            <div class="custom-control custom-radio">
                                <input id="credit" name="gender" value='Male' type="radio" class="custom-control-input" {{$fdata->gender =='Male'?'checked':''}} required>
                                <label class="custom-control-label" for="credit">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="gender" value="Female" type="radio" class="custom-control-input" {{$fdata->gender =='Female'?'checked':''}} required>
                                <label class="custom-control-label" for="debit">Female</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="lastName" placeholder="{{$fdata->dob}}" value="{{date('Y-m-d', strtotime($fdata->dob))}}" required>
                            <div class="invalid-feedback">
                                Valid date of birth is required.
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Father's name</label>
                            <input type="text" class="form-control" name="fathers_name" id="firstName" placeholder="" value="{{$fdata->fathers_name}}" required>
                            <div class="invalid-feedback">
                                Valid father's name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Father's occupation</label>
                            <input type="text" class="form-control" name="fathers_occupation" id="lastName" placeholder="" value="{{$fdata->fathers_occupation}}" required>
                            <div class="invalid-feedback">
                                Valid father's occupation is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Mobile No.</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" minlength="10" maxlength="10" placeholder="" value="{{$fdata->mobile}}" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Father's mobile<span class="text-muted">(secondary contact)</span></label>
                            <input type="number" class="form-control" name="f_mobile" id="f_mobile" minlength="10" maxlength="10" placeholder="" value="{{$fdata->f_mobile}}" required>
                            <div class="invalid-feedback">
                                Valid mobile no. is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" minlength="10" maxlength="75" value="{{$fdata->address}}" required>
                        <div class="invalid-feedback">
                            Please enter a valid address.
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" name="state" id="state" required>
                                <option value="{{$fdata->state}}">{{$fdata->state}}</option>
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
                        <div class="col-md-3 mb-3">
                            <label for="distt">city/town</label>
                            <input type="text" class="form-control" name="distt" id="distt" placeholder="" value="{{$fdata->distt}}" required>
                            <div class="invalid-feedback">
                                city/town required.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="pincode">pincode</label>
                            <input type="number" class="form-control" name="pincode" id="pincode" value="{{$fdata->pincode}}" required>
                            <div class="invalid-feedback">
                                pin code required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Tell us about Yourself.</label>
                        <textarea class="form-control" name="about_us" id="exampleFormControlTextarea1" rows="3" maxlength="250">{{$fdata->about_us}}</textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">What <span class='text-muted'>(you think/know)</span> is merchent navy?</label>
                        <textarea class="form-control" name="what_mn" id="exampleFormControlTextarea1" rows="3" maxlength="250">{{$fdata->what_mn}}</textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Why you want to Join Merchant Navy?</label>
                        <textarea class="form-control" name="why_mn" id="exampleFormControlTextarea1" rows="3" maxlength="250">{{$fdata->why_mn}}</textarea>
                        <div class="invalid-feedback">
                            min. 50 max 250 *requried.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Any relative in merchant navy<span class="text-muted">(optional)</span></label>
                        <textarea class="form-control" name="rel_mn" id="exampleFormControlTextarea1" maxlength="50" rows="1">{{$fdata->rel_mn}}</textarea>
                        <div class="invalid-feedback">
                            optional.
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
