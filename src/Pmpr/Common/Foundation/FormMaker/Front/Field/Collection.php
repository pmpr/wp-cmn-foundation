<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct("\x64\151\x76", "\143\x6f\x6c\154\145\x63\x74\x69\157\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto iismyqyayagiyios;
        iismyqyayagiyios:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\x72\145\160\x65\x61\164\x65\x72\x2d\154\x69\x73\164", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\151\144" => "\143\157\154\x6c\145\143\x74\x69\x6f\x6e\x5f{$aokagokqyuysuksm}", "\x63\154\141\163\163" => "\146\157\x72\x6d\x2d\x63\x6f\x6c\x6c\145\143\164\151\x6f\x6e"]);
        goto cmussggwecawauwc;
        cmussggwecawauwc:
        DecoratorHook::qcsmikeggeemccuu("\167\160\137\145\x6e\161\x75\145\165\x65\137\x73\x63\162\151\160\x74\x73", [$this, "\x65\156\161\165\x65\165\145"]);
        goto cssukoaykymkugys;
        cssukoaykymkugys:
    }
    public static function enqueue()
    {
        goto yooyasyggysysqco;
        uqymcyyiewiiwqqu:
        $ymqmyyeuycgmigyo = "\x63\x6f\154\154\145\143\164\151\157\156";
        goto uqsigcyiocicmiqm;
        uqsigcyiocicmiqm:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\163"))->ayuciigykaswwqeo("\152\161\165\x65\x72\171")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\x6c\x6f\142\x61\154")));
        goto gmwksskckoeggoau;
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
        scayemgqcsisqqag:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            eomyiygumegiacam:
        }
        goto aasaocqscwkksuom;
        gwgisgmcmgcasskc:
        qqcieyikoqueosyo:
        goto mmesoimsyqeiowoo;
        qwicaaakcymkqgcu:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\141\163\x73" => "\143\x6f\154\55\155\x64\x2d\x31"], $this->kwkmeiyiomikmcoc());
        goto eukogiuaicuoagkw;
        mmesoimsyqeiowoo:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\x6c\x61\x73\163" => "\x66\157\x72\x6d\55\x72\157\x77", "\144\x61\x74\x61\55\x72\145\x70\x65\x61\164\145\x72\x2d\x69\164\145\155"], $nsmgceoqaqogqmuw);
        goto guqakeyeceygukgo;
        eukogiuaicuoagkw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eqooyueyyiqqgygc;
        aasaocqscwkksuom:
        gugqwiqqeesskwqw:
        goto gwgisgmcmgcasskc;
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
        wayumgcgmkiqwouu:
        return $nsmgceoqaqogqmuw;
        goto lowoswoqauswsswm;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\162\x65\141\x74\145", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\101\144\x64", PR__CMN__FOUNDATION)]);
        goto eikwaewqcysuywmw;
        kioecaokqiyeyimw:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto seqicmqaumeoweik;
        eikwaewqcysuywmw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\154\x61\163\163" => "\155\x6c\55\x34", self::TYPE => "\x63\x6c\x65\x61\x72", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\103\154\145\x61\162", PR__CMN__FOUNDATION)]);
        goto wayumgcgmkiqwouu;
        lowoswoqauswsswm:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\151\x7a\145" => "\x78\x73", "\143\154\141\x73\x73" => '', self::TYPE => "\x64\145\x6c\145\164\x65", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\104\x65\154\x65\164\145", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\142\165\164\x74\157\x6e", ["\x63\154\141\x73\x73" => "\x62\x74\x6e\40\142\164\156\x2d\163\x6d\40\142\164\156\55" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\x20" . ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\163\163"), self::TYPE => "\142\165\x74\164\x6f\x6e", "\144\141\164\x61\x2d\x74\x69\164\x6c\145" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x61\162\151\x61\x2d\x6c\x61\x62\145\154" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\141\x74\141\55\x72\x65\x70\145\141\x74\x65\162\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\154\x61\163\163" => "\x69\x63\x6f\156\x2d\x77\150\x69\164\145\40\146\165\x6c\154\x2d\x6f\160\141\x63\x69\x74\x79\x20\x69\143\x6f\156\55" . ManipulateArray::get($ywmkwiwkosakssii, "\163\151\x7a\145")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\151\x6e\151\164\55\x65\x6d\160\164\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\144\141\164\x61\55\146\151\162\163\164\55\x75\156\x64\145\x6c\145\x74\141\x62\154\145", true);
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
        cyakakoyscyyseim:
        qasqismygkemyaka:
        goto kegswsuciueamysc;
        kegswsuciueamysc:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\143\x6c\141\163\163" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\x63\157\x6c\x6c\145\143\x74\151\x6f\x6e\55\x66\151\145\154\x64");
        goto gcwsyykomkieycmo;
        sgsuggymsisiisya:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto kemseeaykemmgosi;
        rsiscqyuuaqqukaq:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto cyakakoyscyyseim;
        kemseeaykemmgosi:
        if ($imgcoakmmgqsckkm) {
            goto qasqismygkemyaka;
        }
        goto rsiscqyuuaqqukaq;
        yaigsowoksoegqig:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto sgsuggymsisiisya;
        wmmicyyikqyykeqm:
        return $this;
        goto cmsosmamsmyuogsi;
        gcwsyykomkieycmo:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto wmmicyyikqyykeqm;
        cmsosmamsmyuogsi:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto ayekommagiogccge;
        ayekommagiogccge:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            ecoyeceqcymocmge:
        }
        goto sgwigiywwyuoakok;
        oqweykgimegoiqik:
        return $this;
        goto esaiikawuuqsiwuq;
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
        gasiswcuyygasqye:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\144\x65\146\141\165\x6c\164\55\x76\141\154\165\145\163", $ycmguuqqaiisymgg);
        goto akcowwacsiuucuca;
        mkqosogckkycsqow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto uakcauwwqmwgsyue;
        aqeiymmmiygmoyws:
        uqecisqimkeikumi:
        goto gasiswcuyygasqye;
        uakcauwwqmwgsyue:
        if (!$ikgwqyuyckaewsow) {
            goto ksiiqwkugmasuwum;
        }
        goto ueageciuwyowgsyy;
        yaisawwqsacugoem:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto qoiwsygocigycosk;
            qoiwsygocigycosk:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto kysgskkmgemwecqu;
            }
            goto wkikiuscuumkuoew;
            eukiiwcwsiiugcsa:
            kysgskkmgemwecqu:
            goto syycweoceqmkaqcu;
            syycweoceqmkaqcu:
            myqoamuyekasyauk:
            goto cwqasqacoeoymgwm;
            wkikiuscuumkuoew:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto eukiiwcwsiiugcsa;
            cwqasqacoeoymgwm:
        }
        goto aqeiymmmiygmoyws;
        akcowwacsiuucuca:
        ksiiqwkugmasuwum:
        goto uemcgsaisgakauyw;
        uemcgsaisgakauyw:
    }
}
