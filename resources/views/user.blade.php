<h1>users</h1>
<table border=1 >
@foreach($userData as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
</tr>
@endforeach
</table>