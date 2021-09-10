<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

trait AttributeTrait
{
    
    protected ?array $attributes = [];
    
    public function ccekeuwwqqoiwuwy() : ?array
    {
        return $this->attributes;
    }
    
    public function waecsyqmwascmqoa($uusmaiomayssaecw) : ?string
    {
        $ymkomoccmymcoiea = null;
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        }
        return $ymkomoccmymcoiea;
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy('class', $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            ocaguquugeamqckq:
        }
        csammceowmqwaamq:
        return $this;
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu('class', $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga('class', $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        $umuecysoywoumgwo = false;
        if ($uusmaiomayssaecw) {
            $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
            if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
                if (!is_array($ymkomoccmymcoiea)) {
                    $ymkomoccmymcoiea = explode(' ', $ymkomoccmymcoiea);
                }
                $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
            } else {
                $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
            }
        }
        return $umuecysoywoumgwo;
    }
    
    public function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self
    {
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            cogywoqcqummsyus:
        }
        eekcoeikaeaaeyii:
        return $this;
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            ugqwuugsweqgmywk:
        }
        gmwykkouysyaqwqm:
        return $this;
    }
}
