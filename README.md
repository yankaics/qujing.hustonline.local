# qujing.hustonline.local
新版校园取经页面，用CI框架重新写了下

所有的接口定义用下面的形式定义
```javascript
{
  Method: '请求的方法',
  url   : '请求的url',
  data  :{ }  //以 `json` 的方式向后台接口发送数据
  result:{    //后台接口返回的数据格式
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```

##登录注册
采用微信第三方登录接口
###1.登录接口
```javascript
{
  Method: "GET",
  url   : "/login",
  data  :{
            appId //采用微信登陆产生的每个人独有的appID
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{
                    nickname:"",
                    avatar  :""
            } 
         }        
}
```

###2.注册接口
```javascript
{
  Method: "POST",
  url   : "/signin",
  data  :{
            nickname:"", //昵称
            avatar  :""  //头像
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{
                    nickname:"",
                    avatar  :""
            } 
         }        
}
```
##信息预览
###3.首页的所有技能的展示接口展示功能
```javascript
{
  Method: "POST",
  url   : "/skills",
  data  :{
            pos:"",    //请求技能的位置
            num:""     //请求技能的数量
            keyword:"" //搜索时的关键字
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{
                   [
                    {
                      'name': '',//行家的真实姓名
                      'pic' : '',//行家的真实照片
                      'title':'',//行家的头衔
                      'skill_intro':'',//该技能的简单介绍
                      'skill_price':'',//该技能的收费
                      'person_num' :'' //预约改技能的人数
                    }
                   ]
            } 
         }        
}
```
###4.获取技能的详细信息接口
```javascript
{
  Method: POST/GET,
  url   : "/skill",
  data  :{
            id:"", //技能的id
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{
                   [
                    {
                      'name': '',//行家的真实姓名
                      'pic' : '',//行家的真实照片
                      'title':'',//行家的头衔
                      'title':'',//该技能的简单介绍
                      'detail':'',//该技能的具体介绍
                      'price':'',//该技能的收费
                      'type':'',//该技能的类型
                      'num' :'' //约见改技能的人数
                    }
                   ]
            } 
         }        
}
```

###5.获取评论的详细信息接口
```javascript
{
  Method: POST/GET,
  url   : "/comments",
  data  :{
            id:"", //行家技能的id
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{
                   [
                    {
                      'commenter_nickname':"",//评价者昵称
                      'comment':"",//评价内容
                      'time'   :"",//评价时间
                    }
                   ]
            } 
         }        
}
```
###6.约见技能的接口
```javascript
{
  Method: POST/GET,
  url   : "/reserve",
  data  :{
            person_id:"", //约见者的id
            skill_id :"", //技能的id
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```
##成为行家
###7.认证成为行家的接口
```javascript
{
  Method: POST/GET,
  url   : "/assign",
  data  :{
            person_id:"", //用户id
            name:"", //用户真实姓名
            pic:"", //用户真实头像
            title:"", //用户头衔
            intro:"", //用户自我介绍
            picAssign:"", //用于判断用户是否可以成为行家的照片
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```
##个人中心
###8.编辑个人信息的接口
```javascript
{
  Method: POST/GET,
  url   : "/edit",
  data  :{
            person_id:"", //用户id
            nickname:"",//用户昵称
            avatar:"",//有户头像
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```
###9.用户身份认证的接口
```javascript
{
  Method: POST/GET,
  url   : "/user_assign",
  data  :{
            person_id:"", //用户id
            name:"",//用户真实姓名
            pic:"",//有户真实头像
            assign_pic:"",//验证用户身份的照片
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```
##发布技能
###10.发布技能的接口
```javascript
{
  Method: POST/GET,
  url   : "/release",
  data  :{
            person_id:"", //用户id
            title:"",//技能描述
            type:"",//技能类型
            price:"",//技能价格
            content:"",//技能内容
            Certification:"",//验证技能的照片
          } 
  result:{
            isError:0/1,
            msg    :"后台提供的信息提示", 
            data   :{} 
         }        
}
```














