<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6621a73aae1bc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikqqueokumaakwmk; } wp_die("\143\141\156\40\x6e\x6f\164\40\x63\162\x65\141\x74\x65\40\x69\156\163\x74\x61\x6e\x63\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\x65\x73\164\x65\144\x20\x63\x6c\141\x73\x73\x20\156\x6f\x74\40\x65\x78\x69\x73\164\163\x2e"); goto ikuyuccwmwasokmy; ikqqueokumaakwmk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikuyuccwmwasokmy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aiegomwmomwugkaa: return $owgumcsyqsamiemg; } }
