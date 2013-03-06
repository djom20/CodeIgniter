<div id="scripts">
    <?php
        $ruta = 'application/asset/js/';
        if ($gestor = opendir($ruta)) {
            while (false !== ($archivo = readdir($gestor))) {
                if (strpos($archivo, ".js") !== false) {
                    echo '<script type="text/javascript" src="'.site_url($ruta.$archivo).'"></script>';
                }
            }
            closedir($gestor);
        }
    ?>
</div>