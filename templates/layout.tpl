<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {if $refresh}<meta http-equiv="refresh" content="{$refresh}" />{/if}
    <title>{if $title}{$title}{else}Beania message board{/if}</title>
    
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="foundation.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="row">
        <div class="large-4 columns">
    
            {$content}
    
    <div class="footer">Vytvoril © <a href="http://team.matfyz.sk/">team matfyz.sk</a>, 2013</div>
        </div>
    </div>
</body>
</html>
