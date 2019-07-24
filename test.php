<?php
class pos_neg{
	public function Pos($num=array()){
		for ($i=0; $i < count($num); $i++) { 
			
		}
		$max=max($num);
		$print= array($max);
		return $print;
	}
}
$count= new pos_neg();
$num=array(1, 2, 4, 5, 6, -1, -2, -3);
$val=$count->Pos($num);
?>
<?php echo $val[0]; ?>