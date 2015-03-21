<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**$search = $_GET['q'];
		echo $search;
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		// $this->load->view('index1');
	}

	public function search()
	{
		$this->load->database();
		$q = $_GET['q'];
		$query = $this->db->query("select * from company where company_name LIKE '%".$q."%' limit 6 offset 0");
		$data['query'] = $query;
		$this->load->view('search_result',$data);			
		
	}

	public function post_review_search()
	{
		$this->load->database();
		$pc = $_GET['pc'];
		$query = $this->db->query("select * from company where company_name LIKE '%".$pc."%' limit 6 offset 0");
		$data['query'] = $query;
		$this->load->view('pc_search_result',$data);
	}

	public function post_review()
	{
		$this->load->view('header');
		$this->load->view('post_review');
		$this->load->view('footer');
	}

	public function post_review_2()
	{
		$data['post_data'] = $_POST;
		$this->load->view('header');
		$this->load->view('post_review_2', $data);
		$this->load->view('footer');
	}

	public function submit_review()
	{
		$this->load->database();
		$raw_data = $_POST;
		$q = $raw_data['company_id'];

		$review = $raw_data['review'];

		// insert review of company
		$insert_review_query = "INSERT INTO `reviews` (`review`,`company_id`) VALUES ('".$review."','".$q."')";
		$insert_review = $this->db->query($insert_review_query);

		// get company information
		$company_info = $this->db->query("select * from company where company_id=".$q);
		foreach ($company_info->result() as $value) {
			$company_name = $value->company_name;
		}
		
		// get reviews
		$query  = $this->db->query("select * from reviews where company_id=".$q);
		$reviews = array();
		foreach ($query->result() as $row) {
			array_push($reviews, $row->review);
		}
		
		$data['company_id'] = $q;
		$data['company_name'] = $company_name;
		$data['reviews'] = $reviews;

		$this->load->view('header');
		$this->load->view('show_company',$data);
		$this->load->view('footer');
	}

	public function show_company()
	{
		$q = $_GET['q'];
		$this->load->database();
		// get company information
		$company_info = $this->db->query("select * from company where company_id=".$q);
		foreach ($company_info->result() as $value) {
			$company_name = $value->company_name;
		}
		// get reviews
		$query  = $this->db->query("select * from reviews where company_id=".$q);
		$reviews = array();
		foreach ($query->result() as $row) {
			array_push($reviews, $row->review);
		}
		$data['company_id'] = $q;
		$data['company_name'] = $company_name;
		$data['reviews'] = $reviews;
		$this->load->view('header');
		$this->load->view('show_company',$data);
		$this->load->view('footer');
	}

	public function db_test()
	{
		$this->load->database();
		$query = $this->db->query('select * from company');
		$data['query'] = $query;
		$this->load->view('header');
		$this->load->view('db_test',$data);
		$this->load->view('footer');
	}

	public function test()
	{
		$this->load->view('header');
		$this->load->view('test');
		$this->load->view('footer');
	}

	public function import_excel()
	{
		$this->load->database();
		$file = './assets/list_of_company_name.xlt';
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}

		//insert data into db
		foreach ($arr_data as $key => $value) {
			$insert_query = "INSERT INTO `company` (`company_name`) VALUES ('".$value["C"]."')";
			$query = $this->db->query($insert_query);
		}
		$query = $this->db->query('select * from company');
		$data['query'] = $query;
		$this->load->view('header');
		$this->load->view('db_test',$data);
		$this->load->view('footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */