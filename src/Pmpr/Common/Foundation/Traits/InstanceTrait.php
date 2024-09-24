<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b578294c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto scioecswaikeacmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto iayqwwsmsuwaykyw; } wp_die("\x63\141\x6e\40\156\x6f\164\x20\143\162\x65\x61\x74\x65\40\151\156\163\164\x61\x6e\143\x65\40\x66\x72\157\40{$egkyssmuqcwaciya}\54\40\x72\x65\161\165\145\x73\164\x65\x64\40\x63\154\141\163\163\x20\x6e\157\x74\40\145\170\x69\x73\164\x73\56"); goto gaqweioagqyciyaw; iayqwwsmsuwaykyw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gaqweioagqyciyaw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uyaweoaaqsagsqyi; scioecswaikeacmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uyaweoaaqsagsqyi: return $owgumcsyqsamiemg; } }
