<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b59cf46             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto scioecswaikeacmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto iayqwwsmsuwaykyw; } wp_die("\143\x61\x6e\x20\156\x6f\164\40\143\162\145\x61\164\145\x20\151\x6e\x73\x74\x61\156\x63\x65\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\x73\x74\145\144\x20\x63\154\141\163\163\x20\x6e\x6f\x74\40\x65\170\151\163\164\x73\x2e"); goto gaqweioagqyciyaw; iayqwwsmsuwaykyw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gaqweioagqyciyaw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uyaweoaaqsagsqyi; scioecswaikeacmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uyaweoaaqsagsqyi: return $owgumcsyqsamiemg; } }
