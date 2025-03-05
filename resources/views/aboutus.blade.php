<h1>This is my aboutus page</h1>
{{$LPU}}<i> is global variable</i><br>
<!-- accessing through api -->
<a href="/fruits">FRUITS</a><br>
<!-- accessing through route since i used name() to name the api -->
<a href="{{ route('userDetail') }}">UserDetail Of AMIT</a>
<!-- accessing through view name -->
<a href="details">details</a><br>   