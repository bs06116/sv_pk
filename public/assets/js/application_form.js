$(document).ready(() => {
    const base_url = $('#base_url').val();
    $('#intrested_dropdown').change((e) => {
       $('.Intrested-more-field').hide();
       $('.Intrested-more-field input').val("");
       $('.Intrested-more-field').find('input , select').removeAttr('required');
       $('#'+e.target.value).show().find('input , select').attr('required',true);
    })
    $('a.reload').click(()=>{
        window.location.reload();
    })
    for(let i=0; i<50; i++){
        let key = parseInt(i) + parseInt(1)
        $('#down_payment select').append('<option value='+key+'>'+key+"%"+'</option>')
    }
    $('input[name="accept_terms_condition"]').change(function(){
        if($(this).prop('checked')==true){
            $('.formSubmitBtn').prop('disabled',false);
        }else{
            $('.formSubmitBtn').prop('disabled',true);
        }
    })
    $('form').submit(function(e){
        e.preventDefault();
        $('.formSubmitBtn').prop('disabled',true);
        data = $("form").serialize();
        $.ajax({
            type:'POST',
            url:base_url+"/application_form_submit",
            data: data,
            success:function(data) {
                $("#show_message").show();
                $('form').trigger("reset");
                swal("",data.message,'success');
                $('.formSubmitBtn').prop('disabled',false);
            }
        });
    })
})