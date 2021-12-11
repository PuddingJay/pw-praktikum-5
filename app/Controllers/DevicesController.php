<?php

namespace App\Controllers;

use \App\Models\Devices_model;

class DevicesController extends BaseController
{
    protected $devicesModel;

    public function __construct()
    {
        $this->devicesModel = new Devices_model();
    }

    public function Pages()
    {
        $device = $this->devicesModel->findAll();

        $data = [
            'title' => 'Devices',
            'devices' => $device
        ];

        echo view('template/header', $data);
        echo view('Pages/Devices', $data);
    }
}
