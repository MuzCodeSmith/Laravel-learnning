<h1>Clients Data</h1>
<table border="1">
<tr>
    <td>#</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Company</td>
    <td>Country</td>
    <td>Status</td>
    <td>actions</td>
</tr>
@foreach($clientData as $client)
<tr>
    <td>{{$client->id}}</td>
    <td>{{$client->name}}</td>
    <td>{{$client->email}}</td>
    <td>{{$client->phone}}</td>
    <td>{{$client->company}}</td>
    <td>{{$client->country}}</td>
    <td>{{$client->status}}</td>
    <td>
        <a href="{{'delete/'.$client->id}}">Delete</a>
        
        <a href="{{'edit/'.$client->id}}">Edit</a>
    </td>
</tr>
@endforeach
</table>