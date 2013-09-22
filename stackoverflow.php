<div id='so'>
	<div class='icon' aria-hidden='true' data-icon='&#x3d;'></div>
	<div id='body'>
		<div id='break'></div>
		<?php
			$soFeed = file_get_contents("http://api.stackexchange.com/2.1/users/22656?order=desc&sort=reputation&site=stackoverflow&filter=!*MxOyD8qN0Yghnep", true);
			$soFeed = gzinflate(substr($soFeed, 10, -8));
			$soFeed = json_decode($soFeed,true);
			$soArray = $soFeed['items'][0];
			$totalRep = $soArray['reputation'];
			
			echo "<span class='number'>" . number_format($totalRep) . "</span>";
		?>
		<br />
		<h2 class='text'>reputation</h2>
		<div id='break'></div>
		<?php
			$answerCount = $soArray['answer_count'];
			
			echo "<span class='number'>" . number_format($answerCount) . "</span>";
		?>
		<br />
		<h2 class='text'>answers</h2>
		<div id='break'></div>
		<?php
			$questionCount = $soArray['question_count'];
			
			echo "<span class='number'>" . number_format($questionCount) . "</span>";
		?>
		<br />
		<h2 class='text'>questions</h2>
		<div id='break'></div>
	</div>
</div>