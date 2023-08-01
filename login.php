<?
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'null'; // Replace with your desired username
    $password = 'null12'; // Replace with your desired password

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['authenticated'] = true;
    } else {
        $error = '<p style="color: red;">Invalid credentials. Please try again.</p>';
    }
}

if (empty($_SESSION['authenticated'])) {
    echo '<!DOCTYPE HTML>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- custom css -->
         <style type="text/css">
      html, body{
        height: 100%;
        background-image: url("https://k.top4top.io/p_2466kwsgp0.jpeg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }

      .global-container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0dcaf0;
      }

      .login-form{
        width: 380px;
        height: 450px;
        padding: 20px;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.5);
      }

      input[type="text"],
      input[type="password"]{
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: 2px solid #0dcaf0;
        border-radius: 10px;
        margin-bottom: 25px;
      }

      input[type="text"]:focus,
      input[type="password"]:focus{
        outline: none;
        border: none;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        margin: 0;
      }

      .card-title{
        font-weight: 900;
        padding-top: 20px;
      }

      .btn {
        background: #0dcaf0;
        color: #fff;
        transform: translateY(10px);
        font-size: 14px;
        border-radius: 10px;
      }

      .card-float{
        padding: 20px;
      }
    </style>
    </head>
    <body>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <h1 class="card-title text-center">M A S U K </h1>
                </div>
                <div class="card-text">
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="usernameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">MASUK</button>
                        </div>
                    </form>
                    <?php if (isset($error)) echo $error; ?>
                </div>
                <h6 class="card-float text-center">Copyright &copy; 2022 by Zaky SDT project </h6>
            </div>
        </div>
        <audio controls autoplay loop>
  <source src="https://j.top4top.io/m_246620g010.mp3" type="audio/mpeg">
 </audio>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
    </html>';
    exit;
}
