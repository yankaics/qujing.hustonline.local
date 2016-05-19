<div class="main" id="body-pc-box">
    <div class="hj-list">
        {foreach from=$helper_list item=value}
            <a href="index/helper/{$value.id}"><div class="hj-item">
                    <div class="hj-avatar-wrap">
                        <img class="hj-avatar" src="/resource/{$value.avatar}" alt="头像"/>
                    </div>
                    <p class="head">
                        <span class="hj-name">{$value.name}</span> <span class="hj-title">{$value.title}</span>
                    </p>
                    <p class="hj-skill">
                        {$value.skill_intro}
                    </p>
                    <p class="hj-info clf">
                        <span class="hj-num left">{if !$value.num}0{else}{$value.num}{/if}人想见</span>
                            <span class="hj-price-wrap right">
                                <span class="hj-price">￥{$value.skill_price}</span>
                                <span class="hj-time">/{$value.skill_time}小时</span>
                            </span>
                    </p>
                    <p class="hj-detail-wrap clf">
                        <span class="hj-detail right">查看详情</span>
                    </p>
                </div>
            </a>
            {foreachelse}
        {/foreach}
    </div>
    <div class="bottom-bar">
        <a href="/" class="bottom-button">
            <img src="/resource/img/btn1_active.png" alt="取经">
        </a>
        <a href="/index/intro" class="bottom-button">
            <img src="/resource/img/btn2.png" alt="分享经验">
        </a>
    </div>
</div>
