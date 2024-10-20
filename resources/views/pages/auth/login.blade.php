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
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <div class="auth-container">
    <div class="auth-card">
      <div class="auth-content">
        <div class="auth-header">
          <h1>Welcome</h1>
          <p>Fill the details to get started with ChatWave</p>
        </div>
        <div class="auth-tabs">
          <div class="tab-content" data-tab="login">
            <form action="{{ route('handle.login') }}" method="POST" class="form">
              @csrf
              <input type="email" placeholder="Enter E-mail" class="input @error('email') input-error @enderror" id="login-email" name="email" required value="{{ old('email') }}"/>
              @error('email')
              <div class="error-message">{{ $message }}</div>
            @enderror
              <input type="password" placeholder="*******" class="input" id="login-password" name="password" required />
              @error('password')
              <div class="error-message">{{ $message }}</div>
            @enderror
              <button type="submit" class="submit-button">Login</button>
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
        <span>Do not have an acccout? <a href="{{ route('signin') }}">Signin</a></span>
      </div>
    </div>
  </div>
</html>
