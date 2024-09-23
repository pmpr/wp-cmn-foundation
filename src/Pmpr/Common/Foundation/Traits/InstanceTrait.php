<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2ec7c9c7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gaqweioagqyciyaw; } try { if (class_exists($egkyssmuqcwaciya)) { goto ycuksimueyoeugmi; } wp_die("\x63\x61\156\40\x6e\157\164\x20\x63\x72\x65\x61\164\145\40\151\x6e\163\x74\141\x6e\x63\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\162\x65\161\165\x65\163\x74\145\x64\x20\143\154\x61\163\x73\40\x6e\x6f\164\40\x65\x78\x69\163\164\163\56"); goto iayqwwsmsuwaykyw; ycuksimueyoeugmi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iayqwwsmsuwaykyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto scioecswaikeacmy; gaqweioagqyciyaw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; scioecswaikeacmy: return $owgumcsyqsamiemg; } }
