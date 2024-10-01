<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6d87474a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoosmuokogseueas; } try { if (class_exists($egkyssmuqcwaciya)) { goto cecomsiewwckuwqy; } wp_die("\x63\141\156\x20\156\x6f\x74\x20\143\162\145\141\164\145\40\x69\x6e\163\164\x61\156\143\x65\40\146\x72\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\145\x73\164\x65\144\x20\143\154\141\x73\163\40\156\157\x74\40\x65\x78\x69\163\x74\x73\56"); goto cgsuikiqggkikaae; cecomsiewwckuwqy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cgsuikiqggkikaae: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto moeqauuausuqygiq; yoosmuokogseueas: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; moeqauuausuqygiq: return $owgumcsyqsamiemg; } }
