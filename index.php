<?php
    // header
    require_once './app/view/template_header.php';
    // header


    require_once './app/model/class.database.inc.php';
    //require_once './app/view/class.createData.inc.php';
    require_once './app/controller/class.controller.inc.php';
    require_once './app/controller/class.ctrl.inc.php';
    require_once './app/model/class.create.inc.php';


    // script
    require_once './app/view/template_script.php';
    // script
    // footer
    require_once './app/view/template_footer.php';
    // footer

    $run = new Ctrl();
    $run->run();
?>