<h1>The Registration Form</h1>
<!-- action holds route name -->
<form method="POST", action="/submitMyForm">
    @csrf
<div>
    Enter Name:
    <input type="text" name = "myname" placeholder="Enter Name">
</div>
<div>
    Enter Email:
    <input type="email" name = "email" placeholder="Enter Email">
</div>
<div>
    Enter Number:
    <input type="number" name = "nobno" placeholder="Enter Mobile Number">
</div>
<div>
    <input type="submit" name = "submit">
</div>
</form>