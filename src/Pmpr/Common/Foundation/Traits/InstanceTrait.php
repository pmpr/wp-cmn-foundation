<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce54af64690             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto osskmmsaekmgemwc; } try { if (class_exists($egkyssmuqcwaciya)) { goto oyeuoiqgeuioiqie; } wp_die("\143\141\x6e\x20\156\x6f\164\x20\x63\x72\x65\141\164\145\40\151\156\163\164\141\x6e\x63\x65\x20\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\145\163\x74\x65\x64\x20\143\154\x61\163\x73\40\156\x6f\164\x20\145\x78\x69\163\164\x73\x2e"); goto qwuwcoeiguyqekuy; oyeuoiqgeuioiqie: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qwuwcoeiguyqekuy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eowskcomgqqwcyui; osskmmsaekmgemwc: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eowskcomgqqwcyui: return $owgumcsyqsamiemg; } }
