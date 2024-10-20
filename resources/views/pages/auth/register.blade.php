<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auth Page</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/auth.css')}}" />
  </head>

  <div class="auth-container">
    <div class="auth-card">
      <div class="auth-content">
        <div class="auth-header">
          <h1>Welcome</h1>
          <p>Fill the details to get started with ChatWave</p>
        </div>
        <div class="auth-tabs">
          <div class="tab-content" data-tab="signup">
            <form  action="{{ route('handle.signin') }}" method="POST" class="form">
              @csrf
              <input type="text" placeholder="First Name"  class="input @error('firstname') input-error @enderror"  id="signup-firstname" name="firstname" required  value="{{ old('firstname') }}" />
              @error('firstname')
              <div class="error-message">{{ $message }}</div>
              @enderror
              <input type="text" placeholder="Last Name" class="input @error('lastname') input-error @enderror"  id="signup-lastname" name="lastname" required  value="{{ old('lastname') }}"/>
              @error('lastname')
              <div class="error-message">{{ $message }}</div>
            @enderror
              <input type="email" placeholder="E-mail"  class="input @error('email') input-error @enderror"  id="signup-email" name="email" required  value="{{ old('email') }}"/>
              @error('email')
              <div class="error-message">{{ $message }}</div>
            @enderror
              <input type="password" placeholder="Password"  class="input @error('password') input-error @enderror"  id="signup-password" name="password" required/>
              @error('password')
              <div class="error-message">{{ $message }}</div>
            @enderror
      
              <button type="submit" class="submit-button">Signin</button>
            </form>
          </div>
        </div>
      </div>
      <div class="auth-image">
        <img
          src="https://img.freepik.com/free-vector/conversation-concept-illustration_114360-1305.jpg?w=740&t=st=1724871547~exp=1724872147~hmac=d39930e9f3c3337fb5876fd3ec18e8091f4e8b65c2e2c0fc6ac3b3defe6ec792"
          alt="Chat illustration"
        />
      </div>
      <div class="signin">
        <span>have an acccout? <a href="{{ route('login') }}">Login</a></span>
      </div>
    </div>
  </div>
</html>
