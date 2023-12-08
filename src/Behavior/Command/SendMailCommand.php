<?php

namespace DesignPattern\Behavior\Command;

class SendMailCommand implements CommandInterface, CommandLogInterface
{
    public int $action;
    private $data;
    public $message;

    private string $messageInit = 'Send Mail: ';

    public function __construct($data)
    {
        $this->data = $data;
        $this->action = HelperActionCommand::ACTION_COMMAND_NO_ACTION;
    }

    public function execute()
    {
        $this->action = HelperActionCommand::ACTION_COMMAND_SEND_MAIL;
        $this->message = $this->messageInit . json_encode($this->data);
        // Lógica para enviar el mail
    }

    public function toLog()
    {
        return $this;
    }
}