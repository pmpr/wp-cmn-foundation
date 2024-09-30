<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77cb5a35c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto osksqmgkikamgaui; } try { if (class_exists($egkyssmuqcwaciya)) { goto moeqauuausuqygiq; } wp_die("\x63\141\156\40\x6e\x6f\x74\x20\143\162\x65\x61\x74\x65\x20\x69\156\x73\164\141\156\x63\145\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\40\162\145\161\x75\x65\163\164\x65\144\x20\143\154\x61\163\163\x20\156\157\164\40\x65\170\x69\163\x74\163\x2e"); goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kmmwmccqeuasieoy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wagqsecuquyukiwc; osksqmgkikamgaui: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wagqsecuquyukiwc: return $owgumcsyqsamiemg; } }
