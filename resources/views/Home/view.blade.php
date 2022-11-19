



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LosePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styleIt.css">
</head>

<body>
    <section class="letter">
  
        <!-- A class -->
        

           
       
        <div class="A">
            <div class="A1">
                <video src="<?php echo $course->course_intro;?>" controlslist="nodownload" class="A1-video" controls alt="videocontent" controls></video>
            </div>
            <div class="A2">
                <h1>{{$course->course_name}}</h1>
                <h3>{{$course->course_description}}</h3>
                <p>created by <a href="#">{{$course->first_name}} {{$course->middle_name}}</a></p>
                <div class="A21">
                    <i class="fa fa-clock-o b11-icon"></i>
                    <p>last update 3/2022</p>
                </div>
            </div>
        </div>
    

        <!-- course Section start-->
        <div class="course-section">
            <!-- B class -->
            <div class="B">
             
                <div class="B1-h">
                    <h2>Course Content</h2>
                    <p>{{$counts}} Lectures</p>
                </div>
              
                <div class="B1 ok">
                    <div class="B11">

                        <i class="fa fa-chevron-circle-down b11-icon ok"></i>
                        <p class="ok">Introduction</p>
                    </div>
                    <p class="ok">3 hour</p>
                </div>

                <!-- Bb class start -->

               
                @foreach($data as $datas)
                <!-- <div class="Bb">
                    <div class="B1">
                        <div class="B11">
                            <i class="fa fa-play-circle b11-icon ok1"></i> -->
                           <a href="{{url('show',$datas->vid_id)}}"> <p>{{$datas->title}}</p></a>
                           @if(Session::has('loginId'))
                             @if(Session::get('student') == 2)
                               @if(Session::get('status') == 1)
                                  <h1>not</h1>
                               @endif
                             @endif
                             @elseif(!Session::has('loginId'))
                             <h1>locked</h1>
                           @endif  
                            
                        <!-- </div>
                        <p>1 hour</p>
                    </div> -->
                    @endforeach
                    
              

                    <!-- <div class="B1">
                        <div class="B11">
                            <i class="fa fa-play-circle b11-icon ok1"></i>
                            <p>two</p>
                        </div>
                        <p>1 hour</p>
                    </div> -->
                   

                </div>
                
                
                <!-- Bb class ended -->

                <div class="B1">

                    <div class="B11">
                        <i class="fa fa-file b11-icon oks"></i>
                        <p>Resource</p>
                    </div>
                    <p>3 pdf</p>
                </div>

                <!-- Bb class start -->
                <div class="Bb Bb-resource">
                    <div class="B1">
                        <div class="B11">
                            <i class="fa fa-file-zip-o b11-icon"></i>
                            <p>Chapter one</p>
                        </div>
                        <p>350 kb</p>
                    </div>

                    <div class="B1">
                        <div class="B11">
                            <i class="fa fa-file-zip-o b11-icon"></i>
                            <p>chapter two</p>
                        </div>
                        <p>350 kb</p>
                    </div>
                </div>
                <!-- Bb class ended -->
            </div>

        </div>
        <!-- C class -->
      
        <div class="C">
            <h1 style="margin-bottom: 0.5em;">Description</h1>
            <h3>Java tutors</h3>
            <p>{{$course->course_detail}}.</p>
        </div>
       
        

    </section>

    {{-- comment section  --}}
    <section>
             <form action="" action = "" method = "">
                <textarea name="comment" id="" cols="30" rows="10"></textarea>
                
             </form>
    </section>

    <script src="/app.js"></script>
</body>

</html>