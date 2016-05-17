<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午1:55
 * 复制二手的一些信息
 */

$config['status'] = array
(
    'success' => array('code' => 0, 'msg' => '成功'),

    'data_error'         => array('code' => 8, 'msg' => '缺失data参数', 'msg_show' => 0),
    'method_error'       => array('code' => 9, 'msg' => '请求方式错误', 'msg_show' => 0),
    'data_cannot_parse'  => array('code' => 7, 'msg' => '数据无法解码', 'msg_show' => 0),
    'params_miss'        => array('code' => 6, 'msg' => '缺失参数', 'msg_show' => 0),
    'upload_error'       => array('code' => 6, 'msg' => '图片上传出错', 'msg_show' => 0),

    'pwd_twice_diff'     => array('code' => 13, 'msg' => '两次密码不一致'),
    'email_used'         => array('code' => 10, 'msg' => '邮箱已被使用'),
    'nickname_used'      => array('code' => 12, 'msg' => '昵称已经被使用'),
    'email_invalid'      => array('code' => 14, 'msg' => '邮箱格式不正确'),
    'pwd_not_right'      => array('code' => 15, 'msg' => '密码错误'),
    'username_not_exist' => array('code' => 11, 'msg' => '账号尚未注册'),
    'pwd_too_short'      => array('code' => 16, 'msg' => '密码长度少于6位'),
    'nickname_empty'     => array('code' => 17, 'msg' => '昵称不能为空'),
    'unauthorized'       => array('code' => 18, 'msg' => '没有登录哦，亲', 'msg_show' => 0),
    'empty_avatar'       => array('code' => 19, 'msg' => '头像不能为空'),
    'empty_username'     => array('code' => 11, 'msg' => '用户名不能为空'),
    'empty_nickname'     => array('code' => 40, 'msg' => '昵称不能为空'),
    'black_user'         => array('code' => 44, 'msg' => '用户在黑名单中禁止此操作'),
    'long_nickname'      => array('code' => 45, 'msg' => '用户昵称过长'),
    'invalid_scope'      => array('code' => 46, 'msg' => '没有权限进行此操作'),
    'invalid_phone'      => array('code' => 47, 'msg' => '电话号码格式不正确'),
    'invalid_department' => array('code' => 49, 'msg' => '院系不存在'),

    'invalid_price'      => array('code' => 20, 'msg' => '价格不为整数'),
    'invalid_terminal'   => array('code' => 21, 'msg' => '终端不正确', 'msg_show' => 0),
    'invalid_qq'         => array('code' => 22, 'msg' => 'qq号码格式不正确'),
    'goods_not_exist'    => array('code' => 23, 'msg' => '商品已经被删除', 'msg_show' => 1),
    'empty_comment'      => array('code' => 24, 'msg' => '评论不能为空'),
    'comment_frequently' => array('code' => 25, 'msg' => '评论操作频繁'),
    'price_too_high'     => array('code' => 26, 'msg' => '价格过高'),
    'error_class_id'     => array('code' => 27, 'msg' => '商品类型不存在'),
    'comment_not_exist'  => array('code' => 28, 'msg' => '评论不存在'),
    'empty_goods_name'   => array('code' => 29, 'msg' => '商品名称为空'),
    'short_goods_detail' => array('code' => 30, 'msg' => '商品描述字数低于15'),
    'empty_goods_image'  => array('code' => 31, 'msg' => '商品图片为空'),
    'image_not_array'    => array('code' => 32, 'msg' => '图片数据不是数组'),
    'empty_qq_phone'     => array('code' => 33, 'msg' => 'qq和电话必填写一项'),
    'too_much_image'     => array('code' => 34, 'msg' => '图片数量过多'),
    'goods_is_sold'      => array('code' => 35, 'msg' => '商品已经售出', 'msg_show' => 0),
    'goods_is_on_sale'   => array('code' => 36, 'msg' => '商品已经在架上', 'msg_show' => 0),
    'goods_is_delete'    => array('code' => 37, 'msg' => '商品已经被删除', 'msg_show' => 0),
    'invalid_class_id'   => array('code' => 38, 'msg' => '商品类型不正确', 'msg_show' => 0),
    'invalid_place'      => array('code' => 39, 'msg' => '交易地点不正确', 'msg_show' => 0),
    'release_frequently' => array('code' => 40, 'msg' => '发布过于频繁'),
    'invalid_bucket'     => array('code' => 41, 'msg' => '相册不正确', 'msg_show' => 0),
    'not_register_email' => array('code' => 42, 'msg' => '该邮箱尚未注册'),
    'invalid_place_null' => array('code' => 43, 'msg' => '交易地点不能为空'),
    'empty_contact'      => array('code' => 44, 'msg' => '您有商品正在出售，电话和qq必需保留一项'),
    'goods_is_off_shelf' => array('code' => 45, 'msg' => '商品已经下架', 'msg_show' => 0),
    'invalid_address'    => array('code' => 46, 'msg' => '收获地址不能为空'),
    'cannot_affordable'  => array('code' => 47, 'msg' => '金币不足，无法购买'),
    'draw_confirmed'     => array('code' => 48, 'msg' => '已经确认过抽奖', 'msg_show' => 0),
    'invalid_continuous' => array('code' => 49, 'msg' => '签到天数与奖品需天数不符'),

    'empty_college'       => array('code' => 50, 'msg' => '未填写学校信息'),
    'few_friend'          => array('code' => 51, 'msg' => '人人好友数低于10'),
    'few_visitor'         => array('code' => 52, 'msg' => '人人来访数少于10'),
    'renren_action_miss'  => array('code' => 53, 'msg' => '人人登录缺少action', 'msg_show' => 0),
    'hust_cert_fail'      => array('code' => 54, 'msg' => '学号和姓名不匹配'),
    'znuel_cert_fail'     => array('code' => 56, 'msg' => '学号和身份证号不匹配'),
    'hust_cert_unable'    => array('code' => 59, 'msg' => '网络加载异常请重试'),
    'znuel_cert_unable'   => array('code' => 60, 'msg' => '网络加载异常请重试'),
    'error_renren_action' => array('code' => 55, 'msg' => '人人登录action字段不正确', 'msg_show' => 0),
    'renren_api_error'    => array('code' => 57, 'msg' => '人人接口错误'),
    'stu_cert_exist'      => array('code' => 58, 'msg' => '用户已认证或正在审核中'),
    'empty_field'         => array('code' => 59, 'msg' => '所有字段不能为空'),
    'not_renn_test_user'  => array('code' => 60, 'msg' => '人人审核中，测试用户才可登录'),
    'nwsuaf_cert_unable'  => array('code' => 61, 'msg' => '网络加载异常请重试'),
    'nwsuaf_cert_fail'    => array('code' => 62, 'msg' => '学号和密码不匹配'),
    'scuec_cert_unable'   => array('code' => 63, 'msg' => '教务系统不稳定，请重试一次吧'),
    'scuec_cert_fail'     => array('code' => 64, 'msg' => '学号和密码不匹配'),
    'hzau_cert_unable'    => array('code' => 65, 'msg' => '华农学号认证暂时不可用'),
    'few_renren_friend'   => array('code' => 66, 'msg' => '人人网好友数少于50个'),
    'renn_not_match_user' => array('code' => 67, 'msg' => '人人网学校信息与用户资料不匹配'),
    'invalid_stuname'     => array('code' => 68, 'msg' => '学生姓名不能为空'),
    'invalid_stuno'       => array('code' => 69, 'msg' => '学号不能为空'),
    'invalid_stuphoto'    => array('code' => 69, 'msg' => '学生证照片没有上传'),
    'stu_cert_in'         => array('code' => 71, 'msg' => '用户学号认证正在审核中'),
    'too_much_draw_times' => array('code' => 72, 'msg' => '今天的抽奖次数已经用完了'),
    'invalid_page'        => array('code' => 73, 'msg' => 'page参数不正确', 'msg_show' => 0),
    'empty_discuss'       => array('code' => 75, 'msg' => '讨论不能为空哦'),
    'empty_show_comment'  => array('code' => 76, 'msg' => '评论不能为空哦'),
    'invalid_show_id'     => array('code' => 77, 'msg' => '不存在的晒单id'),
    'black_ip'            => array('code' => 78, 'msg' => '你的IP在黑名单中，无法发布商品'),
    'sold_cannot_modify'  => array('code' => 79, 'msg' => '已售出商品不能修改原始信息'),
    'black_phone'         => array('code' => 80, 'msg' => '电话号码在黑名单中，无法发布商品'),
    'renren_cert_exist'   => array('code' => 81, 'msg' => '已经通过人人认证'),
    'reward_soldout'      => array('code' => 82, 'msg' => '礼品已经兑换完'),

    'invalid_discuss'     => array('code' => 90, 'msg' => '讨论不能为空哦'),
    'today_signed'        => array('code' => 91, 'msg' => '今天已经签过到了'),
    'long_want_name'      => array('code' => 92, 'msg' => '商品名称超过25字'),
    'empty_price'         => array('code' => 93, 'msg' => '价格不能为空'),
    'empty_place'         => array('code' => 94, 'msg' => '交易地点不能为空'),
    'invalid_want_id'     => array('code' => 95, 'msg' => '求购商品不存在'),

    'qiniu_upload_fail'   => array('code' => 70, 'msg' => '上传文件失败'),
    'school_not_exist'    => array('code' => 81, 'msg' => '学校不存在', 'msg_show' => 0),
    'empty_feedback'      => array('code' => 82, 'msg' => '反馈不能为空哦，亲'),
    'del_other_school_goods' => array('code' => 900, 'msg' => '不能删除其他学校的商品'),
);