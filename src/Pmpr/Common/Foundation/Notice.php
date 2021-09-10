<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const NOTICE_FIELD = "\x6e\157\x74\x69\143\145\137\155\145\163\163\x61\147\x65\x73\x5f\x6c\151\163\x74";
    const NOTICE_INFO = "\151\x6e\x66\157";
    const NOTICE_ERROR = "\145\x72\x72\157\x72";
    const NOTICE_WARNING = "\x77\x61\x72\156\151\x6e\147";
    const NOTICE_SUCCESS = "\163\x75\143\143\x65\x73\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\x65\x6e\144\145\x72\x5f\x6e\x6f\164\x69\x63\145\x73", [$this, "\x72\x65\x6e\144\145\x72"])->qcsmikeggeemccuu("\141\x64\155\151\156\137\156\x6f\x74\x69\143\x65\163", [$this, "\167\x61\151\155\167\145\141\163\x75\151\145\155\153\155\145\x65"]);
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
        uiagegwaiiacsqoo:
        return $megmggkiokqkcwou;
        goto qmygamkeyyeweaug;
        ecssgmuciqiskkme:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto iqcsqkgycusqgswk;
        eygewmcawygoamqm:
        mooukkaawioceqgu:
        goto uiagegwaiiacsqoo;
        iqcsqkgycusqgswk:
        if (!$megmggkiokqkcwou) {
            goto cekiucuusaiieqyy;
        }
        goto iueqqswmweckwaui;
        aaayqmggygqagqes:
        wscecwieywoacuyc:
        goto coukaukykckssymw;
        figsecwawwycsiia:
        cekiucuusaiieqyy:
        goto ioqcemkiiscgiseo;
        gaweywgyiqymqqae:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wscecwieywoacuyc;
        }
        goto ecssgmuciqiskkme;
        iueqqswmweckwaui:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto figsecwawwycsiia;
        ioqcemkiiscgiseo:
        goto mooukkaawioceqgu;
        goto aaayqmggygqagqes;
        coukaukykckssymw:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eygewmcawygoamqm;
        qmygamkeyyeweaug:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto kiagckcoykiwemaq;
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
        soacwieaayswiusy:
        gcgmcwkcywoeqyua:
        goto ukucugmwieqomaii;
        oucyomommkeoegkm:
        if (!$wumguikkgaigkoee) {
            goto scqewiwsusqceycg;
        }
        goto quwomueueaekwyqo;
        ukucugmwieqomaii:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto aeksiqkwsmsqqkem;
        mgwwogkgkaycgokq:
        goto gqmomswmsooweyco;
        goto soacwieaayswiusy;
        qcacqoowkyyyeies:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        quwomueueaekwyqo:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto ymgmkyymcokcqcge;
        aeksiqkwsmsqqkem:
        gqmomswmsooweyco:
        goto swcoukyskageuyec;
        wawekyqmeyuiuuwo:
    }
    
    public function waimweasuiemkmee()
    {
        goto cmoyaiiqasygkgwo;
        cmoyaiiqasygkgwo:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto skygcamewiewwsoe;
        qwoyicsekiisaaqm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto aqiagiqyqiaikgae;
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
            mqauewesgmogaowc:
            $ycyucwoysmwkgiui["\x69\x64"] = $aokagokqyuysuksm;
            goto ioyeuscyccuwmqqs;
            ioyeuscyccuwmqqs:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto cawauskkiaoeqigk;
            cawauskkiaoeqigk:
            iuweayiqouuegcgq:
            goto wuewsqueiuoiwmqw;
            wuewsqueiuoiwmqw:
        }
        goto okmyyqowusoyusau;
        okmyyqowusoyusau:
        mqwciycqokgiaask:
        goto qwoyicsekiisaaqm;
        sqwqoquwewuwugsa:
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        goto wwoksycisiauaemc;
        gqoiykcskgcqsikm:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\141\157\153\141\147\157\x6b\x71\171\165\171\x73\x75\x6b\163\155" => $aokagokqyuysuksm, "\x63\154\x61\x73\163" => "\155\147\x61\x67\157\x67\x77\x71\165\x67\171\x79\141\x73\163\151"]);
        goto eiecqmeuaaaiwgiq;
        iekieuqmokeakays:
        myoyukwoaecqcsuw:
        goto csucwqwqcoiyeesk;
        awekeisckwgiksmw:
        $ycyucwoysmwkgiui = '';
        goto mamcceoisymceocq;
        wwoksycisiauaemc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x64\x69\x73\155\x69\x73\163" => true, "\155\x65\163\163\x61\x67\x65" => '', "\154\145\x76\x65\x6c" => self::NOTICE_INFO, "\145\x63\150\157" => true, "\x69\x64" => '']);
        goto awekeisckwgiksmw;
        icmgkesuuwsmygme:
        echo $ycyucwoysmwkgiui;
        goto iekieuqmokeakays;
        egmkkmiqwqgsyeyy:
        if (!$uamcoiueqaamsqma) {
            goto kywqaioimyosmiui;
        }
        goto gqoiykcskgcqsikm;
        csucwqwqcoiyeesk:
        return $ycyucwoysmwkgiui;
        goto kmmcmckqqsioiqes;
        eiecqmeuaaaiwgiq:
        kywqaioimyosmiui:
        goto icisyikkoqqasowa;
        augcwakayywksmce:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\145\x73\163\141\x67\x65"];
        goto egmkkmiqwqgsyeyy;
        icisyikkoqqasowa:
        if (!$ywmkwiwkosakssii["\145\x63\150\157"]) {
            goto myoyukwoaecqcsuw;
        }
        goto icmgkesuuwsmygme;
        syeiaogwuowqeggi:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\x69\144"] ?: $iqaosyayeiuaisqi;
        goto augcwakayywksmce;
        mamcceoisymceocq:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\x6c\145\166\145\154"];
        goto syeiaogwuowqeggi;
        kmmcmckqqsioiqes:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto qeoeagouucmwsyqw;
        mcokememaqyocmww:
        $this->remove($aokagokqyuysuksm);
        goto aaemagwasykayacy;
        ycuaeigqqkcqywcm:
        $this->ycasmmgsmaaumweg([]);
        goto usogieysoyaiwmqu;
        imieoekoumoucuag:
        eiaqgiaygokkeksu:
        goto osocgummgayysiag;
        wiqoigsossioeckw:
        goto egkqsyyusoukuieu;
        goto imieoekoumoucuag;
        ygyqcgyoyckqqqsk:
        ikemoyeuukmcueoi:
        goto uggkyoamgoaywawg;
        uymugyyimciiyuos:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            egksuoqocciukoaq:
        }
        goto jkoscsaeoquakoss;
        aaemagwasykayacy:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto iusacogsuyamauuw;
        qeoeagouucmwsyqw:
        $ycyucwoysmwkgiui = '';
        goto oisqamuwmiswywko;
        oyiyakeisgumawcu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto ewcwmioqiiogasky;
        iusacogsuyamauuw:
        miaqksuykcksyyuo:
        goto skamksaaqymicwgm;
        umymemssaqquqisa:
        return $ycyucwoysmwkgiui;
        goto asywiwgmyyoikyke;
        ayysooqqqwcueuey:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikemoyeuukmcueoi;
        }
        goto ycuaeigqqkcqywcm;
        osocgummgayysiag:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto kkgyymqwugkcgoew;
        imswukmmekkkaeqo:
        awekmuqsuwwkemoa:
        goto xiuwuuokasgwkicc;
        jkoscsaeoquakoss:
        waowywqegyiieeke:
        goto ayysooqqqwcueuey;
        xiuwuuokasgwkicc:
        qmcmiosogysemwsc:
        goto wiqoigsossioeckw;
        oisqamuwmiswywko:
        if ($aokagokqyuysuksm) {
            goto eiaqgiaygokkeksu;
        }
        goto oyiyakeisgumawcu;
        usogieysoyaiwmqu:
        goto awekmuqsuwwkemoa;
        goto ygyqcgyoyckqqqsk;
        uggkyoamgoaywawg:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto imswukmmekkkaeqo;
        kkgyymqwugkcgoew:
        if (!$uamcoiueqaamsqma) {
            goto miaqksuykcksyyuo;
        }
        goto mcokememaqyocmww;
        ewcwmioqiiogasky:
        if (!$wumguikkgaigkoee) {
            goto qmcmiosogysemwsc;
        }
        goto uymugyyimciiyuos;
        skamksaaqymicwgm:
        egkqsyyusoukuieu:
        goto umymemssaqquqisa;
        asywiwgmyyoikyke:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto egkqesmwiiaqiiyc;
        egkqesmwiiaqiiyc:
        if (!$uamcoiueqaamsqma) {
            goto sucgueksmmwgekau;
        }
        goto eakyagcgwegumqqq;
        eakyagcgwegumqqq:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\x64" => $aokagokqyuysuksm, "\154\145\166\x65\x6c" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\x65\166\x65\x6c", self::NOTICE_INFO), "\x6d\x65\x73\x73\x61\x67\x65" => ManipulateArray::get($uamcoiueqaamsqma, "\155\145\x73\x73\x61\147\145", self::NOTICE_INFO)]));
        goto ymasgcocsigmuwoc;
        ymasgcocsigmuwoc:
        sucgueksmmwgekau:
        goto ssuiuyiqqcwciysg;
        ssuiuyiqqcwciysg:
        return $uamcoiueqaamsqma;
        goto ymamscycaiaguigo;
        ymamscycaiaguigo:
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        goto aouekkmogmyoeguw;
        wqkekssiaiaqkqck:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeuqcqkguageoagc;
        }
        goto wgagqmumyekewuge;
        aouekkmogmyoeguw:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto imkoimywaemoquiu;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\x69\x71\x61\x6f\163\x79\x61\x79\x65\151\165\141\x69\163\x71\x69" => $iqaosyayeiuaisqi, "\165\x61\x6d\143\157\x69\165\145\x71\x61\141\155\x73\161\155\141" => $uamcoiueqaamsqma]];
        goto ycemmsosewuoyiqs;
        aqimagkgyewmgkyw:
        if (!$megmggkiokqkcwou) {
            goto kqiiyyqmssquuoic;
        }
        goto cywkuyeqqawqwgwo;
        kysgwgoeaoiyaqea:
        gwgqcomgikwoquyy:
        goto scssmwmagsaouymy;
        gscssgigiaqmgiuw:
        goto gwgqcomgikwoquyy;
        goto muiggeckwwywcusy;
        wgagqmumyekewuge:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        cywkuyeqqawqwgwo:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto kiswkeissywuosao;
        muiggeckwwywcusy:
        oeuqcqkguageoagc:
        goto wcosqycukygikgsa;
        wcosqycukygikgsa:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto kysgwgoeaoiyaqea;
        kiswkeissywuosao:
        kqiiyyqmssquuoic:
        goto wqkekssiaiaqkqck;
        ycemmsosewuoyiqs:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto aqimagkgyewmgkyw;
        scssmwmagsaouymy:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
