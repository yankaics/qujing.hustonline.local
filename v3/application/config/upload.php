<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午6:58
 */
$config['upload'] = array
(
    'upload_path'       =>  './resource/img/avatar/',	//文件上传的位置，必须是可写的，可以是相对路径或绝对路径
    'allowed_types'     =>	'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG',       //允许上的文件 MIME 类型，通常文件的后缀名可作为 MIME 类型 可以是数组，也可以是以管道符（|）分割的字符串
    //file_name	None	Desired file name	如果设置了，CodeIgniter 将会使用该参数重命名上传的文件 设置的文件名后缀必须也要是允许的文件类型 如果没有设置后缀，将使用原文件的后缀名
    'file_ext_tolower'  =>  TRUE,	//TRUE/FALSE (boolean)	如果设置为 TRUE ，文件后缀名将转换为小写
    'overwrite'         =>	FALSE,  //TRUE/FALSE (boolean)	如果设置为 TRUE ，上传的文件如果和已有的文件同名，将会覆盖已存在文件 如果设置为 FALSE ，将会在文件名后加上一个数字
    'max_size'      	=>  9000,	//None	允许上传文件大小的最大值（单位 KB），设置为 0 表示无限制 注意：大多数 PHP 会有它们自己的限制值，定义在 php.ini 文件中 通常是默认的 2 MB （2048 KB）。
    'max_width'	        =>  1920,   //None	图片的最大宽度（单位为像素），设置为 0 表示无限制
    'max_height'        =>	1920,	//None	图片的最大高度（单位为像素），设置为 0 表示无限制
    'min_width'	        =>  0,      //None	图片的最小宽度（单位为像素），设置为 0 表示无限制
    'min_height'        =>	0,	    //None	图片的最小高度（单位为像素），设置为 0 表示无限制
    'max_filename'      =>	12,     //None	文件名的最大长度，设置为 0 表示无限制
    'max_filename_increment'=>	100,	//None	当 overwrite 参数设置为 FALSE 时，将会在同名文件的后面加上一个自增的数字 这个参数用于设置这个数字的最大值
//    'encrypt_name'      =>	TRUE,	//TRUE/FALSE (boolean)	如果设置为 TRUE ，文件名将会转换为一个随机的字符串 如果你不希望上传文件的人知道保存后的文件名，这个参数会很有用
    'remove_spaces'	    =>TRUE	,//TRUE/FALSE (boolean)	如果设置为 TRUE ，文件名中的所有空格将转换为下划线，推荐这样做
    'detect_mime'	    =>TRUE	,//TRUE/FALSE (boolean)	如果设置为 TRUE ，将会在服务端对文件类型进行检测，可以预防代码注入攻击 除非不得已，请不要禁用该选项，这将导致安全风险
    'mod_mime_fix'	    =>TRUE	//TRUE/FALSE (boolean)
);