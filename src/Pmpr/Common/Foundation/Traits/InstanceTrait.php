<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b55e1c67c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } try { if (class_exists($egkyssmuqcwaciya)) { goto ikqqueokumaakwmk; } wp_die("\143\x61\x6e\40\156\157\x74\x20\143\x72\145\x61\x74\x65\x20\x69\x6e\163\164\141\x6e\143\x65\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\145\x73\164\x65\144\40\143\154\141\x73\x73\40\156\157\x74\x20\145\170\151\163\x74\x73\x2e"); goto ikuyuccwmwasokmy; ikqqueokumaakwmk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikuyuccwmwasokmy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aiegomwmomwugkaa: return $owgumcsyqsamiemg; } }
