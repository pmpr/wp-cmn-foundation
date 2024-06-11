<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a96c006dd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqmwcuggcisqieao; } try { if (class_exists($egkyssmuqcwaciya)) { goto iwosouqsesoqcska; } wp_die("\x63\x61\156\40\x6e\x6f\164\x20\x63\x72\145\141\x74\145\x20\151\x6e\163\164\141\156\x63\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\145\163\x74\x65\x64\40\x63\154\141\x73\x73\x20\x6e\x6f\x74\40\145\x78\151\x73\164\163\56"); goto iacwyogogoccmwsg; iwosouqsesoqcska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iacwyogogoccmwsg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qsyqcokomswykyso; wqmwcuggcisqieao: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qsyqcokomswykyso: return $owgumcsyqsamiemg; } }
