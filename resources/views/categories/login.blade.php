<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    @include('partials.style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php if(isset($errors)) echo'<div class="alert alert-primary alert-dismissible"  role="alert" id="alert">
      <strong>Erro</strong> '.$errors.'
      <button type="button" class="btn-close float-right" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>'
   ?>
    <div class="card shadow border-2 container col-5 mt-5">
      <div class='card-header'>
          <div class='title'><b>Đăng nhập</b></div>
      </div>
      <div class="card-body">
          <form method="POST" action="home/login">
            @csrf
              <input type='email' class='form-control mb-2' placeholder='Email hoặc số điện thoại ' id='email' name='email'>
              <input type='password' class='form-control mb-2' placeholder='Mật khẩu ' id='password' name='password'>
              <button class='btn btn-primary form-control mb-2'>Đăng nhập</button>
             
              <div class='text-center'>
                  <a class='btn-link'>Quên mật khẩu?</a>
                  <hr>

                  <a class='btn btn-success ' type='Button' name='DK' href="register">Tạo tài khoản mới</a>
              </div>
          </form>
      </div>
  </div>
  @include('partials.script')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>