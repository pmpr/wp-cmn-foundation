<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4a8d73504             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\142\x68\157\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\165\x73\x65\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\x70\x61\x73\x73\167\157\162\144"), Constants::PREFIX => $wpdb->prefix, "\160\x6f\x72\x74" => $wpdb->options, "\x64\162\x69\x76\x65\x72" => "\x6d\x79\163\161\x6c", "\143\150\141\x72\163\145\164" => $wpdb->charset, "\x64\141\164\x61\142\x61\x73\x65" => $wpdb->__get("\x64\x62\156\141\155\145"), "\143\x6f\x6c\x6c\x61\x74\x69\157\x6e" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\x64\142\156\141\155\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if ($aasascamegmwqmqk) { $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); } return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (!str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; } return $kckcuicwgagqswgq; } }