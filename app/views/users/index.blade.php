@extends('layouts.default.default')
@section('usersIndex')
<section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading text-center" style="background: #1fb5ad; color: #fff;">
                            <h3>User List</h3>
                        </header>
                        <div class="panel-body">
                            <table class="table  table-hover general-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Role</th>                                        
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->role}}</td>                                      
                                        <td>
                                        
                                        
                                        {{Form::open(['route'=>['users.destroy',$user->id],'method'=>'delete'])}}
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Delete this User </button></td>
                                        {{Form::close()}}
                                        
                                        
                                    </tr>
                                @endforeach
                                    
                                    

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@stop