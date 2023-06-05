<?php

namespace controller\contact;
include('model/MessageRequest.php');
include('model/UserRequest.php');

class Forum
{
    private $bdd;
    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("contact/forum.view.php", NULL, "forum");
    }

    public static function newTopic(): void {
        $check = false;
        if((isset($_POST['topic']) && $_POST['topic'] != '') && (isset($_POST['question']) && $_POST['question'] !='')) {
            addTopic($_POST['topic'], $_POST['question']);
        }
    }

}