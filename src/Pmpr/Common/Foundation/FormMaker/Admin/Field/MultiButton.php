<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\155\x75\154\164\x69\137\142\165\164\x74\157\156\x73", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\155\x6c\x2d\61");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\165\164\164\157\x6e\x2d\x70\162\x69\155\x61\162\x79");
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto csukqqcyukewowyu;
        csimuygeycgqmuwa:
        foreach ($kkeqqkkkqwkocsyu["\142\165\164\x74\157\156\163"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto kgycewokaywkmaiq;
            kcwcekkkmwskicqs:
            oomsucckcykayauy:
            goto mcosskywgakgqkgo;
            mmqygmmymswssgak:
            wkoewioscwccmkyk:
            goto kcwcekkkmwskicqs;
            eimwkwakqsagimiq:
            $kkeqqkkkqwkocsyu["\x62\x75\164\164\x6f\x6e\x73"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto mmqygmmymswssgak;
            kgycewokaywkmaiq:
            if (!$gskauacumcmekigs instanceof Field) {
                goto wkoewioscwccmkyk;
            }
            goto eimwkwakqsagimiq;
            mcosskywgakgqkgo:
        }
        goto umkaksiuoaugusem;
        yasyescomqgwccau:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto ecgguiikaeeiwooi;
        wiaiamgmiiiiowsu:
        ykeekemagwoeeuwk:
        goto yasyescomqgwccau;
        csukqqcyukewowyu:
        if (!(isset($kkeqqkkkqwkocsyu["\x62\165\164\164\x6f\156\x73"]) && $kkeqqkkkqwkocsyu["\142\x75\164\x74\157\x6e\x73"] && is_array($kkeqqkkkqwkocsyu["\x62\x75\x74\x74\x6f\156\163"]))) {
            goto ykeekemagwoeeuwk;
        }
        goto csimuygeycgqmuwa;
        umkaksiuoaugusem:
        weyuuecsicoyokwc:
        goto wiaiamgmiiiiowsu;
        ecgguiikaeeiwooi:
    }
}
