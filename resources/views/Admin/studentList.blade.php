<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Admin Dashboard</title>
    <link rel="stylesheet" href="/teacherStyle.css">
    <link rel="stylesheet" href="/coursestyle.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" href="/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="full-screen-preview-r">
    <div class="preview__header-r" data-view="ctaHeader">

        <a class="header-Debo-Tutor" href="#">Debo SkillShare</a>

    </div>

    <div class="container-r">

        <!-- Aside Class -->
        <aside class="debo-aside">
            <!-- <div class="overview-r">
                <span class="icons-r">Icons</span>
                <h3>Overview</h3>
            </div> -->
            

                <div class="student-dashboard-r">
                    <h4 class="admin-class-r">Admin</h4>
    
                    <div class="overview-r">
                        <a href="dashboard" class="aside-child-r">
                            <i class="fa-solid fa-gauge icons-r"></i>
                            <h3>Dashboard</h3>
                        </a>
                    </div>
               {{-- @if(session::has('super'))
                 @if(session::get('super') == 1) --}}
                    <div class="overview-r">
                        <a href="add-admin" class="aside-child-r">
                            <i class='fas fa-user-edit fa-lg'></i>
    
                            <h3>Add Admin</h3>
                        </a>
                    </div>
                    {{-- @endif
                  @endif   --}}
    
                  <div class="overview-r">
                    <a href="teachers" class="aside-child-r">
                        <i class="fas fa-ad"></i>
                        <h3>Teachers</h3>
                    </a>
                </div>
    
                <div class="overview-r">
                    <a href="Students" class="aside-child-r">
                        <i class="fa-solid fa-user-graduate"></i>
                        <h3>Students</h3>
                    </a>
                </div>
    {{-- 
                    <div class="overview-r">
                        <a href="uploadsteacher.html" class="aside-child-r">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h3>Upload Teacher</h3>
                        </a>
                    </div> --}}
    
                    <div class="overview-r">
                        <a href="Courses" class="aside-child-r">
                            <i class="fas fa-file"></i>
                            <h3>Courses</h3>
                        </a>
                    </div>
    
    
                    <div class="overview-r">
                        <a href="uploadingVideo.html" class="aside-child-r">
                            <i class="fas fa-video"></i>
                            <h3>Videos</h3>
                        </a>
                    </div>
                   
                    <div class="overview-r">
                        <a href="notification" class="aside-child-r">
                           <i class="fa-regular fa-bell icons-r"></i>
                           <h3>Notification</h3>
                    </a>
                    </div>


                <ul>

                </ul>
            </div>
        </aside>

        <!-- Container body Class -->
        <div class="container-fluid-r">

            <!-- Navbar on Container -->
            <div class="navbar-container-r">
                <!-- <input type="search" class="search-r" name="search" id="" placeholder="Search"> -->

                {{-- <form class="search-r">
                    <input type="search" class="search-input-r" name="search" id="" placeholder="Search">
                    <button type="submit" class="button-search"> <i
                            class="fa-solid fa-magnifying-glass icons-r"></i></button>
                </form> --}}

                     {{-- ***********search here starts here*************** --}}
            <form action = "search-student" method="POST" class="search-r" >
                @csrf
                <input type="search" class="search-input-r" name="search" id="" placeholder="Search">
                <button type="submit" class="button-search"> <i
                        class="fa-solid fa-magnifying-glass icons-r"></i>Search</button>
            </form>
                   {{-- ************search here starts ends************* --}}


                <a href="approveTeacher.html">
                    <i class="fa-regular fa-bell icons-r"></i>

                </a>

                <a href="feedback.html">
                    <i class="fa-regular fa-message icons-r"></i>
                </a>

                <a href="Teacherprofile.html">
                    <i class="fa-regular fa-user icons-r"></i>
                </a>


            </div>

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
                <div class="mdk-drawer-layout__content">
                    <div class="content-header-r">
                        <h1>Students</h1>
                    </div>
                </div>
                <div class="g" style="background-color: #742020;
                display: flex;
                flex-wrap: wrap;
    
                height: 70vh;
           row-gap: 2em;
     
        color: #262626;
         background-color: #f9f9f9 !important;
       overflow-y: auto;
       padding: 30px 25px;
            ">

                    <div class="col-12" style="width: 100%;">

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Student
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Phone number
                                            </th>
                                            <!-- <th
                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                >
                                  Status
                                </th> -->
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Registered
                                            </th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($students as $student)
                                        <tr>
                                            <td>
                                                <div class="" style="display: flex;gap: 1rem;">
                                                    <div class="d-flex flex-column ">
                                                        <img src="<?php echo $student->profile;?>"
                                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user1"
                                                            width="40px" height="40px" style="border-radius: 50%;" />
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <h6 class="mb-0 text-sm">{{$student->first_name}} {{$student->last_name}}</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            <a href="mailto:{{$student->email}}">{{$student->email}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center" style="align-items: center;">
                                                <span class="text-secondary text-xs font-weight-bold">{{$student->phone_no}}</span>
                                            </td>

                                            <td class="align-middle text-center" style="align-items: center;">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    @if($student->status == 1)
                                                       <span style = "background: rgb(16, 209, 16)">Active</span>
                                                       
                                                @elseif($student->status == 0)
                                                <span style = "background: rgb(237, 51, 14)">Not</span>
                                               @endif
                                            </span>
                                            </td>
                                            <td class="align-middle" style="align-items: center;">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <!-- End of container Class -->
        <script src="script.js"></script>
</body>

</html>