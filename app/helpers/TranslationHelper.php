<?php

if (!function_exists('t')) {
    function t(string $key): string
    {
        $normalizedKey = mb_strtolower(trim($key));

        // ── Modo colector ──────────────────────────────────────────
        $collector = storage_path('app/lang_collector.php');
        $collected = file_exists($collector) ? include $collector : [];

        if (!array_key_exists($normalizedKey, $collected)) {
            $collected[$normalizedKey] = $key; // valor original para referencia
            
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

        // Buscar con key normalizada
        return $translations[$normalizedKey] ?? $key;
    }
}