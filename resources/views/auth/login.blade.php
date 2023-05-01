<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="{{route('login-user')}}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('failure'))
    <div class="alert alert-danger">{{Session::get('failure')}}</div>
    @endif
    @csrf

  <div class="container">
    <label for="email"><b>Username</b></label>
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
    <input type="email" placeholder="Enter Useremail" name="email" value="{{old('email')}}">

    <label for="password"><b>Password</b></label>
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
    <input type="password" placeholder="Enter Password" name="password" value="{{old('password')}}">
        
    <button type="submit">Login</button>

    <a href="register" style="color:dodgerblue">New User !! Register Here</a>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="resetpassword">password?</a></span>
  </div>
</form>

</body>
</html>
