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
        $values= [$_POST['topic'], $_POST['question']];
        $check = false;
        foreach($values as $value) {
            if(isset($value) && $value != '') {
                $check = true;
            }
            else {
                $check = false;
                break;
            }
        }
        if($check == true) {
            addTopic($_POST['topic'], $_POST['question']); 
        }
    }

}