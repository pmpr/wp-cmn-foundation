<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        oucueogegoykuuuy:
        $this->eyygsasuqmommkua(key($qiouiwasaauyaaue));
        goto qyuwuawyyooewwmy;
        eekwggcsigwsyimk:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto ieesuqwoumyssgmi;
        }
        goto oucueogegoykuuuy;
        giseicyyywqmukwu:
        parent::__construct("\x72\x61\x64\151\x6f", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto myuauieqiomyewkk;
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
        return array_merge(["\154\141\142\x65\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
