<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Admin Dashboard</title>
    <link rel="stylesheet" href="/teacherStyle.css">
    <link rel="stylesheet" href="/coursestyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" href="css/perfect-scrollbar.css" rel="stylesheet">
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
                    <a href="index.html" class="aside-child-r">
                        <i class="fa-solid fa-gauge icons-r"></i>
                        <h3>Dashboard</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="index.html" class="aside-child-r">
                        <i class='fas fa-user-edit fa-lg'></i>

                        <h3>Edit Account</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="uploadsteacher.html" class="aside-child-r">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Upload Teacher</h3>
                    </a>
                </div>


                <div class="overview-r">
                    <a href="uploadingVideo.html" class="aside-child-r">
                        <i class="fas fa-video"></i>
                        <h3>Upload Videos</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="course.html" class="aside-child-r">
                        <i class="fas fa-file"></i>
                        <h3>Courses</h3>
                    </a>
                </div>
                <div class="overview-r">
                    <a href="studentList.html" class="aside-child-r">
                        <i class="fa-solid fa-user-graduate"></i>
                        <h3>Students</h3>
                    </a>
                </div>
                <div class="overview-r">
                    <a href="TeacherList.html" class="aside-child-r">
                        <i class="fas fa-ad"></i>
                        <h3>Teachers</h3>
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
            <!-- Body Content -->
            <div class="content-r">
                <div class="content-header-r">
                    <h1>Edit Courses</h1>
                </div>

                <form  action="add-course" method="POST" enctype="multipart/form-data"  class="content-cards-r">
                   @csrf
                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Courses Information</h3>
                            <p class="form-info-par-r">Edit your Course details</p>
                        </div>

                        <div class="fill-forms-r">
                            <div class=" rows-r">

                                <div class="row1-r">
                                    <label for="" class="label-r"></label>Course Number</label>
                                    <input type="number" name="course_no" class="inputs-r" min="1">
                                </div>

                                <div class="row1-r">
                                    <label for="" class="label-r"></label>Course Name</label>
                                    <input type="text" name="course_name" class="inputs-r">
                                </div>
                            </div>

                            <div class="row-r">
                                <label for="" class="label-r"></label> Description</label>
                                <textarea name="course_description" class="bio-r" id="bio-r" cols="30" rows="5"
                                    placeholder=" Description"></textarea>
                            </div>

                            <div class="row-r">
                                <label for="" class="label-r"></label> Detail</label>
                                <textarea name="course_detail" class="bio-r" id="bio-r" cols="30" rows="5"
                                    placeholder=" Detail"></textarea>
                            </div>

                            <div class="row-r">
                                <label for="" class="label-r"></label>Course Category</label>
                                <select name="course_catagory" id="" class="inputs-r">
                                    <option value="Art"> Art </option>
                                    <option value="Web Development"> Web Development </option>
                                    <option value="Animation"> Animation </option>
                                    <option value="Graphics"> Graphics </option>
                                    <option value=" Music"> Music </option>
                                    <option value="Life Cycle"> Life Cycle </option>
                                </select>

                            </div>



                        </div>
                    </div>



                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Upload Video</h3>
                            <p class="form-info-par-r">Upload your video.</p>
                        </div>

                        <div class="fill-forms-r">
                            <div class=" rows-r ">
                                <label for="getFile" class="myfile-r">

                                    <img class="svg-image-r" style="width: 50px; height: 50px;" src="svg.png" />
                                    <button onclick="document.getElementById('getFile-r').click()"
                                        class="myfile-btn-r">Thumbnail</button>
                                </label>
                                <input type='file' name="course_thumb" id="getFile-r" class="inputs-r">

                            </div>

                            <div class=" rows-r ">
                                <label for="getFile" class="myfile">

                                    <img class="svg-image-r" style="width: 50px; height: 50px;" src="svg.png" />
                                    <button onclick="document.getElementById('getFile-r').click()"
                                        class="myfile-btn">Course
                                        Intro</button>
                                </label>
                                <input type='file' name="course_intro" id="getFile-r"  class="inputs-r">

                            </div>

                            <div class="row-r">
                                <label for="" class="label-r"></label>Course Fee</label>
                                <input type="text" name="course_fee" class="inputs-r">
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="save-r">
                        <i class="fa-solid fa-upload"></i>Upload</button>
                </form>
            </div>
        </div>

    </div>
    <!-- End of container Class -->
    <script src="script.js"></script>
</body>

</html>