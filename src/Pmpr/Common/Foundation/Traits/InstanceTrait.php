<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f9ab20607e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aiegomwmomwugkaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } wp_die("\143\x61\156\40\156\157\x74\x20\143\x72\x65\141\164\145\40\151\156\x73\x74\x61\x6e\x63\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\x75\x65\163\164\x65\144\40\x63\154\141\x73\163\40\156\x6f\164\x20\145\x78\151\163\x74\163\x2e"); goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gmwcswqmcyogosia: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oysgkcoiouaikyys; aiegomwmomwugkaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oysgkcoiouaikyys: return $owgumcsyqsamiemg; } }
