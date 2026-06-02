<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div id="wph-wrap-all" class="wrap wbg-settings-page">

    <div class="settings-banner">
        <h2><i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;<?php 
_e( 'Import Books From API', 'wp-books-gallery' );
?></h2>
    </div>

    <?php 
if ( $wbgiUploadMsg ) {
    $this->wbg_display_notification( 'info', $wbgiUploadMsg );
}
?>
    <br>
    <div class="wbg-wrap">

        <div class="wbg_personal_wrap wbg_personal_help" style="width: 75%; float: left;">

            <?php 
?>
                <span><?php 
echo '<a href="' . wbg_fs()->get_upgrade_url() . '">' . __( 'This Feature Available in the Professional Version', 'wp-books-gallery' ) . '</a>';
?></span>
                <?php 
?>
        </div>

        <?php 
include_once WBG_PATH . 'admin/view/partial/admin-sidebar.php';
?>
    </div>
</div>