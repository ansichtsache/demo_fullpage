<?php

// --- NO_DIST
// developer-Addon - Module und Templates ins Addon-Verzeichnis synchronisieren
if (rex_addon::get('developer')->isInstalled()) {
    rex_developer_manager::setBasePath(rex_path::addon('demo_fullpage'));
}
// --- /NO_DIST
