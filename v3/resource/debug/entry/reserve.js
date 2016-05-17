var checkMobile = require("./../util/checkMobile.js"),
    dnsFunc = require("./../util/dns.js"),
    Util = require("./../util/util.js");

dnsFunc();
if(!checkMobile()){
    Util.EVENT_TYPE = "click";
}


var register_button = $("#register-button");

register_button.on(Util.EVENT_TYPE,function(){
    var self = $(this);
    if(self.hasClass("disable")){
        return;
    }
    self.addClass("disable").html("正在报名");
    $.post("/index/reserve/"+$(this).attr("data-id"),
        {
            name:$("#name").val(),
            grade:$("#grade").val(),
            gender:$("#gender").val(),
            phone:$("#phone").val(),
            wechat:$("#wechat").val(),
            intro:$("#intro").val()
        },function(res){
            res = JSON.parse(res);
            if(res.code == 6){
                alert("数据不能为空");
                self.html("请重试").removeClass("disable");
                return;
            }else if(res.code == 0){
                console.log("成功");
                window.location.href = "/index/success";
            }else{
                self.html("报名失败，请重试").removeClass("disable");
            }
        });
});