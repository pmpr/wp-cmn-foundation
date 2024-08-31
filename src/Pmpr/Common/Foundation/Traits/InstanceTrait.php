<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5675355             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto smwcscokyasiosks; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygsoccgkwamsqewm; } wp_die("\x63\x61\156\40\156\157\x74\x20\x63\162\x65\x61\x74\x65\x20\x69\x6e\163\x74\141\x6e\143\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\165\x65\163\x74\145\x64\40\143\154\141\x73\163\40\156\x6f\164\x20\145\170\151\163\164\x73\56"); goto skmyqomuuowkeeqe; ygsoccgkwamsqewm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; skmyqomuuowkeeqe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto momgaqeuucmowiii; smwcscokyasiosks: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; momgaqeuucmowiii: return $owgumcsyqsamiemg; } }
