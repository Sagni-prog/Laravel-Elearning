<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($course as $courses)
    <a href="{{url('view-courses',$courses->course_id)}}">{{$courses->course_name}}</a>
    @endforeach
</body>
</html>