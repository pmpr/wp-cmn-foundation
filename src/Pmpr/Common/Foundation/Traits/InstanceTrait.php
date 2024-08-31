<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2f79b4e2f3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto smwcscokyasiosks; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygsoccgkwamsqewm; } wp_die("\x63\141\x6e\x20\x6e\x6f\164\40\143\x72\145\141\164\x65\40\x69\156\x73\x74\141\x6e\x63\145\40\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\165\x65\163\164\x65\144\x20\x63\154\141\163\163\x20\156\x6f\164\40\145\170\x69\x73\x74\x73\x2e"); goto skmyqomuuowkeeqe; ygsoccgkwamsqewm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; skmyqomuuowkeeqe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto momgaqeuucmowiii; smwcscokyasiosks: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; momgaqeuucmowiii: return $owgumcsyqsamiemg; } }
