<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648f24e918b1c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ykuycowuguumseuu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gigiwwouakeekoim; } wp_die("\x63\x61\x6e\40\x6e\157\164\x20\x63\162\x65\141\x74\145\40\x69\x6e\x73\164\141\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\145\x71\165\145\163\164\x65\144\x20\x63\154\141\163\163\40\x6e\157\164\40\145\170\x69\163\x74\163\56"); goto esuuweysgwuwcuue; gigiwwouakeekoim: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; esuuweysgwuwcuue: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qugsgsscqyikugyc; ykuycowuguumseuu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qugsgsscqyikugyc: return $owgumcsyqsamiemg; } }
