<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Notice extends Container
{
    const NOTICE_FIELD = "\156\x6f\x74\151\143\145\137\x6d\x65\163\163\141\147\x65\x73\x5f\x6c\x69\163\164";
    const NOTICE_INFO = "\151\x6e\146\157";
    const NOTICE_ERROR = "\x65\162\x72\x6f\162";
    const NOTICE_WARNING = "\167\x61\x72\x6e\x69\x6e\x67";
    const NOTICE_SUCCESS = "\163\165\x63\143\x65\x73\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\145\x6e\144\x65\x72\137\x6e\x6f\164\x69\143\145\x73", [$this, "\162\145\156\x64\145\162"])->qcsmikeggeemccuu("\x61\144\155\x69\156\137\156\x6f\x74\151\143\x65\163", [$this, "\167\141\151\155\167\145\141\x73\165\x69\145\x6d\x6b\x6d\x65\145"]);
        parent::wigskegsqequoeks();
    }
    
    public static function info($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_INFO, $aokagokqyuysuksm);
    }
    
    public static function iswcokucwmiosiaq($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_ERROR, $aokagokqyuysuksm);
    }
    
    public static function eumukgqciqgksuiq($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_WARNING, $aokagokqyuysuksm);
    }
    
    public static function kigowwqauiumummw($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_SUCCESS, $aokagokqyuysuksm);
    }
    
    public function get($aokagokqyuysuksm)
    {
        return ManipulateArray::get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, null);
    }
    
    public function kasiqqyyaswsgics()
    {
        goto mqqsyewyymsekyai;
        gkkagswkwmummiiy:
        cimeeqaiweeqawam:
        goto uwaecasqomqsismq;
        mqqsyewyymsekyai:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ccwikwaicwwsewyc;
        }
        goto emmuasmesyuaymkc;
        eakgoqeusssawkiy:
        oqgegyekomogicem:
        goto ksaquyioqskqgemw;
        wyusiimusqwqkkay:
        if (!$megmggkiokqkcwou) {
            goto cimeeqaiweeqawam;
        }
        goto osikekkwkwccuosu;
        ksaquyioqskqgemw:
        return $megmggkiokqkcwou;
        goto owmmyggcqikgwmqi;
        qwoiqiaiueeksuea:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eakgoqeusssawkiy;
        uwaecasqomqsismq:
        goto oqgegyekomogicem;
        goto suweqsmuqmoqiqka;
        emmuasmesyuaymkc:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto wyusiimusqwqkkay;
        suweqsmuqmoqiqka:
        ccwikwaicwwsewyc:
        goto qwoiqiaiueeksuea;
        osikekkwkwccuosu:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto gkkagswkwmummiiy;
        owmmyggcqikgwmqi:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto yumsukgwuyomocge;
        ygmuqycgaqsukwug:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto geucmycgqkuqcgss;
        igysiemcggkiekyo:
        uimwkmsekogcooks:
        goto qwggsgwkeckokmce;
        qowksiiacauekqiw:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ocaecwowkcsoocci;
        }
        goto ygmuqycgaqsukwug;
        geucmycgqkuqcgss:
        goto wscmeqgusioeqece;
        goto oeaccykmeaiamqkw;
        yumsukgwuyomocge:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto qsioegocesimcqee;
        qsioegocesimcqee:
        if (!$wumguikkgaigkoee) {
            goto uimwkmsekogcooks;
        }
        goto qsewamsaqkuuowas;
        qsewamsaqkuuowas:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto qowksiiacauekqiw;
        mqmcyogeociuooau:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto ouaomcekuycgkesk;
        oeaccykmeaiamqkw:
        ocaecwowkcsoocci:
        goto mqmcyogeociuooau;
        ouaomcekuycgkesk:
        wscmeqgusioeqece:
        goto igysiemcggkiekyo;
        qwggsgwkeckokmce:
    }
    
    public function waimweasuiemkmee()
    {
        goto ieqomucoayqoemog;
        kauowiucwweueecy:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto osumceweusuqiycu;
            okoaqqegqeeqqsgw:
            iikiemieyocgiswa:
            goto cmykqwcwsgcoouiu;
            osumceweusuqiycu:
            $ycyucwoysmwkgiui["\151\x64"] = $aokagokqyuysuksm;
            goto mykaamwaiguuckgu;
            mykaamwaiguuckgu:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto okoaqqegqeeqqsgw;
            cmykqwcwsgcoouiu:
        }
        goto eicgugqewsqoeqyq;
        cmmagyiwukeyqwsy:
        ooocyiciwokoqucy:
        goto sicyosycsmuqsysq;
        ieqomucoayqoemog:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto qwiwekqsmmeakmuw;
        eicgugqewsqoeqyq:
        ueqwwycwakwsqgma:
        goto mioukcqeukuoiowc;
        mioukcqeukuoiowc:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto cmmagyiwukeyqwsy;
        qwiwekqsmmeakmuw:
        if (!$goyemikogeuskgas) {
            goto ooocyiciwokoqucy;
        }
        goto kauowiucwweueecy;
        sicyosycsmuqsysq:
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        goto wwuccwuuawkiywgk;
        qccywycocsamgkqi:
        qksaqkeugsqscias:
        goto uaamwamsuakywoqc;
        eeiweeggimkmqoqg:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\x69\x64" => $aokagokqyuysuksm, "\143\x6c\x61\x73\x73" => "\x6d\x79\x2d\62"]);
        goto qccywycocsamgkqi;
        qowesgcsaiysuagc:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\154\145\x76\x65\x6c"];
        goto wmmsqcgygcuuaycy;
        cywkigiikmcqaskw:
        return $ycyucwoysmwkgiui;
        goto ssuagkigqokwaekc;
        ecqkyymaqewoquuu:
        gmowomwyecacouuw:
        goto cywkigiikmcqaskw;
        wwuccwuuawkiywgk:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\144\x69\163\155\151\x73\x73" => true, "\x6d\x65\163\x73\141\x67\145" => '', "\154\145\x76\145\x6c" => self::NOTICE_INFO, "\145\x63\x68\x6f" => true, "\x69\x64" => '']);
        goto gameegaekuiikoww;
        yccqswiseqwmqqyg:
        echo $ycyucwoysmwkgiui;
        goto ecqkyymaqewoquuu;
        uaamwamsuakywoqc:
        if (!$ywmkwiwkosakssii["\x65\143\x68\157"]) {
            goto gmowomwyecacouuw;
        }
        goto yccqswiseqwmqqyg;
        gameegaekuiikoww:
        $ycyucwoysmwkgiui = '';
        goto qowesgcsaiysuagc;
        cmieikgaiegwmycs:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\x73\163\x61\x67\145"];
        goto aieyemueueyscaym;
        wmmsqcgygcuuaycy:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\151\x64"] ?: $iqaosyayeiuaisqi;
        goto cmieikgaiegwmycs;
        aieyemueueyscaym:
        if (!$uamcoiueqaamsqma) {
            goto qksaqkeugsqscias;
        }
        goto eeiweeggimkmqoqg;
        ssuagkigqokwaekc:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto aeagssqaiwooeoei;
        qiuucioewqyqqwok:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto usuaqaeacooqoqeg;
        }
        goto cekiucuusaiieqyy;
        figsecwawwycsiia:
        iukwaymqsaukgucc:
        goto ioqcemkiiscgiseo;
        aaayqmggygqagqes:
        if (!$uamcoiueqaamsqma) {
            goto uumwyacekksycmcy;
        }
        goto coukaukykckssymw;
        uiagegwaiiacsqoo:
        uumwyacekksycmcy:
        goto qmygamkeyyeweaug;
        gcgmcwkcywoeqyua:
        return $ycyucwoysmwkgiui;
        goto gqmomswmsooweyco;
        cekiucuusaiieqyy:
        $this->ycasmmgsmaaumweg([]);
        goto wscecwieywoacuyc;
        aeagssqaiwooeoei:
        $ycyucwoysmwkgiui = '';
        goto cusmimwmwgscqeku;
        gogmaqgwwsoekumo:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            mskkcyugwccmgmue:
        }
        goto wucqauasuekkoayw;
        eygewmcawygoamqm:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto uiagegwaiiacsqoo;
        iqcsqkgycusqgswk:
        cwqecoyeuseoiyee:
        goto iueqqswmweckwaui;
        ioqcemkiiscgiseo:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto aaayqmggygqagqes;
        wekieycqkqmgagyq:
        if (!$wumguikkgaigkoee) {
            goto cwqecoyeuseoiyee;
        }
        goto gogmaqgwwsoekumo;
        qmygamkeyyeweaug:
        oukcgieuakaagsaw:
        goto gcgmcwkcywoeqyua;
        cusmimwmwgscqeku:
        if ($aokagokqyuysuksm) {
            goto iukwaymqsaukgucc;
        }
        goto egcqemgwyuoosmuq;
        coukaukykckssymw:
        $this->remove($aokagokqyuysuksm);
        goto eygewmcawygoamqm;
        wscecwieywoacuyc:
        goto icaaymowyygqqwsa;
        goto mooukkaawioceqgu;
        mooukkaawioceqgu:
        usuaqaeacooqoqeg:
        goto gaweywgyiqymqqae;
        iueqqswmweckwaui:
        goto oukcgieuakaagsaw;
        goto figsecwawwycsiia;
        ecssgmuciqiskkme:
        icaaymowyygqqwsa:
        goto iqcsqkgycusqgswk;
        wucqauasuekkoayw:
        wigkaokkwyecekic:
        goto qiuucioewqyqqwok;
        egcqemgwyuoosmuq:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto wekieycqkqmgagyq;
        gaweywgyiqymqqae:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto ecssgmuciqiskkme;
        gqmomswmsooweyco:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto kiagckcoykiwemaq;
        oucyomommkeoegkm:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\x64" => $aokagokqyuysuksm, "\154\x65\x76\x65\154" => ManipulateArray::get($uamcoiueqaamsqma, "\154\x65\x76\x65\x6c", self::NOTICE_INFO), "\x6d\x65\163\163\141\147\x65" => ManipulateArray::get($uamcoiueqaamsqma, "\x6d\145\x73\x73\141\147\145", self::NOTICE_INFO)]));
        goto quwomueueaekwyqo;
        ymgmkyymcokcqcge:
        return $uamcoiueqaamsqma;
        goto qcacqoowkyyyeies;
        kiagckcoykiwemaq:
        if (!$uamcoiueqaamsqma) {
            goto scqewiwsusqceycg;
        }
        goto oucyomommkeoegkm;
        quwomueueaekwyqo:
        scqewiwsusqceycg:
        goto ymgmkyymcokcqcge;
        qcacqoowkyyyeies:
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        goto aeksiqkwsmsqqkem;
        iawkamauikumcukc:
        soacwieaayswiusy:
        goto cmoyaiiqasygkgwo;
        skygcamewiewwsoe:
        ukucugmwieqomaii:
        goto giiysqgsikwwiqoe;
        cawauskkiaoeqigk:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto wuewsqueiuoiwmqw;
        cmoyaiiqasygkgwo:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto skygcamewiewwsoe;
        iuweayiqouuegcgq:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto mqauewesgmogaowc;
        wawekyqmeyuiuuwo:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto mqwciycqokgiaask;
        aeksiqkwsmsqqkem:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto swcoukyskageuyec;
        mqwciycqokgiaask:
        if (!$megmggkiokqkcwou) {
            goto mgwwogkgkaycgokq;
        }
        goto iuweayiqouuegcgq;
        wuewsqueiuoiwmqw:
        goto ukucugmwieqomaii;
        goto iawkamauikumcukc;
        ioyeuscyccuwmqqs:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto soacwieaayswiusy;
        }
        goto cawauskkiaoeqigk;
        mqauewesgmogaowc:
        mgwwogkgkaycgokq:
        goto ioyeuscyccuwmqqs;
        swcoukyskageuyec:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\x6c\x65\x76\145\x6c" => $iqaosyayeiuaisqi, "\x6d\145\x73\x73\141\x67\x65" => $uamcoiueqaamsqma]];
        goto wawekyqmeyuiuuwo;
        giiysqgsikwwiqoe:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
