!function(l){function t(a){if(e[a])return e[a].exports;var r=e[a]={exports:{},id:a,loaded:!1};return l[a].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var e={};return t.m=l,t.c=e,t.p="",t(0)}([function(l,t){"use strict";var e=$("#register-button");e.on("tap",function(){var l=$(this);l.hasClass("disable")||(l.addClass("disable").html("正在报名"),$.post("util/addHJ.php",{name:$("#name").val(),title:$("#title").val(),skill_intro:$("#skill_intro").val(),subject_intro:$("#subject_intro").val(),person_intro:$("#person_intro").val(),skill_price:$("#skill_price").val(),skill_time:$("#skill_time").val(),see_num:$("#see_num").val(),avatar:$("#avatar").val()},function(t){return console.log(t),"EMPTY"==t?(alert("数据不能为空"),void l.html("请重试").removeClass("disable")):void("1"==t?(alert("报名成功"),location.reload()):l.html("报名失败，请重试").removeClass("disable"))}))})}]);