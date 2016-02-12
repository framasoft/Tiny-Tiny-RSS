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
        $this->dbh = $host->get_dbh();
        $this->host = $host;
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
        if(defined('FEED_QUOTA') && FEED_QUOTA > 0) {
            $result = db_query( "SELECT COUNT(*) AS cf FROM ttrss_feeds WHERE owner_uid = ".$_SESSION['uid'].";");
            $num_feeds = db_fetch_result($result, 0, "cf");

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
