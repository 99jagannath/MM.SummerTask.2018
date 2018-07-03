<?php

class Api extends CI_COntroller
{
	public function getarticlebyid($id)

	{
		$data = array();
		$this->load->model('apimodel');
		$data['api'] = $this->apimodel->fetcharticlebyid($id);
		
		$data['success'] = true; 
		if($data['api']==NULL)
		{
		   $data['success'] = false; 	
		}
		$json['api']=json_encode($data);
		$this->load->view("public/api",$json);
	}
	public function getarticlebytag($tag)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->fetcharticlebytag($tag);

		$data['success']=true;
	
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view("public/api",$json);
	}
	public function getarticlebypublishdate($date)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->fetcharticlebydate($date);
		print_r($data);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getarticlebyauthor($author)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getarticlebyauthor($author);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getarticlebytitle($title)
	{
	   $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getarticlebytitle($title);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function search($word)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->search($word);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getpoll($id)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getpoll($id);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getpollanswer($date)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getpollanswer($date);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getcommentbyaticleid($id)
	{
	  $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getcommentbyaticleid($id);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function getcommentbyaticletitle($title)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getcommentbyaticletitle($title);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getcommentbyaticletag($tag)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getcommentbyaticletag($tag);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getcommentbyuser($user)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getcommentbyuser($user);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	} 
	public function getpcommentbyuser($id,$user)
	{
	   $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getpcommentbyuser($id,$user);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function getreplybymember($user)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getreplybymember($user);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getpreplybymember($id,$user)
	{
	   $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getpreplybymember($id,$user);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function getuserbyname($username)
	{
	    $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getuserbyname($username);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function getuserbystatus($status)
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getuserbystatus($status);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getalluser()
	{
		$data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getalluser();
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);
	}
	public function getquestion($id)
	{
	  $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getquestion($id);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function getparticipant($date)
	{
	   $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getparticipant($date);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);		
	}
	public function getquestionbydate($date)
	{
	   $data=array();
		$this->load->model('apimodel');
		$data['api']=$this->apimodel->getquestionbydate($date);
		$data['success']=true;
		if($data['api']==NULL)
		{
			$data['success']=false;
		}
		$json['api']=json_encode($data);
		$this->load->view('public/api',$json);	
	}
	public function comment_submit()
	{
		$response = array();
		$data = array();
		$comment = $this->input->post('comment_content');
		$article_id = $this->input->post('article_id');
		$article_tag = $this->input->post('tag');
		$article_title = $this->input->post('title');
		$user_id = $this->input->post('user_id');
		$commenting_user = $this->input->post('user');
		if(isset($comment))
		{
			$data['comment'] = $comment;
		}
		if(isset($article_id))
		{
			$data['article_id'] = $article_id;
		}
		if(isset($article_tag))
		{
			$data['article_tag'] = $article_tag;
		}
		if(isset($article_title))
		{
			$data['article_title'] = $article_title;
		}
		if(isset($user_id))
		{
			$data['user_id'] = $user_id;
		}
		if(isset($commenting_user))
		{
			$data['commenting_user'] = $commenting_user;
		}
		if( ! isset($comment) || ! isset($article_id) || ! isset($article_tag) || ! isset($article_title) || ! isset($user_id) || ! isset($commenting_user))
		{
			$response['success'] = false;
			$response['error'] = ' comment-content,article_id,tag,title,user_id,user must be provided';
			echo json_encode($response);
		}
		else
		{
			$this->load->model('apimodel');
			if($this->apimodel->comment_submit($data))
			{
			  $response['success'] = true;
			$response['error'] = ' no error successfully submited';
			echo json_encode($response);	
			}
			else
			{
			$response['success'] = false;
			$response['error'] = 'comment submission fail';
			echo json_encode($response);	
			}
		}
	}
	public function signup()
	{
		$data = array();
		$response = array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$mobileno = $this->input->post('mobileno');
		$image = $this->input->post('image');

        if(isset($username))
        {
        	$data['username'] = $username;
        } 
        if(isset($password))
        {
        	$data['password'] = $password;
        } 
        if(isset($email))
        {
        	$data['email'] = $email;
        } 
        if(isset($mobileno))
        {
        	$data['mobileno'] = $mobileno;
        } 
        if(isset($image))
        {
        	$data['image'] = $image;
        }

        if(! isset($username) || ! isset($password) || ! isset($email) || ! isset($mobileno) || ! isset($image))
        {
        	$response['success'] = false;
        	$response['error'] = 'username,password,email,mobileno,image must required';
        	echo json_encode($response);
        }  
        else
        {
        	$this->load->model('apimodel');
        	if($this->apimodel->signup($data))
        	{
        		$response['success'] = true;
        		$response['error'] = 'successfully resistered';
        		echo json_encode($response);
        	}
        	else
        	{
        		$response['success'] = false;
        		$response['error'] = 'fail to resister';
        		echo json_encode($response);
        	}
        }
	}
	public function poll()
	{
		$data = array();
		$response = array();
		$option = $this->input->post('option');
		$ip = $this->input->post('ip');
		$date = $this->input->post('date');

		if( isset($option))
		{
          $data['option'] = $option;
		}
		if( isset($ip))
		{
			$data['ip'] = $ip;
		}
		if( isset($date))
		{
			$data['date'] = $date;
		}
		if( ! isset($option) || ! isset($ip) || ! isset($date))
		{
			$response['success'] = false;
			$response['error'] = 'option ,ip, date must required .';
			echo json_encode($response);
		}
		else
		{
			$this->load->model('apimodel');
			if($this->apimodel->poll($data))
			{
				$response['success'] = true;
				$response['error'] = 'successfully voted .';
				echo json_encode($response);
			}
			else
			{
				$response['success'] = false;
				$response['error'] = 'fail to vote .';
				echo json_encode($response);
			}
		}
	}
	
}


?>