!function(t){function l(a){if(e[a])return e[a].exports;var o=e[a]={exports:{},id:a,loaded:!1};return t[a].call(o.exports,o,o.exports,l),o.loaded=!0,o.exports}var e={};return l.m=t,l.c=e,l.p="",l(0)}([function(t,l){"use strict";var e=$("#register-button");top!==self&&(top.location.href=(void 0).location.href),e.on("tap",function(){var t=$(this);t.hasClass("disable")||(t.addClass("disable").html("正在报名"),$.post("util/addHJ.php",{name:$("#name").val(),title:$("#title").val(),skill_intro:$("#skill_intro").val(),subject_intro:$("#subject_intro").val(),person_intro:$("#person_intro").val(),skill_price:$("#skill_price").val(),skill_time:$("#skill_time").val(),see_num:$("#see_num").val(),avatar:$("#avatar").val()},function(l){return console.log(l),"EMPTY"==l?(alert("数据不能为空"),void t.html("请重试").removeClass("disable")):void("1"==l?(alert("报名成功"),location.reload()):t.html("报名失败，请重试").removeClass("disable"))}))})}]);