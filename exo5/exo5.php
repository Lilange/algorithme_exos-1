<?php
//exercices on string
//by fflachet
//beweb

function palindrome($word)
{
	$palindrome = false;
	$i = 0;
	$j = strlen($word)-1;
	$argv[1] = $word;

	echo "$word\n";

	while ($i < strlen($word)) 
	{	
		if($word[$i] == $word[$j])
		{
			$j--;
			$i++;
			$palindrome = true;
		}
		else
		{
			$palindrome = false;
			break;
		}
	}
	if($palindrome == true)
		echo "ce mot est un palindrome\n";
	else
		echo "ce mot n'est pas un palindrome\n";
}


function countLetter($word)
{
	$i = 0;
	$nbLetter = 0;

	while($i < strlen($word))
	{
		if(ctype_alpha($word[$i]))
		{
			$nbLetter++;
			$i++;
		}
		else
		{
			$i++;
		}
	}
	echo "nombre de lettres alpha :$nbLetter\n";

}

function main($argv)
{
	$word = $argv[1];
	switch ($argv[2])
	{
		case '1':
			palindrome($word);
			break;
		case '2':
			countLetter($word);
			break;
		default:
			echo "1 ou 2 essaie pas autre chose";
			break;
	} 
}

main($argv);
?>