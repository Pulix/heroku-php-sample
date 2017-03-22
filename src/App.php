<?php
namespace Project;

class App
{
    protected $controller;
    protected $logger;

    public function __construct(Controller $controller, Logger $logger)
    {
        $this->controller = $controller;
        $this->logger = $logger;
    }
//
//    public function register() {
//        // ...
//        return 'test';
//    }


    public function run() {
        $this->logger->log('starting');
        $this->controller->index();
    }
}