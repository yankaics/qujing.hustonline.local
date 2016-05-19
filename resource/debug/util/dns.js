/**
 * Created by cmm on 16/3/28.
 */
/**
 * 防DNS劫持 好像没有效果
 */

module.exports = function(){
    if(top!==self){
        top.location.href=this.location.href;
        console.log("防DNS劫持");
    }
};
