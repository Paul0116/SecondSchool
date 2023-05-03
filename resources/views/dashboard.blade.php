@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
          @if(Session::has('error'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{Session::get('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <br>
        @endif
        
        <!-- end page title -->

    

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                       
                        <h4 class="card-title mb-12">Latest Enrollees</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                    <th>Email</th>
                    <th>Courses</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @foreach($students as $student)
                    <tr>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                        <td class="border px-4 py-2">{{ $student->email }}</td>
                        <td class="border px-4 py-2">{{ $student->courses }}</td>
                    </tr>    @endforeach
                                </tbody>
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
           
        </div>
        <!-- end row -->
    </div>
    
</div>
<!-- End Page-content -->
@endsection