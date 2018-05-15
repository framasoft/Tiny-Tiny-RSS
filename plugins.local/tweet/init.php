<?php
class Tweet extends Plugin {
	private $host;

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_BUTTON, $this);
	}

	function about() {
		return array(1.1,
			"Share article on Twitter",
			"fox",
			false);
	}

	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/tweet.js");
	}

	function hook_article_button($line) {
		$article_id = $line["id"];

		$rv = "<img src=\"plugins.local/tweet/tweet.png\"
			class='tagsPic' style=\"cursor : pointer\"
			onclick=\"tweetArticle($article_id)\"
			title='".__('Share on Twitter')."'>";

		return $rv;
	}

	function getInfo() {
		$sth = $this->pdo->prepare("SELECT title, link
				FROM ttrss_entries, ttrss_user_entries
				WHERE id = ? AND ref_id = id AND owner_uid = ?");
		$sth->execute([$_REQUEST['id'], $_SESSION['uid']]);

		if ($sth->rowCount() != 0) {
			$row = $sth->fetch();
			$title = truncate_string(strip_tags($row['title']),
				100, '...');
			$article_link = $row['link'];
		}

		print json_encode(array("title" => $title, "link" => $article_link,
				"id" => $id));
	}

	function api_version() {
		return 2;
	}

}
?>
