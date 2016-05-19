var checkMobile = require("./../util/checkMobile.js"),
    dnsFunc = require("./../util/dns.js"),
    Util = require("./../util/util.js"),
    admin = require('./../admin.js'),
    validator = require('./../validator.js'),
    config = require('./../config.js');

var personData={
    name:"",
    title:"",
    skill_intro:"",
    subject_intro:"",
    person_intro:"",
    skill_price:"",
    skill_time:"",
    img_data:null
};

validator.config = {
    name:         "isNonEmpty",
    title:        "isNonEmpty",
    skill_intro:  "isNonEmpty",
    subject_intro:"isNonEmpty",
    person_intro: "isNonEmpty",
    skill_price:  "isNonEmpty",
    skill_time:   "isNonEmpty",
    img_data:     "isNonEmpty"
};

var ADD = {
    init:function(){
        //解决DNS劫持
        dnsFunc();
        
        //判断终端类型
        if(!checkMobile()){
            Util.EVENT_TYPE = "click";
        }

        ADD.initEvent();
    },
    initEvent:function(){
        //绑定上传图片的事件
        $("#file").on("change",function(){
            var file = this.files[0];
            var type = file.type.split("/")[1].toLowerCase();
            if($.inArray(type,config.imgType)==-1){
                alert("仅支持gif,png,jpg,jpeg格式的图片");
                $(this).val("");
                return;
            }
            if(file.size/1024 >9006){
                alert("图片最大不能超过6Mb");
                $(this).val("");
                return;
            }
            personData.img_data = file;
        });

        //绑定提交按钮的事件
        $("#register-button").on(Util.EVENT_TYPE,function(){
            var self = $(this);
            if(self.hasClass("disable")){
                return;
            }
            personData.name = $("#name").val();
            personData.title = $("#title").val();
            personData.skill_intro = $("#skill_intro").val();
            personData.subject_intro = $("#subject_intro").val();
            personData. person_intro = $("#person_intro").val();
            personData.skill_price = $("#skill_price").val();
            personData.skill_time = $("#skill_time").val();
            if(validator.validate(personData)){
                alert(validator.messages[0]);
                return ;
            }
            self.addClass("disable").html("正在报名");

            admin.add(personData)
                .done(function(res){
                    res = JSON.parse(res);
                    if(res.code == 0){
                        alert("报名成功");
                        location.reload();
                    }else{
                        self.html("报名失败，请重试").removeClass("disable");
                    }
                }).fail(function(){
                    self.html("报名失败，请重试").removeClass("disable");
                });
        });
    }
};
ADD.init();

