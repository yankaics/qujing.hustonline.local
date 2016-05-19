<div class="main" id="body-pc-box">
   <div class="hj-item">
        <div class="hj-avatar-wrap">
            <img class="hj-avatar" src="/resource/{$helper_detail.avatar}" alt="头像"/>

        </div>
        <p class="head">
            <span class="hj-name">{$helper_detail.name}</span> <span class="hj-title">{$helper_detail.title}</span>
        </p>
        <p class="hj-skill">
            {$helper_detail.skill_intro}
        </p>
        <p class="hj-info clf">
            <span class="hj-num left">{if !$helper_detail.num}0{else}{$helper_detail.num}{/if}人想见</span>
            <span class="hj-price-wrap right">
                <span class="hj-price">￥{$helper_detail.skill_price}</span>
                <span class="hj-time">/{$helper_detail.skill_time}小时</span>
            </span>
        </p>
        <p class="hj-detail-wrap clf"> </p>
    </div>

    <div class="intro-content">
        <p class="detail-header">个人简介</p>
        <p>{$helper_detail.person_intro}</p>
        <p class="detail-header">主题简介</p>
        <p>{$helper_detail.subject_intro}</p>
        <p class="warn-word">关注公众号【华科学习帝】，查看更多主题。</p>
    </div>
    <a href="/index/reserve/{$helper_detail.id}"><div class="bottom-bar">报名约见</div></a>
</div>