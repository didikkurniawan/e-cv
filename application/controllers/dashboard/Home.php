<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home controller.
 *
 * @package App
 * @category Controller
 * @author Ardi Soebrata
 */
class Home extends Admin_Controller {

	public function index()
	{
		// $this->load->vars(array(
        //     'page_title' => 'Dashboard',
        //     // 'page_icon' => '<a class="btn btn-primary" href="' . site_url('master/desa/add') . '"> <i class="fa fa-plus"></i> Tambah</a><br>',
        //     'ui_controller' => 'tanah',
		// ));
		$this->template
				->set_css('timeline')
				->build('dashboard/index');
	}
}
