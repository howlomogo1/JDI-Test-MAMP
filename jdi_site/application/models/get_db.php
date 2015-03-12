<?php

	class Get_db extends CI_Model{
		function getAll() {
			$query = $this->db->query("SELECT * FROM sometable");

			// converts it into an array similar to fetch assoc
			return $query->result();
		}
	}
?>