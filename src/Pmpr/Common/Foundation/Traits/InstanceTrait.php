<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6489d24378ad6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ykuycowuguumseuu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gigiwwouakeekoim; } wp_die("\x63\x61\156\x20\x6e\157\x74\40\x63\x72\x65\x61\164\145\40\151\156\x73\x74\x61\156\143\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\x65\163\x74\x65\x64\x20\143\154\141\x73\163\x20\x6e\x6f\164\40\145\x78\x69\163\x74\163\x2e"); goto esuuweysgwuwcuue; gigiwwouakeekoim: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; esuuweysgwuwcuue: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qugsgsscqyikugyc; ykuycowuguumseuu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qugsgsscqyikugyc: return $owgumcsyqsamiemg; } }
