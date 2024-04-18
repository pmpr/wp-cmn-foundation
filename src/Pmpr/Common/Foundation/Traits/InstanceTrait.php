<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620ede1ae782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikqqueokumaakwmk; } wp_die("\x63\141\x6e\40\156\157\164\x20\x63\162\x65\141\x74\145\x20\151\156\163\x74\x61\156\143\145\40\146\x72\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\x75\145\163\x74\x65\144\x20\x63\154\141\163\x73\40\x6e\157\164\x20\145\170\x69\163\164\x73\56"); goto ikuyuccwmwasokmy; ikqqueokumaakwmk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikuyuccwmwasokmy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aiegomwmomwugkaa: return $owgumcsyqsamiemg; } }
