<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB\Traits;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

trait ActionTrait
{
    
    protected array $viewActions = [];
    
    private function sqgeouqsaemqsaoc() : array
    {
        return $this->viewActions;
    }
    
    public function wqaqomooqiiaeoew() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\141\x64\144", []);
    }
    
    private function oecasaciwaammwsa(?string $qqomumygoacsmsie, ?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        goto kwigwuwessmseqik;
        kckkiuumaegucsqg:
        return $this;
        goto yqqueamqmkcwimeq;
        kwigwuwessmseqik:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\163", "\160\141\x67\x65\55\164\x69\x74\x6c\145\55\141\143\x74\x69\157\x6e");
        goto qqowaeggkimumgei;
        qqowaeggkimumgei:
        $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = ["\x61\164\x74\x72\x73" => $wwgucssaecqekuek, "\164\151\164\154\145" => $meqocwsecsywiiqs];
        goto kckkiuumaegucsqg;
        yqqueamqmkcwimeq:
    }
    
    public function kecqycomykimqiim(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\141\x64\144", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function easkmgsoqaqeyayo() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\x69\x6e\x64\x65\x78", []);
    }
    
    public function icyamyikwyaaoqya(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\151\156\x64\x65\x78", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function nwuqkwkgugcqsgyq() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\145\144\151\164", []);
    }
    
    public function qeiuscikgegousks(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x65\x64\x69\164", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
}
