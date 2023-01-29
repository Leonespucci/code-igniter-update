<?php 
class Blog_model extends CI_Model {
    public function getBlog(){
        // $cari = $this->input->get('find');
        // $this->db->like('title', $cari);
        return $this->db->get("blog");
    }

    public function singleBlog($filed, $value){
        $this->db->where($filed, $value);
        return $this->db->get('blog');
    }


    public function inputBlog($data){ 
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    public function Updateblog($id, $update){
        $this->db->where('id',$id);
        $this->db->update('blog',$update);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id){
        $this->db->where('id',$id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
}



?>
