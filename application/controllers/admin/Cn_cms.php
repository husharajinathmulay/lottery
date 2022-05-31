<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_cms extends MY_Controller
{
    // public function cms()
    // {

    //     $this->adminBackend('admin/cms/vw_cms');
    // }
    
   public function cms()
	{
        $data['page_title'] = 'CMS';
        $data['privilige_list'] = 'cms';      
        $data['privilige_form'] = 'cms_edit';

        if (!empty($this->input->post())) {

            $this->form_validation->set_rules('cmsTitle', 'page name', 'trim|required');
            $this->form_validation->set_rules('description', 'content', 'trim|required');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url() . 'admin/cms');
                exit();
            } else {

                $inserted_data = array(
                    'cms_text' => $this->input->post('description'),
                    'cms_meta_title' => $this->input->post('meta_title'),
                    'cms_meta_desc' => $this->input->post('meta_desc'),
                    'cms_meta_keyword' => $this->input->post('meta_keys'),
                );
                $condition = array('cms_pkey' => $this->input->post('cmsTitle'));

                $result = $this->Md_database->updateData('cms', $inserted_data, $condition);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'CMS details saved successfully!!');
                } else {
                    $this->session->set_flashdata('error', 'CMS details not saved.');
                }
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            /* [start::get organization data] */
            $condn = array('status' => '1');
            $cmsData = $this->Md_database->getData('cms', 'cms_pkey,cms_title', $condn);
            $data['cmsData'] = !empty($cmsData) ? $cmsData : '';

            /* [end::get organization data] */

            $this->adminBackend('admin/cms/vw_cms',$data);
        }
    }

    //getDataCMSById
    public function getDataCMSById() {

        $this->db->where('cms_pkey', $this->input->get('cmsId'));
        $this->db->where('status', 1);
        $query = $this->db->get('cms');
        $result = $query->row();

        if (!empty($result)) {
            //echo $result->cms_text;
            $data['cms_text'] = $result->cms_text;
            $data['cms_meta_title'] = $result->cms_meta_title;
            $data['cms_meta_desc'] = $result->cms_meta_desc;
            $data['cms_meta_keyword'] = $result->cms_meta_keyword;
            //$data = $result->result();
            echo json_encode($data);
        }
        exit;
    }
}
