<?php

class TesteController extends AppController {

    public function controlarLuz($state) {

        $file = $this->checkOSAndReturnFile();
        $this->openSerialCommunication($file);
        $port = fopen($file, 'w+');
        $this->acaoLed($port, $state);
    }

    public function acaoLed($port, $state) {
        if ($port) {
            if ($state == 1)
                fwrite($port, $state);
            else
                fwrite($port, $state);
        }
        $this->close($port);
    }

}
