<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657605ed631a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ywskqmoyukgyguiy; } try { if (class_exists($egkyssmuqcwaciya)) { goto oiwwecykcycoouai; } wp_die("\143\141\x6e\x20\156\157\164\x20\143\162\x65\141\164\145\x20\x69\156\x73\x74\x61\x6e\143\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\x65\163\164\x65\x64\40\143\x6c\x61\x73\x73\x20\156\157\x74\x20\x65\x78\x69\163\x74\163\x2e"); goto eiegogciisyewaaa; oiwwecykcycoouai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eiegogciisyewaaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wougckywwqeusquq; ywskqmoyukgyguiy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wougckywwqeusquq: return $owgumcsyqsamiemg; } }
