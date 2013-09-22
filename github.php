<div id='github'>
	<div class='icon' aria-hidden='true' data-icon='&#x38;'></div>
	<div id='body'>
		<div id='break'></div>
		<?php
			$githubFeed = json_decode(file_get_contents("https://api.github.com/users/ruddfawcett", true), true);
			$githubArray = $githubFeed;
			$followerCount = $githubArray['followers'];
			
			echo "<span class='number'>" . number_format($followerCount) . "</span>";
		?>
		<br />
		<h2 class='text'>followers</h2>
		<div id='break'></div>
		<?php
			$followingCount = $githubArray['following'];
			
			echo "<span class='number'>" . number_format($followingCount) . "</span>";
		?>
		<br />
		<h2 class='text'>following</h2>
		<div id='break'></div>
		<?php
			$repoCount = $githubArray['public_repos'];
			
			echo "<span class='number'>" . number_format($repoCount) . "</span>";
		?>
		<br />
		<h2 class='text'>repos</h2>
		<div id='break'></div>
	</div>
</div>