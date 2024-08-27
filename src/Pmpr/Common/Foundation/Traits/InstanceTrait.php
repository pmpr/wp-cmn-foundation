<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce38dda53fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto mmoyseisgqkyouaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto quweggukmkusygwe; } wp_die("\143\x61\156\40\156\157\x74\x20\143\162\x65\141\x74\x65\40\x69\x6e\163\x74\x61\156\x63\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\x73\x74\x65\144\x20\x63\x6c\x61\163\x73\x20\156\x6f\x74\x20\145\x78\x69\163\x74\x73\56"); goto ysmqqmuesgeyquws; quweggukmkusygwe: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ysmqqmuesgeyquws: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oyeuoiqgeuioiqie; mmoyseisgqkyouaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oyeuoiqgeuioiqie: return $owgumcsyqsamiemg; } }
