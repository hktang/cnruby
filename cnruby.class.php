<?php 
require 'phpanalysis/phpanalysis.class.php';

class ruby extends PhpAnalysis
{
    /**
     * Returns and array of the final result
     * @return array
     */
     public function GetFinallyResultAsArray($spword=' ', $word_meanings=false)
     {
        $result = $this->finallyResult;
        $output = array();
        foreach ($result as $v)
        {
        	$output[] = $this->_out_string_encoding($v['w']);
        }
        return $output;
     }
}