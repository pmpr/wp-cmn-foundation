<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const NOTICE_FIELD = "\x6e\x6f\x74\151\x63\145\137\x6d\145\163\x73\x61\x67\145\x73\x5f\154\x69\x73\164";
    const NOTICE_INFO = "\151\x6e\146\157";
    const NOTICE_ERROR = "\145\x72\162\157\162";
    const NOTICE_WARNING = "\167\x61\x72\156\151\x6e\x67";
    const NOTICE_SUCCESS = "\x73\165\x63\x63\x65\163\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\145\x6e\144\x65\x72\137\x6e\157\x74\x69\143\145\x73", [$this, "\162\145\x6e\x64\x65\x72"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\156\x6f\x74\151\x63\x65\x73", [$this, "\x77\141\151\155\167\145\141\163\165\x69\x65\155\153\155\x65\x65"]);
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
        aaayqmggygqagqes:
        wscecwieywoacuyc:
        goto coukaukykckssymw;
        eygewmcawygoamqm:
        mooukkaawioceqgu:
        goto uiagegwaiiacsqoo;
        uiagegwaiiacsqoo:
        return $megmggkiokqkcwou;
        goto qmygamkeyyeweaug;
        ioqcemkiiscgiseo:
        goto mooukkaawioceqgu;
        goto aaayqmggygqagqes;
        iueqqswmweckwaui:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto figsecwawwycsiia;
        coukaukykckssymw:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eygewmcawygoamqm;
        ecssgmuciqiskkme:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto iqcsqkgycusqgswk;
        gaweywgyiqymqqae:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wscecwieywoacuyc;
        }
        goto ecssgmuciqiskkme;
        iqcsqkgycusqgswk:
        if (!$megmggkiokqkcwou) {
            goto cekiucuusaiieqyy;
        }
        goto iueqqswmweckwaui;
        qmygamkeyyeweaug:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto kiagckcoykiwemaq;
        swcoukyskageuyec:
        scqewiwsusqceycg:
        goto wawekyqmeyuiuuwo;
        quwomueueaekwyqo:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto ymgmkyymcokcqcge;
        aeksiqkwsmsqqkem:
        gqmomswmsooweyco:
        goto swcoukyskageuyec;
        soacwieaayswiusy:
        gcgmcwkcywoeqyua:
        goto ukucugmwieqomaii;
        ymgmkyymcokcqcge:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto gcgmcwkcywoeqyua;
        }
        goto qcacqoowkyyyeies;
        kiagckcoykiwemaq:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto oucyomommkeoegkm;
        mgwwogkgkaycgokq:
        goto gqmomswmsooweyco;
        goto soacwieaayswiusy;
        ukucugmwieqomaii:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto aeksiqkwsmsqqkem;
        qcacqoowkyyyeies:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        oucyomommkeoegkm:
        if (!$wumguikkgaigkoee) {
            goto scqewiwsusqceycg;
        }
        goto quwomueueaekwyqo;
        wawekyqmeyuiuuwo:
    }
    
    public function waimweasuiemkmee()
    {
        goto cmoyaiiqasygkgwo;
        skygcamewiewwsoe:
        if (!$goyemikogeuskgas) {
            goto iawkamauikumcukc;
        }
        goto giiysqgsikwwiqoe;
        qwoyicsekiisaaqm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto aqiagiqyqiaikgae;
        giiysqgsikwwiqoe:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto mqauewesgmogaowc;
            ioyeuscyccuwmqqs:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto cawauskkiaoeqigk;
            mqauewesgmogaowc:
            $ycyucwoysmwkgiui["\151\144"] = $aokagokqyuysuksm;
            goto ioyeuscyccuwmqqs;
            cawauskkiaoeqigk:
            iuweayiqouuegcgq:
            goto wuewsqueiuoiwmqw;
            wuewsqueiuoiwmqw:
        }
        goto okmyyqowusoyusau;
        okmyyqowusoyusau:
        mqwciycqokgiaask:
        goto qwoyicsekiisaaqm;
        aqiagiqyqiaikgae:
        iawkamauikumcukc:
        goto sqwqoquwewuwugsa;
        cmoyaiiqasygkgwo:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto skygcamewiewwsoe;
        sqwqoquwewuwugsa:
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        goto wwoksycisiauaemc;
        awekeisckwgiksmw:
        $ycyucwoysmwkgiui = '';
        goto mamcceoisymceocq;
        icmgkesuuwsmygme:
        echo $ycyucwoysmwkgiui;
        goto iekieuqmokeakays;
        wwoksycisiauaemc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\144\151\163\155\151\163\x73" => true, "\x6d\145\163\x73\x61\x67\x65" => '', "\154\x65\166\x65\x6c" => self::NOTICE_INFO, "\145\143\150\157" => true, "\151\144" => '']);
        goto awekeisckwgiksmw;
        csucwqwqcoiyeesk:
        return $ycyucwoysmwkgiui;
        goto kmmcmckqqsioiqes;
        syeiaogwuowqeggi:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\x69\x64"] ?: $iqaosyayeiuaisqi;
        goto augcwakayywksmce;
        gqoiykcskgcqsikm:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\151\x64" => $aokagokqyuysuksm, "\x63\154\x61\163\x73" => "\155\171\x2d\x32"]);
        goto eiecqmeuaaaiwgiq;
        eiecqmeuaaaiwgiq:
        kywqaioimyosmiui:
        goto icisyikkoqqasowa;
        icisyikkoqqasowa:
        if (!$ywmkwiwkosakssii["\145\143\150\x6f"]) {
            goto myoyukwoaecqcsuw;
        }
        goto icmgkesuuwsmygme;
        augcwakayywksmce:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\x73\x73\x61\147\x65"];
        goto egmkkmiqwqgsyeyy;
        iekieuqmokeakays:
        myoyukwoaecqcsuw:
        goto csucwqwqcoiyeesk;
        mamcceoisymceocq:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\x6c\145\166\x65\154"];
        goto syeiaogwuowqeggi;
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
        ycuaeigqqkcqywcm:
        $this->ycasmmgsmaaumweg([]);
        goto usogieysoyaiwmqu;
        uymugyyimciiyuos:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            egksuoqocciukoaq:
        }
        goto jkoscsaeoquakoss;
        umymemssaqquqisa:
        return $ycyucwoysmwkgiui;
        goto asywiwgmyyoikyke;
        ewcwmioqiiogasky:
        if (!$wumguikkgaigkoee) {
            goto qmcmiosogysemwsc;
        }
        goto uymugyyimciiyuos;
        imieoekoumoucuag:
        eiaqgiaygokkeksu:
        goto osocgummgayysiag;
        kkgyymqwugkcgoew:
        if (!$uamcoiueqaamsqma) {
            goto miaqksuykcksyyuo;
        }
        goto mcokememaqyocmww;
        jkoscsaeoquakoss:
        waowywqegyiieeke:
        goto ayysooqqqwcueuey;
        wiqoigsossioeckw:
        goto egkqsyyusoukuieu;
        goto imieoekoumoucuag;
        ygyqcgyoyckqqqsk:
        ikemoyeuukmcueoi:
        goto uggkyoamgoaywawg;
        uggkyoamgoaywawg:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto imswukmmekkkaeqo;
        ayysooqqqwcueuey:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikemoyeuukmcueoi;
        }
        goto ycuaeigqqkcqywcm;
        usogieysoyaiwmqu:
        goto awekmuqsuwwkemoa;
        goto ygyqcgyoyckqqqsk;
        aaemagwasykayacy:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto iusacogsuyamauuw;
        qeoeagouucmwsyqw:
        $ycyucwoysmwkgiui = '';
        goto oisqamuwmiswywko;
        xiuwuuokasgwkicc:
        qmcmiosogysemwsc:
        goto wiqoigsossioeckw;
        osocgummgayysiag:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto kkgyymqwugkcgoew;
        iusacogsuyamauuw:
        miaqksuykcksyyuo:
        goto skamksaaqymicwgm;
        skamksaaqymicwgm:
        egkqsyyusoukuieu:
        goto umymemssaqquqisa;
        oyiyakeisgumawcu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto ewcwmioqiiogasky;
        mcokememaqyocmww:
        $this->remove($aokagokqyuysuksm);
        goto aaemagwasykayacy;
        imswukmmekkkaeqo:
        awekmuqsuwwkemoa:
        goto xiuwuuokasgwkicc;
        oisqamuwmiswywko:
        if ($aokagokqyuysuksm) {
            goto eiaqgiaygokkeksu;
        }
        goto oyiyakeisgumawcu;
        asywiwgmyyoikyke:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto egkqesmwiiaqiiyc;
        eakyagcgwegumqqq:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\144" => $aokagokqyuysuksm, "\x6c\x65\166\x65\x6c" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\x65\x76\145\x6c", self::NOTICE_INFO), "\x6d\145\x73\x73\141\147\145" => ManipulateArray::get($uamcoiueqaamsqma, "\x6d\x65\163\163\x61\x67\x65", self::NOTICE_INFO)]));
        goto ymasgcocsigmuwoc;
        egkqesmwiiaqiiyc:
        if (!$uamcoiueqaamsqma) {
            goto sucgueksmmwgekau;
        }
        goto eakyagcgwegumqqq;
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
        wgagqmumyekewuge:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        muiggeckwwywcusy:
        oeuqcqkguageoagc:
        goto wcosqycukygikgsa;
        kysgwgoeaoiyaqea:
        gwgqcomgikwoquyy:
        goto scssmwmagsaouymy;
        wqkekssiaiaqkqck:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeuqcqkguageoagc;
        }
        goto wgagqmumyekewuge;
        kiswkeissywuosao:
        kqiiyyqmssquuoic:
        goto wqkekssiaiaqkqck;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\154\x65\166\145\154" => $iqaosyayeiuaisqi, "\155\x65\163\x73\141\x67\145" => $uamcoiueqaamsqma]];
        goto ycemmsosewuoyiqs;
        wcosqycukygikgsa:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto kysgwgoeaoiyaqea;
        gscssgigiaqmgiuw:
        goto gwgqcomgikwoquyy;
        goto muiggeckwwywcusy;
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
