<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c1370edbfb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } try { if (class_exists($egkyssmuqcwaciya)) { goto aqakqumsuimkkkus; } wp_die("\143\141\156\40\156\x6f\164\x20\x63\162\x65\141\164\x65\40\151\156\x73\x74\x61\156\143\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\145\163\x74\145\x64\x20\143\154\x61\163\163\x20\156\157\164\40\145\170\151\x73\164\x73\56"); goto qkeogqcekgawsgwe; aqakqumsuimkkkus: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qkeogqcekgawsgwe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kewsuqsoqkyikkis: return $owgumcsyqsamiemg; } }
