<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65cb506e7ea52             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sicgyiyiocyygkoc; } try { if (class_exists($egkyssmuqcwaciya)) { goto kwuckkyqaygwgcuy; } wp_die("\x63\x61\x6e\40\x6e\157\x74\40\143\162\x65\141\x74\145\x20\151\x6e\163\164\x61\156\143\145\x20\x66\x72\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\x73\x74\x65\x64\40\143\154\x61\x73\163\40\156\157\164\x20\x65\x78\151\x73\164\x73\x2e"); goto giuccakymqymawgk; kwuckkyqaygwgcuy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; giuccakymqymawgk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cyosacayacumuaks; sicgyiyiocyygkoc: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cyosacayacumuaks: return $owgumcsyqsamiemg; } }
