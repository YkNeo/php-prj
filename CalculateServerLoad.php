
<?php 
class Intervals
{
	public function loadCalulate($servers, $load)
	{
    	$message = '';
		foreach ($load as $value)
		{
			if( $value < 50) {
				$servers = $servers / 2;
			} else {
				$servers = 2*$servers + 1;
			}
            $message = 'After 5 minutes, '.round($servers).' servers are running.';
		}

		return $message;
	}

}

$load = array(10,60,50,15,20);
$ser = new Intervals();

set_time_limit(0);
while(true) {
	echo $ser->loadCalulate(2, $load);
	sleep(300);
}
