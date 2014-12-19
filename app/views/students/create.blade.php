@extends('layouts.default.default')
@section('studentsCreate')
<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading text-center" style="background: #506463; color: #fff;">
                            <h3>আবাসিক/দ্বৈতাবাসিক হওয়ার আবেদন ফরম</h3>
                        </header>
                        <div class="panel-body">
                            <div class="form">

                                <form class="cmxform form-horizontal" id="" method="post" action="{{URL::route('students.store')}}">
                                    <div class="form-group ">
                                        <label for="name-english" class="control-label col-lg-2">Student's name</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="name-english" name="nameE" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="name-bangla" class="control-label col-lg-2">ছাত্রের নাম (বাংলা)</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="name-bangla" name="nameB" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="father-english" class="control-label col-lg-2">Father's name</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="father-english" name="fnameE" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="father-bangla" class="control-label col-lg-2">পিতার নাম (বাংলা)</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="father-bangla" name="fnameB" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="father-phone" class="control-label col-lg-2">Father's phone</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="father-phone" name="fphone" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mother-english" class="control-label col-lg-2">Mother's name</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="mother-english" name="mnameE" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mother-bangla" class="control-label col-lg-2">মাতার নাম (বাংলা)</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="mother-bangla" name="mnameB" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mother-phone" class="control-label col-lg-2">Mother's phone</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="mother-phone" name="mphone" type="text" />
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group ">
                                        <label for="class" class="control-label col-lg-2">Class</label>
                                        <div class="col-lg-2">
                                            <select name="class" class="form-control m-bot15">
                                                <option>Bachelors</option>
                                                <option>Masters</option>
                                            </select>
                                        </div>
                                        <label for="dept" class="control-label col-lg-1">Department</label>
                                        <div class="col-lg-3">
                                            <select class="form-control m-bot15" name="dept">
                                                
                                                @foreach($depts as $dept)
                                                	<option value="{{$dept->dname}}">{{$dept->dname}}</option>
                                                @endforeach

                                                
                                            </select>
                                        </div>
                                        <label for="roll" class="control-label col-lg-1">Roll No.</label>
                                        <div class="col-lg-2">
                                            <input class=" form-control" id="roll" name="roll" type="number" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="regno" class="control-label col-lg-2">Registration No.</label>
                                        <div class="col-lg-4">
                                            <input class=" form-control" id="regno" name="regno" type="text" />
                                        </div>
                                        <label for="session" class="control-label col-lg-2">Reg. Session</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="session" name="session" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curseesion" class="control-label col-lg-2">Current Session</label>
                                        <div class="col-lg-4">
                                            <input class=" form-control" id="cursession" name="acyear" type="text" />
                                        </div>
                                        <label for="year" class="control-label col-lg-2">Year</label>
                                        <div class="col-lg-1">
                                            <select class="form-control m-bot15" name="year">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <label for="semester" class="control-label col-lg-1">Semester</label>
                                        <div class="col-lg-1">
                                            <select class="form-control m-bot15" name="semester">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="presentaddress" class="control-label col-lg-2">Present Address</label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="presentaddress" name="praddress" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="permaaddress" class="control-label col-lg-2">Permanent Address</label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="permaaddress" name="pmaddress" type="text" />
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group ">
                                        <label for="mobile" class="control-label col-lg-2">Mobile</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="mobile" name="phone" type="text" />
                                        </div>
                                        <label for="blood" class="control-label col-lg-2">Blood group</label>
                                        <div class="col-lg-1">
                                            <input class=" form-control" id="blood" name="bgroup" type="text" />
                                        </div>
                                        <label for="birthdate" class="control-label col-lg-1">Birthdate</label>
                                        <div class="col-lg-2">
                                            <input class=" form-control" id="birthdate" name="dob" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="email" name="email" type="email" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="" class="control-label col-lg-3" style="font-weight: bold;">Local Guardian(In Dhaka):</label>
                                    </div>
                                    <div class="form-group ">
                                        <label for="guardianname" class="control-label col-lg-2">Full Name</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="guardianname" name="lgname" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="guardianmail" class="control-label col-lg-2">Local Guardian Address</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="guardianmail" name="lgaddress" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="guardianphone" class="control-label col-lg-2">Phone</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="guardianphone" name="lgphone" type="text" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="" class="control-label col-lg-3" style="font-weight: bold;">In case of Emergency Contact:</label>
                                    </div>
                                    <div class="form-group ">
                                        <label for="emergencyname" class="control-label col-lg-2">Full Name</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="emergencyname" name="icname" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="emergencyaddress" class="control-label col-lg-2">Address</label>
                                        <div class="col-lg-8">
                                            <input class=" form-control" id="emergencyaddress" name="icaddress" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="emergencyphone" class="control-label col-lg-2">Phone</label>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="emergencyphone" name="icphone" type="text" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="reason" class="control-label col-lg-2">Reason of apply for Seat at Hall</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="reason" name="reason" type="text" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="expecteddate" class="control-label col-lg-2">Expected date of Graduation</label>
                                        <div class="col-lg-4">
                                            <input class=" form-control" id="expecteddate" name="edog" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expecteddate" class="control-label col-lg-2">Residential Status</label>
                                        <div class="col-lg-4">
                                            <select class="form-control m-bot15" name="status">
                                                <option>Non-residential</option>
                                                <option>Residential</option>
                                                <option>Doubler</option>
                                                <option>Graduated</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    @stop