<?php

if (!function_exists('t')) {
    function t(string $key): string
    {

        // ── Modo colector ──────────────────────────────────────────
        $collector = storage_path('app/lang_collector.php');

        // Cargar las keys ya registradas
        $collected = file_exists($collector) ? include $collector : [];

        // Si la key no está, agregarla y reescribir el archivo
        if (!array_key_exists($key, $collected)) {
            $collected[$key] = $key;

            $export = "<?php\nreturn [\n";
            foreach ($collected as $k => $v) {
                $k = addslashes($k);
                $v = addslashes($v);
                $export .= "    '{$k}' => '{$v}',\n";
            }
            $export .= "];\n";

            file_put_contents($collector, $export);
        }
        // ── Fin colector ───────────────────────────────────────────

        $lang = request()->cookie('lang', 'en');

        if ($lang === 'en') {
            return $key;
        }

        $langFile = resource_path("lang/{$lang}.php");

        if (!file_exists($langFile)) {
            return $key;
        }

        $translations = include $langFile;

        return $translations[$key] ?? $key;
    }
}