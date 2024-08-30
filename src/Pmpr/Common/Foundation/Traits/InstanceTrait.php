<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1dbc474879             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto skmyqomuuowkeeqe; } try { if (class_exists($egkyssmuqcwaciya)) { goto wococciimesuaeys; } wp_die("\143\141\x6e\40\156\157\164\40\x63\x72\145\141\164\145\40\x69\x6e\x73\x74\x61\156\x63\x65\40\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\x65\x73\x74\x65\x64\40\143\154\x61\163\163\40\156\x6f\164\x20\x65\x78\151\163\164\163\56"); goto ygsoccgkwamsqewm; wococciimesuaeys: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygsoccgkwamsqewm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto smwcscokyasiosks; skmyqomuuowkeeqe: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; smwcscokyasiosks: return $owgumcsyqsamiemg; } }
