<?php

require_once 'init.php';

$query = 'SELECT * FROM message WHERE status=1 ORDER BY posted_at DESC LIMIT 5';
$messages = $db->fetchAll($query);

$smarty->assign('messages', $messages);

$content = $smarty->fetch('view.tpl');
$smarty->assign('title', 'blog.matfyz.sk - O matfyze, o živote...');
$smarty->assign('content', $content);
$smarty->display('layout.tpl');
?>
