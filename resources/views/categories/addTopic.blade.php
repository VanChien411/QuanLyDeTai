@extends('layouts.app')
@section('title')
    <title>Thêm đề tài</title>
@endsection
@section('content')
<div class="card text-start p-2 mt-2 k ">
   
    <?php if(isset($error)) echo'<div class="alert alert-primary alert-dismissible" role="alert" id="alert">
        <strong>Erro</strong> '.$error.'
        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
       </div>'
    ?>
        <h1 class="text-danger text-center m-3">Tạo đề tài</h1>
        
        <form class="container" method="POST" action="{{route('home.addTopicData')}}" enctype="multipart/form-data">
            @csrf
        <hr class="bg-info "  style="height:5px">
        <div class='col-4'>
        <label class='form-label' for='topicName'>
            Tên đề tài
        </label>
        
            <input type='text ' class="form-control" id='topicName' name='topicName'>
        </div>
        <label class='form-label' for='topicType'>
           Loại đề tài
            <input type='text ' class="form-control" id='topicType' name='topicType'>
        </label>
        <label class='form-label' for='topicRank'>
            Phạm vi đề tài
             <input type='text ' class="form-control" id='topicRank' name='topicRank'>
         </label>
         
          
            <div class="row">

                <div class='col-4'>
                   
                    <label class='form-label' for='emailTeacher'>
                        Email giáo viên hướng dẫn
                    </label>
                    
                    <input type='text ' class="form-control" id='emailTeacher' name="emailTeacher">
               
                
                    <label class='form-label' for='emailMembers'>
                        Email Thành viên tham gia
                    </label>
                    
                        <input type='text ' class="form-control" id='emailMembers' name="emailMembers">
                   <div class="form-text">
                    email các thành viên ghi liền cách nhau bằng dấu ; <br>
                    vd: chien@gmail.com;hoa@gmail.com;...
                   </div>
               </div>
               <div class="col-5 container d-flex">
                <label class='form-label' for='image' >
                   Ảnh đại diện 
                </label>
                
                <input class="form-control form-control-lg" id="image" type="file" name="image">
               
               </div>
            </div>
           <div class="row">
            <label class='form-label mt-2' for='topicContent'>
                Nội dung đề tài
            </label>
            
              <textarea name='topicContent' id='topicContent' class="form-control"></textarea>
        
         
           <div class="text-center">
           <button type='submit' class="btn btn-success text-center mt-3">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg> Click để tạo</button>
          
           
        </form>
     
</div>
@endsection
