<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Radio extends OptionAwareField
{
    
    protected bool $inline;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        goto gmwowyekemmasgas;
        gmwowyekemmasgas:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto qguqgmiiseimmuki;
        }
        goto egqmkokiwysiicqo;
        suweswocokiemugi:
        qguqgmiiseimmuki:
        goto ieesuqwoumyssgmi;
        egqmkokiwysiicqo:
        $this->eyygsasuqmommkua(key($qiouiwasaauyaaue));
        goto suweswocokiemugi;
        ieesuqwoumyssgmi:
        parent::__construct("\162\x61\144\151\157", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
        goto eekwggcsigwsyimk;
        eekwggcsigwsyimk:
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
        return array_merge(["\154\x61\x62\x65\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
}
