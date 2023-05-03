


<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="AsiaSchool" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- App favicon -->
        <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.png') }}">
       
        <!-- jquery.vectormap css -->
        <link href=" {{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href=" {{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href=" {{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href=" {{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href=" {{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href=" {{ asset('backend/assets/css/app.min.css ') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <link href="{{ asset('backend/assets/css/icons.min.css" rel="stylesheet" type="text/css') }}" />
        <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet')}}" type="text/css" />
        
        <!-- Responsive datatable examples -->
        <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     
       
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
        <link href="{{asset('backend/assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css')}}" />
       
      <style>
        h1,h2,h3,h4,h5,div,a,p,span, .menu-title{
          font-family: 'Poppins', sans-serif !important;
        }
        .nav-tabs-custom .nav-item .nav-link.active {
          color: #ffffff;
          background: #282a3a;
        }
        .nav-tabs-custom .nav-item .nav-link::after{
          background: #282a3a;
        }
        .menu-title{
          color: #282a3a;
          opacity: 1;
        }
        </style>
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.body.header')
            
            <!-- ========== Left Sidebar Start ========== -->
           @include('admin.body.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')
               @include('admin.body.footer')
               
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

               

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src=" {{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        
        <!-- apexcharts -->
        <script src=" {{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- jquery.vectormap map -->
        <script src=" {{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Required datatable js -->
        <script src=" {{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src=" {{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src=" {{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src=" {{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

       
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>
      
        <!-- App js -->
         <script src=" {{ asset('backend/assets/js/app.js') }}"></script>
       
        
        <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

        <!-- init js -->
        <script src="{{ asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Responsive Table js -->
        <script src="{{ asset('backend/assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ asset('backend/assets/js/pages/table-responsive.init.js')}}"></script>

        <script src="{{ asset('backend/assets/js/validate.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('backend/assets/js/code.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>
      
        <script>

       $(function(){

              $(document).ready(function () {
              $('#datatable_all').DataTable();
              $('#datatable_Admin').DataTable();
              $('#datatable_Staff').DataTable();
              $('#datatable_Professor').DataTable();
            $('#datatable_Student').DataTable();
        });
    $(document).on('click','#Deactivate',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Deactivate This User?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, deactivate it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deactivated!',
                        'Your file has been Deactivated.',
                        'success'
                      )
                    }
                  }) 


    });
    $(document).on('click','#Delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Item has been Deactivated.',
                        'success'
                      )
                    }
                  }) 


    });

  });
  
             toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
             "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
   }
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;
           
               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;
           
               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;
           
               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break; 
            }
            @endif 
           
           </script>
    </body>

</html>