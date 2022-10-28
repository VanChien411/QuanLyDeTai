<script>
    
    function logout(){
        var dia_chi = location.href;
        window.location=dia_chi + '/logout' ;
    }
    //tự động đóng alert
    
    setTimeout(function() {
    bootstrap.Alert.getOrCreateInstance(document.querySelector(".alert")).close();
     }, 4000)
        
   </script>