<div id='tweet'>
	<div class='icon' aria-hidden='true' data-icon='&#x74;'></div>
	<div id='body'>
		<div id='break'></div>
		<?php
		error_reporting(E_ALL);

			$twitterFeed = json_decode(file_get_contents("http://api.twitter.com/1/users/lookup.json?screen_name=user", true), true);
			$twitterArray = $twitterFeed[0];
			$followerCount = $twitterArray['followers_count'];
			
			echo "<span class='number'>" . number_format($followerCount) . "</span>";
		?>
		<br />
		<h2 class='text'>followers</h2>
		<div id='break'></div>
		<?php
			$friendsCount = $twitterArray['friends_count'];
			
			echo "<span class='number'>" . number_format($friendsCount) . "</span>";
		?>
		<br />
		<h2 class='text'>following</h2>
		<div id='break'></div>
		<?php
			$statusesCount = $twitterArray['statuses_count'];
			
			echo "<span class='number'>" . number_format($statusesCount) . "</span>";
		?>
		<br />
		<h2 class='text'>tweets</h2>
		<div id='break'></div>
	</div>
</div>