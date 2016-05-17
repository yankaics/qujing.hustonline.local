/**
 * Created by cmm on 16/5/17.
 */
var admin = {

};
admin.add = function(params){
    var form = new FormData();
    form.append("img_data",params.img_data);
    form.append("name",params.name);
    form.append("title",params.title);
    form.append("person_intro",params.person_intro);
    form.append("subject_intro",params.subject_intro);
    form.append("skill_intro",params.skill_intro);
    form.append("skill_price",params.skill_price);
    form.append("skill_time",params.skill_time);
    return ajaxFormData('/manage/index/add',"POST",form);
};

function ajaxFormData(url,type,data,callback_success,callback_error){
    return  $.ajax({
        url:  url,
        type: type,
        data: data,
        processData: false,
        contentType: false,
        success: function( data ) {
            callback_success && callback_success(data);
        },
        error: function( data ) {
            callback_error && callback_error(data);
        }
    });
}
module.exports = admin;