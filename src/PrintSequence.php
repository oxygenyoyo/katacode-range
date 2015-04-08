<?php


class PrintSequence
{
	
	public function toString($patternNumber)
	{
		$leftBucket = substr($patternNumber, 0, 1);
		$rightBucket = substr($patternNumber, -1);



		preg_match('/^[\[|\(](.+)[\)|\]]$/is', $patternNumber, $matches);
		

		

		$numbers = explode(',', $matches[1]);

		$letfAdditionNumber = 0;
		$rightAdditionNumber = 0;
		if($leftBucket == '(')
		{
			$letfAdditionNumber = +1;
		}

		if( $rightBucket == ')')
		{
			$rightAdditionNumber = -1;
		}

		$startNumber = $numbers[0] + $letfAdditionNumber;
		$endNumber = $numbers[1] + $rightAdditionNumber;

		$result = [];
		for ($i = $startNumber; $i <= $endNumber ; $i++) { 
			$result[] = $i;
		}
		
		return implode(',', $result);
	}




	
}