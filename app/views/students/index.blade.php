@extends('layouts.default.default')
@section('studentsIndex')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading text-center" style="background: #1fb5ad; color: #fff;">
                            <h3>ছাত্রদের তালিকা</h3>
                        </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Registration No.</th>
                                <th>Department</th>
                                <th>Session</th>
                                <th>Current Allocation</th>
                                <th>Details</th>
                                <th>Allocate</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($students as $student)
                            	<tr>
	                                <td>{{$student->nameE}}</td>
	                                <td>{{$student->regno}}</td>
	                                <td>{{$student->dept}}</td>
	                                <td>{{$student->session}}</td>
                                    <td>{{$student->fnameB}}</td>
	                                <!-- <td>Floor-3, room-301</td> -->
	                                <td><button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Details </button></td>
	                                <td><button type="button" class="btn btn-info btn-xs"><i class="fa fa-home"></i> allocate </button></td>
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
    <!--main content end-->
@stop