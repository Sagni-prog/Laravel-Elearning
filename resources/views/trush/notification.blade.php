<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Session::has('success'))
    <h4>{{Session::get('success')}}</h4>
    @endif
    <table>
        <thead>
            <tr>
                    <th>Id</th>
                    <th>Name</th>
            </tr>
           
        </thead>
        @foreach($data as $datas)
        <tr>
                    
                    <td>{{$datas->teacher_id}}</td>
                    <td>{{$datas->first_name}} {{$datas->middle_name}}</td>
                    <td><a href="{{url('approve',$datas->teacher_id)}}">Approve</a></td>
                   
        </tr>
        @endforeach
       
    </table>
</body>
</html>