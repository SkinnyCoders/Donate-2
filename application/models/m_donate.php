<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_donate extends CI_Model
{
    public function getAllCampaign()
    {
        $query = $this->db->get('campaign')->result_array();
        return $query;
    }

    public function getCampaign($id)
    {
        $query = $this->db->get_where('campaign', ['id' => $id])->row_array();
        return $query;
    }

    public function getAllBank()
    {
        $query = $this->db->get('bank')->result_array();
        return $query;
    }

    public function addDonatur($data)
    {
        $query = $this->db->insert('donatur', $data);
        return $query;
    }

    public function addDonate($data)
    {
        $query = $this->db->insert('donasi', $data);
        return $query;
    }

    public function getDonatur()
    {
        $query = $this->db->get_where('donatur', ['kode_donatur' => $this->input->post('code')])->row_array();
        return $query;
    }

    public function getResult($kode)
    {
        $query = $this->db->query("SELECT donasi.kode_donasi,donasi.id_campaign,donasi.nominal,donasi.id_donatur,bank.img,bank.pemilik,bank.no_rek FROM donasi JOIN bank ON bank.id=donasi.id_bank JOIN donatur ON donatur.kode_donatur=donasi.id_donatur WHERE donasi.kode_donasi = '$kode'")->row_array();
        return $query;
    }

    public function updateResult($id_camp, $nominal_total)
    {
        $this->db->set('mencapai', $nominal_total, FALSE);
        $this->db->where('id', $id_camp);
        $this->db->update('campaign');
    }
}
