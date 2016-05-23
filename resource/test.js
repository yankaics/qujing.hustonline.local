/**
 * Created by cmm on 16/5/24.
 */
$.ajax({
    url :  'http://weixin.hustonline.net/jsapi',
    type: 'POST',
    data: {url:location.href},
    success: function( data ) {
        data = $.parseJSON(data);
        wx.config({
            debug: true,
            appId: data.appId,
            timestamp: data.timestamp,
            nonceStr: data.nonceStr,
            signature: data.signature,
            jsApiList: ['onMenuShareTimeline']
        });
    },
    error:function(data){
        console.log('出错了');
    }
});
wx.ready(function () {
    // 在这里调用 API
    wx.onMenuShareTimeline({
        title: '测试', // 分享标题
        link: 'http://www.baidu.com', // 分享链接
        imgUrl: 'http://love.yishun.co/img/logo.png', // 分享图标
        success: function () {
            // 用户确认分享后执行的回调函数
            console.log('成功');
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
            console.log('取消');
        },
        xhrFields: {
            withCredentials: true
        }
    });
});
