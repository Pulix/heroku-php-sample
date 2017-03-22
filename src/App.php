<?php
namespace Project;

class App
{
    protected $controller;
    protected $logger;

    public function __construct()
    {
        $this->controller = new Controller();
        $this->logger = new Logger();
    }


    public function run() {
        $this->logger->log('starting');
        $this->controller->index();
    }
}