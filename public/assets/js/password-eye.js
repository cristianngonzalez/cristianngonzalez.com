$('#btn-password-eye-1').click(function(event){
    if($('#input-password-1').attr('type') == 'password'){
        $('#input-password-1').prop('type' , 'text');
    }else{
        $('#input-password-1').prop('type' , 'password');
    }
})