<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6636986c8c344             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oysgkcoiouaikyys; } try { if (class_exists($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } wp_die("\x63\x61\x6e\40\x6e\157\x74\x20\x63\162\145\141\x74\145\40\x69\x6e\x73\x74\141\x6e\x63\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\x65\x73\x74\145\x64\x20\x63\x6c\141\x73\x73\40\x6e\157\164\x20\145\x78\151\x73\x74\x73\56"); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aiegomwmomwugkaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gikmiimsmmugmewi; oysgkcoiouaikyys: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gikmiimsmmugmewi: return $owgumcsyqsamiemg; } }
