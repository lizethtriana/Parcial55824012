<?php

namespace app\controllers;


class Empleado
{

    public function saveNewPerson($request)
    {
        $nombre = new Empleado();
        $nombre->set('nombre', $request['nombreInput']);
        $nombre->set('salario_base', $request['nombreInput']);
        $nombre->set('comision_pct', $request['nombreInput']);
        return $nombre->save();
    }
}
    