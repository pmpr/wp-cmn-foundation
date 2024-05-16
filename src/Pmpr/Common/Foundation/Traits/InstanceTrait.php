<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697d2b4114             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqmwcuggcisqieao; } try { if (class_exists($egkyssmuqcwaciya)) { goto iwosouqsesoqcska; } wp_die("\143\141\156\x20\156\157\164\40\x63\162\x65\141\164\x65\40\x69\156\x73\x74\x61\x6e\x63\145\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\x65\x73\x74\x65\144\x20\x63\154\x61\163\x73\40\x6e\x6f\164\x20\x65\x78\x69\x73\164\163\56"); goto iacwyogogoccmwsg; iwosouqsesoqcska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iacwyogogoccmwsg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qsyqcokomswykyso; wqmwcuggcisqieao: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qsyqcokomswykyso: return $owgumcsyqsamiemg; } }
