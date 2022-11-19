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
                                <textarea name="bio_description" class="bio-r" id="bio-r" cols="30" rows="5"
                                    placeholder="Bio / Description"></textarea>
                            </div>

                            <div class="row-r">
                                <label for="country" class="label-r">Country</label>
                                <input type="text" name="country" class="inputs-r">

                            </div>

                        </div>
                    </div>

                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Update Your Password</h3>
                            <p class="form-info-par-r">Change your password.</p>
                        </div>

                        <div class="fill-forms-r">

                            <div class="row-r">
                                <label for="old_password" class="label-r">Old Password</label>
                                <input type="password" name="old_password" id="old_password" class="inputs-r"
                                    placeholder="Old Password">

                            </div>

                            <div class="row-r">
                                <label for="new_password" class="label-r">New Password</label>
                                <input type="password" name="new_password" class="inputs-r">
                            </div>

                            <div class="row-r">
                                <label for="confirm_password" class="label-r">Confirm Password</label>
                                <input type="password" name="confirm_password" class="inputs-r"
                                    placeholder="Confirm Password">
                            </div>

                        </div>
                    </div>

                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Profile Settings</h3>
                            <p class="form-info-par-r">Update your public profile with relevant and meaningful
                                information.</p>
                        </div>

                        <div class="fill-forms-r">

                            <div class=" rows-r ">
                                <label for="profile_picture" class="myfile-r">

                                    <img class="svg-image-r" name="profile_picture" style="width: 50px; height: 50px;"
                                        src="svg.png" />
                                    <button onclick="document.getElementById('profile_picture').click()"
                                        class="myfile-btn-r">Profile Picture </button>
                                </label>
                                <input type='file' id="profile_picture" name="profile_picture" style="display:none"
                                    class="inputs-r">

                            </div>

                            <div class="row-r">
                                <label for="" class="label-r">Description</label>
                                <textarea name="bio" class="bio-r" id="bio-r" cols="30" rows="5"
                                    placeholder="Description"></textarea>
                            </div>


                            <div class="social-groups" id="social-groups">
                                <div class="inputs-r social-link-r">
                                    <i class="fa-brands fa-facebook social-icon"></i>
                                    <input type="text" name="facebook" class="face" placeholder="Facebook">
                                </div>

                                <div class="inputs-r social-link-r">
                                    <i class="fa-brands fa-twitter social-icon"></i>
                                    <input type="text" name="twitter" class="face" placeholder="Twitter">
                                </div>

                                <div class="inputs-r social-link-r">
                                    <i class="fa-brands fa-linkedin social-icon"></i>
                                    <input type="text" name="linkedin" class="face" placeholder="LinkedIn">
                                </div>

                                <div class="inputs-r social-link-r">
                                    <i class="fa-brands fa-instagram social-icon"></i>
                                    <input type="text" name="instagram" class="face" placeholder="Instagram">
                                </div>

                            </div>

                        </div>
                    </div>

                    <button type="submit" class="save-r" name="save"><i
                            class="fa-solid fa-floppy-disk"></i>Save</button>
                </form>
            </div>
        </div>
        <!-- End of container Class -->
        <script src="js/script.js"></script>
</body>

</html>