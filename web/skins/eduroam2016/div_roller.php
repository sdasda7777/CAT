<div id="roller">
    <div id="slides">
        <span id="line1"><?php printf(_("%s installation made easy:"), CONFIG_CONFASSISTANT['CONSORTIUM']['display_name']) ?></span>
        <span id="line2"></span>
        <span id="line3"></span>
        <span id="line4"><?php echo sprintf(_("Custom built for your %s"),$Gui->nomenclature_inst) ?></span>
        <span id="line5">
            <?php
            if (!empty(CONFIG_CONFASSISTANT['CONSORTIUM']['signer_name'])) {
                printf(_("Digitally signed by the organisation that coordinates %s: %s"), CONFIG_CONFASSISTANT['CONSORTIUM']['display_name'], CONFIG_CONFASSISTANT['CONSORTIUM']['signer_name']);
            }
            ?>
        </span>
    </div>
    <div id = "img_roll">
        <img id="img_roll_0" src="<?php echo $Gui->skinObject->findResourceUrl("IMAGES","empty.png")?>" alt="Rollover 0"/> <img id="img_roll_1" src="<?php echo $Gui->skinObject->findResourceUrl("IMAGES","empty.png")?>" alt="Rollover 1"/>
    </div>
</div>
