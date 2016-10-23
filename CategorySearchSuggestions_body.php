<?php
/**
 * @author James Martindale, with code stolen from Niklas Laxström
 * @license MIT
*/

class CategorySearchSuggestions
{
	function beforePageDisplay(OutputPage $out)
	{
		$out->addModules('ext.categorysearchsuggestions.suggestions');
	}
}