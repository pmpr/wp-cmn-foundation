<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2eee324173             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto skmyqomuuowkeeqe; } try { if (class_exists($egkyssmuqcwaciya)) { goto wococciimesuaeys; } wp_die("\143\x61\x6e\x20\x6e\x6f\164\x20\143\x72\145\141\x74\145\x20\151\x6e\163\164\141\x6e\143\145\40\146\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\x65\163\164\145\144\40\x63\154\141\163\163\x20\156\x6f\x74\x20\145\x78\x69\x73\164\163\56"); goto ygsoccgkwamsqewm; wococciimesuaeys: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygsoccgkwamsqewm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto smwcscokyasiosks; skmyqomuuowkeeqe: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; smwcscokyasiosks: return $owgumcsyqsamiemg; } }
