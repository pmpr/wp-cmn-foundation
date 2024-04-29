<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663029441b0a9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto caawoosasoogaiwa; } wp_die("\143\x61\x6e\x20\x6e\157\x74\x20\143\x72\x65\141\164\145\x20\x69\x6e\163\164\141\156\x63\145\40\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\165\145\163\x74\145\x64\40\x63\154\x61\163\x73\40\x6e\157\x74\40\145\170\151\x73\164\163\x2e"); goto ikqqueokumaakwmk; caawoosasoogaiwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikqqueokumaakwmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcswqmcyogosia: return $owgumcsyqsamiemg; } }
