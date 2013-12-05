<?php

require_once 'init.php';

$warnings=array();

if (isset($_POST['submit'], $_POST['pass'])){
        if ($_POST['pass']=='robimeporiadok') $_SESSION['logged']=1;
        else $warnings[]='login fail';
}

if (isset($_POST['submit'],$_POST['id'], $_POST['action'])){
    if ($_POST['action']=="show") {
        $status = 1;
    }
    else {
        $status = 0;
    }


    $message = $entityManager->find('Entity\Message', $_POST['id']);
    $message->setStatus($status);

    $entityManager->persist($message);
    $entityManager->flush();
}

$query = 'SELECT * FROM message ORDER BY posted_at DESC';

$messages = $db->fetchAll($query);


$smarty->assign('messages', $messages);
$smarty->assign('warnings', $warnings);
$smarty->assign('logged', $_SESSION['logged']);

$content = $smarty->fetch('admin.tpl');
$smarty->assign('title', 'Admin: beania');
$smarty->assign('refresh', 10);
$smarty->assign('content', $content);
$smarty->display('layout.tpl');
?>
