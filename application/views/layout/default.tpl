<!DOCTYPE html>
<html>
    <head lang="en">
        <title>取经——华科校内一对一交流平台</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta content="telephone=no" name="format-detection" />

        {foreach from=$css_list item=css}
        <link rel="stylesheet" href="/resource/css/{$css}"/>
        {/foreach}

        <div style="display:none">
            <img src="/resource/img/icon.png" alt="分享图标">
        </div>
    </head>
    <body>

        {include file="$CONTENT"}

        <script src="/resource/dist/lib/zepto.min.js"></script>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script>
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
                    }
                });
            });
        </script>

        {foreach from=$js_list item=js}
            <script src="/resource/dist/{$js}"></script>
        {/foreach}
        <!-- cnzz数据统计 -->
        <div style="display:none">
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258124905'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1258124905' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </body>
</html>