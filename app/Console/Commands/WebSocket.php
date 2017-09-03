<?php

namespace App\Console\Commands;

use App\Library\MyChat;
use Illuminate\Console\Command;
use Ratchet\App;
use Ratchet\Server\EchoServer;

class WebSocket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:socket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'WebSocket Server';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Run the server application through the WebSocket protocol on port 8080
        $app = new App('localhost', 8080);
        $app->route('/chat', new MyChat(),array('*'));
        $app->route('/echo', new EchoServer, array('*'));
        $app->run();
    }
}
