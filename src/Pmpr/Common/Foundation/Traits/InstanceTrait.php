<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb73b3c9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqmwcuggcisqieao; } try { if (class_exists($egkyssmuqcwaciya)) { goto iwosouqsesoqcska; } wp_die("\x63\x61\x6e\40\156\157\164\40\143\x72\145\141\x74\145\40\151\x6e\x73\164\x61\x6e\x63\145\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\x75\145\x73\164\x65\144\40\x63\x6c\x61\x73\x73\x20\156\x6f\x74\40\x65\x78\x69\x73\x74\x73\x2e"); goto iacwyogogoccmwsg; iwosouqsesoqcska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iacwyogogoccmwsg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qsyqcokomswykyso; wqmwcuggcisqieao: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qsyqcokomswykyso: return $owgumcsyqsamiemg; } }
