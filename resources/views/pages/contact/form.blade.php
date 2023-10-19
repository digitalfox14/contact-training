<center>
<form action="/contact/store" method="POST">
@csrf
    Name : <br><input type="text" name="name"><br>
    Contact : <br><input type="text" name="contact"><br>
    Email : <br><input type="text" name="email"><br>
    Password : <br><input type="text" name="password"><br><br>
    <button>Save Data</button>
</form>
</center>