<form action="{{ url('/update/'.$client->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This line is the fix ✅ -->
    <input type="text" name="name" value="{{$client->name}}" placeholder="name" />
    <br>
    <br>
    <input type="text" name="email" value="{{$client->email}}" placeholder="email" />
    <br>
    <br>
    <input type="text" name="phone" value="{{$client->phone}}" placeholder="phone" />
    <br>
    <br>
    <input type="text" name="company" value="{{$client->company}}" placeholder="company" />
    <br>
    <br>
    <input type="text" name="country" value="{{$client->country}}" placeholder="country" />
    <br>
    <br>
    <button>Update Client</button>
    <a href="/clients">cancel</a>
</form>