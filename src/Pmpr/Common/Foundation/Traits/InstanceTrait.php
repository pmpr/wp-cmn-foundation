<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f1a4291a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqmwcuggcisqieao; } try { if (class_exists($egkyssmuqcwaciya)) { goto iwosouqsesoqcska; } wp_die("\x63\x61\156\40\156\x6f\164\x20\x63\162\x65\141\164\145\40\x69\156\x73\164\141\x6e\x63\145\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\x65\x73\x74\x65\x64\x20\143\x6c\141\x73\163\x20\156\x6f\x74\40\145\x78\151\x73\164\x73\56"); goto iacwyogogoccmwsg; iwosouqsesoqcska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iacwyogogoccmwsg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qsyqcokomswykyso; wqmwcuggcisqieao: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qsyqcokomswykyso: return $owgumcsyqsamiemg; } }
