<?php

class Loginmodel extends CI_Model
{
	
	public function login_validation($username,$password)
	{
		//$q=$this->db->where(['username'=>$username,'password'=>$password])
		$q=$this->db->where(['username'=>$username,'password'=>$password])
		         ->get('user');
        if($q->num_rows())
        {
        	return $q->row();
        }
        else
        {
        	return FALSE;
        }
	}
        public function resistration($user)
        {
             return  $this->db->insert('user',$user);
        }
        public function question($question,$type)
        {
           $q=$this->db->select('*')
                     ->where('type',$type)
                     ->like('question',$question)
                     ->get('question');
               return $q->result();       
        }
        public function newquestion($question)
        {
            return $this->db->insert('question',$question);
        }
        public function squiggles()
        {
            $q=$this->db->select('*')
                        ->get('squiggles');
                    return $q->row();    
        }
        public function squiggles_update($squiggles)
        {
            return $this->db->update('squiggles',$squiggles,['id'=>1]);
        }
        public function cz()
        {
            $q=$this->db->select('*')
                        ->where('id',1)
                        ->get('cz');
                    return $q->row();    
        }
         public function cz_update($cz)
        {
            return $this->db->update('cz',$cz,['id'=>1]);
        }
         public function video()
        {
            $q=$this->db->select('*')
                        ->where('id',2)
                        ->get('cz');
                    return $q->row();    
        }
          public function video_update($cz)
        {
            return $this->db->update('cz',$cz,['id'=>2]);
        }
        public function poll($option)
        {
            $this->db->insert('poll',$option);
        }
       

}

?>