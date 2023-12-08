<?php

namespace DesignPattern\Behavior\Command;


class PrintJobCommand implements CommandInterface, CommandLogInterface
{
    public int $action;
    private $data;
    public $message;

    private string $messageInit = 'Print: ';

    public function __construct($data)
    {
        $this->data = $data;
        $this->action = HelperActionCommand::ACTION_COMMAND_NO_ACTION;
    }

    public function execute()
    {
        $this->action = HelperActionCommand::ACTION_COMMAND_PRINT;
        $this->message = $this->messageInit . json_encode($this->data);
        // Lógica para procesar el trabajo de impresión
    }

    public function toLog()
    {
        return $this;
    }
}