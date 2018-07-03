<?php

class Apimodel extends CI_Model
{
	public function fetcharticlebyid($article_id)
	{
		$q=$this->db->select('*')
		            ->where('id',$article_id)
		            ->get('article');
		    return $q->row();      
	}
    public function fetcharticlebytag($article_tag)
    {
        $q=$this->db->select('*')
                    ->where('tag',$article_tag)
                    ->get('article');
            return $q->result();      
    }
    public function fetcharticlebydate($date)
    {
    	$q=$this->db->select('*')
    	            ->where('date',$date)
    	            ->get('article');
    	     return $q->result();       
    }
    public function getarticlebyauthor($author)
    {
    	$q=$this->db->select('*')
    	            ->where('author',$author)
    	            ->get('article');
    	    return $q->result();        
    }
    public function getarticlebytitle($title)
    {
    	$q=$this->db->select('*')
    	            ->where('title',$title)
    	            ->get('article');
    	    return $q->result();        
    }
    public function search($word)
    {
    	$q=$this->db->select('*')
    	            ->where("title like '%".$word."%'")
    	            ->get('article');
    	    return $q->result();           
    }
    public function getpoll($id)
    {
        $q=$this->db->select('*')
                    ->where('id',$id)
                    ->get('pollquestion');
            return $q->result();        
    }
    public function getpollanswer($date)
    {
        $q=$this->db->select('*')
                    ->where('date',$date)
                    ->get('poll');
            return $q->result();          
    }
    public function getcommentbyaticleid($id)
    {
        $q=$this->db->select('*')
                    ->where('article_id',$id)
                    ->get('comment');
            return $q->result();
    }
    public function getcommentbyaticletitle($title)
    {
        $q=$this->db->select('*')
                    ->where('article_title',$title)
                    ->get('comment');
            return $q->result();
    }
    public function getcommentbyaticletag($tag)
    { 
        $q=$this->db->select('*')
                    ->where('article_tag',$tag)
                    ->get('comment');
            return $q->result();

    }
    public function getcommentbyuser($user)
    {
       $q=$this->db->select('*')
                    ->where('commenting_user',$user)
                    ->get('comment');
            return $q->result(); 
    }
    public function getpcommentbyuser($id,$user)
    {
       $q=$this->db->select('*')
                    ->where(['commenting_user'=>$user,'article_id'=>$id])
                    ->get('comment');
            return $q->result(); 
    }
    public function getreplybymember($user)
    {
         $q=$this->db->select('*')
                    ->where('answering_user',$user)
                    ->get('comment');
            return $q->result();
    }
    public function getpreplybymember($id,$user)
    {
       $q=$this->db->select('*')
                    ->where(['answering_user'=>$user,'article_id'=>$id])
                    ->get('comment');
            return $q->result(); 
    }
    public function getuserbyname($username)
    {
        $q=$this->db->select('*')
                    ->where('username',$username)
                    ->get('user');
            return $q->result();    
    }
    public function getuserbystatus($status)
    {
         $q=$this->db->select('*')
                    ->where('status',$status)
                    ->get('user');
            return $q->result(); 
    }
    public function getalluser()
    {
       $q=$this->db->select('*')
                   ->get('user');
            return $q->result(); 
    }
    public function getquestion($id)
    {
         $q=$this->db->select('*')
                    ->where('id',$id)
                    ->get('test');
            return $q->result(); 
    }
    public function getparticipant($date)
    {
        $q=$this->db->select('*')
                    ->where('date',$date)
                    ->get('answer');
            return $q->result(); 
    }
    public function getquestionbydate($date)
    {
      $q=$this->db->select('*')
                    ->where('date',$date)
                    ->get('question');
            return $q->result();  
    }
    public function comment_submit($data)
    {
        return $this->db->insert('comment',$data);
    }
    public function signup($data)
    {
      return $this->db->insert('user',$data);  
    }
    public function poll($data)
    {
      return $this->db->insert('poll',$data);   
    }
   
}


?>