/**
 * Created by cmm on 15/10/29.
 *
 * 用于数据验证
 */
var validator = {//策略者
    config   : {},//默认配置规则
    messages : [],
    types    : {
        isEmail : {//邮箱的验证规则
            validate: function (value) {
                var reg=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
                return reg.test(value);
            },
            instructions: "邮箱格式错误"
        },
        isNonEmpty : {//是否为空的验证规则
            validate: function (value) {
                return (value!="");
            },
            instructions: "信息不能为空"
        },
        isWeChat :{ //验证微信号是否正确
            validate: function (value) {
                var reg=/^[a-zA-Z\d_]{5,}$/;
                return reg.test(value);
            },
            instructions: "微信号码有误"
        },
        isPassword : {//密码的验证规则
            validate: function (value) {
                if(value.length <6){
                    return false;
                }
                var reg=/^(([a-z]+[\w]*[0-9]+)|([0-9]+[\w]*[a-z]+))[a-z0-9]*$/i;
                return reg.test(value);
            },
            instructions: "密码长度在6-20位，且必须包含数字和字母"
        },
        isNickname:{//验证昵称的规则
            validate: function (value) {
                if(value.length >8 || value ==""){
                    return false;
                }
                return true;
            },
            instructions: "昵称字符长度要在8个以内"
        },
        isCondition:{ //心动条件
            validate: function (value) {
                return !(value.length<30);
            },
            instructions: "心动条件长度要在10个以上"
        }
    },
    validate : function(data) {
        var i, msg, type, checker, result_ok;
        // 清空所有的错误信息
        this.messages = [];
        for (i in data) {
            if (data.hasOwnProperty(i)) {

                type = this.config[i];  // 根据key查询是否有存在的验证规则
                checker = this.types[type]; // 获取验证规则的验证类

                if (!type) {
                    continue; // 如果验证规则不存在，则不处理
                }
                if (!checker) { // 如果验证规则类不存在，抛出异常
                    throw {
                        name: "ValidationError",
                        message: "No handler to validate type " + type
                    };
                }
                result_ok = checker.validate(data[i]); // 使用查到到的单个验证类进行验证
                if (!result_ok) {
                    msg = checker.instructions;
                    this.messages.push(msg);
                }
            }
        }
        return this.hasErrors();
    },
    hasErrors: function () {
        return this.messages.length !== 0;
    }
};
module.exports = validator;