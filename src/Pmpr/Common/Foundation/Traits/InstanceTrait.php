<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16aefd43f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto msqmakqaiawgqeau; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmukeceewgmekoae; } wp_die("\x63\x61\156\x20\156\x6f\x74\x20\x63\x72\145\141\x74\x65\40\151\156\x73\164\141\156\x63\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\x75\x65\163\x74\145\144\40\143\154\141\x73\163\x20\156\157\164\40\145\x78\151\163\x74\163\x2e"); goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; somsmcmoyaiiwuyk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iuukukcykqykisaa; msqmakqaiawgqeau: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iuukukcykqykisaa: return $owgumcsyqsamiemg; } }
