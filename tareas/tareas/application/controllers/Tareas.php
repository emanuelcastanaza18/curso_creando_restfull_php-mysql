<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tareas extends CI_Controller
{

    public function alumnos_conteo()
    {
        $this->load->database();

        $query = $this->db->query("SELECT * FROM alumnos");

        echo json_encode($query->num_rows());
    }
}
