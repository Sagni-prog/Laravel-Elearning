<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Sign In page</h2>
        <!-- <p>Enter your gmail and password to continue</p> -->
        <!-- <h2 class="inactive underlineHover">Sign Up</h2> -->

        <!-- Icon -->
        <!-- <div class="fadeIn first">
          <img
            src="http://danielzawadzki.com/codepen/01/icon.svg"
            id="icon"
            alt="User Icon"
          />
        </div> -->

        <!-- Login Form -->
        <form action = "{{ route('login-student') }}" method = "POST">
          @csrf

          @if(Session::has('fail'))
          <span class="text-danger">{{Session::get('fail')}}</span>
          @endif
          <input
            type="email"
            id="login"
            class="fadeIn second"
            
            name = "email"
            placeholder="Email"
          />
         
           {{-- <h1>@error('email') {{message}}  @enderror</h1> --}}
          <input
            type="password"
            id="password"
            class="fadeIn third"
            name="password"
            placeholder="password"
          />
          {{-- <h1>@error('password') {{message}}  @enderror</h1> --}}
          <input type="submit" class="fadeIn fourth" value="Sign in" />
        </form>
       

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="{{url('forgot')}}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </body>
</html>
