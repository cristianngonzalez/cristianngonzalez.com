$('#btn-password-eye-1').click(function(event){
    if($('#input-password-1').attr('type') == 'password'){
        $('#input-password-1').prop('type' , 'text');
        $('#bi-password-eye-1').removeClass("bi-eye"); 
        $('#bi-password-eye-1').addClass("bi-eye-slash"); 
    }else{
        $('#input-password-1').prop('type' , 'password');
        $('#bi-password-eye-1').removeClass("bi-eye-slash"); 
        $('#bi-password-eye-1').addClass("bi-eye"); 
    }
})