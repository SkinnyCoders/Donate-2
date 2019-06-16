<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_donate');
    }
    public function index()
    {
        $data['title'] = "Donate";
        $data['donate'] = $this->m_donate->getAllCampaign();
        $this->load->view('templates/v_header', $data);
        $this->load->view('v_donasi/v_home', $data);
        $this->load->view('templates/v_footer');
    }



    public function donate($id)
    {
        $data['title'] = "Donate";
        $data['donate'] = $this->m_donate->getCampaign($id);
        $data['bank'] = $this->m_donate->getAllBank();
        $data['code'] = $this->_code();

        $this->form_validation->set_rules('nominal', 'Nominal', 'required|is_numeric|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|is_numeric|trim');
        $this->form_validation->set_rules('bank', 'Bank', 'is_natural_no_zero');

        if ($data['donate'] == NULL) {
            redirect('donasi');
            return false;
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/v_header', $data);
            $this->load->view('v_donasi/v_donate', $data);
            $this->load->view('templates/v_footer');
        } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $no_hp = $this->input->post('no_hp', true);
            $nominal = $this->input->post('nominal', true);
            $bank = $this->input->post('bank', true);
            $is_anonim = $this->input->post('is_anonim', true);
            $code = $this->input->post('code', true);

            $insertDonatur = $this->_donatur($nama,  $email, $no_hp, $code);
            $id_donatur = $this->m_donate->getDonatur();
            $id_donatur = $id_donatur['kode_donatur'];
            $kode = md5($id_donatur);

            if ($insertDonatur) {
                if ($bank > 0) {
                    if ($is_anonim == NULL) {
                        $data = [
                            'kode_donasi' => $kode,
                            'id_donatur' => $id_donatur,
                            'id_campaign' => $id,
                            'id_bank' => $bank,
                            'nominal' => $nominal,
                            'is_anonim' => 0,
                            'date' => date('Y-m-d')
                        ];
                    } else {
                        $data = [
                            'kode_donasi' => $kode,
                            'id_donatur' => $id_donatur,
                            'id_campaign' => $id,
                            'id_bank' => $bank,
                            'nominal' => $nominal,
                            'is_anonim' => 1,
                            'date' => date('Y-m-d')
                        ];
                    }

                    $insertDonate = $this->m_donate->addDonate($data);
                    redirect('donasi/summary/' . $kode);
                } else {
                    $this->session->set_flashdata('notif', 'Harap Pilih Bank!');
                }
            } else {
                echo "nah";
            }
        }
    }

    public function summary($kode)
    {
        $data['title'] = 'Result';
        $data['result'] = $this->m_donate->getResult($kode);


        $id_camp = $data['result']['id_campaign'];
        $nominal = $data['result']['nominal'];
        $id_donatur = $data['result']['id_donatur'];


        $campaign = $this->m_donate->getCampaign($id_camp);
        $mencapai = $campaign['mencapai'];
        $nominal2 = $nominal + $id_donatur;
        $nominal_total = $mencapai + $nominal2;

        if ($data['result'] == NULL) {
            redirect('donasi');
        } else {
            $this->load->view('templates/v_header', $data);
            $this->load->view('v_donasi/v_result', $data);
            $this->load->view('templates/v_footer');
            $this->m_donate->updateResult($id_camp, $nominal_total);
        }
    }

    public function _donatur($nama,  $email, $no_hp, $code)
    {
        $data = [
            'kode_donatur' => $code,
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'img' => 'default.jpg'
        ];

        $this->m_donate->addDonatur($data);

        return true;
    }

    public function _code($panjang = 3)
    {
        $kodeProduct = "";
        $angka = range(0, 9);
        $max = count($angka) - 1;
        for ($i = 0; $i < $panjang; $i++) {
            $rand = mt_rand(0, $max);
            $kodeProduct .= $angka[$rand];
        }
        return $kodeProduct;
    }

    private function _sendEmail($email)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'jujujojo757@gmail.com',
            'smtp_pass' => 'admanilham',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('jujujojo757@gmail.com', 'Yayasan Peduli');
        $this->email->to('$email');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }
}
