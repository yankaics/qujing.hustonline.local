var register_button = $("#register-button");

if(top!==self)
    top.location.href=this.location.href;

register_button.on("tap",function(){
    var self = $(this);
    if(self.hasClass("disable")){
        return;
    }
    self.addClass("disable").html("正在报名");
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
            if(res =="EMPTY"){
                alert("数据不能为空");
                self.html("请重试").removeClass("disable");
                return;
            }
            if(res == "1"){
                window.location.href = "success.php";
            }else{
                self.html("报名失败，请重试").removeClass("disable");
            }
        });
});