<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring_model extends CI_model
{
    public function getAllMonitoring()
    {
        return $this->db->get('monitoring')->result_array();
    }

    public function createNewProject($data)
    {

        $this->db->insert('monitoring', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function editProject($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('monitoring', $data);
    }

    public function getMonitoringbyId($id)
    {
        return $this->db->get_where('monitoring', ['id' => $id])->row_array();
    }
   
    public function hapusMonitoring($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('monitoring');
    }

}
