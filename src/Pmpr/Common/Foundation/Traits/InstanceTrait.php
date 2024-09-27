<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19d6f1c9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto moeqauuausuqygiq; } try { if (class_exists($egkyssmuqcwaciya)) { goto cgsuikiqggkikaae; } wp_die("\143\141\156\40\156\x6f\164\x20\x63\x72\x65\x61\x74\x65\40\151\x6e\x73\x74\141\x6e\x63\x65\x20\x66\x72\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\161\x75\x65\x73\164\x65\144\40\143\x6c\141\163\x73\40\156\157\164\40\x65\170\x69\x73\164\163\x2e"); goto yoosmuokogseueas; cgsuikiqggkikaae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yoosmuokogseueas: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kmmwmccqeuasieoy: return $owgumcsyqsamiemg; } }
