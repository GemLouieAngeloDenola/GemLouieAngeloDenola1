<?php
	class Item_Model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function Search($search){
			$query = $this->db->query("SELECT * FROM tblbooks WHERE `book_title` like '%$search%' OR `author` like '%$search%'");

			if($query->result_array()){
				return $query->result_array();
			} else {
				return false;
			}
		}
		public function add_item($book_title,$author,$date_published,$date_acquired){
			$data = array(
				'book_title' => $book_title,
				'author' => $author,
				'date_published' => $date_published,
				'date_acquired' => $date_acquired
			);
			if ($this->db->insert('tblbooks', $data)) {
				return 'success';
			} else {
				return 'Please Contact Administrator, System Error';
			}
		}
		public function delete_item($delete_id){
			$data = array('id	' => $delete_id);
			// return $this->db->delete('training_seminar_record', $data);
			if ($this->db->delete('tblbooks', $data)) {
				return 'success';
			} else {
				return 'Please Contact Administrator, System Error';
			}
		}

		public function search_update_item($search_id){
			$query = $this->db->query("SELECT * FROM tblbooks WHERE `id` = '$search_id'");

			if($query->result()){
				return $query->result();
			} else {
				return false;
			}
		}

		public function update_item($id,$book_title,$author,$date_published,$date_acquired){
			$data = array(
				'book_title' => $book_title,
				'author' => $author,
				'date_published' => $date_published,
				'date_acquired' => $date_acquired
			);
			$this->db->where('id', $id);
			if ($this->db->update('tblbooks', $data)) {
				return 'success';
			} else {
				return 'Please Contact Administrator, System Error';
			}
		}		
	}