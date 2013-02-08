<?php
header('Content-Type: text/plain');
header("User-Agent: soccerbot by /u/9jack9");

require('admin-lib.php');

set_time_limit(6000);

reddit_login();

if ($bot_subreddit) {
  upload_sprites($bot_subreddit);
  upload_bot_css($bot_subreddit);
}

upload_sprites($subreddit, true);
upload_css($subreddit);

flair_bot($subreddit);
upload_users($subreddit);
download_users($subreddit);

if ($bot_subreddit) {
  upload_bot_sidebar($bot_subreddit);
  upload_bot_index($bot_subreddit);
  if ($stats_id) {
    upload_stats($subreddit, $stats_id);
  }
}
?>