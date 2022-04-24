$(document).ready(function(){
 


    //bet form validation

    $('#bet-add-form').validate({
        rules:{
            'name':{
                required:true
            },
          
            'positions[]':{
                required:true
            }
        },
        messages:{
            name:'Bet Name is required',
            'positions[]':'Positions are required',
           
        }
    })

    //change bet status
    $('#updateStatus').on('click',function(){
        $.ajax({
            method:'post',
            url:'/admin/bets/change-status',
            data:{
                'id':$('#betId').val(),
                'status':$('#status').val()
            },
            success:function(res){
                if(res.success){
                    toastr['success'](
                        res.message,
                        'Success!', {
                        closeButton: true,
                        tapToDismiss: false,
                    }
                    );
                    window.location.reload();
                }else{
                    toastr['error'](
                        res.message,
                        'Error!', {
                        closeButton: true,
                        tapToDismiss: false,
                    }
                    ); 
                }
            }
        })
    })
})