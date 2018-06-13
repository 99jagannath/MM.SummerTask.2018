<?php  
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('articlemodel');
		$data['carosel']=$this->articlemodel->fetch123('carosel');
		$this->load->view('public/mm',$data);
	}
}

?>