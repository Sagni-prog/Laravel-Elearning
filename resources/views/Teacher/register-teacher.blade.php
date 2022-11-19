<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Teacher Sign Up</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main">
      <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
          <div class="signup-content">
            <form action = "{{route('teacherRegistration')}}" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">

            @csrf
              <h2 class="form-title">Teacher registration form</h2>
              <h3>Personal information</h3>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="first_name"
                  id="name"
                  placeholder="First Name"
                />
                <p style = "color: red;">@error('first_name') {{$message}}  @enderror</p>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="middle_name"
                  id="name"
                  placeholder="Middle Name"
                />
                <p style = "color: red;">@error('middle_name') {{$message}}  @enderror</p>
               
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="last_name"
                  id="name"
                  placeholder="Last Name"
                />
                <p style = "color: red;">@error('last_name') {{$message}}  @enderror</p>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="profession"
                  id="name"
                  placeholder="Profession"
                />
                <p style = "color: red;">@error('profession') {{$message}}  @enderror</p>
              </div>
              <!-- <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="desc"
                  id="desc"
                  placeholder="Short description ..."
                />
              </div> -->

              <!-- //// -->

              <h3>Skill to Work on</h3>

              <p>You will make course videos on the skill you choose.</p>
              <select class="dropdown" name = "catagory">
                <option value="Art">Art</option>
                <option value="Technology">Technology</option>
                <option value="Business">Business</option>
                <option value="Writing">Writing</option>
                <option value="Photo & Video">Photo & Video</option>
                <option value="Other">Other</option>
              </select>
              

              <!-- <svg
                xmlns="http://www.w3.org/2000/svg"
                class="dropdown-icon"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                />
              </svg> -->
              <!-- <div class="form-group">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-input"
                    name="level-edu"
                    id="level-edu"
                    placeholder="Level of Education"
                  />
                </div>
                <select class="dropdown">
                  <option value="bsc">Bachelor (B.Sc.)</option>
                  <option value="msc">Masters</option>
                  <option value="phd">Doctor (phd.)</option>
                </select>
                <input
                  type="text"
                  class="form-input"
                  name="univ"
                  id="univ"
                  placeholder="University or College attended"
                />
              </div> -->

              <h3>Contact information</h3>
              <div class="form-group">
                <input
                  type="email"
                  class="form-input"
                  name="email"
                  id="email"
                  placeholder="Email"
                />
                <p style = "color: red;">@error('email') {{$message}}  @enderror</p>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="username"
                  id="email"
                  placeholder="Username"
                />
                <p style = "color: red;">@error('username') {{$message}}  @enderror</p>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="phone_no"
                  id="phone"
                  placeholder="Phone Number"
                />
                <p style = "color: red;">@error('phone_no') {{$message}}  @enderror</p>
              </div>

              <!-- <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="location"
                  id="location"
                  placeholder="Location"
                /> -->
              <!-- </div> -->
              <!-- <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="facebook"
                  id="facebook"
                  placeholder="Facebook Account (Optional)"
                /> 
              </div>-->
             
              </div>

              <h3>Credential</h3>
              <div class="form-group">
                <input
                  type="password"
                  class="form-input"
                  name="password"
                  id="password"
                  placeholder="Password"
                />
                <p style = "color: red;">@error('password') {{$message}}  @enderror</p>
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye field-icon toggle-password"
                ></span>
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="form-input"
                  name="password2"
                  id="re_password"
                  placeholder="Repeat  password"
                />
                <p style = "color: red;">@error('password2') {{$message}}  @enderror</p>
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye field-icon toggle-password"
                ></span>
              </div>

              <div class="form-group">
                <input
                  type="file"
                  class="form-input"
                  name="image"
                  id="image"
                  placeholder="Repeat  password"
                />
                <p style = "color: red;">@error('password2') {{$message}}  @enderror</p>
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye field-icon toggle-password"
                ></span>
              </div>
              <!-- <div class="form-group">
                <input
                  type="checkbox"
                  name="agree-term"
                  id="agree-term"
                  class="agree-term"
                />
                <label for="agree-term" class="label-agree-term"
                  ><span><span></span></span>I agree all statements in
                  <a href="#" class="term-service">Terms of service</a></label
                >
              </div> -->

              <div class="form-group">
                <input
                  type="submit"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="Request to Register"
                  style = "background-color: #56baed;"
                />
              </div>
            </form>
            <!-- <p class="loginhere">
              Have already an account ?
              <a href="#" class="loginhere-link">Login here</a>
            </p> -->
          </div>
        </div>
      </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
