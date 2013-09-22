<div id='dribble'>
	<div class='icon' aria-hidden='true' data-icon='&#x31;'></div>
	<div id='body'>
		<div id='break'></div>
		<?php
			$dribbleFeed = json_decode(file_get_contents("http://api.dribbble.com/players/simplebits", true), true);
			$dribbleArray = $dribbleFeed;
			$followerCount = $dribbleArray['followers_count'];
			
			echo "<span class='number'>" . number_format($followerCount) . "</span>";
		?>
		<br />
		<h2 class='text'>followers</h2>
		<div id='break'></div>
		<?php
			$followingCount = $dribbleArray['following_count'];
			
			echo "<span class='number'>" . number_format($followingCount) . "</span>";
		?>
		<br />
		<h2 class='text'>following</h2>
		<div id='break'></div>
		<?php
			$shotsCount = $dribbleArray['shots_count'];
			
			echo "<span class='number'>" . number_format($shotsCount) . "</span>";
		?>
		<br />
		<h2 class='text'>shots</h2>
		<div id='break'></div>
	</div>
</div>