<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6576e82451149             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ywskqmoyukgyguiy; } try { if (class_exists($egkyssmuqcwaciya)) { goto oiwwecykcycoouai; } wp_die("\x63\x61\156\40\156\157\x74\40\143\x72\145\141\164\x65\40\x69\156\x73\164\141\x6e\143\x65\40\146\162\157\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\145\163\x74\x65\x64\40\x63\154\141\x73\163\x20\x6e\157\x74\40\x65\x78\x69\x73\x74\x73\56"); goto eiegogciisyewaaa; oiwwecykcycoouai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eiegogciisyewaaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wougckywwqeusquq; ywskqmoyukgyguiy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wougckywwqeusquq: return $owgumcsyqsamiemg; } }
