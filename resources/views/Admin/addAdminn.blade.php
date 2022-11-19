Robera, [5/3/2022 8:28 PM]
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/teacherStyle.css">
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
                    <a href="editAccount.html" class="aside-child-r">
                        <i class='fas fa-user-edit fa-lg'></i>

                        <h3>Edit Account</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="uploadTeacher.html" class="aside-child-r">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Upload Teacher</h3>
                    </a>
                </div>


                <div class="overview-r">
                    <a href="uploadVideo.html" class="aside-child-r">
                        <i class="fas fa-video"></i>
                        <h3>Upload Videos</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="courses.html" class="aside-child-r">
                        <i class="fas fa-video"></i>
                        <h3>Courses</h3>
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
                    <button type="submit" name="button_search" class="button-search"> <i class="fa-solid fa-magnifying-glass icons-r"></i></button>
                </form>


                <a href="approveTeacher.html">
                    <i class="fa-regular fa-bell icons-r"></i>

                </a>

                <a href="#">
                    <i class="fa-regular fa-message icons-r"></i>
                </a>

                <a href="#">
                    <i class="fa-regular fa-user icons-r"></i>
                </a>


            </div>

            <!-- Body Content -->
            <div class="content-r">
                <div class="content-header-r">
                    <h1>Edit Account</h1>
                </div>

                <form class="content-cards-r">

                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Basic Information</h3>
                            <p class="form-info-par-r">Edit your account details and settings.</p>
                        </div>


           <div class="fill-forms-r">
                            <div class=" rows-r ">

                                <div class="row1-r">
                                    <label for="fname" class="label-r">First Name</label>
                                    <input type="text" name="fname" class="inputs-r">
                                </div>

                                <div class="row1-r">
                                    <label for="" class="label-r">Last Name</label>
                                    <input type="text" name="lname" class="inputs-r">
                                </div>
                            </div>

                            <div class="row-r">
                                <label for="bio_description" class="label-r">Bio / Description</label>
                                <textarea name="bio_description" class="bio-r" id="bio-r" cols="30" rows="5" placeholder="Bio / Description"></textarea>
                            </div>

                            <div class="row-r">
                                <label for="country" class="label-r">Country</label>
                                <input type="text" name="country" class="inputs-r">

                            </div>

                        </div>
                    </div>

                  

                    <button type="submit" class="save-r" name="save"><i class="fa-solid fa-floppy-disk"></i>Save</button>
                </form>
            </div>

            
        </div>

    </div>
    <!-- End of container Class -->
    <script src="JS/app.js"></script>

</body>

</html>