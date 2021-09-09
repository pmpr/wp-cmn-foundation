<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto iwusokgqiqkumeem;
        oqiaecgmqmaeeoei:
        $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\x72\x65\160\145\141\x74\x65\x72\55\154\x69\x73\x74", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\144" => "\143\x6f\x6c\154\145\143\164\x69\x6f\156\x5f{$aokagokqyuysuksm}", "\143\154\x61\163\163" => "\x66\x6f\x72\x6d\55\x63\x6f\x6c\x6c\145\x63\x74\151\157\156"]);
        goto ccaqwykysccwusuu;
        iwusokgqiqkumeem:
        parent::__construct("\144\151\166", "\143\x6f\154\x6c\145\x63\164\151\x6f\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto oqiaecgmqmaeeoei;
        ccaqwykysccwusuu:
        DecoratorHook::qcsmikeggeemccuu("\167\160\x5f\x65\156\x71\165\x65\x75\x65\137\x73\143\x72\x69\160\x74\x73", [$this, "\x65\156\x71\165\145\165\145"]);
        goto aaweqykeggcaosyw;
        aaweqykeggcaosyw:
    }
    public static function enqueue()
    {
        goto iswwimckkkeokgcm;
        iuqqyoswkewaikma:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\x6a\163"))->ayuciigykaswwqeo("\x6a\161\165\x65\162\x79")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\154\157\x62\141\x6c")));
        goto waisuqycssimesui;
        iswwimckkkeokgcm:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto massqqageicawcwa;
        massqqageicawcwa:
        $ymqmyyeuycgmigyo = "\143\x6f\154\154\145\143\164\151\x6f\156";
        goto iuqqyoswkewaikma;
        waisuqycssimesui:
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
        goto iqaoqcwemuamiywa;
        iqaoqcwemuamiywa:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\x6c\x61\163\x73" => "\143\157\x6c\55\155\x64\x2d\x31"], $this->kwkmeiyiomikmcoc());
        goto gssiyeaqueiauaak;
        ecgeqsyqmqewqwao:
        if (!$ikgwqyuyckaewsow) {
            goto qegsskwcwiykcies;
        }
        goto auqymasgagkmkeqe;
        auqymasgagkmkeqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            egqwsykqosqsqmei:
        }
        goto xmiymoymswickcuu;
        xmiymoymswickcuu:
        ekauocuwoyemsqsq:
        goto aymmqkugquckkuom;
        gssiyeaqueiauaak:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ecgeqsyqmqewqwao;
        ecegkmqcqocseacg:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\x61\x73\163" => "\x66\157\162\155\x2d\162\157\x77", "\x64\x61\164\x61\x2d\162\145\160\145\x61\164\x65\162\55\x69\164\x65\x6d"], $nsmgceoqaqogqmuw);
        goto qckiyyomwgamwowy;
        aymmqkugquckkuom:
        qegsskwcwiykcies:
        goto ecegkmqcqocseacg;
        qckiyyomwgamwowy:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto qsegmmyuaaegggwc;
        gqyasuaqiccikqiu:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\154\141\163\x73" => "\x6d\154\55\64", self::TYPE => "\143\x6c\x65\x61\162", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\x43\154\145\141\162", PR__CMN__FOUNDATION)]);
        goto moqqkweuiqogoecm;
        moqqkweuiqogoecm:
        return $nsmgceoqaqogqmuw;
        goto amkmgqciseuyuswu;
        qsegmmyuaaegggwc:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto ssmwsoeooqmocwoc;
        ssmwsoeooqmocwoc:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\162\x65\x61\x74\145", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\101\x64\144", PR__CMN__FOUNDATION)]);
        goto gqyasuaqiccikqiu;
        amkmgqciseuyuswu:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x69\172\145" => "\170\x73", "\143\154\x61\163\x73" => '', self::TYPE => "\144\x65\x6c\x65\x74\x65", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\104\x65\154\145\x74\145", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\x62\165\164\164\157\x6e", ["\143\x6c\141\x73\x73" => "\142\x74\156\40\142\164\156\x2d\x73\x6d\40\x62\x74\x6e\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\x20" . ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\x73\163"), self::TYPE => "\142\165\x74\164\x6f\156", "\x64\141\164\x61\55\164\151\x74\154\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\141\162\151\x61\x2d\154\x61\142\x65\154" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\x64\x61\x74\x61\x2d\162\x65\x70\145\141\x74\145\x72\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\143\x6c\x61\163\163" => "\x69\x63\157\156\x2d\x77\150\151\x74\145\x20\x66\x75\154\x6c\55\157\x70\141\143\151\x74\x79\40\151\x63\x6f\x6e\55" . ManipulateArray::get($ywmkwiwkosakssii, "\163\x69\x7a\x65")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\151\156\x69\164\55\145\155\160\x74\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\x61\55\x66\x69\162\x73\164\55\165\x6e\144\x65\154\x65\164\141\x62\x6c\x65", true);
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
        goto eesyagkqmooggswo;
        qksawqasmoackeyi:
        eoeiuweemoocwwco:
        goto smeiqaqikagcaygu;
        euikkkmgeyguuegw:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto guyamweceeeowyoe;
        smeiqaqikagcaygu:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\x63\x6c\141\x73\x73" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\x63\157\154\154\145\x63\164\x69\x6f\x6e\55\146\151\145\154\144");
        goto euikkkmgeyguuegw;
        msqyagckiemcggqi:
        if ($imgcoakmmgqsckkm) {
            goto eoeiuweemoocwwco;
        }
        goto oewgqkuscaaqgocc;
        guyamweceeeowyoe:
        return $this;
        goto umswccwwkswqumoe;
        omgkugwoikiiyouo:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto msqyagckiemcggqi;
        oewgqkuscaaqgocc:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto qksawqasmoackeyi;
        eesyagkqmooggswo:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto omgkugwoikiiyouo;
        umswccwwkswqumoe:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto gesskeeseyysqsoy;
        iuoowggocqmwagoy:
        return $this;
        goto ewoyiciioagecmog;
        cmmwiusessuosyya:
        eyaqaosgaywyuqie:
        goto iuoowggocqmwagoy;
        gesskeeseyysqsoy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            wuwewiekmyaykkui:
        }
        goto cmmwiusessuosyya;
        ewoyiciioagecmog:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto kqwaiauysqsamsom;
        yuioeukgsusomcui:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\144\x65\146\x61\x75\154\164\55\166\141\x6c\x75\x65\163", $ycmguuqqaiisymgg);
        goto kaykciokgqwoyqko;
        suusiaeemawqgome:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wmakaeqmmmkiwugc;
            wmakaeqmmmkiwugc:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto omgwaqgqgksqeigq;
            }
            goto yuwywkmokyioumcy;
            eeacoowouekmymqa:
            qkwkqasqqegigowa:
            goto gugmqygmagggieqa;
            yuwywkmokyioumcy:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto mkywokqkumqaoqii;
            mkywokqkumqaoqii:
            omgwaqgqgksqeigq:
            goto eeacoowouekmymqa;
            gugmqygmagggieqa:
        }
        goto gigkmkmacayscaww;
        gigkmkmacayscaww:
        ommymacyigwwcasy:
        goto yuioeukgsusomcui;
        kqwaiauysqsamsom:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto uuqqqsksywkiyuee;
        uuqqqsksywkiyuee:
        if (!$ikgwqyuyckaewsow) {
            goto camakgemqqwiooom;
        }
        goto eoiwmoguoeyggsoy;
        kaykciokgqwoyqko:
        camakgemqqwiooom:
        goto qioyimmcygqceoyc;
        eoiwmoguoeyggsoy:
        $ycmguuqqaiisymgg = [];
        goto suusiaeemawqgome;
        qioyimmcygqceoyc:
    }
}
