<div id="lang" class="row-fluid">
    <ul>
        <li
        <?php
            if($this->lang->lang() == "en") {
        ?>
             class="active">
            EN
        <?php }else{ ?>
            >
            <?php echo  anchor($this->lang->switch_uri("en"),"EN");
        }?>
        </li>
        <li
        <?php
            if($this->lang->lang() == "es") { ?>
             class="active">
            ES
        <?php }else{ ?>
            >
            <?php echo anchor($this->lang->switch_uri("es"),"ES");
        } ?>
        </li>
    </ul>
</div>