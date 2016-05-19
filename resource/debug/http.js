/**
 * Created by cmm on 16/5/17.
 */
var http = {};
//利用jQuery想后台发送FormData数据
http.ajaxFormData = function(url,type,data,callback_success,callback_error){
    return  $.ajax({
        url:  url,
        type: type,
        data: data,
        processData: false,
        contentType: false,
        traditional: true,
        xhrFields: {
            withCredentials: true
        },
        success: function( data ) {
            callback_success && callback_success(data);
        },
        error: function( data ) {
            callback_error && callback_error(data);
        }
    });
};

//利用jQuery想后台发送FormData数据
http.ajax = function(url,type,data,callback_success,callback_fail){
    return $.ajax({
        url:  url,
        type: type,
        data: data,
        success: function( data ) {
            callback_success && callback_success(data);
        },
        error:function(data){
            callback_fail && callback_fail(data);
        },
        xhrFields: {
            withCredentials: true
        }
    });
};

module.exports = http;