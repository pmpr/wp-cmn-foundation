<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620ff7e55355             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikqqueokumaakwmk; } wp_die("\x63\x61\x6e\40\156\157\x74\40\143\162\x65\x61\x74\x65\40\151\x6e\163\164\x61\156\x63\x65\x20\146\162\x6f\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\145\x73\164\145\x64\x20\x63\154\x61\x73\163\x20\x6e\157\x74\40\x65\170\151\163\164\x73\56"); goto ikuyuccwmwasokmy; ikqqueokumaakwmk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikuyuccwmwasokmy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aiegomwmomwugkaa: return $owgumcsyqsamiemg; } }
