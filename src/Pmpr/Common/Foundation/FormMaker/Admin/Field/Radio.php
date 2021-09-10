<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        giseicyyywqmukwu:
        parent::__construct("\162\x61\144\151\x6f", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto myuauieqiomyewkk;
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
        return array_merge(["\x6c\x61\142\x65\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
