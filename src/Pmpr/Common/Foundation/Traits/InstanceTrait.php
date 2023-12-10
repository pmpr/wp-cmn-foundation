<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575eac38d35b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eiegogciisyewaaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto egawkwesqyogksya; } wp_die("\x63\141\156\40\x6e\157\x74\40\x63\x72\x65\x61\x74\145\x20\x69\x6e\163\x74\x61\156\143\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\x75\145\x73\x74\145\144\x20\143\x6c\x61\x73\163\x20\156\157\164\x20\x65\170\x69\x73\164\x73\x2e"); goto oiwwecykcycoouai; egawkwesqyogksya: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oiwwecykcycoouai: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ywskqmoyukgyguiy; eiegogciisyewaaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ywskqmoyukgyguiy: return $owgumcsyqsamiemg; } }
