<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
  public function register()
  {
    $this->load->view('register');
  }
	public function home()
  {
    $this->load->view('home');
  }
	public function order()
  {
    $this->load->view('Order');
  }
	public function product()
	{
		$this->load->view('product');
	}
	public function product_add()
	{
		$this->load->view('product_add');
	}
	public function Messenger()
	{
		$this->load->view('Messenger');

	}
	public function orderstore()
	{
		$this->load->view('orderstore');

	}

	public function viewOrder()
	{
		$this->load->view('viewOrder');

	}

	public function test()
	{
		$this->load->view('test');

	}
}
