<?php

namespace DesignPattern\Behavior\Command;

class DataProcessCommand implements CommandInterface, CommandLogInterface
{
    public int $action;
    private $data;
    public string $message;

    private string $messageInit = 'DataProcess: ';

    public function __construct($data)
    {
        $this->data = $data;
        $this->action = HelperActionCommand::ACTION_COMMAND_NO_ACTION;
    }

    public function execute()
    {
        $this->action = HelperActionCommand::ACTION_COMMAND_DATA_PROCESS;
        $this->message = $this->messageInit . json_encode($this->data);
        // Lógica para procesar los datos...
    }

    public function toLog()
    {
        return $this;
    }
}