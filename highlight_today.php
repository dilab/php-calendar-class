<?php 
/**
*@author  				The-Di-Lab
*@email   				thedilab@gmail.com
*@website 				www.the-di-lab.com
*@version              1.0
**/
class HighlightToday {
        public function update(Calendar $cal){
        	$today = date('Y-m-d',time());
        	
        	if($today==$cal->getCurrentDate()){
        		$cal->cellContent='Today';
        	}
        	
        }
}
?>