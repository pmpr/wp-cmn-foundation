<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6648bee597658             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqmwcuggcisqieao; } try { if (class_exists($egkyssmuqcwaciya)) { goto iwosouqsesoqcska; } wp_die("\x63\x61\x6e\x20\156\157\x74\40\143\x72\145\141\x74\x65\40\151\x6e\x73\x74\141\x6e\x63\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\x75\x65\163\x74\x65\144\40\x63\x6c\141\163\x73\x20\x6e\157\164\x20\x65\170\151\163\x74\x73\x2e"); goto iacwyogogoccmwsg; iwosouqsesoqcska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iacwyogogoccmwsg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qsyqcokomswykyso; wqmwcuggcisqieao: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qsyqcokomswykyso: return $owgumcsyqsamiemg; } }
