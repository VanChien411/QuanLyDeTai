@extends('layouts.app')
@section('title')
    <title>Quản lý quyền</title>
@endsection
@section('content')
<div class="card text-start p-2 mt-2 k ">
   
    <?php if(isset($error)) echo'<div class="alert alert-primary alert-dismissible" role="alert" id="alert">
        <strong>Erro</strong> '.$error.'
        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
       </div>'
       ?>
        
       
    <div class="row">
        <div class="col ">
            <h1 class="text-danger text-center m-3">Quản lý quyền người dùng</h1>
            
            
            <div class="table-responsive">
                
                <table class="table table-striped
                table-hover	
                table-bordered
                table-primary
                align-middle
                
                "
                
                >
                    <thead class="">
                        <caption>Middleware</caption>
                        <tr class="table-warning text-info "  >
                            <th class="text-primary text-center">TT</th>
                            <th class="text-primary">Email đăng nhập</th>
                            <th class="text-primary">Tên người dùng</th>
                            <th class="text-primary text-center">Quyền hạn</th>
                           
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            {{-- hien thi cac topic --}}
                            <?php $count = 1?>
                            <?php use App\Models\Roles;
                            use App\Models\User; ?>
                            @foreach(User::all() as $userid) 
                            <tr class="table-primary" key={{$userid->id}}  >     
                            <td scope="row" class="text-center"><?php echo $count++?></td>
                            <td>{{$userid->email}}</td>
                            <td>{{$userid->name}}</td>
                            <td class="d-flex justify-content-around">
                                {{-- lay cac roles --}}
                                <form action="{{route('auth')}}" method="POST">
                                @csrf
                                <input name='user' value={{$userid->id}} type='hidden' >
                                @foreach(Roles::all() as $role)
                                {{-- kiểm tra điều kiện để checked --}}
                               
                                <a class="btn" >
                                <input type='checkbox' 
                                @foreach(User::with('roles')->find($userid->id)->roles as $role_db)
                                {{-- role_db các quyền mà người hiện có trong database --}}
                               <?php if($role_db->name == $role->name ) {echo 'checked name='.'name'.$role->id.' id='.$userid->id.'.'.$role->id.''; 
                               break; } else {
                               echo 'name = '.'name'.$role->id.' id='.$userid->id.'.'.$role->id.'';
                               } ?>   

                                @endforeach 
                                 > <label for='{{$userid->id.'.'.$role->id}}'>{{$role->name}}</label><a>
                                
                                {{-- giup click vào chữ nhưng vẫ tick --}}
                                @endforeach
                                <button class="btn btn-success ml-3" type="submit" >Lưu</button>
                            </form>
                                

                            
                             </td>
                           
                                             
                             </tr>
                           @endforeach
                           
                       
                           
                             
                           <script>
                            //lấy giá trị check khi click
                            // const a = document.querySelectorAll('input[name="role"]');
                            // a.forEach((checkbox)=> {
                            //     checkbox.addEventListener('click', (event) => {  });
                           
                            </script>
                     
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                </table>
            </div> 

        </div>

    </div>
</div>
@endsection
