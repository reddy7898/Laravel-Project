<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('registeruser')}}" method="POST" style="border:1px solid #ccc">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('failure'))
    <div class="alert alert-danger">{{Session::get('failure')}}</div>
    @endif
    @csrf
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <span class="text-danger">@error('email') {{$message}} @enderror</span>
      <input type="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
      <label for="password"><b>Password</b></label>
      <span class="text-danger">@error('password') {{$message}} @enderror</span>
      <input type="password" placeholder="Enter Password" name="password" value="{{old('password')}}">
      <label for="name"><b>Name</b></label>
      <span class="text-danger">@error('name') {{$message}} @enderror</span>
      <input type="text" placeholder="Enter Name" name="name" value="{{old('name')}}">
  
      <a href="login" style="color:dodgerblue">Already a User !! Login Here</a>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  <style>
    
  * {box-sizing: border-box}
  
  /* Full-width input fields */
    input[type=email], input[type=password],input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  
  input[type=email]:focus, input[type=password]:focus,input[type=text]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:1;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }
  
  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }
  
  /* Add padding to container elements */
  .container {
    padding: 16px;
  }
  
  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
  
  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
      width: 100%;
    }
  }
  </style>
  