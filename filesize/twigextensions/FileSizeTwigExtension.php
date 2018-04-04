<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class FileSizeTwigExtension extends \Twig_Extension
{

	public function getName()
    {
        return 'File Size';
    }

	public function getFilters()
	{
	    return array(
	        'getfilesize' => new Twig_Filter_Method($this, 'filesize'),
	    );
	}

	public function filesize($filename) {

		$fullpath = getenv('CRAFTENV_BASE_PATH') . $filename;

		if (file_exists($fullpath)) {
			return filesize($fullpath);
		} else {
			return null;
		}

	}

}
