<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Radio extends OptionAwareField
{
    
    protected bool $inline;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        goto yuoeiacwiaccoqmc;
        kmukeiwuqougaquk:
        ssgqequeqwoooawy:
        goto qcsagcciiqgqicsw;
        eqywooyqyouscges:
        $this->eyygsasuqmommkua(key($qiouiwasaauyaaue));
        goto kmukeiwuqougaquk;
        qcsagcciiqgqicsw:
        parent::__construct("\162\x61\x64\x69\157", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto osammgwycqaekuuu;
        yuoeiacwiaccoqmc:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto ssgqequeqwoooawy;
        }
        goto eqywooyqyouscges;
        osammgwycqaekuuu:
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
        return array_merge(["\x6c\141\142\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
