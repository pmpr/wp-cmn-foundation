<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto xoqugcgcausywooc;
        xoqugcgcausywooc:
        parent::__construct("\x64\x69\166", "\143\157\x6c\154\145\x63\164\x69\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto yacyygsucqcwygis;
        yacyygsucqcwygis:
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\55\162\x65\160\145\x61\164\145\x72\x2d\x6c\151\x73\164", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\144" => "\x63\x6f\x6c\x6c\145\x63\164\151\x6f\x6e\x5f{$aokagokqyuysuksm}", "\143\154\x61\x73\163" => "\x66\x6f\x72\x6d\x2d\143\157\154\x6c\145\143\164\x69\157\x6e"]);
        goto iismyqyayagiyios;
        iismyqyayagiyios:
        DecoratorHook::qcsmikeggeemccuu("\x77\160\137\145\x6e\x71\165\x65\165\145\137\x73\143\x72\x69\160\164\x73", [$this, "\x65\156\161\x75\145\x75\145"]);
        goto cmussggwecawauwc;
        cmussggwecawauwc:
    }
    public static function enqueue()
    {
        goto cssukoaykymkugys;
        cssukoaykymkugys:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto yooyasyggysysqco;
        uqymcyyiewiiwqqu:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\x73"))->ayuciigykaswwqeo("\152\161\x75\x65\x72\171")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\x6c\157\142\141\154")));
        goto uqsigcyiocicmiqm;
        yooyasyggysysqco:
        $ymqmyyeuycgmigyo = "\x63\157\154\x6c\145\143\164\151\157\x6e";
        goto uqymcyyiewiiwqqu;
        uqsigcyiocicmiqm:
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
        goto qqcieyikoqueosyo;
        gwgisgmcmgcasskc:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\x61\163\163" => "\146\157\x72\x6d\55\x72\157\x77", "\144\141\x74\x61\55\x72\145\160\x65\x61\164\x65\162\x2d\151\164\145\x6d"], $nsmgceoqaqogqmuw);
        goto mmesoimsyqeiowoo;
        qwicaaakcymkqgcu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eukogiuaicuoagkw;
        qqcieyikoqueosyo:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\154\x61\163\x73" => "\x63\x6f\x6c\x2d\x6d\x64\55\61"], $this->kwkmeiyiomikmcoc());
        goto qwicaaakcymkqgcu;
        eukogiuaicuoagkw:
        if (!$ikgwqyuyckaewsow) {
            goto eomyiygumegiacam;
        }
        goto eqooyueyyiqqgygc;
        aasaocqscwkksuom:
        eomyiygumegiacam:
        goto gwgisgmcmgcasskc;
        eqooyueyyiqqgygc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            gugqwiqqeesskwqw:
        }
        goto scayemgqcsisqqag;
        scayemgqcsisqqag:
        gmwksskckoeggoau:
        goto aasaocqscwkksuom;
        mmesoimsyqeiowoo:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto guqakeyeceygukgo;
        guqakeyeceygukgo:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto kioecaokqiyeyimw;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\154\141\163\x73" => "\x6d\154\55\64", self::TYPE => "\143\x6c\145\141\162", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\103\x6c\145\x61\162", PR__CMN__FOUNDATION)]);
        goto eikwaewqcysuywmw;
        eikwaewqcysuywmw:
        return $nsmgceoqaqogqmuw;
        goto wayumgcgmkiqwouu;
        kioecaokqiyeyimw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\162\145\141\164\145", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\x41\x64\144", PR__CMN__FOUNDATION)]);
        goto seqicmqaumeoweik;
        wayumgcgmkiqwouu:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x69\172\145" => "\170\163", "\x63\x6c\x61\163\x73" => '', self::TYPE => "\x64\145\154\x65\164\x65", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\x44\x65\x6c\x65\164\x65", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\x62\165\x74\164\x6f\x6e", ["\x63\x6c\x61\x73\x73" => "\x62\x74\x6e\40\x62\164\x6e\55\x73\155\x20\x62\x74\156\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\40" . ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\x73\163"), self::TYPE => "\x62\x75\x74\x74\157\x6e", "\x64\141\x74\141\x2d\x74\x69\x74\x6c\145" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x61\x72\151\x61\55\x6c\141\142\x65\154" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\141\x74\x61\55\x72\145\x70\x65\141\164\x65\162\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\154\x61\x73\x73" => "\x69\143\157\x6e\55\x77\x68\x69\164\x65\x20\x66\x75\x6c\154\55\x6f\x70\141\143\151\x74\x79\40\x69\x63\157\x6e\55" . ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\172\x65")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\144\141\164\141\x2d\x69\156\151\x74\55\x65\155\160\x74\x79", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\164\x61\x2d\x66\151\x72\x73\164\55\165\x6e\144\x65\154\x65\164\x61\142\x6c\145", true);
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
        goto qasqismygkemyaka;
        gcwsyykomkieycmo:
        return $this;
        goto wmmicyyikqyykeqm;
        kegswsuciueamysc:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto gcwsyykomkieycmo;
        sgsuggymsisiisya:
        if ($imgcoakmmgqsckkm) {
            goto lowoswoqauswsswm;
        }
        goto kemseeaykemmgosi;
        qasqismygkemyaka:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto yaigsowoksoegqig;
        yaigsowoksoegqig:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto sgsuggymsisiisya;
        cyakakoyscyyseim:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\x63\154\141\x73\x73" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\x63\157\154\154\x65\x63\164\151\157\x6e\x2d\x66\151\x65\154\x64");
        goto kegswsuciueamysc;
        rsiscqyuuaqqukaq:
        lowoswoqauswsswm:
        goto cyakakoyscyyseim;
        kemseeaykemmgosi:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto rsiscqyuuaqqukaq;
        wmmicyyikqyykeqm:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto ecoyeceqcymocmge;
        ayekommagiogccge:
        cmsosmamsmyuogsi:
        goto sgwigiywwyuoakok;
        ecoyeceqcymocmge:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gsiggywymmcuoyow:
        }
        goto ayekommagiogccge;
        sgwigiywwyuoakok:
        return $this;
        goto oqweykgimegoiqik;
        oqweykgimegoiqik:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto ksiiqwkugmasuwum;
        ueageciuwyowgsyy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto kysgskkmgemwecqu;
            qoiwsygocigycosk:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto wkikiuscuumkuoew;
            eukiiwcwsiiugcsa:
            uqecisqimkeikumi:
            goto syycweoceqmkaqcu;
            wkikiuscuumkuoew:
            myqoamuyekasyauk:
            goto eukiiwcwsiiugcsa;
            kysgskkmgemwecqu:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto myqoamuyekasyauk;
            }
            goto qoiwsygocigycosk;
            syycweoceqmkaqcu:
        }
        goto yaisawwqsacugoem;
        gasiswcuyygasqye:
        cwqasqacoeoymgwm:
        goto akcowwacsiuucuca;
        mkqosogckkycsqow:
        if (!$ikgwqyuyckaewsow) {
            goto cwqasqacoeoymgwm;
        }
        goto uakcauwwqmwgsyue;
        yaisawwqsacugoem:
        esaiikawuuqsiwuq:
        goto aqeiymmmiygmoyws;
        ksiiqwkugmasuwum:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto mkqosogckkycsqow;
        aqeiymmmiygmoyws:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\144\145\146\x61\165\x6c\x74\55\166\x61\x6c\x75\145\x73", $ycmguuqqaiisymgg);
        goto gasiswcuyygasqye;
        uakcauwwqmwgsyue:
        $ycmguuqqaiisymgg = [];
        goto ueageciuwyowgsyy;
        akcowwacsiuucuca:
    }
}
