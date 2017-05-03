<?php

include("tbs_class.php");
include("tbs_plugin_opentbs.php");

$GLOBALS['documento_consecutivo'] = "mi consecutivo";
$GLOBALS['factura'] = "mi factura";

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->PlugIn(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

echo $TBS->LoadTemplate("entrada.odt", OPENTBS_ALREADY_UTF8) ? "true" : "false"; // Also merge some [onload] automatic fields (depends of the type of document).

$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);
$TBS->Show(OPENTBS_FILE, "salida.odt");

echo "Funciona";