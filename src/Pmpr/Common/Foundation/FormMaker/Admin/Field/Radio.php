<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Radio extends OptionAwareField
{
    
    protected bool $inline;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        goto eekwggcsigwsyimk;
        qyuwuawyyooewwmy:
        ieesuqwoumyssgmi:
        goto giseicyyywqmukwu;
        giseicyyywqmukwu:
        parent::__construct("\x72\141\144\x69\x6f", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto myuauieqiomyewkk;
        oucueogegoykuuuy:
        $this->eyygsasuqmommkua(key($qiouiwasaauyaaue));
        goto qyuwuawyyooewwmy;
        eekwggcsigwsyimk:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto ieesuqwoumyssgmi;
        }
        goto oucueogegoykuuuy;
        myuauieqiomyewkk:
    }
    
    public function wmociykwcyesssui() : ?bool
    {
        return $this->inline;
    }
    
    public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self
    {
        $this->inline = $usyqkyomqcuocgoa;
        return $this;
    }
    public function mkmssscwmeekwgqo() : Field
    {
        $this->awagieqcmmwkgwgs(true);
        return parent::mkmssscwmeekwgqo();
    }
    public function sqoiuykcoueiucgc($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\154\141\x62\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
