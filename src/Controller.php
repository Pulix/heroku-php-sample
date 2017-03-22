<?php
namespace Project;

class Controller
{
    public function index()
    {
        header('Content-Type: application/json');

        echo json_encode([
            'test' => '123',
            'date' => date('r'),
        ]);

        die();
    }
}