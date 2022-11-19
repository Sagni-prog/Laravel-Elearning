

@foreach($data as $d)
<h2>{{$d->admin_id}}</h2>
<a href="{{ url('/set-password',$d->admin_id) }}">set-password/{{$d->admin_id}}</a>
@endforeach