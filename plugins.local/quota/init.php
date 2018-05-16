<?php
class Quota extends Plugin {

    private $link;
    private $host;

    function about() {
        return array(1.0,
            "Feeds quota system. Redirect to prefs with message if over quota",
            "ldidry", true);
    }

    function init($host) {
        $this->host = $host;
        $this->pdo = Db::pdo();
    }

    function get_js() {
        if ($this->over_quota() > 0) {
            print 'window.location.href = "prefs.php";';
        }
    }

    function get_prefs_js() {
        $over = $this->over_quota();
        if ($over > 0) {
            $title   = 'Trop de flux !';
            $content = "Vous avez dépassé la limite de ".FEED_QUOTA." flux RSS.\\nVeuillez supprimer au moins $over flux pour continuer à utiliser Framanews.";
            return "alert('$title\\n-------------------------------------\\n$content');";
        } else {
            return '';
        }
    }

    function over_quota() {
        $sth = $this->pdo->prepare("SELECT access_level FROM ttrss_users WHERE id = ?");
        $sth->execute([$_SESSION['uid']]);
        $level = $sth->fetchColumn(0);
        if($level != 10 && defined('FEED_QUOTA') && FEED_QUOTA > 0) {
            $sth = $this->pdo->prepare("SELECT COUNT(*) AS cf FROM ttrss_feeds WHERE owner_uid = ?");
            $sth->execute([$_SESSION['uid']]);
            $num_feeds = $sth->fetchColumn(0);

            if ($num_feeds > FEED_QUOTA) {
                return $num_feeds - FEED_QUOTA;
            }
        }
        return 0;
    }

    function api_version() {
        return 2;
    }
}
?>
