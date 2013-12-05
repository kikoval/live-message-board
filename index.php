<?php

use Entity\Message;

require_once 'init.php';

$messages=array();
$warnings=array();

if (isset($_POST['submit'])){
    if (strlen(trim($_POST['user']))==0) {
        $warnings[]="Meno odosielateľa nesmie byť prázdne.";
    }

    $message = new Message();
    $message->setTitle($_POST['title']);
    $message->setUser($_POST['user']);
    $message->setText($_POST['text']);
    $message->setPostedAt(new \Datetime());

    $entityManager->persist($message);
    $entityManager->flush();

    /*
        $query = 'INSERT INTO message SET `title`= ?, `user`= ?, `text`= ?, status=0, `posted_at`= ?';
        $result = $db->executeQuery($query, array($_POST['title'], $_POST['user'], $_POST['message'], time()));

        if (!empty($warnings) || !$result){
                $warnings[]="Správu sa nepodarilo uložiť.";
        } else {
                $messages[]="Správa úspešne odoslaná. Zobrazí sa až po schválení na stránke <a href='view.php'>message boardu</a> Beánie.";
        }
    */
}

$smarty->assign('messages', $messages);
$smarty->assign('warnings', $warnings);
$smarty->assign('is_moderation_on', IS_MODERATED);
$content = $smarty->fetch('main.tpl');
$smarty->assign('content', $content);
$smarty->display('layout.tpl');
?>
