<?php

namespace app\models\entities;

use app\models\drivers\ConexDB;

class Empleado 
{
    protected $id = null;
    protected $nombre = "";
    protected $salario_base = "";
    protected $comision_pct = null;


    public function save()
    {
        $sql = "insert into personas (nombre,salario,comision) values ";
        $sql .= "('" . $this->nombre . "','" . $this->salario_base . "'," . $this->comision_pct . ")";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $conex->close();
        return $resultDb;
    }

}