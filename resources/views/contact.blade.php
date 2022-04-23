<h1>This is my contact page</h1>
<a href="{{ url('/') }}">Back</a><br><br>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
</head>
<body>
  <h1>Store Your Contact Person</h1><br><br>
  <div class="container">
    <form action="{{ route('student.store') }}" method="POST">
      @csrf
  
      <input type="text" name="name" placeholder="Enter your name"><br><br>
      <input type="email" name="email" placeholder="Enter your email"><br><br>
      <input type="text" name="phone" placeholder="Enter your phone"><br><br>
      <button type="submit" class="btn btn-primary">Submit</button>
      
     
      

  </form>
  </div>
</body>
</html>