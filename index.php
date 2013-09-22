<!DOCTYPE HTML>
<html>
	<head>
		<title>StatBars</title>
		<link href='style.css' type='text/css' rel='stylesheet'></link>
	</head>
	<body>
	<table>
		<tr>
			<td>
					<h1 style='margin:0; margin-top: 20px;'>TwitterStats</h1>
					<p style='margin:0; margin-bottom: 20px;'>Using @user as an example account</p>
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
				</td>
				<td>
					<h1 style='margin:0; margin-top: 20px;'>GitHubStats</h1>
					<p style='margin:0; margin-bottom: 20px;'>Using @ruddfawcett as an example account</p>
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
				</td>
			</tr>
			<tr>
				<td>
					<h1 style='margin:0; margin-top: 20px;'>SOStats</h1>
					<p style='margin:0; margin-bottom: 20px;'>Using John Skeet as an example account</p>
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
				</td>
				<td>
					<h1 style='margin:0; margin-top: 20px;'>DribbleStats</h1>
					<p style='margin:0; margin-bottom: 20px;'>Using simplebits as an example account</p>
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
				</td>
			</tr>
		</table>
	</body>
</html>