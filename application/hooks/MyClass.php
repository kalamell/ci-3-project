<?php
class MyClass
{
    protected $CI;
    public function construct()
    {

    }
    public function getSite()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('database');
        $rs = $this->CI->db->get('tb_case');

        print_r($rs->result());

    }
}