<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d3e79db406             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto caawoosasoogaiwa; } wp_die("\143\141\x6e\40\x6e\x6f\164\x20\x63\x72\x65\x61\x74\145\x20\x69\156\x73\164\141\156\x63\x65\x20\146\162\x6f\40{$egkyssmuqcwaciya}\54\x20\162\x65\161\165\145\163\164\145\144\x20\143\x6c\x61\163\163\40\156\x6f\164\40\145\x78\151\x73\164\x73\56"); goto ikqqueokumaakwmk; caawoosasoogaiwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikqqueokumaakwmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcswqmcyogosia: return $owgumcsyqsamiemg; } }
