<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662e3e3136c47             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto caawoosasoogaiwa; } wp_die("\143\141\156\40\156\157\164\40\x63\162\145\141\x74\x65\40\151\x6e\163\164\141\156\x63\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\162\145\x71\165\145\163\x74\x65\x64\40\143\154\x61\x73\x73\x20\156\x6f\x74\40\x65\x78\x69\x73\x74\163\x2e"); goto ikqqueokumaakwmk; caawoosasoogaiwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikqqueokumaakwmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcswqmcyogosia: return $owgumcsyqsamiemg; } }
