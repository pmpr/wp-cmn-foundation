<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31f49a6686             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto smwcscokyasiosks; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygsoccgkwamsqewm; } wp_die("\143\141\x6e\40\x6e\157\164\40\x63\162\145\141\164\x65\x20\x69\156\x73\x74\141\156\143\145\40\146\162\157\40{$egkyssmuqcwaciya}\54\40\162\145\161\x75\x65\163\164\x65\144\40\143\154\141\x73\x73\40\156\x6f\164\x20\145\x78\151\163\x74\163\x2e"); goto skmyqomuuowkeeqe; ygsoccgkwamsqewm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; skmyqomuuowkeeqe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto momgaqeuucmowiii; smwcscokyasiosks: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; momgaqeuucmowiii: return $owgumcsyqsamiemg; } }
