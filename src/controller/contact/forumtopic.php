<?php

namespace controller\contact;
include('model/MessageRequest.php');
include('model/UserRequest.php');

class ForumTopic
{
    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("contact/forumtopic.view.php", NULL, "forum");
    }

    public static function messageInput() {
        if(isset($_POST['message']) && $_POST['message'] != '') {
            $id = $GLOBALS['dispatcher']->getPage();
            $content = $_POST['message'];
            postMessage($id, $content);
        }
    }
}