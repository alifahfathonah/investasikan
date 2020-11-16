<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                //$this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                
                                $d=date('d');
                                $m=date('m');
                                $y=date('y');
                                $date =$d.$m.$y;
                                echo $date;
        }

        public function do_upload()
        {
                $config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '5200';
                $config['max_width']            = '5024';
                $config['max_height']           = '568';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload', $data);
                }
        }
}
?>