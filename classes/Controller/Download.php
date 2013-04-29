<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller {
	private $folder = 'downloads';
	
	// Public download links
	public function action_public()
	{
		// Look for the file in the downloads folder in document root
		$file_name = $this->request->param('file');
		$folder = $this->folder;
		$file_location = DOCROOT.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$file_name;
		
		// Send file if it exists, 404 if it doesn't
		if (file_exists($file_location))
		{
			$this->response->send_file($file_location);
		}
		else{
			throw new HTTP_Exception_404($file_name.' not found');
		}
	}
}