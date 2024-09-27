<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c272cccf4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto moeqauuausuqygiq; } try { if (class_exists($egkyssmuqcwaciya)) { goto cgsuikiqggkikaae; } wp_die("\x63\x61\x6e\40\156\157\x74\40\143\162\145\141\x74\x65\x20\151\x6e\x73\x74\141\x6e\143\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\x71\165\x65\x73\x74\145\144\x20\143\154\141\163\x73\x20\156\157\x74\40\145\170\x69\163\x74\x73\x2e"); goto yoosmuokogseueas; cgsuikiqggkikaae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yoosmuokogseueas: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kmmwmccqeuasieoy: return $owgumcsyqsamiemg; } }
