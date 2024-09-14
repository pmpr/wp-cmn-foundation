<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdb08957             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto ksaoceiosgkgkeua; } try { if (class_exists($egkyssmuqcwaciya)) { goto woimcikoqmikiiuo; } wp_die("\143\x61\x6e\40\156\x6f\164\x20\x63\162\x65\141\164\145\40\151\x6e\x73\x74\x61\156\143\x65\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\x65\161\165\145\163\164\145\144\40\143\154\x61\163\x73\x20\156\x6f\164\40\145\170\151\163\164\x73\x2e"); goto yygiyieeyuuqucke; woimcikoqmikiiuo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yygiyieeyuuqucke: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wesmogqcyeemwqaq; ksaoceiosgkgkeua: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wesmogqcyeemwqaq: return $owgumcsyqsamiemg; } }
