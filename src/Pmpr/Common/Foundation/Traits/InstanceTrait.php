<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d4303e8851             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ikuyuccwmwasokmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto caawoosasoogaiwa; } wp_die("\143\141\x6e\x20\x6e\157\164\40\143\162\x65\141\164\145\x20\151\x6e\163\x74\141\156\143\145\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\x75\145\163\164\x65\144\40\x63\154\141\163\x73\40\156\x6f\164\x20\145\170\151\163\x74\163\56"); goto ikqqueokumaakwmk; caawoosasoogaiwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikqqueokumaakwmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcswqmcyogosia; ikuyuccwmwasokmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcswqmcyogosia: return $owgumcsyqsamiemg; } }
