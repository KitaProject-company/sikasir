{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      height: 100vh;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      display: flex;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      background-color: white;
      width: 800px;
      height: 500px;
    }

    .left-side {
      flex: 2;
      background-color: #eaeaea;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .clock-box {
      background-color: white;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: bold;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .right-side {
      flex: 1;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #ccc;
      margin-bottom: 30px;
    }

    .form-input {
      width: 100%;
      margin-bottom: 15px;
    }

    .form-input input {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .btn-login {
      padding: 10px 30px;
      border: none;
      background-color: #007bff;
      color: white;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-card">
      <div class="left-side">
        <div class="clock-box" id="clock">00:00:00</div>
      </div>
      <div class="right-side">
        <div class="avatar"></div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-input">
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-input">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Jam realtime
    setInterval(() => {
      const clock = document.getElementById('clock');
      const now = new Date();
      clock.innerText = now.toLocaleTimeString();
    }, 1000);
  </script>
</body>
</html>
