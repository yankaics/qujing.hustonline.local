<div class="main">
    <div class="detail-list-wrap">
        <p class="header">想约见『{$helper_detail.name}』的人</p>
        {foreach from=$baoming_list item=value}
            <div class="detail-li-item">
                <p class="base-info">
                    <span class="text-left">{$value@index}</span>
                    <span>{$value.name}</span>
                    <span>{$value.sex}</span>
                    <span>{$value.grade}</span>
                    <span>{$value.phone}</span>
                    <span>{$value.wechat}</span>
                </p>
                <p class="detail-info">
                    <span class="word">想说的话</span>{$value.intro}
                </p>
            </div>
            {foreachelse}
            <p class='no-result'>暂时还没有人~</p>
        {/foreach}

    </div>
</div>