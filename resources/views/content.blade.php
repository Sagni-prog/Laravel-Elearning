<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello i am catagory</h1>
    <a href="{{url('contents',['title'=>'xxxTentaion'])}}">xxxTentaion</a>
    <a href="{{url('contents',['title'=>'Laravel 9'])}}">Laravel 9</a>

    

  
  @foreach ($data as $d)
 
  <div style = "height:80%;
  width: 70%;">
   <video style = "height:100%;
  width: 100%;" src="<?php echo $d->path;?>" controlslist="nodownload" class="A1-video" controls alt="videocontent" controls></video>
</div>
  @endforeach
   

</body>
</html>