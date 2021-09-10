<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class Collection extends Field
{
    
    protected array $cols = [];
    
    protected array $fields = [];
    
    public function __construct(string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto yacyygsucqcwygis;
        iismyqyayagiyios:
        $this->igmaewykumgwoaoy("\144\141\x74\x61\x2d\162\145\x70\x65\x61\164\145\x72\x2d\x6c\x69\x73\164", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\151\x64" => "\x63\x6f\154\x6c\145\143\164\x69\x6f\x6e\x5f{$aokagokqyuysuksm}", "\143\x6c\x61\x73\x73" => "\x66\x6f\x72\155\55\143\x6f\x6c\x6c\x65\143\164\151\x6f\156"]);
        goto cmussggwecawauwc;
        yacyygsucqcwygis:
        parent::__construct("\x64\151\x76", "\x63\x6f\154\x6c\145\143\x74\x69\x6f\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto iismyqyayagiyios;
        cmussggwecawauwc:
        DecoratorHook::qcsmikeggeemccuu("\x77\x70\137\x65\x6e\161\165\x65\165\x65\137\163\143\x72\x69\160\x74\163", [$this, "\x65\156\161\x75\145\165\145"]);
        goto cssukoaykymkugys;
        cssukoaykymkugys:
    }
    public static function enqueue()
    {
        goto yooyasyggysysqco;
        uqsigcyiocicmiqm:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\163"))->ayuciigykaswwqeo("\x6a\x71\x75\145\x72\x79")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\154\157\142\141\x6c")));
        goto gmwksskckoeggoau;
        uqymcyyiewiiwqqu:
        $ymqmyyeuycgmigyo = "\x63\x6f\154\154\x65\x63\164\151\x6f\x6e";
        goto uqsigcyiocicmiqm;
        yooyasyggysysqco:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto uqymcyyiewiiwqqu;
        gmwksskckoeggoau:
    }
    
    public function essgykyeoymwgsgg() : array
    {
        return $this->cols;
    }
    
    public function saosoymyamkakomm(array $waaaiiqwsmggwsak) : self
    {
        $this->cols = $waaaiiqwsmggwsak;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto qwicaaakcymkqgcu;
        aasaocqscwkksuom:
        gugqwiqqeesskwqw:
        goto gwgisgmcmgcasskc;
        gwgisgmcmgcasskc:
        qqcieyikoqueosyo:
        goto mmesoimsyqeiowoo;
        qwicaaakcymkqgcu:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\154\141\163\163" => "\143\157\x6c\x2d\155\x64\x2d\61"], $this->kwkmeiyiomikmcoc());
        goto eukogiuaicuoagkw;
        scayemgqcsisqqag:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            eomyiygumegiacam:
        }
        goto aasaocqscwkksuom;
        eukogiuaicuoagkw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eqooyueyyiqqgygc;
        mmesoimsyqeiowoo:
        return ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\x6c\141\163\x73" => "\x66\x6f\162\155\55\x72\x6f\x77", "\144\x61\164\141\55\x72\145\x70\145\x61\164\145\162\55\x69\164\x65\155"], $nsmgceoqaqogqmuw);
        goto guqakeyeceygukgo;
        eqooyueyyiqqgygc:
        if (!$ikgwqyuyckaewsow) {
            goto qqcieyikoqueosyo;
        }
        goto scayemgqcsisqqag;
        guqakeyeceygukgo:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto kioecaokqiyeyimw;
        eikwaewqcysuywmw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\143\x6c\141\x73\163" => "\x6d\154\55\64", self::TYPE => "\143\154\x65\141\162", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\x43\x6c\x65\x61\x72", PR__CMN__FOUNDATION)]);
        goto wayumgcgmkiqwouu;
        kioecaokqiyeyimw:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto seqicmqaumeoweik;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\x72\145\141\x74\x65", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\101\x64\144", PR__CMN__FOUNDATION)]);
        goto eikwaewqcysuywmw;
        wayumgcgmkiqwouu:
        return $nsmgceoqaqogqmuw;
        goto lowoswoqauswsswm;
        lowoswoqauswsswm:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x69\172\145" => "\x78\163", "\x63\x6c\x61\163\x73" => '', self::TYPE => "\144\x65\154\x65\164\145", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\104\145\154\145\x74\145", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\x62\x75\164\164\x6f\x6e", ["\x63\x6c\x61\163\x73" => "\x62\164\156\x20\142\x74\156\x2d\x73\x6d\40\142\164\x6e\55" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\40" . ManipulateArray::get($ywmkwiwkosakssii, "\x63\154\141\163\x73"), self::TYPE => "\142\x75\164\x74\157\156", "\x64\x61\x74\x61\x2d\164\x69\164\x6c\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x61\x72\x69\x61\55\154\141\142\x65\x6c" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\141\164\x61\55\162\145\x70\145\x61\164\x65\x72\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\x6c\141\x73\163" => "\x69\143\x6f\156\x2d\167\x68\x69\164\x65\40\146\165\154\154\55\157\160\141\143\151\164\171\x20\151\143\157\x6e\x2d" . ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x7a\145")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\151\156\x69\164\55\145\x6d\160\x74\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\164\x61\55\146\151\x72\x73\164\x2d\165\x6e\144\x65\x6c\145\164\x61\142\x6c\x65", true);
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function iqoyuqgssusgimwa() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto yaigsowoksoegqig;
        rsiscqyuuaqqukaq:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto cyakakoyscyyseim;
        kegswsuciueamysc:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\143\154\x61\163\x73" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\143\157\154\154\x65\143\164\x69\157\156\55\146\x69\x65\x6c\144");
        goto gcwsyykomkieycmo;
        sgsuggymsisiisya:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto kemseeaykemmgosi;
        yaigsowoksoegqig:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto sgsuggymsisiisya;
        gcwsyykomkieycmo:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto wmmicyyikqyykeqm;
        cyakakoyscyyseim:
        qasqismygkemyaka:
        goto kegswsuciueamysc;
        wmmicyyikqyykeqm:
        return $this;
        goto cmsosmamsmyuogsi;
        kemseeaykemmgosi:
        if ($imgcoakmmgqsckkm) {
            goto qasqismygkemyaka;
        }
        goto rsiscqyuuaqqukaq;
        cmsosmamsmyuogsi:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto ayekommagiogccge;
        oqweykgimegoiqik:
        return $this;
        goto esaiikawuuqsiwuq;
        ayekommagiogccge:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            ecoyeceqcymocmge:
        }
        goto sgwigiywwyuoakok;
        sgwigiywwyuoakok:
        gsiggywymmcuoyow:
        goto oqweykgimegoiqik;
        esaiikawuuqsiwuq:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto mkqosogckkycsqow;
        ueageciuwyowgsyy:
        $ycmguuqqaiisymgg = [];
        goto yaisawwqsacugoem;
        mkqosogckkycsqow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto uakcauwwqmwgsyue;
        akcowwacsiuucuca:
        ksiiqwkugmasuwum:
        goto uemcgsaisgakauyw;
        uakcauwwqmwgsyue:
        if (!$ikgwqyuyckaewsow) {
            goto ksiiqwkugmasuwum;
        }
        goto ueageciuwyowgsyy;
        aqeiymmmiygmoyws:
        uqecisqimkeikumi:
        goto gasiswcuyygasqye;
        gasiswcuyygasqye:
        $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\x64\145\146\141\x75\x6c\164\x2d\166\x61\x6c\x75\145\x73", $ycmguuqqaiisymgg);
        goto akcowwacsiuucuca;
        yaisawwqsacugoem:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto qoiwsygocigycosk;
            qoiwsygocigycosk:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto kysgskkmgemwecqu;
            }
            goto wkikiuscuumkuoew;
            wkikiuscuumkuoew:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto eukiiwcwsiiugcsa;
            eukiiwcwsiiugcsa:
            kysgskkmgemwecqu:
            goto syycweoceqmkaqcu;
            syycweoceqmkaqcu:
            myqoamuyekasyauk:
            goto cwqasqacoeoymgwm;
            cwqasqacoeoymgwm:
        }
        goto aqeiymmmiygmoyws;
        uemcgsaisgakauyw:
    }
}
