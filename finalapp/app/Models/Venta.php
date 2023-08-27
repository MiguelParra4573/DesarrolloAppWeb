<?php
namespace App\Models;
use CodeIgniter\Model;

class Venta extends Model{
    protected $table = 'ventas'; 
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombrecomprador', 'producto', 'cantidad', 'precio', 'marca'];
    
    public function actualizarVenta($id, $datos) {
        $datosValidos = array_intersect_key($datos, array_flip($this->allowedFields));
        if (!empty($datosValidos)) {
            $this->update($id, $datosValidos);
        }
    }

}
