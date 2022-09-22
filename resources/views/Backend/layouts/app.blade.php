<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/sweet-alert/sweetalertt2.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/ckeditor/samples/css/samples.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/ckeditor/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('Backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('Backend/assets/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('Backend/assets/images/logo.svg')}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{route('home')}}"><img src="{{asset('Backend/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('Backend/assets/images/faces/face15.jpg')}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin.productList')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Ürün Listesi</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                    <span class="menu-title">Ürün İşlemleri</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.productAdd')}}">Ürün Ekleme</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.categoryList')}}">Category Listesi</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Form Elements</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                    <span class="menu-title">Documentation</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('Backend/assets/images/logo-mini.svg')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                            <input type="text" class="form-control" placeholder="Search products">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            <h6 class="p-3 mb-0">Projects</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-file-outline text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-web text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">UI Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-layers text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all projects</p>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-view-grid"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="count bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('Backend/assets/images/faces/face4.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('Backend/assets/images/faces/face2.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('Backend/assets/images/faces/face3.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">4 new messages</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event today</p>
                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-link-variant text-warning"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Launch Admin</p>
                                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all notifications</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="{{asset('Backend/assets/images/faces/face15.jpg')}}" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>

                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                               class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                                @csrf
                            </form>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper ">
                @yield('content')
            </div>
            <footer class="footer ">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>

        <!-- partial -->

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('Backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('Backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('Backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('Backend/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('Backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('Backend/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<script src="{{asset('Backend/assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('Backend/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('Backend/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('Backend/assets/js/misc.js')}}"></script>
<script src="{{asset('Backend/assets/js/settings.js')}}"></script>
<script src="{{asset('Backend/assets/js/todolist.js')}}"></script>
<script src="{{asset('Backend/assets/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('Backend/assets/ckeditor/samples/js/sample.js')}}"></script>
<script src="{{asset('Backend/assets/sweet-alert/sweetalert2.all.js')}}"></script>

<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('Backend/assets/js/dashboard.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
@include('sweetalert::alert')
<script>


    var description =CKEDITOR.replace('description',{
        extraAllowedContent: 'div',
        height:150
    });

    var features =CKEDITOR.replace('features',{
        extraAllowedContent: 'div',
        height:150
    });
</script>

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr("content")
        }
    });


    $('.changePostStatus').click(function ()
    {
        //let educationID = $(this).data('id');
        let productID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı
        let self=$(this);
        $.ajax({
            url:"{{route('admin.productChangeStatus')}}",
            // method:"POST"
            type:"POST",
            async:false,
            data : {
                productID:productID
            },
            success:function (response)
            {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı',
                    text: response.productID+" ID'li kayıt durumu "+response.newStatus+" olarak güncellenmiştir",
                    confirmButtonText:"Tamam",

                });

                if (response.status==1)
                {
                    self[0].innerHTML="Satışta";
                    self.removeClass("btn-danger");
                    self.addClass("btn-success");
                }
                else if(response.status==0)
                {
                    self[0].innerHTML="Satış Dışı";
                    self.remove("btn-success");
                    self.addClass("btn-danger");
                }

            },
            error:function ()
            {

            }
        });



    });

    $('.deletePost').click(function () {
        //let educationID = $(this).data('id');
        let productID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı

        Swal.fire({
            title: productID+"Emin Misiniz",
            text: productID+" ID'li Ürünü Silmek İstiyor musunuz?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet',
            cancelButtonText: "Hayır",
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('admin.productDelete')}}",
                    // method:"POST"
                    type:"POST",
                    async:false,
                    data : {
                        productID:productID
                    },
                    success:function (response)
                    {
                        console.log(response)
                        Swal.fire({
                            icon: 'success',
                            title: 'Başarılı',
                            text:  "Silme İşlemi Başarılı",
                            confirmButtonText:"Tamam",

                        });
                        $("tr#"+productID).remove();




                    },
                    error:function ()
                    {

                    }
                });
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })


    });

    var description =CKEDITOR.replace('description',{
        extraAllowedContent: 'div',
        height:150
    });





</script>

<!-- End custom js for this page -->
</body>
</html>
