<?php
// app/Controllers/Personas.php
namespace App\Controllers;
use App\Models\Venta;

class Ventas extends BaseController{
    private $usuario;

    public function borrarVenta($id) {
        $ventaModel = new Venta();
        $ventaModel->delete($id);

        return $this->response->setJSON(['success' => true]);
    }
    
    

    public function index(){
        $ventaModel = new Venta();
        $data['ventas'] = $ventaModel->findAll();
        
        return view("Ventas/index", $data);
    }

    public function guardarVenta() {
        if ($this->request->getMethod() === 'post') {
            $ventaModel = new Venta();
            $ventaData = [
                'nombrecomprador' => $this->request->getPost('nombrecomprador'),
                'producto' => $this->request->getPost('producto'),
                'cantidad' => $this->request->getPost('cantidad'),
                'precio' => $this->request->getPost('precio'),
                'marca' => $this->request->getPost('marca')
            ];
            $ventaModel->insert($ventaData);
        }

        return redirect()->to(site_url('Ventas/index'));
    }
}