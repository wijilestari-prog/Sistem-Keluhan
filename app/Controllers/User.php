<?php

namespace App\Controllers;
use App\Models\FormModel;
use App\Models\KeluhanModel;

class User extends BaseController
{
    public function keluhan()
    {
        return view('user/keluhan');
    }
        
    
    public function pressKeluhan()
    {
        $keluhan = new KeluhanModel();

        $id_keluhan = $this->request->getPost('id_keluhan');
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $email = $this->request->getPost('email');
        $nomor_wa = $this->request->getPost('nomor_wa');
        $jenis_keluhan = $this->request->getPost('jenis_keluhan');
        $rincian = $this->request->getPost('rincian');

        $id_formulir = $this->request->getPost('id_formulir');

        $keluhan->insert([
            'id_keluhan' => $id_keluhan,
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'nomor_wa' => $nomor_wa,
            'jenis_keluhan' => $jenis_keluhan,
            'rincian' => $rincian,
        ]);

        if (!empty($id_formulir)) {
            $data['id_formulir'] = $id_formulir;
        }

        return redirect()->to('user/keluhan')->with('message', 'Keluhan berhasil dikirim🚀');;
    }
}
