<?php
Class CalculateProfit
{
	public $bread = 15;

    public function calculate($item, $price)
    {
        $profit=0;
        for($i=0; $i<$item; $i++)
        {
            if($this->bread > 2){
                $profit = $profit + $price;
                $this->bread = $this->bread - 2;
            }
        }
        
        return array('profit' => $profit, 'remaning_bread' => $this->bread);
    }

    public function profitVada()
    {
    	return $this->calculate('3', '10');
    }

    public function profitSamosa()
    {
    	return $this->calculate('3', '15');	
    }
}

$profitClass = new CalculateProfit();

$vada = $profitClass->profitVada('3', '10');
$samosa = $profitClass->profitSamosa('3', '15');

echo '---------VADA--------'; echo '</br>';
echo 'Profit of Vada : '.$vada['profit']; echo "</br>";
echo 'Remaning Bread : '. $vada['remaning_bread']; echo '</br>';

echo '---------SAMOSA--------'; echo '</br>';
echo 'Profit of SAMOSA : '.$samosa['profit']; echo "</br>";
echo 'Remaning Bread : '. $samosa['remaning_bread']; echo '</br>';

?>
