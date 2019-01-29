<?php
/**
 * Created by PhpStorm.
 * User: Potato
 * Date: 24/01/2019
 * Time: 12:10 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Envio extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // Modelos
        $this->load->model('Diplomas_model');
    }

    public function index()
    {
        $this->load->view('diploma_template');
        // Get output html
        $html = $this->output->get_output();

        // Load pdf library
        $this->load->library('pdf');
        // Load HTML content
        $this->dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('letter', 'landscape');
        $this->dompdf->set_option('enable_remote', 'true');
        $this->dompdf->set_option('Html5ParserEnabled', 'true');



        // Render the HTML as PDF
        $this->dompdf->render();

        $output = $this->dompdf->output();



        // Output the generated PDF (1 = download and 0 = preview)
        //$this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
        file_put_contents('diplomas_src/diploma.pdf', $output);
    }
    function asistentes(){
        $data['asistentes']=$this->Diplomas_model->get_participantes();



        $this->load->view('asistentes',$data);
    }

}