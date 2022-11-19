<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <title>Teachers Table</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="/https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="/https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

    <!-- cdnjs fontawesome -->
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/tstyle.css">
</head>

<body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span
        >
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2" />
    <div
      class="collapse navbar-collapse w-auto max-height-vh-100"
      id="sidenav-collapse-main"
    >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a
            class="nav-link text-white active bg-gradient-primary"
            href="../dashboard"
          >
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center"
            >
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="studentTable.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Student</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="teacherstabel.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Teacher</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="billing.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="notifications.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Account pages
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sign-in.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sign-up.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
            </ul>
        </div>
        <!-- <div class="sidenav-footer position-absolute w-100 bottom-0">
      <div class="mx-3">
        <a
          class="btn bg-gradient-primary mt-4 w-100"
          href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
          type="button"
          >Upgrade to pro</a
        >
      </div>
    </div> -->
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                            Teachers
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Teachers</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <!-- add teacher started -->
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <a href="#" style="padding-right: 4px;">
                                <input type="button" class="form-control" id="add-teacher" value="Add Teacher" /></a>
                        </div>
                    </div>
                    <!-- add teacher ended -->
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="search" class="form-control" />
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="team-2.jpg" class="avatar avatar-sm me-3" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <h4 class="teacher-list">Teachers List</h4>
        <div class="container " id="tool-check">
              @foreach($data as $datas)
            <div class="card">

                <div class="card-header-1">
                    <img src="<?php echo $datas->profile; ?>" alt="rover" />
                </div>
                <div class="card-body-1">
                    <span class="tag tag-teal">{{$datas->catagory}}</span>
                    <h4 class="teacher-Name">
                        <span>{{$datas->first_name}} {{$datas->middle_name}}</span>
                    </h4>
                    <p>
                    {{$datas->profession}}
                    </p>
                    <div class="btn-profile">
                        <a href="{{url('teachers-profile',$datas->teacher_id)}}" class="a-btn-profile ">
                            View
                           </a>
                        <a href="{{url('delete-teacher',$datas->teacher_id)}}" class="delete-profile"><i class="fa fa-trash del-i" aria-hidden="true"> Delete</i> </a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

        <footer class="footer py-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Powered <i class="fa fa-heart"></i> by
                            <a href="http://deboengineering.com" class="font-weight-bold" target="_blank">Debo Engineering</a
                  >
                
                </div>
              </div>
             
            
            </div>
          </div>
        </footer>      </div>

    </main>

    <!-- Tool Tips started -->
    <div class="cover-delete"></div>
    <div class="delete-card">
        <div class="delet-header">
            <h5 class="delet-head">Delete Robera Insarmu?</h5>
            <i class="fa fa-remove" style="font-size:24px"></i>

         

        </div>
        <div class="delet-hor"></div>
        <p> <span class="par-teacher-name">Robera</span>
             will no longer be part of Debo Tutor.</p>
        <div class="delet-hor"></div>
        <div class="btn-profile">
            <button  class="delete-profile " id="cancel-del">
                Cancel
               </button>
                            <a href="#" class="a-btn-profile " id="confirm">
                Confirm
               </a>
                        </div>
                        <!-- <div class="delet-confirm">

        </div> -->

                    </div>
                    <!-- tool tips ended -->

                    <!--   Core JS Files   -->
                    <script src="../assets/js/core/popper.min.js"></script>
                    <script src="../assets/js/core/bootstrap.min.js"></script>
                    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
                    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
                    <script>
                        var win = navigator.platform.indexOf("Win") > -1;
                        if (win && document.querySelector("#sidenav-scrollbar")) {
                            var options = {
                                damping: "0.5",
                            };
                            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
                        }
                    </script>
                    <!-- Github buttons -->
                    <script async defer src="https://buttons.github.io/buttons.js"></script>
                    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
                    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>

                    <!-- Tool tip js -->
                    {{-- <script src="../assets/js/tooltip.js"></script> --}}
                  
                    <!-- Tool tip js ended -->

</body>

</html>