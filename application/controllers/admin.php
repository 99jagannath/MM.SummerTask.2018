<?php

class Admin extends MY_Controller
{
	 public function _construct()
    {
    	parent::_construct();
 
    	if(! is_set('user_id'))
    		return redirect('login');
    	$this->load->model('articlemodel');
    }
	public function jaga()
	{
		$this->load->view('admin/dashboard');
	}
  public function student()
  {
     $this->load->model('fetchmodel');
    $data['carosel']=$this->fetchmodel->fetcharticle1('carosel');
        $data['mainpost']=$this->fetchmodel->fetcharticle2('mainpost');
        $data['l21']=$this->fetchmodel->fetcharticle2('ask a question');
         $data['l22']=$this->fetchmodel->fetcharticle2('poll analysis');
         $data['l23']=$this->fetchmodel->fetcharticle2('campus buzz');
         $data['l31']=$this->fetchmodel->fetcharticle2('photo jounalism');
          $data['l32']=$this->fetchmodel->fetcharticle2('roots');
         $data['l41']=$this->fetchmodel->fetcharticle2('department-1');
         $data['l42']=$this->fetchmodel->fetcharticle2('department-2');
         $data['l43']=$this->fetchmodel->fetcharticle2('department-3');
          $data['squiggles']=$this->fetchmodel->fetchsquiggles();
          $data['pow']=$this->fetchmodel->fetcharticle2('picofweek');
          $data['cz']=$this->fetchmodel->fetchcz();
           $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
          $data['video']=$this->fetchmodel->fetchvideo();
    $this->load->view('public/student',$data);
  }
   public function admins()
  {
     $this->load->model('fetchmodel');
    $data['carosel']=$this->fetchmodel->fetcharticle1('carosel');
        $data['mainpost']=$this->fetchmodel->fetcharticle2('mainpost');
        $data['l21']=$this->fetchmodel->fetcharticle2('ask a question');
         $data['l22']=$this->fetchmodel->fetcharticle2('poll analysis');
         $data['l23']=$this->fetchmodel->fetcharticle2('campus buzz');
         $data['l31']=$this->fetchmodel->fetcharticle2('photo jounalism');
          $data['l32']=$this->fetchmodel->fetcharticle2('roots');
         $data['l41']=$this->fetchmodel->fetcharticle2('department-1');
         $data['l42']=$this->fetchmodel->fetcharticle2('department-2');
         $data['l43']=$this->fetchmodel->fetcharticle2('department-3');
          $data['squiggles']=$this->fetchmodel->fetchsquiggles();
          $data['pow']=$this->fetchmodel->fetcharticle2('picofweek');
          $data['cz']=$this->fetchmodel->fetchcz();
           $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
          $data['video']=$this->fetchmodel->fetchvideo();
    $this->load->view('public/admins',$data);
  }

	public function articlelist()
	{
		$this->load->model('articlemodel');
		$config=
		[
                    'base_url'=>base_url('admin/articlelist'),
                    'per_page'=>5,
                    'total_rows' => $this->articlemodel->num_rows(),
                    'full_tag_open' =>"<ul class='pagination'>",
                     'full_tag_close' =>"</ul>",                  
                    'next_tag_open' =>'<li>',
                    'next_tag_close' =>'</li>',
                    'prev_tag_open' =>'<li>',
                    'prev_tag_close' =>'</li>',
                    'num_tag_open' =>'<li>',
                    'num_tag_close' =>'</li>',
                    'cur_tag_open' =>"<li class='active'>",
                    'cur_tag_close' =>"</li>",

		];
		$this->load->library('pagination');
		$this->pagination->initialize($config);
	$this->load->model('articlemodel');
		$data['articles']=$this->articlemodel->articlelist($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/Article_List',$data);
	}
	public function store_article()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules'))
		{
            $post=$this->input->post();
            unset($post['submit']);
             $this->load->model('articlemodel');
            $this->_flashAndRedirect(
                                  $this->articlemodel->addarticle($post),
                                  "article added successfully",
                                  "article failed to add please try again"
    	                         );
           
		}
		else
		{

			$this->load->view('admin/Add_Article');
		}

	}
	public function edit_article($article_id)
	{
				
			$this->load->model('articlemodel');
	
      $data['articles']=$this->articlemodel->find_article($article_id);
      $this->load->view('admin/Edit_Article',$data);

	}
	public function update_article()
	{
	$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules'))
		{	
          $post=$this->input->post();
          $article_id=$post['article_id'];
          unset($post['article_id'],$post['submit']);
            $this->load->model('articlemodel');
            $this->_flashAndRedirect(
                                  $this->articlemodel->updatearticle($article_id,$post),
                                  "article updateded successfully",
                                  "article failed to update please try again"
    	                         );
           
		}
		else
		{
		$this->load->model('articlemodel');
	
      $data['articles']=$this->articlemodel->find_article($article_id);
      $this->load->view('admin/Edit_Article',$data);
	
		}
	}
	public function delete_article($article_id)
	{
		$this->load->model('articlemodel');
    	$this->_flashAndRedirect(
                                  $this->articlemodel->delete_article($article_id),
                                  "article deleted successfully",
                                  "article failed to delete please try again"
    	                         );
	}	
	public function search()

     {
     $post=$this->input->post('query');

     
     $this->load->model('articlemodel');
     $data['articles']=$this->articlemodel->search($post);
     $this->load->view('admin/Search_Result',$data);
     }


	 private function _flashAndRedirect($successful,$successMessage,$failureMessage)
	{
    	if($successful)
    	{
    		$this->session->set_flashdata('feedback',$successMessage); 
              $this->session->set_flashdata('feedback_class','alert-success');
    	}
    	else
    	{
                        $this->session->set_flashdata('feedback',$failureMessage);
              $this->session->set_flashdata('feedback_class',"alert-danger"); 
    	}
    	return redirect('admin/jaga');

    }
    public function comment()
    {
      $answer=$this->input->post();
      //print_r($answer);
      $id=$answer['id'];
      unset($answer['submit'],$answer['id']);
      
      
      $this->load->model('articlemodel');
     if($this->articlemodel->answer_comment($id,$answer))
     {
       $this->session->set_flashdata('reply_comment',' successfully commented');
      $this->session->set_flashdata('reply_comment_class','alert-success');
     }
     else
     {
       $this->session->set_flashdata('reply_comment','fail to comment');
      $this->session->set_flashdata('reply_comment_class','alert-danger');
     }
     return redirect('redirect/comment');
    }
     public function question()
    {
      $answer=$this->input->post();
      //print_r($answer);
      $id=$answer['id'];
      unset($answer['submit'],$answer['id']);
      
      
      $this->load->model('articlemodel');
     if($this->articlemodel->answer_question($id,$answer))
     {
       $this->session->set_flashdata('reply_question',' successfully answered');
      $this->session->set_flashdata('reply_question_class','alert-success');
     }
     else
     {
       $this->session->set_flashdata('reply_question','fail to answer');
      $this->session->set_flashdata('reply_question_class','alert-danger');
     }
     return redirect('redirect/question');
    }
    public function test()
    {
      $this->load->model('articlemodel');
      $test=$this->input->post();
      $id=$test['id'];
      unset($test['id'],$test['submit']);
      if($this->articlemodel->test($id,$test))
      {
        $this->session->set_flashdata('test',' successfully updateded');
      $this->session->set_flashdata('test_class','alert-success');
      }
      else
      {
       $this->session->set_flashdata('test','fail to update');
      $this->session->set_flashdata('test_class','alert-danger');
      }
      return redirect('redirect/test');
    }
	
}

?>