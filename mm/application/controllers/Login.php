<?php 

class Login extends MY_Controller
{
	public function index()
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
          $data['video']=$this->fetchmodel->fetchvideo();
          $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
		$this->load->view('public/mm',$data);

	}
  public function search() {
    echo "hi";
  }
	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run())
		{
			$username=$this->input->post('username');
			$Password=$this->input->post('password');
			$this->load->model('loginmodel');
			$user=$this->loginmodel->login_validation($username,$Password);

			if($user)
             {
             	$this->load->library('session');
             	$user_data=array(
                  'user_id'=>$user->user_id,
                   'username'=>$user->username,
                   'email'=>$user->email,
                    'mobileno'=>$user->mobileno,
                    'status'=>$user->status  
             	);
             $this->session->set_userdata($user_data);
             if($this->session->userdata('status'))
                {
                 return redirect('admin/jaga');
                }
                else
                {
                 return redirect('admin/student');
                }
			
            }
             else
             {
             	$this->session->set_flashdata('login failed','Invalid username or password');
             	return redirect('login');
             }
         }
        else
         {
     return redirect('login');
         
         }
		
	}
	public function article()
	{
		$this->load->model('fetchmodel');
      $article_id= $this->uri->segment(3);
       $data['squiggles']=$this->fetchmodel->fetchsquiggles();
         $data['pow']=$this->fetchmodel->fetcharticle2('picofweek');
          $data['cz']=$this->fetchmodel->fetchcz();
          $data['video']=$this->fetchmodel->fetchvideo();
          $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
      $data['article']=$this->fetchmodel->fetcharticle3($article_id);
      $this->load->view('public/article',$data);
	}
  public function comment()
  {
    $this->load->model('fetchmodel');
      $article_id= $this->uri->segment(3);
       $data['squiggles']=$this->fetchmodel->fetchsquiggles();
         $data['pow']=$this->fetchmodel->fetcharticle2('picofweek');
          $data['cz']=$this->fetchmodel->fetchcz();
          $data['video']=$this->fetchmodel->fetchvideo();
          $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
      $data['article']=$this->fetchmodel->fetcharticle3($article_id);
      $this->load->view('public/comment',$data);
  }
  public function comment_insert()
  {
    $comment=$this->input->post();
    unset($comment['submit']);
    $this->load->model('articlemodel');
    //print_r($comment);
    //echo $comment['article_id'];
    if($this->articlemodel->comment($comment))
      {
        $this->session->set_flashdata('comment','thank you for your comment');
      }
      else
      {
        $this->session->set_flashdata('comment','please try again');
     }
      return redirect('admin/student');

  }
 
  public function resistration()
  {
    $user=$this->input->post();
    unset($user['submit'],$user['search']);
    $this->load->model('loginmodel');
    $reg=$this->loginmodel->resistration($user);
    if($reg)
    {
      $this->session->set_flashdata('resistration','successfully resistered');
    }
    else
    {
      $this->session->set_flashdata('resistration','fail to resiater');
    }
    return redirect('login');
  }
	public function logout()
	{
		$this->session->unset_userdata('user_data');
		return redirect('login');
	}
  public function question()
  {
     $this->load->model('fetchmodel');
     $data['squiggles']=$this->fetchmodel->fetchsquiggles();
         $data['pow']=$this->fetchmodel->fetcharticle2('picofweek');
          $data['cz']=$this->fetchmodel->fetchcz();
          $data['video']=$this->fetchmodel->fetchvideo();
          $data['option1']=$this->fetchmodel->fetchpoll('option1');
          $data['option2']=$this->fetchmodel->fetchpoll('option2');
          $data['option3']=$this->fetchmodel->fetchpoll('option3');
          $data['option4']=$this->fetchmodel->fetchpoll('option4');
          $data['question']='';
    $this->load->view('public/question',$data);
  }
  public function question_added()
  {
    $question=$this->input->post();
    unset($question['submit']);
     $data=$question['question'];
     $type=$question['type'];
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','User Name','required|trim');
    $this->form_validation->set_rules('email','email','required|trim');
    $this->form_validation->set_rules('mobileno','mobile no','required|trim');
    $this->form_validation->set_rules('question','question','required|trim');

    if($this->form_validation->run())
    {
        $this->load->model('loginmodel');
        if( $get['question']=$this->loginmodel->question($data,$type))
        {
           $this->load->view('public/question',$get);
        }
        else
        {
          $get=$this->loginmodel->newquestion($question);
          if($get)
          {
            $this->session->set_flashdata('question','successfully question send');
          
          }
          else
          {
            $this->session->set_flashdata('question','fail to question send');
            
          }
          return redirect('login/question');
        }
     }
     else
     {
      return redirect('login/question');
     }
  }
  public function squiggles()
  {
    $post=$this->input->post();
    unset($post['submit']);
    $this->load->model('loginmodel');
    if($this->loginmodel->squiggles_update($post))
    {
      $this->session->set_flashdata('feedback','squiggles successfully updated');
      $this->session->set_flashdata('feedback_class','alert-success');
    }
    else
    {
      $this->session->set_flashdata('feedback','squiggles fail to update');
      $this->session->set_flashdata('feedback_class','alert-danger');
    }
    return redirect('admin/jaga');
  }
  public function cz()
  {
     $post=$this->input->post();
    unset($post['submit']);
    $this->load->model('loginmodel');
    if($this->loginmodel->cz_update($post))
    {
      $this->session->set_flashdata('feedback','citizen journalism successfully updated');
      $this->session->set_flashdata('feedback_class','alert-success');
    }
    else
    {
      $this->session->set_flashdata('feedback','citizen journalism fail to update');
      $this->session->set_flashdata('feedback_class','alert-danger');
    }
    return redirect('admin/jaga');
  }
  public function video()
  {
     $post=$this->input->post();
    unset($post['submit']);
    $this->load->model('loginmodel');
    if($this->loginmodel->video_update($post))
    {
      $this->session->set_flashdata('feedback','video link successfully updated');
      $this->session->set_flashdata('feedback_class','alert-success');
    }
    else
    {
      $this->session->set_flashdata('feedback','video link fail to update');
      $this->session->set_flashdata('feedback_class','alert-danger');
    }
    return redirect('admin/jaga');
  }
  public function poll()
      {
     $poll=$this->input->post();
    unset($poll['submit']);
    $this->load->model('loginmodel');
    $this->loginmodel->poll($poll);
    return redirect('login');
  }
  public function test()
  {
    $this->load->model('fetchmodel');
    $data['questions']=$this->fetchmodel->fetch_test();
    $this->load->view('public/test',$data);
  }
  public function test_result()
  {
    $this->load->model('articlemodel');
    $post=$this->input->post();
    //print_r($post);
    unset($post['submit']);
    $result=$this->articlemodel->insert_result($post);
    if($result)
    {
      $this->session->set_flashdata('test','thanks for giving test');
      $this->session->set_flashdata('test_class','alert-success');
    }
    else
    {
      $this->session->set_flashdata('test','you have already given the test');
      $this->session->set_flashdata('test_class','alert-danger');
    }
    return redirect('login/test');
  }
  public function result()
  {
    $this->load->model('fetchmodel');
    $answer=$this->fetchmodel->answer();
    $result=$this->fetchmodel->result();
    //echo "<pre>";
    //print_r($answer);
    //print_r($result);
    $qn=count($answer);
    $pn=count($result);
    $k=1;
    
    
    for($i=1;$i<=$pn;$i++)
    {
      $m=0;
      $pp=$this->fetchmodel->presult($k);
      echo "<pre>";
      //print_r($pp);
      $s=1;
      for($j=1;$j<=$qn;$j++)
      {
      $pq=$this->fetchmodel->panswer($s);
      echo "<pre>";
      //print_r($pq);
      // echo $m;
      if($s==1)
      {
        echo $pp->q1;
        echo "q1";
        echo $pq->answer;

        echo "<br>";

       if($pp->q1==$pq->answer)
       {

        ++$m;
        
        echo $m;
       
         }
       }
       if($s==2)
       {
        echo $pp->q2;
        echo $pq->answer;
       if($pp->q2==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==3)
       {
       if($pp->q3==$pq->answer)
       {
        ++$m;
        echo $pp->q3;
        echo $pq->answer;
        echo $m;
       }
       }
       if($s==4)
       {
         echo $pp->q4;
        echo $pq->answer;
       if($pp->q4==$pq->answer)
       {
        ++$m;
       
        echo $m;
       }
       }
       if($s==5)
       {
        echo $pp->q5;
        echo $pq->answer;
       if($pp->q5==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==6)
       {
        echo $pp->q6;
        echo $pq->answer;
       if($pp->q6==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==7)
       {
        echo $pp->q7;
        echo $pq->answer;
       if($pp->q7==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==8)
       {
        echo $pp->q8;
        echo $pq->answer;
       if($pp->q8==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==9)
       {
        echo $pp->q9;
        echo $pq->answer;
       if($pp->q9==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==10)
       {
           echo $pp->q10;
        echo $pq->answer;
       if($pp->q10==$pq->answer)
       {
        ++$m;
     
        echo $m;
       }
       }
       if($s==11)
       {
        echo $pp->q11;
        echo $pq->answer;
       if($pp->q11==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       if($s==12)
       {
         echo $pp->q12;
        echo $pq->answer;
       if($pp->q12==$pq->answer)
       {
        ++$m;
       
        echo $m;
       }
       }
       if($s==13)
       {
         echo $pp->q13;
        echo $pq->answer;
       if($pp->q13==$pq->answer)
       {
        ++$m;
       
        echo $m;
       }
       }
       if($s==14)
       {
          echo $pp->q14;
        echo $pq->answer;
       if($pp->q14==$pq->answer)
       {
        ++$m;
      
        echo $m;
       }
       }
       if($s==15)
       {
        echo $pp->q15;
        echo $pq->answer;
       if($pp->q15==$pq->answer)
       {
        ++$m;
        
        echo $m;
       }
       }
       
       ++$s;
     }
      echo "<br>".$k." ".$pp->name." - ".$m."<br>";
       ++$k;
       
    }
    
  }
}

?>