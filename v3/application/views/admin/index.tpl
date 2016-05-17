<div class="main">
    <p class="header">在线的行家</p>
    <div class="list-wrap">
        {foreach from=$helper_list item=value}
            <div class="li-item">
                        <span class="avatar">
                            <img src="/resource/{$value.avatar}" alt=""/>
                        </span>
                <span  class="name">{$value.name}</span>
                <span  class="title">{$value.title}</span>
                <span  class="see_num">{if !$value.num}0{else}{$value.num}{/if}</span>
                <span  class="price">￥{$value.skill_price}元/{$value.skill_time}小时</span>
                <a href="/manage/index/detail/{$value.id}" class="right">详情</a>
            </div>
        {/foreach}
    </div>
</div>