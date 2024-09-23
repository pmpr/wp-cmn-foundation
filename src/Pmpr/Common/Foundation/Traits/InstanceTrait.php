<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e3829f9fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gaqweioagqyciyaw; } try { if (class_exists($egkyssmuqcwaciya)) { goto ycuksimueyoeugmi; } wp_die("\x63\x61\156\x20\156\157\164\x20\x63\x72\x65\141\164\145\40\151\x6e\163\x74\141\x6e\x63\145\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\161\x75\x65\x73\x74\x65\144\x20\x63\x6c\141\x73\x73\x20\x6e\x6f\x74\40\x65\170\x69\x73\164\x73\x2e"); goto iayqwwsmsuwaykyw; ycuksimueyoeugmi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iayqwwsmsuwaykyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto scioecswaikeacmy; gaqweioagqyciyaw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; scioecswaikeacmy: return $owgumcsyqsamiemg; } }
