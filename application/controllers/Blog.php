<?php


class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Blog_model');
    }

    public function index()
    {
        $query = $this->Blog_model->getBlog();
        $data['blogs'] = $query->result_array();
        $this->load->view('Blog', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->singleBlog('url', $url);
        $data['blog'] = $query->row_array();
        $this->load->view('Detail', $data);
    }

    public function add()
    {
        if($this->input->post())
        {
             $data['title']=$this->input->post('title');
            $data['content']=$this->input->post('content');
            $data['url']=$this->input->post('url');
            //konfigurasi upload
            $config['upload_path']         = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 2000;
            $config['max_height']           = 1600;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover'))
            {
               echo $this->upload->display_errors();
            }
            else
            {
                $data['cover'] = $this->upload->data('file_name');
            }
            $id=$this->Blog_model->insertBlog($data);
            if($id)
            {
                echo "Data berhasil disimpan";
                redirect('/');
            }
            else
            {
                    echo "Data gagal disimpan";
            }
        }
        $this->load->view('Blog_input',$config);
    }
        

    public function inputBlog()
    {
        if ($this->input->post()) {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');
            $id = $this->Blog_model->inputBlog($data);
            if ($id) {
                redirect('Blog/index');
            }
        }
        $this->load->view('Blog_input');
    }

    public function editBlog($id)
    {
        $query = $this->Blog_model->singleBlog('id', $id);
        $data['blog'] = $query->row_array();

        if ($this->input->post()) {
            $update['title'] = $this->input->post('title');
            $update['content'] = $this->input->post(nl2br('content'));
            $update['url'] = $this->input->post('url');
            $id = $this->Blog_model->UpdateBlog($id, $update);
            if ($id) {
                redirect('Blog/index');
            }
        }
        $this->load->view('Form_edit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}
