<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce3480d954f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto mmoyseisgqkyouaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto quweggukmkusygwe; } wp_die("\x63\141\156\40\x6e\157\x74\40\x63\162\145\x61\x74\x65\x20\x69\156\x73\x74\141\x6e\143\145\40\146\x72\157\40{$egkyssmuqcwaciya}\54\40\162\x65\x71\x75\145\x73\164\x65\144\40\x63\x6c\x61\x73\x73\x20\156\157\x74\40\x65\x78\x69\x73\164\x73\x2e"); goto ysmqqmuesgeyquws; quweggukmkusygwe: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ysmqqmuesgeyquws: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oyeuoiqgeuioiqie; mmoyseisgqkyouaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oyeuoiqgeuioiqie: return $owgumcsyqsamiemg; } }
