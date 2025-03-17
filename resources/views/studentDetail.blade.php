
<h1>
    Student details from the database
</h1>

<!-- displaying views inside views   -->

 <!-- this displays only if header exists  -->
@includeIf ('common.header')    
@include ('common.footer')


<!-- If you are using plain PHP without Laravel Blade  -->
<?php
$str = "aman";
echo "The length of str is: " . strlen($str);
echo "<br>";
echo "The word count is: " . str_word_count($str) . "<br>";

if (45 % 2 == 0) {
    echo "The num is even";
} else {
    echo "The num is odd";
}
echo "<br>";
?>


<!-- If you are writing in a Laravel Blade template -->
@php
    $str = "aman";
@endphp

The length of str is: {{ strlen($str) }} <br>
The word count is: {{ str_word_count($str) }} <br>

@if(45 % 2 == 0)
    The num is even
@else
    The num is odd
@endif

<table style = "color:green">
    <tr style = "color:red">
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>mob_no</th>
        <th>age</th>
        <th>reg_no</th>
        <th>gender</th>
        <th>hobby</th>
    </tr>
 

    @if(isset($data) && count($data) > 0)
    @foreach ($data as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name}}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->mob_no }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->reg_no }}</td>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->hobby }}</td> 
        </tr>
    @endforeach
    @else
        <tr><td colspan="8">No student data found.</td></tr>
    @endif

    
</table>


