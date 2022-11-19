<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/teacherStyle.css">
    <link rel="stylesheet" href="/coursestyle.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" href="/css/perfect-scrollbar.css" re="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
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
               @if(session::has('super'))
                 @if(session::get('super') == 1)
                    <div class="overview-r">
                        <a href="add-admin" class="aside-child-r">
                            <i class='fas fa-user-edit fa-lg'></i>
    
                            <h3>Add Admin</h3>
                        </a>
                    </div>
                    @endif
                  @endif  
    
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
        <!-- aside class ended -->

        <!-- Container body Class -->
        <div class="container-fluid-r">

            <!-- Navbar on Container -->
            <div class="navbar-container-r">
                <!-- <input type="search" class="search-r" name="search" id="" placeholder="Search"> -->

                <form class="search-r">
                    <input type="search" class="search-input-r" name="search" id="" placeholder="Search">
                    <button type="submit" class="button-search"> <i
                            class="fa-solid fa-magnifying-glass icons-r"></i></button>
                </form>


                <a href="notification">
                    <i class="fa-regular fa-bell icons-r"></i>

                </a>

                <a href="feedback.html">
                    <i class="fa-regular fa-message icons-r"></i>
                </a>

                <a href="Teacherprofile.html">
                    <i class="fa-regular fa-user icons-r"></i>
                </a>


            </div>

            <!-- Body Content -->
            <div class="content-r">
                <div class="content-header-r">
                    <!-- Section Title -->
                    <h1>Add Teachers</h1>
                </div>

                <div class="content-cards-r">

                    <!-- <div class="cards cards2"> -->
                    <div class="cards-r cards2-r ">
                        <div class="new-cards-r">
                            <div class="card-top-r">
                                <div class="card-top-content-r">
                                    <h3 class="form-info-header-r">Pending Requests</h3>
                                    <p class="form-info-par-r">You have {{$count}}+ new requests.</p>
                                </div>

                                <button class="addteacher-r" style="height: 50px; " name="save">Add Teacher</button>
                            </div>

                            <ul class="card-thead-r">
                                <li class="form-info-par-r">Teachers</li>
                                <li class="form-info-par-r">Profession</li>
                                <li class="form-info-par-r">Status</li>

                            </ul>
                            <!-- List of teachers -->
                            @foreach ($data as $data)
                                
                           
                            <div class="teachers-table-r">
                                <div class="teacher-profile-r">
                                    <img src="{{$data->profile}}" alt="Teacher Picture" class="teacher-image-r">
                                    <div class="teacher-info-r">
                                        <h4>{{$data->first_name}} {{$data->middle_name}}</h4>
                                        <p>Teacher</p>
                                    </div>
                                </div>

                                <div class="teacher-info-r">
                                    <h4>{{$data->catagory}}</h4>
                                    {{-- <p>Company Type</p> --}}
                                </div>
                                <a href="{{url('teachers-profile',$data->teacher_id)}}" class="addteacher-r view-r" name="save">View</a>
                                <a href="{{url('approve',$data->teacher_id)}}" class="addteacher-r " name="save">Approve</a>

                                <a href="{{url('delete-teacher',$data->teacher_id)}}" class="addteacher-r decline-r" name="save">Decline</a>
                            </div>
                            @endforeach




                            <!-- List of teachers ended -->




                        </div>

                        <!-- Feedback section -->
                        <div class="feedback-r">

                            <div class="card-top-content-r">
                                <h3 class="form-info-header-r">Student Feedbacks</h3>
                                <a href="#" class="addteacher-r view-r " name="save">View Details</a>
                                <!-- <p class="form-info-par">You have 50+ new requests.</p> -->
                            </div>

                            <div class="teacher-profile-r">
                                <img src="/logos/auth1.jpg" alt="Teacher Picture" class="teacher-image-r">
                                <div class="teacher-info-r">
                                    <h4>Robera Insarmu</h4>
                                    <a href="#">Hey, I am... <span class="right-arrow-r">→</span></a>
                                </div>
                            </div>

                            <div class="teacher-profile-r">
                                <img src="/logos/auth1.jpg" alt="Teacher Picture" class="teacher-image-r">
                                <div class="teacher-info-r">
                                    <h4>Robera Insarmu</h4>
                                    <a href="#">Hey, I am... <span class="right-arrow-r">→</span></a>
                                </div>
                            </div>

                            <div class="teacher-profile-r">
                                <img src="logos/auth1.jpg" alt="Teacher Picture" class="teacher-image-r">
                                <div class="teacher-info-r">
                                    <h4>Robera Insarmu</h4>
                                    <a href="#">Hey, I am... <span class="right-arrow-r">→</span></a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End of container Class -->
    <script src="/script.js"></script>
</body>

</html>