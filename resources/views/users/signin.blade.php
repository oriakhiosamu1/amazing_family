<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{ asset('css/authstyle.css') }}">
</head>

<body>

  <div class="container">

    <input type="checkbox" id="check">

    <div class="login form">

      <header>Login</header>

      <form action="{{ route('user/signin') }}" method="POST">
        @csrf

        <x-validation-errors class="mb-4" />
        
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter your email">
        @error('email')
            <small>{{ $message }}</small>
        @enderror

        <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Enter your password">
        <button id="togglePassword" type="button">Show</button>
        
        @error('password')
            <small>{{ $message }}</small>
        @enderror

        <a href="#">Forgot password?</a>

        <input type="submit" class="button" value="Login">
      </form>


      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>

    </div>

    <div class="registration form">

      <header>Signup</header>

      <form action="{{ route('register') }}" method="POST">
        @csrf

        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name">
        @error('name')
            <small>{{ $message }}</small>
        @enderror

        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter your email">
        @error('email')
            <small>{{ $message }}</small>
        @enderror

        <input type="password" name="password" placeholder="Create a password">
        @error('password')
            <small>{{ $message }}</small>
        @enderror

        <input type="password" name="password_confirmation" placeholder="Confirm your password">
        @error('password_confirmation')
            <small>{{ $message }}</small>
        @enderror

        <input type="submit" class="button" value="Signup">
      </form>

      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>

    </div>

  </div>

  <script src="{{ asset('js/showpassword.js') }}"></script>
</body>

</html>
