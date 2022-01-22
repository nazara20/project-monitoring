<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Project Monitoring';
		$data['monitoring'] = $this->monitoring->getAllMonitoring();
		$this->load->view('monitoring/index', $data);
	}

	public function create()
	{
		$data['title'] = 'Create Project Monitoring';
		$this->form_validation->set_rules('project_name', 'Project Name', 'required|trim');
		$this->form_validation->set_rules('client', 'Client', 'required|trim');
		$this->form_validation->set_rules('project_leader', 'Project Leader', 'required|trim');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim');
		$this->form_validation->set_rules('start_date', 'Start Date Project', 'required|trim');
		$this->form_validation->set_rules('end_date', 'End Date Project', 'required|trim');
		$this->form_validation->set_rules('progress', 'Progress', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('monitoring/create', $data);
		} else {
			$data = [
				"project_name" => $this->input->post('project_name', true),
				"client" => $this->input->post('client', true),
				"project_leader" => $this->input->post('project_leader', true),
				"email" => $this->input->post('email', true),
				"image" => "default.svg",
				"start_date" => $this->input->post('start_date', true),
				"end_date" => $this->input->post('end_date', true),
				"progress" => $this->input->post('progress', true),
			];
			if ($this->monitoring->createNewProject($data)) {
				$this->session->set_flashdata('message', 'Success');
				redirect('monitoring');
			} else {
				$this->session->set_flashdata('message', 'Fail');
				redirect('monitoring');
			}
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Project Monitoring';
		$data['editproject'] = $this->monitoring->getMonitoringbyId($id);
		$this->form_validation->set_rules('project_name', 'Project Name', 'required|trim');
		$this->form_validation->set_rules('client', 'Client', 'required|trim');
		$this->form_validation->set_rules('project_leader', 'Project Leader', 'required|trim');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim');
		$this->form_validation->set_rules('start_date', 'Start Date Project', 'required|trim');
		$this->form_validation->set_rules('end_date', 'End Date Project', 'required|trim');
		$this->form_validation->set_rules('progress', 'Progress', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('monitoring/edit', $data);
		} else {
			$data = [
				"project_name" => $this->input->post('project_name', true),
				"client" => $this->input->post('client', true),
				"project_leader" => $this->input->post('project_leader', true),
				"email" => $this->input->post('email', true),
				"start_date" => $this->input->post('start_date', true),
				"end_date" => $this->input->post('end_date', true),
				"progress" => $this->input->post('progress', true),
			];
			$this->monitoring->editProject($data);
			$this->session->set_flashdata('message', 'Success Edit');
			redirect('monitoring');
		}
	}

	public function hapus($id)
    {
        $this->monitoring->hapusMonitoring($id);
        $this->session->set_flashdata('message', 'Success Delete');
        redirect('monitoring');
    }
}
