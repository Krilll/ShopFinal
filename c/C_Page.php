<?php
//
// Конттроллер страницы чтения.
//
include_once('m/model.php');


class C_Page extends C_Base
{
    //
    // Конструктор.
    //

    //$this->headerText = hea

    public function action_index()
    {

        $this->isAuth = 0;
        $this->title .= '::Главная';
        $text = text_get();
        $this->content = $this->Template('v/v_index.php', array('text' => $text));
    }

    public function action_catalog()
    {



    }

    public function action_basket()
    {



    }
}