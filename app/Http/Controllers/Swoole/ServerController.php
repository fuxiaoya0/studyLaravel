<?php

namespace App\Http\Controllers\Swoole;

use App\Http\Controllers\Controller;

class ServerController extends Controller {
    const HOST = '127.0.0.1';
    const PORT = 9501;

    public function index() {
        $serv = new \swoole_server(self::HOST, self::PORT);
        // 监听连接
        $serv->on('connect', function ($serv, $fd) {
            echo "connect";
        });
        // 监听数据接收
        $serv->on('receive', function ($serv, $fd, $from_id, $data) {
            var_dump($from_id);
            var_dump($data);
        });
        // 监听关闭连接
        $serv->on('close', function ($serv, $fd) {
            echo "receive";
        });

        $serv->start();
    }
}
