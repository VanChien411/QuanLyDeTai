<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký </title>
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
          <div class='title'><b>Đăng ký</b></div>
      </div>
      <div class='card-body'>
          <form method="POST" action="home/register">
            @csrf
            <input type="name" class="form-control mb-2" placeholder="Tên của bạn" name='name'>
              <input type='email' class='form-control mb-2' placeholder='Email hoặc số điện thoại' name='email'>
              <input type='password' class='form-control mb-2' placeholder='Mật khẩu' name='password'>
              <input type='password' class='form-control mb-2' placeholder='Nhập lại mật khẩu' name='repassword'>
             
              <div class="input-group  justify-content-around mb-1">
                <div  class="btn btn-outline-info border-1" id='Sinhvien' style="background-color: blue">
               Sinh viên
                </div>
                <div  class="btn btn-outline-info bg-opacity-50 border-1" id='Giaovien'>
                Giáo viên
                </div>
                <input type="hidden" name='title' id='title' value="Student">
              </div>
              
              <div class='card-footer text-center' >
                  <button class='btn btn-success mx-1 w-40' type='submit'>Đăng ký</button>
                 
                  <a class='btn btn-primary ms-1 w-40' type='Button' name='DN' href="login">Đăng nhập</a>
              </div>
          </form>
      </div>
  </div>
      <script>
        //tạo màu khi click vào nut giáo viên hoặc sv
        const sv = document.querySelector('#Sinhvien');
        const gv = document.querySelector('#Giaovien');
        const title = document.querySelector('#title');
        sv.addEventListener('click',(even)=>{sv.style.backgroundColor = 'blue'; gv.style.backgroundColor = null;  title.value = "Student"})
        gv.addEventListener('click',(even)=>{gv.style.backgroundColor = 'green'; sv.style.backgroundColor = null; title.value = "Teacher" })
        </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
      @include('partials.script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>