<?php


class m_timnas extends CI_Model {

    public function ambildata()
    {
       $sql = $this->db->get('pemain');
       return $sql; 
    }

    
    public function simpandata($data)
    { 
		return $this->db->insert('pemain',$data); 
    }
    
    public function editdata($no)
    {
        $this->db->where('no', $no); 
        return $this->db->get('pemain'); 
    }

    public function updatedata($no, $data)
    { 
        $this->db->where('no', $no); 
        $this->db->update('pemain', $data); 
    }

    public function hapusdata($no)
    {
        $this->db->where('no',$no);
        $this->db->delete('pemain');
    }
}
