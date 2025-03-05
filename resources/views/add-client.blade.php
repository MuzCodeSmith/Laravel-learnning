<form action="/add" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" />
    <br>
    <br>
    <input type="text" name="email" placeholder="email" />
    <br>
    <br>
    <input type="text" name="phone" placeholder="phone" />
    <br>
    <br>
    <input type="text" name="company" placeholder="company" />
    <br>
    <br>
    <input type="text" name="country" placeholder="country" />
    <br>
    <br>
    <button>Add Student</button>
</form>