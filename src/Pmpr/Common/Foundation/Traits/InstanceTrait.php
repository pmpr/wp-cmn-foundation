<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4bac87f58             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto skmyqomuuowkeeqe; } try { if (class_exists($egkyssmuqcwaciya)) { goto wococciimesuaeys; } wp_die("\143\x61\x6e\x20\x6e\x6f\164\40\x63\162\x65\x61\x74\145\40\x69\156\x73\164\141\x6e\143\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\x65\163\x74\x65\144\40\x63\154\x61\x73\x73\x20\x6e\157\x74\x20\x65\170\151\163\164\x73\56"); goto ygsoccgkwamsqewm; wococciimesuaeys: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygsoccgkwamsqewm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto smwcscokyasiosks; skmyqomuuowkeeqe: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; smwcscokyasiosks: return $owgumcsyqsamiemg; } }
