<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d303622917b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto smwcscokyasiosks; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygsoccgkwamsqewm; } wp_die("\x63\x61\x6e\x20\156\x6f\164\x20\x63\x72\145\141\164\x65\40\151\x6e\163\x74\141\x6e\143\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\x65\163\x74\145\144\x20\143\154\x61\x73\163\x20\x6e\157\x74\x20\x65\x78\x69\163\x74\163\56"); goto skmyqomuuowkeeqe; ygsoccgkwamsqewm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; skmyqomuuowkeeqe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto momgaqeuucmowiii; smwcscokyasiosks: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; momgaqeuucmowiii: return $owgumcsyqsamiemg; } }
