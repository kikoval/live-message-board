<header class="row">
    <div class="small-1 columns">
            <a href="http://blog.matfyz.sk">
                <img src="assets/logo_blog_matfyz_sk_andale.jpg" alt="Blog.matfyz.sk logo" />
            </a>
    </div>
    <div class="small-3 columns">
        <h1>Vitaj na beánii, ako sa ti tu páči?</h1>
    </div>
</header>
            
    <div id="napis_komentar">
            Napíš cez <a href="//{$smarty.server.HTTP_HOST}">{$smarty.server.HTTP_HOST}</a>
    </div>

<div class="messages">
    {foreach from=$messages item=item}
    <div class='comment'>
        <div class='date'>{$item.posted_at|date_format:"%H:%M"}</div>
        <div class='name'>{$item.user|escape:'htmlall':'UTF-8'}</div>
        <div class='text'>
        {$item.text|escape:'htmlall':'UTF-8'}</div>
    </div>
    {/foreach}
</div>
