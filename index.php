<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjLayouts->body();
    $ObjContents->sidebar();
    print "<br><br><br><br><br><br><br><br><br>";
    $ObjLayouts->footer();