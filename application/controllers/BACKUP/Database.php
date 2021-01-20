<?php 
class Database extends CI_Controller{
	public function index(){
		$query = $this->db->query("SELECT * FROM mhs");
		$data['mhs'] = $query->result();
		$this->load->view('mhs',$data);
		
		/*foreach ($query->result() as $row){
        	echo $row->nim;
        	echo $row->namamhs;
        	echo $row->tgl;
        	echo $row->alamat;
        	echo $row->jk;
        	echo "<br>";
		}*/
	}
	public function delete($nim){
		$query = $this->db->query("DELETE FROM mhs WHERE nim = '$nim'");
		$this->index();
	}
}
?>