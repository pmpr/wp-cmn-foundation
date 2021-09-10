<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        yacyygsucqcwygis:
        parent::__construct("\x64\151\x76", "\143\157\154\154\x65\143\x74\x69\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto iismyqyayagiyios;
        cmussggwecawauwc:
        DecoratorHook::qcsmikeggeemccuu("\167\160\x5f\145\156\161\165\145\165\145\137\163\143\162\151\x70\164\x73", [$this, "\145\156\x71\x75\145\165\145"]);
        goto cssukoaykymkugys;
        iismyqyayagiyios:
        $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\x72\145\160\x65\141\164\x65\162\x2d\154\x69\163\164", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\144" => "\x63\157\154\154\145\x63\164\x69\157\156\137{$aokagokqyuysuksm}", "\x63\154\x61\x73\x73" => "\146\157\x72\x6d\x2d\x63\x6f\x6c\x6c\145\x63\x74\151\157\x6e"]);
        goto cmussggwecawauwc;
        cssukoaykymkugys:
    }
    public static function enqueue()
    {
        goto yooyasyggysysqco;
        uqymcyyiewiiwqqu:
        $ymqmyyeuycgmigyo = "\143\x6f\x6c\x6c\145\x63\x74\x69\157\156";
        goto uqsigcyiocicmiqm;
        yooyasyggysysqco:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto uqymcyyiewiiwqqu;
        uqsigcyiocicmiqm:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\152\x73"))->ayuciigykaswwqeo("\152\x71\x75\x65\x72\171")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\x6c\x6f\x62\141\154")));
        goto gmwksskckoeggoau;
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
        mmesoimsyqeiowoo:
        return ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\x6c\x61\163\x73" => "\146\x6f\x72\155\55\x72\157\167", "\144\141\164\x61\55\x72\145\160\x65\x61\x74\145\x72\x2d\151\x74\x65\155"], $nsmgceoqaqogqmuw);
        goto guqakeyeceygukgo;
        eukogiuaicuoagkw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eqooyueyyiqqgygc;
        gwgisgmcmgcasskc:
        qqcieyikoqueosyo:
        goto mmesoimsyqeiowoo;
        eqooyueyyiqqgygc:
        if (!$ikgwqyuyckaewsow) {
            goto qqcieyikoqueosyo;
        }
        goto scayemgqcsisqqag;
        scayemgqcsisqqag:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            eomyiygumegiacam:
        }
        goto aasaocqscwkksuom;
        qwicaaakcymkqgcu:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\x6c\141\163\163" => "\143\157\154\55\155\x64\55\x31"], $this->kwkmeiyiomikmcoc());
        goto eukogiuaicuoagkw;
        guqakeyeceygukgo:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto kioecaokqiyeyimw;
        eikwaewqcysuywmw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\x6c\141\x73\163" => "\x6d\x6c\x2d\64", self::TYPE => "\143\154\x65\141\x72", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\103\x6c\x65\x61\x72", PR__CMN__FOUNDATION)]);
        goto wayumgcgmkiqwouu;
        wayumgcgmkiqwouu:
        return $nsmgceoqaqogqmuw;
        goto lowoswoqauswsswm;
        kioecaokqiyeyimw:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto seqicmqaumeoweik;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\x72\145\x61\164\145", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\x41\x64\144", PR__CMN__FOUNDATION)]);
        goto eikwaewqcysuywmw;
        lowoswoqauswsswm:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\151\172\x65" => "\170\x73", "\x63\154\141\x73\x73" => '', self::TYPE => "\x64\145\x6c\x65\164\145", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\104\145\154\x65\x74\x65", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\142\x75\x74\x74\157\x6e", ["\143\x6c\x61\163\x73" => "\142\164\156\x20\x62\x74\156\x2d\x73\155\40\x62\x74\x6e\55" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\x20" . ManipulateArray::get($ywmkwiwkosakssii, "\x63\x6c\x61\x73\163"), self::TYPE => "\142\x75\x74\164\x6f\156", "\x64\141\x74\141\55\x74\x69\164\154\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\141\162\151\x61\55\x6c\141\x62\x65\x6c" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\141\x74\x61\x2d\x72\145\x70\145\x61\x74\x65\162\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\154\x61\163\163" => "\x69\x63\x6f\156\x2d\x77\150\151\164\x65\x20\146\x75\154\x6c\55\x6f\x70\x61\143\151\x74\x79\40\x69\143\157\x6e\x2d" . ManipulateArray::get($ywmkwiwkosakssii, "\163\151\x7a\145")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\151\156\x69\x74\55\145\155\x70\x74\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\x66\x69\162\163\164\x2d\x75\x6e\144\x65\154\145\x74\x61\142\154\145", true);
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
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\x63\154\x61\x73\x73" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\x63\x6f\154\x6c\x65\x63\x74\151\x6f\156\55\x66\151\145\154\144");
        goto gcwsyykomkieycmo;
        gcwsyykomkieycmo:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto wmmicyyikqyykeqm;
        kemseeaykemmgosi:
        if ($imgcoakmmgqsckkm) {
            goto qasqismygkemyaka;
        }
        goto rsiscqyuuaqqukaq;
        sgsuggymsisiisya:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto kemseeaykemmgosi;
        cyakakoyscyyseim:
        qasqismygkemyaka:
        goto kegswsuciueamysc;
        yaigsowoksoegqig:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto sgsuggymsisiisya;
        wmmicyyikqyykeqm:
        return $this;
        goto cmsosmamsmyuogsi;
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
        aqeiymmmiygmoyws:
        uqecisqimkeikumi:
        goto gasiswcuyygasqye;
        uakcauwwqmwgsyue:
        if (!$ikgwqyuyckaewsow) {
            goto ksiiqwkugmasuwum;
        }
        goto ueageciuwyowgsyy;
        mkqosogckkycsqow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto uakcauwwqmwgsyue;
        ueageciuwyowgsyy:
        $ycmguuqqaiisymgg = [];
        goto yaisawwqsacugoem;
        akcowwacsiuucuca:
        ksiiqwkugmasuwum:
        goto uemcgsaisgakauyw;
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
        gasiswcuyygasqye:
        $this->igmaewykumgwoaoy("\x64\141\164\141\x2d\x64\x65\146\x61\x75\x6c\x74\x2d\x76\141\154\x75\145\163", $ycmguuqqaiisymgg);
        goto akcowwacsiuucuca;
        uemcgsaisgakauyw:
    }
}
