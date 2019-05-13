<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/transportesecuadorapp-firebase-adminsdk-bmrl8-7e36e6378a.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
            $db = $firebase->getDatabase();
            $db->getReference('conductor/002')->set([
                'id'=>2,
                'name'=> 'dfsdf',
                'email'=>'sdjbks@hotmail.com',
                'online'=>1
            ]);
            echo '<h1>Se ingreso en la base de datos</h1>';

    }
    public function registroConductor($cedula,$nombre){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/transportesecuadorapp-firebase-adminsdk-bmrl8-7e36e6378a.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
            $db = $firebase->getDatabase();
            $db->getReference('conductor/1')->set([
                'cedula'=>$cedula,
                'nombre'=> $nombre
            ]);
            echo '<h1>Se ingreso en la base de datos</h1>';

    }
}
