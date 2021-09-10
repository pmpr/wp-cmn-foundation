<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct("\144\x69\166", "\x63\157\x6c\x6c\x65\x63\x74\151\157\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto yacyygsucqcwygis;
        yacyygsucqcwygis:
        $this->igmaewykumgwoaoy("\x64\x61\x74\x61\x2d\x72\x65\160\145\x61\x74\145\162\x2d\x6c\151\x73\x74", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\144" => "\x63\157\x6c\x6c\145\x63\x74\x69\157\x6e\137{$aokagokqyuysuksm}", "\x63\x6c\x61\163\x73" => "\146\157\x72\x6d\55\x63\x6f\x6c\154\x65\x63\x74\151\157\156"]);
        goto iismyqyayagiyios;
        iismyqyayagiyios:
        DecoratorHook::qcsmikeggeemccuu("\x77\160\x5f\x65\x6e\x71\x75\145\165\x65\137\163\143\x72\x69\160\164\x73", [$this, "\145\x6e\161\x75\x65\165\x65"]);
        goto cmussggwecawauwc;
        cmussggwecawauwc:
    }
    public static function enqueue()
    {
        goto cssukoaykymkugys;
        yooyasyggysysqco:
        $ymqmyyeuycgmigyo = "\x63\x6f\x6c\154\x65\x63\x74\x69\x6f\x6e";
        goto uqymcyyiewiiwqqu;
        cssukoaykymkugys:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto yooyasyggysysqco;
        uqymcyyiewiiwqqu:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\152\x73"))->ayuciigykaswwqeo("\152\x71\165\x65\162\x79")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\154\157\x62\x61\154")));
        goto uqsigcyiocicmiqm;
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
        aasaocqscwkksuom:
        eomyiygumegiacam:
        goto gwgisgmcmgcasskc;
        qwicaaakcymkqgcu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eukogiuaicuoagkw;
        scayemgqcsisqqag:
        gmwksskckoeggoau:
        goto aasaocqscwkksuom;
        qqcieyikoqueosyo:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\154\141\163\x73" => "\x63\x6f\154\55\x6d\144\x2d\61"], $this->kwkmeiyiomikmcoc());
        goto qwicaaakcymkqgcu;
        gwgisgmcmgcasskc:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\154\141\163\x73" => "\146\x6f\162\x6d\x2d\x72\x6f\x77", "\x64\x61\164\x61\55\162\x65\x70\145\141\x74\x65\x72\55\151\164\145\155"], $nsmgceoqaqogqmuw);
        goto mmesoimsyqeiowoo;
        eqooyueyyiqqgygc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            gugqwiqqeesskwqw:
        }
        goto scayemgqcsisqqag;
        eukogiuaicuoagkw:
        if (!$ikgwqyuyckaewsow) {
            goto eomyiygumegiacam;
        }
        goto eqooyueyyiqqgygc;
        mmesoimsyqeiowoo:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto guqakeyeceygukgo;
        kioecaokqiyeyimw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\143\162\145\x61\164\x65", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\x41\144\144", PR__CMN__FOUNDATION)]);
        goto seqicmqaumeoweik;
        eikwaewqcysuywmw:
        return $nsmgceoqaqogqmuw;
        goto wayumgcgmkiqwouu;
        guqakeyeceygukgo:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto kioecaokqiyeyimw;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\x6c\141\x73\x73" => "\155\154\x2d\64", self::TYPE => "\143\154\145\141\162", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\x43\154\x65\141\162", PR__CMN__FOUNDATION)]);
        goto eikwaewqcysuywmw;
        wayumgcgmkiqwouu:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x69\172\145" => "\170\x73", "\x63\x6c\141\x73\x73" => '', self::TYPE => "\x64\x65\x6c\145\164\145", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\x44\x65\x6c\x65\x74\145", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\142\x75\164\164\x6f\156", ["\143\x6c\141\x73\163" => "\x62\164\156\40\142\164\156\55\163\155\x20\142\x74\156\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\x20" . ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\x73\x73"), self::TYPE => "\x62\x75\164\164\157\156", "\144\x61\164\141\55\164\x69\164\154\145" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\141\x72\151\141\x2d\x6c\141\x62\x65\154" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\x61\164\141\x2d\x72\x65\160\x65\141\x74\145\x72\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\x6c\x61\163\163" => "\x69\143\157\156\x2d\x77\150\x69\x74\145\x20\x66\165\x6c\154\55\x6f\160\141\x63\x69\164\x79\x20\x69\x63\157\156\55" . ManipulateArray::get($ywmkwiwkosakssii, "\163\151\172\145")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\151\x6e\x69\x74\55\x65\155\160\164\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\x74\141\x2d\146\151\162\163\164\x2d\165\156\144\x65\154\145\x74\141\x62\x6c\x65", true);
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
        kegswsuciueamysc:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto gcwsyykomkieycmo;
        yaigsowoksoegqig:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto sgsuggymsisiisya;
        kemseeaykemmgosi:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto rsiscqyuuaqqukaq;
        gcwsyykomkieycmo:
        return $this;
        goto wmmicyyikqyykeqm;
        qasqismygkemyaka:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto yaigsowoksoegqig;
        sgsuggymsisiisya:
        if ($imgcoakmmgqsckkm) {
            goto lowoswoqauswsswm;
        }
        goto kemseeaykemmgosi;
        rsiscqyuuaqqukaq:
        lowoswoqauswsswm:
        goto cyakakoyscyyseim;
        cyakakoyscyyseim:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\143\154\x61\x73\163" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\143\157\154\154\x65\x63\164\x69\x6f\x6e\x2d\x66\x69\x65\x6c\144");
        goto kegswsuciueamysc;
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
        mkqosogckkycsqow:
        if (!$ikgwqyuyckaewsow) {
            goto cwqasqacoeoymgwm;
        }
        goto uakcauwwqmwgsyue;
        gasiswcuyygasqye:
        cwqasqacoeoymgwm:
        goto akcowwacsiuucuca;
        yaisawwqsacugoem:
        esaiikawuuqsiwuq:
        goto aqeiymmmiygmoyws;
        ksiiqwkugmasuwum:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto mkqosogckkycsqow;
        aqeiymmmiygmoyws:
        $this->igmaewykumgwoaoy("\144\141\164\141\55\x64\145\x66\x61\x75\x6c\164\55\x76\x61\x6c\165\145\x73", $ycmguuqqaiisymgg);
        goto gasiswcuyygasqye;
        uakcauwwqmwgsyue:
        $ycmguuqqaiisymgg = [];
        goto ueageciuwyowgsyy;
        ueageciuwyowgsyy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto kysgskkmgemwecqu;
            wkikiuscuumkuoew:
            myqoamuyekasyauk:
            goto eukiiwcwsiiugcsa;
            eukiiwcwsiiugcsa:
            uqecisqimkeikumi:
            goto syycweoceqmkaqcu;
            qoiwsygocigycosk:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto wkikiuscuumkuoew;
            kysgskkmgemwecqu:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto myqoamuyekasyauk;
            }
            goto qoiwsygocigycosk;
            syycweoceqmkaqcu:
        }
        goto yaisawwqsacugoem;
        akcowwacsiuucuca:
    }
}
