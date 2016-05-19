/**
 * Created by cmm on 16/2/1.
 * 判断终端类型，显示不同的界面，注册不同的事件
 */

module.exports = function() {
    if (navigator.userAgent.match(/Android/i) ||
        navigator.userAgent.match(/webOS/i) ||
        navigator.userAgent.match(/iPhone/i) ||
        navigator.userAgent.match(/iPad/i) ||
        navigator.userAgent.match(/iPod/i) ||
        navigator.userAgent.match(/BlackBerry/i) ||
        navigator.userAgent.match(/Windows Phone/i))
    {
        return true;
    } else {
        return false;
    }
};