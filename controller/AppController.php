<?php

/* AppController.php
 * Classe Controller principal do framework Serial Sirius. 
 * 
 * Serial Sirius Framework
 * @author: Gérley Adriano Miranda Cruz <gerleyadriano7@gmail.com>
 * @group:  Sirius Grupo de Pesquisa
 * @site:   sirius.etc.br
 * @version: 0.1 - 01/12/2015 18:25
 */

class AppController {

    public $name;

    protected function openSerialCommunication($file) {
        exec("stty -F $file raw speed 9600");
    }

    private function selectFileLinux() {
        $file = false;
        if (file_exists('/dev/ttyUSB0')) {
            $file = '/dev/ttyUSB0';
        } else {
            if (file_exists('/dev/ttyACM0')) {
                $file = '/dev/ttyACM0';
            } else {
                $file = '/dev/ttyS0';
            }
        }
        return $file;
    }

    private function selectFileWindows() {
        $nameInWindows = 'COM3';
        return $nameInWindows;
    }

    private function selectFileOSX() {
        $nameInOSX = '/dev/tty.usbmodem1a21';
        return $nameInOSX;
    }

    protected function checkOSAndReturnFile() {
        $operationalSystem = PHP_OS;
        $select = null;
        if ($operationalSystem == 'Linux') {
            $select = $this->selectFileLinux();
            return $select;
        }
        if ($operationalSystem == 'WINNT') {
            $select = $this->selectFileWindows();
            return $select;
        }
        if ($operationalSystem == 'Darwin') {
            $select = $this->selectFileOSX();
            return $select;
        }
    }

    protected function close($port) {
        fclose($port);
    }

    public function debug($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

    private function saudacao() {
        echo 'Olá Wermesson';
    }
    
}
