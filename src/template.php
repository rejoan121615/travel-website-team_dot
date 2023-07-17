<?php
    include_once(ADMIN_FOLDER . '/partials/dash_header.php');
    function dash_header ($links = '') {
        global $hHtml;
        $html = $hHtml;
        $html .= $links;
        $html .= '</head><body>';
        return $html;
    }