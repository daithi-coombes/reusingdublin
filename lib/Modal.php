<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * class file for modal dialog windows
 * @package ReusingDublin
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */

class Modal extends Controller
{
    
    public function __call($name, $arguments)
    {

    	$controller = lcfirst(str_replace('action', "", $name));

    	return $this;
    }
}
