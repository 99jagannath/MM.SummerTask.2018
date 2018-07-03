<?php
class Fetchmodel extends CI_Model
{
	public function fetcharticle1($tag)
	{
		$q=$this->db->select('*')
		            ->where('tag',$tag)
		            ->get('article');
		  return $q->result();
        
	}
	public function fetcharticle2($tag)
	{
		$q=$this->db->select('*')
		            ->where('tag',$tag)
		            ->get('article');
		  return $q->row();
        
	}
	public function fetcharticle3($article_id)
	{
		$q=$this->db->select('*')
		            ->where('id',$article_id)
		            ->get('article');
		    return $q->row();      
	}
   

	public function fetchsquiggles()
	{   
		$j=1;

		$q=$this->db->select('*')
		            ->where('id',$j)
		            ->get('squiggles');
		  return $q->row();
	}
	public function fetchcz()
	{   
		$j=1;

		$q=$this->db->select('*')
		            ->where('id',$j)
		            ->get('cz');
		  return $q->row();
	}
	public function fetchvideo()
	{   
		$j=2;

		$q=$this->db->select('*')
		            ->where('id',$j)
		            ->get('cz');
		  return $q->row();
	}
	public function fetchpoll($option)
	{
		$q=$this->db->select('*')
		            ->where('option',$option)
		            ->get('poll');
		     return $q->result();       
	}
	 public function fetch_test()
        {
            $q=$this->db->select('*')
                        ->get('test');
                     return $q->result();   
        }
        public function answer()
        {
            $q=$this->db->select('*')
                        ->get('test');
                     return $q->result();   
        }
        public function result()
        {
            $q=$this->db->select('*')
                        ->get('answer');
                     return $q->result();   
        }
         public function panswer($id)
        {
            $q=$this->db->select('*')
                        ->where('id',$id)
                        ->get('test');
                     return $q->row();   
        }
         public function presult($id)
        {
            $q=$this->db->select('*')
                        ->where('id',$id)
                        ->get('answer');
                     return $q->row();   
        }
        public function question()
        {
        	  $q=$this->db->select('*')
                        ->get('question');
                     return $q->result();   
        }
         public function comment()
        {
        	  $q=$this->db->select('*')
                        ->get('comment');
                     return $q->result();   
        }
         public function test()
        {
        	  $q=$this->db->select('*')
                        ->get('test');
                     return $q->result();   
        }
        public function fetchcomment($title)
        {
           $q=$this->db->select('*')
                        ->where('article_title',$title)
                       ->get('comment');
                    return $q->result();   
        }
        public function fetchallcomment($id)
        {
           $q=$this->db->select('*')
                        ->where('article_id',$id)
                       ->get('comment');
                    return $q->result();   
        }
        public function pulse()
        {
            $q=$this->db->select('*')
                        ->get('pollquestion');
                     return $q->row();      
        }
        public function perresult($ip)
        {
            $q=$this->db->select('*')
                        ->where('ip',$ip)
                        ->get('answer');
                 return $q->row();       
        }
	
}
?>