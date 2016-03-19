var register_button = $("#register-button");

register_button.on("tap",function(){
    console.log("hello");
    $.post("util/signup.php",
        {
            name:$("#name").val(),
            grade:$("#grade").val(),
            gender:$("#gender").val(),
            phone:$("#phone").val(),
            wechat:$("#wechat").val(),
            intro:$("#intro").val(),
            help_id:$(this).attr("data-id")
        },function(res){
            console.log(res);
            if(res == "1"){
                console.log("报名成功");
            }else{
                console.log("报名失败");
            }
        });
});