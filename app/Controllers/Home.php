<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FormModel;
use App\Models\KeluhanModel;
use App\Controllers\Whatsapp;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

public function dashboard()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

    $keluhanModel = new KeluhanModel();

    $totalKeluhan = $keluhanModel->countAll();
    $sudahDitanggapi = $keluhanModel->where('status', 'selesai')->countAllResults();
    $belumDitanggapi = $keluhanModel->where('status', 'menunggu')->countAllResults();

    $data = [
        'title' => 'Dashboard',
        'totalKeluhan' => $totalKeluhan,
        'sudahDitanggapi' => $sudahDitanggapi,
        'belumDitanggapi' => $belumDitanggapi,
    ];

    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('admin/dashboard', $data); 
    echo view('layout/footer');
}

    public function dataKeluhan()
    {
        $keluhan = new KeluhanModel();
    
        if (session()->get('logged_in') != true) {
            return redirect()->to('/login');
        }
    
        $data = [
            'title' => 'Data Keluhan',
            'keluhan' => $keluhan->findAll()
        ];
    
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('admin/data_keluhan', $data); 
        echo view('layout/footer');
    }
    
    public function login()
    {
        return view('login');
    }

    public function pressLogin()
    {

        $user = new UserModel();
        

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $cek = $user->where($data)->first();

        if ($cek) {
            session()->set('username', $username);
            session()->set('password', $password);
            session()->set('logged_in', true);

            return redirect()->to('/admin');
        } else {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah!');
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return view('logout');
    }

    public function tambahForm()
    {
        $form = [
            'id_formulir' => ''
        ];
        
        $data = [
            'title' => 'Tambah Form',
            'form' => $form
        ];
        echo view('layout/header',$data);
        echo view('layout/sidebar');
        echo view('admin/tambah_form');
        echo view('layout/footer');
    }

    public function pressTambahForm()
    {
        $form = new FormModel();

        $id_formulir = $this->request->getPost('id_formulir');
        $jenis_keluhan = $this->request->getPost('jenis_keluhan');
        $tanggal = $this->request->getPost('tanggal');

        $form->insert([
            'id_formulir' => $id_formulir,
            'jenis_keluhan' => $jenis_keluhan,
            'tanggal' => $tanggal,
        ]);

        return redirect()->to('admin/data_keluhan')->with('message', 'Form berhasil ditambahkan😎');
    }


    public function deleteKeluhan($id_keluhan)
    {
    $keluhan = new KeluhanModel();
    $cek = $keluhan->find($id_keluhan);

    if (!$cek) {
        return redirect()->back()->with('error', 'Data tidak ditemukan🤧');
    }

    $keluhan->delete($id_keluhan);
    return redirect()->to('admin/data_keluhan')->with('message', 'Data berhasil dihapus😃');
    }

    
    public function tanggapanKeluhan($id_keluhan)
    {
        $keluhan = new KeluhanModel();
        $data = [
            'title' => 'Give Feedback',
            'keluhan' => $keluhan->find($id_keluhan) 
        ];

        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('admin/tanggapan', $data);  
        echo view('layout/footer');
    }

    public function pressTanggapanKeluhan()
    {
        $keluhan = new KeluhanModel();
        $whatsapp = new Whatsapp();
    
        $id_keluhan = $this->request->getPost('id_keluhan');
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $email = $this->request->getPost('email');
        $nomor_wa = $this->request->getPost('nomor_wa');
        $jenis_keluhan = $this->request->getPost('jenis_keluhan');
        $rincian = $this->request->getPost('rincian');
        $tanggapan = $this->request->getPost('tanggapan');
    
        $keluhan->update($id_keluhan, [
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'nomor_wa' => $nomor_wa,
            'jenis_keluhan' => $jenis_keluhan,
            'rincian' => $rincian,
            'tanggapan' => $tanggapan,
            'status'        => 'selesai', 'menunggu'
        ]);

        $tanggapan = "Halo *$nama_lengkap* 🤗,\n\n"
            . "Terima kasih telah menghubungi kami dan menyampaikan keluhan terkait *$jenis_keluhan*. Keluhan kamu sudah kami terima dan kami tindak lanjuti.\n\n"
            . "Setelah kami tinjau, berikut tanggapan dari tim kami:\n$tanggapan\n\n"
            . "Kami harap penjelasan ini dapat membantu dan masalah yang Anda alami dapat segera teratasi. "
            . "Jika masih ada pertanyaan atau keluhan lainnya, silahkan hubungi kami kembali.\n\n"
            . "Salam hangat,\n*Tim Lampung Cerdas*";


        $whatsapp->sendMessage($nomor_wa, $tanggapan);

        return redirect()->to('admin/data_keluhan')->with('message', 'Tanggapan berhasil dikirim dan status diperbarui😎');
    }
}






