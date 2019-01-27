<?php
/**
 * Created by PhpStorm.
 * User: Potato
 * Date: 24/01/2019
 * Time: 04:46 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Diplomas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Guatemala');
    }
    function get_participantes(){

        $query = $this->db->get('envio_diplomas');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }
}