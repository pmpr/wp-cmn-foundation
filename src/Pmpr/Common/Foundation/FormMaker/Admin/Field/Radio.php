<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Radio extends OptionAwareField
{
    
    protected bool $inline;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        goto oucueogegoykuuuy;
        oucueogegoykuuuy:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto eekwggcsigwsyimk;
        }
        goto qyuwuawyyooewwmy;
        qyuwuawyyooewwmy:
        $this->eyygsasuqmommkua(key($qiouiwasaauyaaue));
        goto giseicyyywqmukwu;
        myuauieqiomyewkk:
        parent::__construct("\x72\x61\x64\151\x6f", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto owqcgayymwauiqaa;
        giseicyyywqmukwu:
        eekwggcsigwsyimk:
        goto myuauieqiomyewkk;
        owqcgayymwauiqaa:
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
        return array_merge(["\154\x61\142\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
