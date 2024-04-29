<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66302f12394be             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikqqueokumaakwmk; } wp_die("\x63\x61\156\x20\156\157\x74\40\143\x72\145\141\x74\x65\40\151\x6e\x73\164\x61\x6e\x63\145\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\165\x65\163\164\145\x64\x20\143\154\141\163\163\x20\156\157\x74\40\145\x78\x69\x73\164\163\x2e"); goto ikuyuccwmwasokmy; ikqqueokumaakwmk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikuyuccwmwasokmy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aiegomwmomwugkaa: return $owgumcsyqsamiemg; } }
