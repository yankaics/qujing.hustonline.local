var register_button = $("#register-button");

register_button.on("tap",function(){
    var self = $(this);
    if(self.hasClass("disable")){
        return;
    }
    self.addClass("disable").html("正在报名");
    $.post("util/addHj.php",
        {
            name:$("#name").val(),
            title:$("#title").val(),
            skill_intro:$("#skill_intro").val(),
            skill_detail:$("#skill_detail").val(),
            skill_price:$("#skill_price").val(),
            skill_time:$("#skill_time").val(),
            see_num:$("#see_num").val(),
            avatar:$("#avatar").val()
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