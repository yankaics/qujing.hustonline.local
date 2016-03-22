var register_button = $("#register-button");

if(top!==self)
    top.location.href=this.location.href;

register_button.on("tap",function(){
    var self = $(this);
    if(self.hasClass("disable")){
        return;
    }
    self.addClass("disable").html("正在报名");
    $.post("util/addHJ.php",
        {
            name:$("#name").val(),
            title:$("#title").val(),
            skill_intro:$("#skill_intro").val(),
            subject_intro:$("#subject_intro").val(),
            person_intro:$("#person_intro").val(),
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
                alert("报名成功");
                location.reload();
            }else{
                self.html("报名失败，请重试").removeClass("disable");
            }
        });
});