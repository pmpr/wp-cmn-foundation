<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\141\x64\x64", []);
    }
    
    private function oecasaciwaammwsa(?string $qqomumygoacsmsie, ?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        goto giemwgcqeogmauao;
        siawaquisuoeysqa:
        $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = ["\x61\x74\164\162\x73" => $wwgucssaecqekuek, "\x74\151\164\154\145" => $meqocwsecsywiiqs];
        goto mgqqigauyucewouk;
        giemwgcqeogmauao:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\163", "\160\141\147\145\55\164\x69\164\154\145\55\141\x63\x74\x69\157\156");
        goto siawaquisuoeysqa;
        mgqqigauyucewouk:
        return $this;
        goto kwigwuwessmseqik;
        kwigwuwessmseqik:
    }
    
    public function kecqycomykimqiim(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\141\144\144", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function easkmgsoqaqeyayo() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\151\156\144\145\170", []);
    }
    
    public function icyamyikwyaaoqya(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x69\x6e\144\x65\170", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function nwuqkwkgugcqsgyq() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\145\144\x69\164", []);
    }
    
    public function qeiuscikgegousks(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\145\144\151\x74", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
}
