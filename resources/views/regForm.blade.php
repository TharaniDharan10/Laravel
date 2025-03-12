<h1>The Registration Form</h1>
<!-- action holds route name -->

<!-- There are 3 ways to list validation errors:
1)  {{ print_r($errors) }}
2)   @if($errors->any())
        @foreach($errors->all() as $error)
            <div style="color:red">
                {{ $error }}
            </div>
        @endforeach
    @endif       in head section
3)   <span style = "color:red">
        @error('name')
        {{ $message }}
        @enderror
    </span>  -->


<!-- displays all errors above form together  -->
 <!-- using this error listing will display "Illuminate\Support\ViewErrorBag Object ( [bags:protected] => Array ( ) ) 1" if nothing is listed in it during form valdiation -->
 <!-- {{ print_r($errors) }} -->


 <!-- displays all errors above form together  -->
 @if($errors->any())
    @foreach($errors->all() as $error)
        <div style="color:red">
            {{ $error }}
        </div>
    @endforeach
 @endif
<form method="POST" action="/submitMyForm">
    <!-- use csrf while working with any methods other than get method  -->
    @csrf   

<div>
    Enter Name:
    <input type="text" name = "name" placeholder="Enter Name">
    <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('myname')
        {{ $message }}
        @enderror
    </span> -->
</div>

<div>
    Enter Email:
    <input type="email" name = "email" placeholder="Enter Email">
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('email')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
    Enter RegNo:
    <input type="number" name = "reg" placeholder="Enter RegNo">
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('reg')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
    Enter Number:
    <input type="number" name = "mobno" placeholder="Enter Mobile Number">
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('mobno')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
    Enter age:
    <input type="number" name = "age" placeholder="Enter Age">
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('age')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
<h4>Select Gender</h4>
    <label for = "male">Male</label>    
    <input type="radio" name = "gender" value = "male"></input>
    <label for = "female">Female</label>    
    <input type="radio" name = "gender" value = "female"></input>
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('gender')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
<h4>Select Your hobbies</h4>
<!-- we take hobby as array as we want more than one hobby and so we add []  -->
    <label for = "singing">Singing</label>    
    <input type="checkbox" name = "hobby[]" value="singing"></input>
    <label for = "reading">Reading</label>    
    <input type="checkbox" name = "hobby[]" value="reading"></input>
    <label for = "gymming">Gymming</label>    
    <input type="checkbox" name = "hobby[]" value="gymming"></input>
    <label for = "sleeping">Sleeping</label>    
    <input type="checkbox" name = "hobby[]" value="sleeping"></input>   
     <!-- displays  errors beside field  -->
    <!-- <span style = "color:red">
        @error('hobby[]')
        {{ $message }}
        @enderror
    </span>     -->
</div>

<div>
    <input type="submit" name = "submit">
</div>

</form>