<?php//// Базовый класс контроллера.//abstract class C_Controller{    // Генерация внешнего шаблона    protected abstract function render();    // Функция отрабатывающая до основного метода    protected abstract function before();    public function Request($action)    {        $this->before();        $this->$action();   //$this->action_index        $this->render();    }    //    // Запрос произведен методом GET?    //    protected function IsGet()    {        return $_SERVER['REQUEST_METHOD'] == 'GET';    }    //    // Запрос произведен методом POST?    //    protected function IsPost()    {        return $_SERVER['REQUEST_METHOD'] == 'POST';    }    //    // Генерация HTML шаблона в строку.    //    protected function Template($fileName, $vars = array())    {        // Установка переменных для шаблона.        foreach ($vars as $k => $v)        {            $$k = $v;        }        // Генерация HTML в строку.        ob_start();        include "$fileName";        return ob_get_clean();    }    // Если вызвали метод, которого нет - завершаем работу    public function __call($name, $params){        die('Не пишите фигню в url-адресе!!!');    }}