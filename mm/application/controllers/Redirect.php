<?php
 
class Redirect extends MY_Controller
{
	public function Add_Article()
	{
      $this->load->view('admin/Add_Article');
	}
	public function Article_List()
	{
       $this->load->view('admin/Article_List');
	}
	public function test()
	{
		$this->load->model('fetchmodel');
		$data['tests']=$this->fetchmodel->test();
		//echo "<pre>";
		//print_r($data);
       $this->load->view('admin/test',$data);
	}
	public function Department()
	{
           $this->load->view('admin/Department');
	}
	public function Editor_Pic()
	{
        $this->load->view('admin/Editor_Pic');
	}
	public function Issues()
	{
        $this->load->view('admin/Issues');
	}
	public function Comment()
	{
		$this->load->model('fetchmodel');
		$data['comments']=$this->fetchmodel->Comment();
	//echo "<pre>";
          //print_r($data);
         $this->load->view('admin/Comment',$data);
	}
	Public function Question()
	{
		$this->load->model('fetchmodel');
		$data['questions']=$this->fetchmodel->question();
	//echo "<pre>";
          //print_r($data);
          $this->load->view('admin/Question',$data);
	}
	public function Squiggles()
	{
		$this->load->model('loginmodel');
		$data['squiggles']=$this->loginmodel->squiggles();
        $this->load->view('admin/Squiggles',$data);
	}
	public function Pic_Of_The_Week()
	{
           $this->load->view('admin/Pic_Of_The_Week');
	}
	public function Student_Paules()
	{
		
        $this->load->view('admin/Student_Paules');
	}
	public function Video()
	{
		$this->load->model('loginmodel');
		$data['video']=$this->loginmodel->video();
         $this->load->view('admin/Video',$data);
	}
	public function Link()
	{
       $this->load->view('admin/Link');
	}
	public function Citizen_Journalism()
	{
		$this->load->model('loginmodel');
		$data['cz']=$this->loginmodel->cz();
         $this->load->view('admin/Citizen_Journalism',$data);
	}
	public function About()
	{
       $this->load->view('admin/About');
	}
	public function Archieves()
	{
       $this->load->view('admin/Archieves');
	}
	public function Events()
	{
          $this->load->view('admin/Events');
	}
	public function Academic_Calender()
	{
          $this->load->view('admin/Academic_Calender');
	}
	public function User_Profile()
	{
         $this->load->view('admin/User_Profile');
	}
}


?>