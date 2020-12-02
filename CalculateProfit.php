<?php 

Class CalculateProfit
{
    public function claculate($item, $bread, $price)
    {
        $profit=0;
        for($i=0; $i<$item; $i++)
        {
            if($bread > 2){
                $profit = $profit + $price;
                $bread = $bread - 2;
            }
        }
        
        return array('profit' => $profit, 'remaning_bread' => $bread);
    }
}

$vadaProfit = new CalculateProfit();
$samosaProfit = new CalculateProfit();

$vada = $vadaProfit->claculate('3', '5', '10');
$samosa = $samosaProfit->claculate('3', '9', '15');

echo '---------VADA--------'; echo '</br>';
echo 'Profit of Vada : '.$vada['profit']; echo "</br>";
echo 'Remaning Bread : '. $vada['remaning_bread']; echo '</br>';

echo '---------SAMOSA--------'; echo '</br>';
echo 'Profit of SAMOSA : '.$samosa['profit']; echo "</br>";
echo 'Remaning Bread : '. $samosa['remaning_bread']; echo '</br>';

?>
