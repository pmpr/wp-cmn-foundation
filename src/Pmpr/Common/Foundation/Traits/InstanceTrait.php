<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da660aa36             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto kmmwmccqeuasieoy; } try { if (class_exists($egkyssmuqcwaciya)) { goto yoosmuokogseueas; } wp_die("\x63\141\x6e\40\156\x6f\x74\x20\143\162\145\x61\x74\x65\x20\151\156\163\164\x61\156\143\145\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\145\163\164\145\x64\40\x63\154\141\163\163\40\x6e\157\164\x20\145\170\151\x73\164\x73\x2e"); goto moeqauuausuqygiq; yoosmuokogseueas: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moeqauuausuqygiq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto osksqmgkikamgaui; kmmwmccqeuasieoy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; osksqmgkikamgaui: return $owgumcsyqsamiemg; } }
