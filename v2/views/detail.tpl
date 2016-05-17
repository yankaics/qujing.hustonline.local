<div class="main">
   <div class="hj-item">
        <div class="hj-avatar-wrap">
            <img class="hj-avatar" src="/resource/{$data.avatar}" alt="头像"/>

        </div>
        <p class="head">
            <span class="hj-name">{$data.name}</span> <span class="hj-title">{$data.title}</span>
        </p>
        <p class="hj-skill">
            {$data.skill_intro}
        </p>
        <p class="hj-info clf">
            <span class="hj-num left">{$data.id}人想见</span>
                                <span class="hj-price-wrap right">
                                    <span class="hj-price">￥{$data.skill_price}</span>
                                    <span class="hj-time">/{$data.skill_time}小时</span>
                                </span>
        </p>
        <p class="hj-detail-wrap clf"> </p>
    </div>

    <div class="intro-content">
        <p class="detail-header">个人简介</p>
        <p>{$data.person_intro}</p>
        <p class="detail-header">主题简介</p>
        <p>{$data.subject_intro}</p>
        <p class="warn-word">关注公众号【华科学习帝】，查看更多主题。</p>
    </div>
    <a href="/index.php?method=reserve&id={$data.id}"><div class="bottom-bar">报名约见</div></a>
</div>