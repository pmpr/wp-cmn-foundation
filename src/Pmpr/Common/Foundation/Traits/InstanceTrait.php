<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662e236b22165             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto caawoosasoogaiwa; } wp_die("\143\141\x6e\x20\x6e\x6f\x74\x20\x63\162\145\141\x74\145\40\151\156\x73\164\x61\x6e\143\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\x65\163\x74\145\x64\x20\x63\x6c\x61\163\x73\x20\156\157\x74\40\x65\170\151\x73\164\x73\x2e"); goto ikqqueokumaakwmk; caawoosasoogaiwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikqqueokumaakwmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcswqmcyogosia: return $owgumcsyqsamiemg; } }
