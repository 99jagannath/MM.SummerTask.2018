<?php
  class Articlemodel extends CI_Model
  {
  	public function articlelist($limit,$urlpart)
  	{
      $q=$this->db->select('*')
                        ->limit($limit,$urlpart)
                        ->get('article');
      return $q->result();                  
  	}
  	public function num_rows()
  	{
  		 $q=$this->db->select('*')
                        ->from('article')
                        ->get();
      return $q->num_rows();  
  	}
  	public function addarticle($article)
  	{
  		return $this->db->insert('article',$article);
  	}
  	public function find_article($article_id)
  	{
  		$q=$this->db->select('*')
  		            ->from('article')
  		            ->where('id',$article_id)
  		            ->get();
  		return $q->row();            
  	}
  	public function updatearticle($article_id,array $post)
  	{
  		return $this->db->update('article',$post,['id'=>$article_id]);
  	}
  	public function delete_article($article_id)
  	{
       return $this->db->delete('article',['id'=>$article_id]);
  	}
  	public function search($title)
  	{
  		$q=$this->db->select('*')
  		            ->from('article')
  		            ->where("title like '%".$title."%'")
  		            ->get();
  		   return $q->result();         
  	}
    public function comment($comment)
    {
      return $this->db->insert('comment',$comment);
    }
    public function insert_result($answer)
    {
      $result=$this->db->insert('answer',$answer);
      if($result)
      {
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }
    public function answer_comment($id,$answer)
    {
      return $this->db->update('comment',$answer,['id'=>$id]);
    }
     public function answer_question($id,$answer)
    {
      return $this->db->update('question',$answer,['id'=>$id]);
    }
    public function test($id,$test)
    {
      return $this->db->update('test',$test,['id'=>$id]);
    }
  }

?>