<div class="card text-start p-2 ">
    <nav class="navbar navbar-expand-sm navbar-dark shadow-lg p-2 " style="background-color: #0c4e7d;">
        <a class="navbar-brand border btn btn-outline-info" href="{{route('home')}}">HOME</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse col-4" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Nguyên cứu khoa học <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-current="page">Đồ án <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" aria-current="page">Thực tập tốt nghiệp <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <div class="nav-link" href="" aria-current="page">|<span
                            class="visually-hidden">(current)</span></div>
                </li>
                <?php use App\Models\Roles;
                use App\Models\User; ?>
                @foreach(User::with('roles')->find(session()->get('roles'))->roles as $role_db)
               
                
                   <li class="nav-item ">
                    <a class="nav-link" href="{{route('home.manager')}}" aria-current="page">

                        <?php if($role_db->name == 'admin' || $role_db->name =='manager') echo 'Phân quyền'?>
                         <span class="visually-hidden">(current)</span></a>
                  </li>
            
              
                @endforeach
               
            </ul>

        </div>
        <div class="col">
        <form class="d-flex ">
           
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="row mt-2 " >
            
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle col-2 mt-2" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
              <div class="col-6 d-flex">
            <button class="btn text-white border-0 col-9 text-right " style="background-color: #0c4e7d;">
             
                
        <b>  <?php if(session()->get('nameuser')!=null) echo session()->get('nameuser') ?></b>

                
            </button>
              </div>
          
            <div class="col d-flex justify-content-end" style="height: 30px ">
                <a class="btn border-2 border-danger h-full  btn-outline-danger" href="{{route('logout')}}" >Đăng xuất</a>
            </div>
            </div>
        </div>
    </div>
        
    </nav>
    
</div>
