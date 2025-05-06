<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             681a830d4ffdd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Plugin; use WP_Error; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = 'query_plugins') { if (!function_exists('plugins_api')) { include_once ABSPATH . 'wp-admin/includes/plugin-install.php'; } return plugins_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function ggocakcisguuokai($mkysicwccoeicumg) : bool { if (!function_exists('is_plugin_active')) { include_once ABSPATH . 'wp-admin/includes/plugin.php'; } return $this->call('is_plugin_active', false, $mkysicwccoeicumg); } public function sioyqaykmwwugmgi(string $mkysicwccoeicumg) : bool { return $this->call('is_plugin_active_for_network', false, $mkysicwccoeicumg); } public function seyyiqmgwymyumoq(string $mkysicwccoeicumg, bool $gskuwmeemyeuwogc = true, bool $mcmaiqckgiuqayau = true) : array { return $this->call('get_plugin_data', [], $mkysicwccoeicumg, $gskuwmeemyeuwogc, $mcmaiqckgiuqayau); } }
