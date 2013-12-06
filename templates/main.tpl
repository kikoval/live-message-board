<header class="row">
    <div class="small-1 columns">
        <a href="http://blog.matfyz.sk">
            <img src="assets/logo_blog_matfyz_sk_andale.jpg" alt="Blog.matfyz.sk logo" />
        </a>
    </div>
    <div class="small-3 columns">
        <h1>Live blog</h1>
    </div>
</header>
    
<p>Vitajte na live blogu! Nech sa páči, napíšte svoj príspevok v dĺžke najviac 140 znakov. Príspevok sa {if $is_moderation_on}po schválení {/if}zobrazí v <a href="view.php">zozname príspevkov</a>.</p>

{if count($warnings) > 0}
    <div class="warnings">
        {foreach from=$warnings item=item}
            <p>{$item}</p>
        {/foreach}
    </div>
{/if}
{if count($message) > 0}
    <div class="messages">
        {foreach from=$messages item=item}
            <p>{$item}</p>
        {/foreach}
    </div>
{/if}

<div class="formular">
    <h2>Nový príspevok</h2>
    
    <form action="/" method="post">
       <div>
            <label>Meno (povinné):<input type="text" id="user" required="required" name="user"/></label>
            <label>Text: <textarea name="text" maxlength="140"></textarea></label>  
            <input type="submit" value="Odošli" name="submit" class="button"/>
       </div>
    </form>
</div>

<script>
    window.onload = function() {
        document.getElementById('user').focus();
        }
</script>