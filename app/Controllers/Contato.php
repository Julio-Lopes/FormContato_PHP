<?php

namespace App\Controllers;

use App\Models\contatoModel;
use CodeIgniter\Controller;

class Contato extends Controller
{
    public function index()
    {
        return view('form_contatos');
    }

    public function submit()
    {
        $request = service('request');

        $data = [
            'name'    => $request->getPost('name'),
            'email'   => $request->getPost('email'),
            'message' => $request->getPost('message'),
        ];

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'message' => 'required|min_length[5]',
        ]);

        if (!$validation->run($data)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $contactModel = new contatoModel();
        $contactModel->insert($data);
        
        return redirect()->to('/contato')->with('success', 'Mensagem salva com sucesso!');
    }
}