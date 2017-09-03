<?php

namespace App\Library;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class MyChat implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $msg = json_decode($msg);
        $msg->time = date("H:i:s",time());
        foreach ($this->clients as $client) {
            if ($from != $client) {
                $msg->isRight = false;
                $client->send(json_encode($msg));
            }elseif($from == $client){
                $msg->isRight = true;
                $from->send(json_encode($msg));
            }
        }
        echo $msg = json_encode($msg) , "\n" ;
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }
}
