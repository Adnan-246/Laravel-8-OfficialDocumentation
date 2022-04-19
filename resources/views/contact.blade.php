<h1>This is my contact page</h1>
<a href="{{ url('/') }}">Back</a><br><br>


<div class="container">
  <form action="{{ route('student.store') }}" method="POST">
    @csrf
    
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <button type="submit">Submit</button>

</form>
</div>