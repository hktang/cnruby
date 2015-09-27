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
        return $this->finallyResult;
     }
}