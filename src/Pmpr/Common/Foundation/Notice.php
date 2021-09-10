<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const NOTICE_FIELD = "\x6e\157\164\151\143\145\137\155\x65\163\163\x61\147\145\x73\137\x6c\x69\x73\164";
    const NOTICE_INFO = "\151\x6e\x66\x6f";
    const NOTICE_ERROR = "\x65\x72\162\157\x72";
    const NOTICE_WARNING = "\167\x61\162\156\x69\156\147";
    const NOTICE_SUCCESS = "\163\165\x63\x63\145\163\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\145\156\x64\145\x72\137\x6e\x6f\x74\x69\143\145\x73", [$this, "\162\145\156\144\145\x72"])->qcsmikeggeemccuu("\x61\144\155\x69\156\137\x6e\x6f\x74\151\143\x65\163", [$this, "\x77\x61\x69\155\x77\145\141\x73\165\151\x65\155\153\x6d\x65\145"]);
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
        goto gaweywgyiqymqqae;
        figsecwawwycsiia:
        cekiucuusaiieqyy:
        goto ioqcemkiiscgiseo;
        ioqcemkiiscgiseo:
        goto mooukkaawioceqgu;
        goto aaayqmggygqagqes;
        iqcsqkgycusqgswk:
        if (!$megmggkiokqkcwou) {
            goto cekiucuusaiieqyy;
        }
        goto iueqqswmweckwaui;
        ecssgmuciqiskkme:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto iqcsqkgycusqgswk;
        eygewmcawygoamqm:
        mooukkaawioceqgu:
        goto uiagegwaiiacsqoo;
        iueqqswmweckwaui:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto figsecwawwycsiia;
        gaweywgyiqymqqae:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wscecwieywoacuyc;
        }
        goto ecssgmuciqiskkme;
        aaayqmggygqagqes:
        wscecwieywoacuyc:
        goto coukaukykckssymw;
        coukaukykckssymw:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eygewmcawygoamqm;
        uiagegwaiiacsqoo:
        return $megmggkiokqkcwou;
        goto qmygamkeyyeweaug;
        qmygamkeyyeweaug:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto kiagckcoykiwemaq;
        soacwieaayswiusy:
        gcgmcwkcywoeqyua:
        goto ukucugmwieqomaii;
        kiagckcoykiwemaq:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto oucyomommkeoegkm;
        swcoukyskageuyec:
        scqewiwsusqceycg:
        goto wawekyqmeyuiuuwo;
        ymgmkyymcokcqcge:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto gcgmcwkcywoeqyua;
        }
        goto qcacqoowkyyyeies;
        ukucugmwieqomaii:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto aeksiqkwsmsqqkem;
        oucyomommkeoegkm:
        if (!$wumguikkgaigkoee) {
            goto scqewiwsusqceycg;
        }
        goto quwomueueaekwyqo;
        aeksiqkwsmsqqkem:
        gqmomswmsooweyco:
        goto swcoukyskageuyec;
        mgwwogkgkaycgokq:
        goto gqmomswmsooweyco;
        goto soacwieaayswiusy;
        quwomueueaekwyqo:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto ymgmkyymcokcqcge;
        qcacqoowkyyyeies:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        wawekyqmeyuiuuwo:
    }
    
    public function waimweasuiemkmee()
    {
        goto cmoyaiiqasygkgwo;
        okmyyqowusoyusau:
        mqwciycqokgiaask:
        goto qwoyicsekiisaaqm;
        qwoyicsekiisaaqm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto aqiagiqyqiaikgae;
        cmoyaiiqasygkgwo:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto skygcamewiewwsoe;
        aqiagiqyqiaikgae:
        iawkamauikumcukc:
        goto sqwqoquwewuwugsa;
        skygcamewiewwsoe:
        if (!$goyemikogeuskgas) {
            goto iawkamauikumcukc;
        }
        goto giiysqgsikwwiqoe;
        giiysqgsikwwiqoe:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto mqauewesgmogaowc;
            ioyeuscyccuwmqqs:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto cawauskkiaoeqigk;
            mqauewesgmogaowc:
            $ycyucwoysmwkgiui["\x69\x64"] = $aokagokqyuysuksm;
            goto ioyeuscyccuwmqqs;
            cawauskkiaoeqigk:
            iuweayiqouuegcgq:
            goto wuewsqueiuoiwmqw;
            wuewsqueiuoiwmqw:
        }
        goto okmyyqowusoyusau;
        sqwqoquwewuwugsa:
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        goto wwoksycisiauaemc;
        csucwqwqcoiyeesk:
        return $ycyucwoysmwkgiui;
        goto kmmcmckqqsioiqes;
        iekieuqmokeakays:
        myoyukwoaecqcsuw:
        goto csucwqwqcoiyeesk;
        awekeisckwgiksmw:
        $ycyucwoysmwkgiui = '';
        goto mamcceoisymceocq;
        gqoiykcskgcqsikm:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\x69\x64" => $aokagokqyuysuksm, "\143\154\141\163\163" => "\155\171\55\62"]);
        goto eiecqmeuaaaiwgiq;
        icmgkesuuwsmygme:
        echo $ycyucwoysmwkgiui;
        goto iekieuqmokeakays;
        icisyikkoqqasowa:
        if (!$ywmkwiwkosakssii["\x65\143\150\157"]) {
            goto myoyukwoaecqcsuw;
        }
        goto icmgkesuuwsmygme;
        eiecqmeuaaaiwgiq:
        kywqaioimyosmiui:
        goto icisyikkoqqasowa;
        mamcceoisymceocq:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\154\145\166\145\x6c"];
        goto syeiaogwuowqeggi;
        augcwakayywksmce:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\163\163\141\x67\x65"];
        goto egmkkmiqwqgsyeyy;
        syeiaogwuowqeggi:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\x69\x64"] ?: $iqaosyayeiuaisqi;
        goto augcwakayywksmce;
        wwoksycisiauaemc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\144\151\x73\155\151\x73\x73" => true, "\155\x65\x73\163\141\147\145" => '', "\154\x65\x76\x65\x6c" => self::NOTICE_INFO, "\145\x63\150\x6f" => true, "\x69\x64" => '']);
        goto awekeisckwgiksmw;
        egmkkmiqwqgsyeyy:
        if (!$uamcoiueqaamsqma) {
            goto kywqaioimyosmiui;
        }
        goto gqoiykcskgcqsikm;
        kmmcmckqqsioiqes:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto qeoeagouucmwsyqw;
        uymugyyimciiyuos:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            egksuoqocciukoaq:
        }
        goto jkoscsaeoquakoss;
        oisqamuwmiswywko:
        if ($aokagokqyuysuksm) {
            goto eiaqgiaygokkeksu;
        }
        goto oyiyakeisgumawcu;
        qeoeagouucmwsyqw:
        $ycyucwoysmwkgiui = '';
        goto oisqamuwmiswywko;
        oyiyakeisgumawcu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto ewcwmioqiiogasky;
        jkoscsaeoquakoss:
        waowywqegyiieeke:
        goto ayysooqqqwcueuey;
        ewcwmioqiiogasky:
        if (!$wumguikkgaigkoee) {
            goto qmcmiosogysemwsc;
        }
        goto uymugyyimciiyuos;
        ayysooqqqwcueuey:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikemoyeuukmcueoi;
        }
        goto ycuaeigqqkcqywcm;
        mcokememaqyocmww:
        $this->remove($aokagokqyuysuksm);
        goto aaemagwasykayacy;
        osocgummgayysiag:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto kkgyymqwugkcgoew;
        usogieysoyaiwmqu:
        goto awekmuqsuwwkemoa;
        goto ygyqcgyoyckqqqsk;
        ycuaeigqqkcqywcm:
        $this->ycasmmgsmaaumweg([]);
        goto usogieysoyaiwmqu;
        xiuwuuokasgwkicc:
        qmcmiosogysemwsc:
        goto wiqoigsossioeckw;
        umymemssaqquqisa:
        return $ycyucwoysmwkgiui;
        goto asywiwgmyyoikyke;
        aaemagwasykayacy:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto iusacogsuyamauuw;
        iusacogsuyamauuw:
        miaqksuykcksyyuo:
        goto skamksaaqymicwgm;
        imieoekoumoucuag:
        eiaqgiaygokkeksu:
        goto osocgummgayysiag;
        uggkyoamgoaywawg:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto imswukmmekkkaeqo;
        skamksaaqymicwgm:
        egkqsyyusoukuieu:
        goto umymemssaqquqisa;
        ygyqcgyoyckqqqsk:
        ikemoyeuukmcueoi:
        goto uggkyoamgoaywawg;
        imswukmmekkkaeqo:
        awekmuqsuwwkemoa:
        goto xiuwuuokasgwkicc;
        wiqoigsossioeckw:
        goto egkqsyyusoukuieu;
        goto imieoekoumoucuag;
        kkgyymqwugkcgoew:
        if (!$uamcoiueqaamsqma) {
            goto miaqksuykcksyyuo;
        }
        goto mcokememaqyocmww;
        asywiwgmyyoikyke:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto egkqesmwiiaqiiyc;
        ymasgcocsigmuwoc:
        sucgueksmmwgekau:
        goto ssuiuyiqqcwciysg;
        ssuiuyiqqcwciysg:
        return $uamcoiueqaamsqma;
        goto ymamscycaiaguigo;
        eakyagcgwegumqqq:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x69\144" => $aokagokqyuysuksm, "\154\x65\x76\x65\154" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\x65\166\145\154", self::NOTICE_INFO), "\155\145\x73\163\x61\147\x65" => ManipulateArray::get($uamcoiueqaamsqma, "\155\x65\x73\x73\141\x67\x65", self::NOTICE_INFO)]));
        goto ymasgcocsigmuwoc;
        egkqesmwiiaqiiyc:
        if (!$uamcoiueqaamsqma) {
            goto sucgueksmmwgekau;
        }
        goto eakyagcgwegumqqq;
        ymamscycaiaguigo:
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        goto aouekkmogmyoeguw;
        ycemmsosewuoyiqs:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto aqimagkgyewmgkyw;
        kiswkeissywuosao:
        kqiiyyqmssquuoic:
        goto wqkekssiaiaqkqck;
        muiggeckwwywcusy:
        oeuqcqkguageoagc:
        goto wcosqycukygikgsa;
        gscssgigiaqmgiuw:
        goto gwgqcomgikwoquyy;
        goto muiggeckwwywcusy;
        kysgwgoeaoiyaqea:
        gwgqcomgikwoquyy:
        goto scssmwmagsaouymy;
        wcosqycukygikgsa:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto kysgwgoeaoiyaqea;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\154\x65\166\145\154" => $iqaosyayeiuaisqi, "\x6d\x65\163\163\141\x67\x65" => $uamcoiueqaamsqma]];
        goto ycemmsosewuoyiqs;
        aqimagkgyewmgkyw:
        if (!$megmggkiokqkcwou) {
            goto kqiiyyqmssquuoic;
        }
        goto cywkuyeqqawqwgwo;
        aouekkmogmyoeguw:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto imkoimywaemoquiu;
        cywkuyeqqawqwgwo:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto kiswkeissywuosao;
        wqkekssiaiaqkqck:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeuqcqkguageoagc;
        }
        goto wgagqmumyekewuge;
        wgagqmumyekewuge:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        scssmwmagsaouymy:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
