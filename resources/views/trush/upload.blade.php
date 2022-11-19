<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/teacher.css">
    <title>Teacher's page</title>
</head>
<!-- <input type="file" name="video" accept="video" id="video1"> -->

<body>
    <header class="main-header">
        <nav class="nav-bar">
            <h2 class="nav-title">
                Teacher's p<span>age</span>
            </h2>
            <div class="nav-list">
                <ul class="list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Upload video</a></li>
                    <!-- <li><a href="#">Contact</a></li> -->

                </ul>
            </div>
        </nav>
        <div class="main-title">
            <div class="main-box">
                <h1 class="main-main-title">
                    Welcome to <span> our wesite and thanks for </span>visting us
                </h1>
            </div>

        </div>
    </header>
    <section class="teacher">
        <div class="teacher-main">
            <h1 class="main-main-title">
                Upload v<span>ideo</span>
            </h1>
            <div class="dash">.</div>
            <div class="frist-inputs">

            <!-- course form start -->

            

            <form action="add-course" method = "POST" enctype = "multipart/form-data">
                    @csrf
                <div class="col-box2">

                        <div class="col2">
                                <div class="col-box2">
                                    <h3>Course Number</h3>
                                    <input type="text" name = "course_no" placeholder = "Course Number">
                                    <!-- <textarea name="course_no" id="des" ></textarea> -->
                                </div>

                                <div class="col-box2">
                                    <h3>Course Name</h3>
                                    <input type="text" name = "course_name" placeholder = "Course Name">
                                    <!-- <textarea name="course_no" id="des" ></textarea> -->
                                </div>

                                <div class="col-box">
                                <h3>Add the categorie of video</h3>
                                <select name="course_catagory" id="">
                                    <option value="Animation">Animation</option>
                                    <option value="Art">Art</option>
                                    <option value="Graphics">Graphics</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Painting">Painting</option>
                                    <option value="Music">Music</option>
                                    <option value="Other">Other Type</option>
                                </select>
                                <!-- <input type="text" name="catagory" id="cat" placeholder="Add catagorie"> -->
                            </div>
                                <h3>Course Description</h3>
                                <!-- <input type="text" name = "course_no" placeholder = "Course Number"> -->
                                <textarea name="course_description" id="des" ></textarea>
                            </div>
                            <div class="col-box2">
                                <h3>Course Detail</h3>
                                <!-- <input type="text" name = "course_no" placeholder = "Course Number"> -->
                                <textarea name="course_detail" id="des" ></textarea>
                            </div>

                            <div class="col-box2">
                                <h3>Add tumbnail of the video</h3>
                                <input type="file" name="course_thumb" id="tumbnail"  placeholder="Add image"
                                    >
                            </div>

                            <div class="col-box2">
                                <h3>Choose Video</h3>
                                <input type="file" name="course_intro" id="videow" placeholder="Upload video">
                            </div>
                            <div class="col-box2">
                                    <h3>Course fee</h3>
                                    <input type="text" name = "course_fee" placeholder = "Course Name">
                                    <!-- <textarea name="course_no" id="des" ></textarea> -->
                                </div>



                            <div class="sumb">

                        <input id="sumbit" type="submit" value="Detail">
                    </div>

                </form>

                <!-- course form end -->


                <!-- video start -->

                <form action="upload-video" id="form-i" method = "POST" enctype = "multipart/form-data">

                @csrf
                    <div class="inputs-row">
                        <div class="col">
                            <!-- <div class="col-box">
                                <h3>Add video Title</h3>
                                <input type="text" name="title" id="title" placeholder="Add Title here">
                            </div> -->
                         
                            <!-- <div class="col-box">
                                <h3>Duration of video</h3>
                                <input type="time" name="duration" id="time" placeholder="Duration">
                            </div> -->
                            <!-- <div class="col-box">
                                <h3>Date Modified</h3>
                                <input type="datetime" name="modified" id="date" placeholder="Add Date Modified"
                                    required>
                            </div> -->
                        </div>
                        <div class="col2">
                            <!-- <div class="col-box2">
                                <h3>Course Number</h3>
                                <input type="text" name = "course_no" placeholder = "Course Number">
                                <!-- <textarea name="course_no" id="des" ></textarea> -->
                            <!-- </div> -->
                            <div class="col-box2">
                                    <h3><Title></Title></h3>
                                    <input type="text" name = "title" placeholder = "Video title">
                                    <!-- <textarea name="course_no" id="des" ></textarea> -->
                                </div>

                            <div class="col-box2">
                                <h3>Add tumbnail of the video</h3>
                                <input type="file" name="thumb" id="tumbnail"  placeholder="Add image"
                                    required>
                            </div>

                            <div class="col-box2">
                                <h3>Choose Video</h3>
                                <input type="file" name="video" id="videow" placeholder="Upload video">
                            </div>
                            </div>

                          

                        </div>
                    
                    <div class="sumb">

                        <input id="sumbit" type="submit" value="Upload">
                    </div>

                </form>

                <!-- video ends -->

                
            </div>
        </div>
    </section>
    <!-- <footer>
        <div class="contact">
            <p class="foot-p">Fill all box on above and try to write clear discription</p>
            <p class="fola"> powered by &copy;<span>Debo engneering</span></p>
        </div>
    </footer> -->
    <script src="/teacher.js" defer></script>
</body>

</html>