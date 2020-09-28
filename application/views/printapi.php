<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->get('jasaweb');
echo json_encode($query->result());