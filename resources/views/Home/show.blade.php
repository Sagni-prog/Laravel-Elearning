<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$data->title}}</title>
</head>
<body>
             <div style = "height:80%;
               width: 70%;">
                <video style = "height:100%;
               width: 100%;" src="<?php echo $data->path;?>" controlslist="nodownload" class="A1-video" controls alt="videocontent" controls></video>
            </div>
</body>
</html>