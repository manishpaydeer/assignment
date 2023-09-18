//start the js when whole document is laoded.
$(document).ready(function(){
    // submit the form when any input is changed.
    $('#calculateForm input').on('change input', function() {
        //prevention from minus values.
        if($(this).val() < 0){
            $(this).val("")
        }
        $('#calculateForm').submit();
    });


    $("#calculateForm").submit(function(e){
        e.preventDefault(); // prevent to refresh the page on submit

        //make ajax call to fetch data
        $.ajax({
            url:"/calculate",
            type:"post",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success:function(result){
                if(result.status == "200"){
                    if(result.type == "KG"){
                        $("#finalVolumecm").val(result.weight)
                    }
                    else{
                        $("#finalVolumelbs").val(result.weight)
                    }
                }
                else{
                    alert(result.message);
                }
            },
            //handle the error
            error:function(err){
                alert("Some internal serve error occurred.");
            }
        })
    })

});
