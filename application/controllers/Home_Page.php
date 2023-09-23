<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Page extends CI_Controller {

	public function index() {
		$this->load->view('menu_page');
	}

	public function add_item_control() {
		$book_title = $this->input->post('book_title');
		$author = $this->input->post('author');
		$date_published = $this->input->post('date_published');
		$date_acquired = $this->input->post('date_acquired');
		echo $this->item_model->add_item($book_title,$author,$date_published,$date_acquired);
	}
	public function c_update_item_control() {
		$updt_id = $this->input->post('updt_id');
		$updt_book_title = $this->input->post('updt_book_title');
		$updt_author = $this->input->post('updt_author');
		$updt_date_published = $this->input->post('updt_date_published');
		$updt_date_acquired = $this->input->post('updt_date_acquired');
		echo $this->item_model->update_item($updt_id,$updt_book_title,$updt_author,$updt_date_published,$updt_date_acquired);
	}
	
	public function delete_item_control() {
		$delete_id = $this->input->post('delete_id');
		echo $this->item_model->delete_item($delete_id);
	}
	
	public function update_item_control() {
		$update_id = $this->input->post('update_id');
		$search_result['search_u_result'] = $this->item_model->search_update_item($update_id);
		$this->load->view('components/display_update', $search_result);
	}
	
	public function search_control() {
		$search_item = $this->input->post('search');
		$search_result['search_result'] = $this->item_model->search($search_item);
		$this->load->view('components/display_items', $search_result);
	}
}

