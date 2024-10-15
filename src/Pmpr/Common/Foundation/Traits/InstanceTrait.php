<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e55c403173             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\143\141\156\40\156\x6f\164\x20\x63\x72\x65\x61\x74\x65\x20\x69\156\x73\x74\x61\156\143\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\x65\x73\x74\x65\x64\x20\x63\154\141\163\x73\40\156\x6f\x74\40\x65\x78\151\x73\x74\163\56"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
