<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Dany
 */
class About extends Application {
    public function index() {
		//$this->load->view('about');
                $this->data['pagebody']='about';
                $this->render();
    }
}
