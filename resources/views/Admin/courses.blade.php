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
<link type="text/css" href="/css/perfect-scrollbar.css" rel="stylesheet">
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

    <!-- Container body Class -->
    <div class="container-fluid-r">

        <!-- Navbar on Container -->

        <div class="navbar-container-r">
            <!-- <input type="search" class="search-r" name="search" id="" placeholder="Search"> -->
            {{-- ***********search here starts here************** --}}
            <form action = "search-course" method="POST" class="search-r" >
                @csrf
                <input type="search" class="search-input-r" name="search" id="" placeholder="Search">
                <button type="submit" class="button-search"> <i
                        class="fa-solid fa-magnifying-glass icons-r"></i></button>
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
                    <h1>Courses</h1>
                </div>

    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 6px; background-color: #f9f9f9;">

        <div class="container-fluid page__container" style="width: 100%; ">
            <form action="#" class="mb-3 border-bottom pb-3">
                <div class="d-flex"
                    style="display: flex; justify-content: space-between; margin-bottom: 2rem;">
              {{-- ***********search here starts here************** --}}
                {{-- <form action="">
                    <div class="search-form mr-3 search-form--light" style="display: flex;">
                        <input type="text" class="form-control" placeholder="Search courses"
                            style="width:100%;" id="searchSample02" required>
                        <button type="submit" class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>
                </form> --}}
            {{-- ************search here starts ends************* --}}

                    <div class="form-inline ml-auto">
                        <div class="form-group mr-3">
                            <label for="custom-select" class="form-label mr-1">Category</label>
                            <select id="custom-select" class="form-control custom-select"
                                style="width: 200px;">
                                <option selected="">All categories</option>
                                <option value="1">Vue.js</option>
                                <option value="2">Node.js</option>
                                <option value="3">GitHub</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="published01" class="form-label mr-1">Status</label>
                            <select id="published01" class="form-control custom-select"
                                style="width: 200px;">
                                <option selected="">All</option>
                                <option value="1">New Releases</option>
                                <option value="3">Old one</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <hr>

            <div class="g" style="background-color: #742020;
            display: flex;
            flex-wrap: wrap;
            
            height: 55vh;
        row-gap: 2em;
    /* background-color: #fff; */
    color: #262626;
        background-color: #f9f9f9 !important;
    overflow-y: auto;  ">
               
             {{-- starts courses card --}}

                          @foreach($courses as $course)
                            <div class="col-md-3">
                                <div class="card card__course" style="background: rgba(231, 231, 231, 0.849); border: 1px solid #ccc;
                                box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);">
                                    <div
                                        class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column"
                                            href="#" style="color: rgb(32, 31, 31);">
                                            <span><img src="{{$course->course_thumb}}" class="mb-1"
                                                    style="width:100%; height: 100%;" alt="logo"></span>
                                            <span class="course__title">{{$course->course_name}}</span>
                                            <span class="course__subtitle">Learn the Basics</span>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <div class="mb-2">
                                            <span class="mr-2">
                                                <a href="#" class="rating-link active"><i
                                                        class="fa fa-like">like</i></a>
                                            </span>
                                            <strong>47</strong><br />

                                        </div>
                                        <div class="d-flex align-items-center"
                                            style="display: flex; justify-content: space-between;">
                                            <strong class="h4 m-0">{{$course->course_fee}}</strong>
                                            <a href="#" class="btn btn-primary ml-auto"><i
                                                    class=" fa fa-shop"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            {{-- end courses card --}}

                       </div>

                        <hr>


                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End of container Class -->
    <script src="/script.js"></script>
</body>

</html>