<?php

class Finder_model extends CI_model{
	public function Bobot()
	{
		$bobot = [

			"Bharga" => $this->input->post('Bharga'),
			"Bfasilitas" => $this->input->post('Bfasilitas'),
			"Bdayatampung" => $this->input->post('Bdayatampung'),
			"Bjarak" => $this->input->post('Bjarak'),
			"Bspot" => $this->input->post('Bspot'),


		];

	}
}