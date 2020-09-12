<?php

namespace Soroush\Action;

class  Actions
{

    protected $action;

    public function __construct()
    {
        $this->action = new Action();
    }


    public function getAction()
    {
        return $this->action;
    }


    public function addAction($hook, $callback, $priority = 20, $arguments = 1)
    {
        $this->action->listen($hook, $callback, $priority, $arguments);
    }

    public function removeAction($hook, $callback, $priority = 20)
    {
        $this->action->remove($hook, $callback, $priority);
    }

    public function action()
    {
        $args = func_get_args();
        $hook = $args[0];
        unset($args[0]);
        $args = array_values($args);
        $this->action->fire($hook, $args);
    }

}
