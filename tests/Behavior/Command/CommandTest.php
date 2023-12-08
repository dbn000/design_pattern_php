<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Behavior;

use DesignPattern\Behavior\Command\CommandQueue;
use DesignPattern\Behavior\Command\DataProcessCommand;
use DesignPattern\Behavior\Command\HelperActionCommand;
use DesignPattern\Behavior\Command\PrintJobCommand;
use DesignPattern\Behavior\Command\SendMailCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{

    public function testCommand(): void
    {

        $queue = new CommandQueue();

        $printJobCommand = $this->getPrintJobCommand();
        $dataProcessingCommand = $this->getDataProcessCommand();
        $sendMailCommand = $this->getSendMailCommand();

        $queue->addCommand($printJobCommand);
        $queue->addCommand($dataProcessingCommand);
        $queue->addCommand($sendMailCommand);

        /**
         * Se ha preparado un parametro "action" para testear cuando se procesa
         * En este momento aunque se haya agregado el comando a la cola de tareas al no haberse procesado su action debe ser la default (ACTION_COMMAND_NO_ACTION)
         */
        $this->assertEquals($printJobCommand->action, HelperActionCommand::ACTION_COMMAND_NO_ACTION);
        $this->assertEquals($dataProcessingCommand->action, HelperActionCommand::ACTION_COMMAND_NO_ACTION);
        $this->assertEquals($sendMailCommand->action, HelperActionCommand::ACTION_COMMAND_NO_ACTION);


        /**
         * Ejecuta la cola de tareas
         */
        $queue->processCommands();

        /**
         * En este momento se ha procesado la cola su action deberia haber cambiado
         */
        $this->assertEquals($printJobCommand->action, HelperActionCommand::ACTION_COMMAND_PRINT);
        $this->assertEquals($dataProcessingCommand->action, HelperActionCommand::ACTION_COMMAND_DATA_PROCESS);
        $this->assertEquals($sendMailCommand->action, HelperActionCommand::ACTION_COMMAND_SEND_MAIL);

    }

    private function getPrintJobCommand(): PrintJobCommand
    {
        $uid = rand(999999, 9999999);
        $content = (object) [
            'uid' => $uid,
            'name' => 'print_work_' . $uid
        ];
        return new PrintJobCommand($content);
    }

    private function getDataProcessCommand(): DataProcessCommand
    {
        $content = (object) [
            'settings' => 'bw',
            'resolution' => 'hd'
        ];
        return new DataProcessCommand($content);
    }

    private function getSendMailCommand(): SendMailCommand
    {
        $content = (object) [
            'email' => 'test@test.com',
            'subject' => 'Subject mail'
        ];
        return new SendMailCommand($content);
    }

}
