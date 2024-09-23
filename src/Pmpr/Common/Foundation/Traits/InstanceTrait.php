<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ee33c813             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto qyauskeceyuommay; } try { if (class_exists($egkyssmuqcwaciya)) { goto waekkoqkywowucqm; } wp_die("\x63\141\x6e\x20\156\157\x74\40\143\162\x65\141\164\x65\x20\x69\x6e\x73\164\x61\x6e\143\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\145\x73\164\x65\144\x20\x63\154\141\163\x73\x20\156\157\164\x20\x65\x78\151\x73\x74\163\x2e"); goto iyyoksuqkyayycyo; waekkoqkywowucqm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto skuiqymemkkmcasa; qyauskeceyuommay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; skuiqymemkkmcasa: return $owgumcsyqsamiemg; } }
