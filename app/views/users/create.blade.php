@extends('layouts.default.default')
@section('usersCreate')

<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading text-center" style="background: #506463; color: #fff;">
                            <h3>New User Create Form</h3>
                        </header>
                        <div class="panel-body">
                            <div class="form">

                                <form class="cmxform form-horizontal" id="" method="post" action="{{URL::route('users.store')}}">
                                    <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">User name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="name" name="user_name" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="role" class="control-label col-lg-3">User Role</label>
                                        <div class="col-lg-3">
                                            <select class="form-control m-bot15" name="role">
                                                <option value="admin">Admin</option>
                                                <option value="admin">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="designation" class="control-label col-lg-3">Designation</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="designation" name="designation" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mail" class="control-label col-lg-3">E-mail</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="designation" name="mail" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="password" name="password" type="password" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="passwordagain" class="control-label col-lg-3">Password Again</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="passwordagain" name="passwordagain" type="password" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Create User</button>
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