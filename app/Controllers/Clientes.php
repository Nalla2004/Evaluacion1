<?php

namespace App\Controllers;
use App\controllers\BaseController;
use App\Models\ClienteModel;

class Clientes extends BaseController
{

    public function index()
    {
        return view('clientes/index');
        $data['clientes'] = $clientesModel->findAll();

        return view('clientes/index', $data);
    }

   
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $clientesModel = new ClienteModel();
        $data['clientes'] = $clientesModel -> findAll();
        return view('clientes/nuevo',$data);
    }

    
    public function create()
    {
        $reglas=[
            'cliente_id'=> 'required|min_length[5]|max_length[15]|is_unique[clientes.clientes_id]',
            'nombre' => 'required',
            'direccion' => 'required',
            'nit' => 'required',
            'correo_electronico' => 'valid_email',
            'telefono' => 'required'
        ];
        if(!$this->validate($reglas)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }
        $post =$this->request->getPost(['cliente_id','nombre','apellido','direccion','nit','correo_electronico','telefono']);
        
        $clientesModel = new ClienteModel();
        $clientesModel->insert([
            'cliente_id'=> trim($post['cliente_id']),
            'nombre'=> trim($post['nombre']),
            'apellido'=> trim($post['apellido']),
            'direccion'=> trim($post['direccion']),
            'nit'=> trim($post['nit']),
            'correo_electronico'=> trim($post['correo_electronico']),
            'telefono'=> trim($post['telefono']),
        ]);
        return redirect()->to('clientes');
    }

    
    public function edit($id = null)
    {
        $clientesModel = new ClienteModel();
        $data['clientes'] = $clientesModel->findAll();
        return view('clientes/editar');
   
    if($id==null){
        return redirect()->route('clientes');
        }
    }
    
    public function update($id)
    {
        $clientesModel = new ClienteModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'direccion' => $this->request->getPost('direccion'),
            'nit' => $this->request->getPost('nit'),
            'correo_electronico' => $this->request->getPost('correo_electronico'),
            'telefono' => $this->request->getPost('telefono')
        ];
        if ($clientesModel->update($id, $data)) {
            return redirect()->to('/clientes')->with('success', 'Cliente actualizado exitosamente.');
        } else {
            return redirect()->back()->with('errors', $clientesModel->errors());
        }
    }

    
    public function delete($id = null)
    {
        $clientesModel = new ClienteModel();
        if ($clientesModel->delete($id)) {
            return redirect()->to('/clientes')->with('success', 'ELIMINADO');
        } else {
            return redirect()->to('/clientes')->with('error', 'ERROR');
        }
    }

}
