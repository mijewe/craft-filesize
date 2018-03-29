<?php
namespace Craft;

class FileSizePlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('File Size');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Michael Westwood';
    }

    function getDeveloperUrl()
    {
        return 'https://twitter.com/mijewe/';
    }

	function getSourceLanguage()
	{
	    return 'en_gb';
	}

	public function addTwigExtension()
	{
	    Craft::import('plugins.filesize.twigextensions.FileSizeTwigExtension');

	    return new FileSizeTwigExtension();
	}
}
