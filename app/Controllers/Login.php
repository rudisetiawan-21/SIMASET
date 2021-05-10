<?php namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controllers;
class Login extends BaseController{
    public function index(){
        $session = session();
        $data = [
            'title' => "Login"
        ];
        // var_dump($session->get('id_user')); die;
             echo view ('simaset/user/login', $data);
        }

    public function codelogin(){
        $session = session();
        $model = new LoginModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $gabung = $this->request->getVar('created_at');
        $dinas = $this->request->getVar('nama_dinas');
        $data = $model->where('username', $username)->first();
        // echo "<pre>";
        // print_r($data);
        // var_dump($data); die();
    if($data){
        $pass = $data['password'];
        $verify_pass = password_verify($password, $pass);
        // print_r($pass);
        // print_r($password);
        // var_dump($verify_pass); die();
        if($verify_pass){
            $ses_data = [
                'id_user'   => $data['id_user'],
                'nama_user'   => $data['nama_user'],
                'created_at' => $data['created_at'],
                'nama_dinas' => $data['nama_dinas'],
                'level'     => $data['level'],
                'logged_in' => TRUE

            ];
            // var_dump($ses_data); die;
            $this->session->set($ses_data);
            //redirect()->to('user');
            return redirect()->to(base_url('user'));
            // var_dump('berhasil login');die;
        }else{
             $this->session->setFlashdata('msg','Password Salah');
            return redirect()->to(base_url('login'));
        }
    }else{
        $this->session->setFlashdata('msg','Username Salah');
        return redirect()->to(base_url('login'));
    }
}
    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }
    function haspass(){
        echo password_hash('reza', PASSWORD_DEFAULT);
    } 
}