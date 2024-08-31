<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d3160ad4f5b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto smwcscokyasiosks; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygsoccgkwamsqewm; } wp_die("\x63\x61\156\x20\156\157\164\40\143\x72\145\x61\x74\145\40\151\x6e\x73\x74\141\156\x63\145\40\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\145\163\164\x65\144\x20\x63\154\x61\163\x73\40\156\157\x74\40\x65\170\x69\163\164\x73\x2e"); goto skmyqomuuowkeeqe; ygsoccgkwamsqewm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; skmyqomuuowkeeqe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto momgaqeuucmowiii; smwcscokyasiosks: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; momgaqeuucmowiii: return $owgumcsyqsamiemg; } }
