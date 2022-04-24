$(document).ready(function(){
    
   $('.radio,.amount').on('change',function(){
       if($('.radio').val() != '' && $('.amount').val() != ''){
           if($('.amount').val() > 10){
            $('#bidButton').attr('disabled',false)
           }

       
       }else{
        $('#bidButton').attr('disabled',true)  
       }
   })
})