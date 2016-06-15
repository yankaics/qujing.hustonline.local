# qujing.hustonline.local
新版校园取经页面，用CI框架重新写了下

##登录注册
采用微信第三方登录接口

登录接口

```json
{
  Method: "GET",
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
