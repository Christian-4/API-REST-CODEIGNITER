<?php
class Welcome_model extends CI_Model {

        public function lineas()
        {
                return file('/etc/passwd');
        }

	public function lineafile()
	{
		return fgets(fopen('/etc/passwd','r'));
	}
}
