<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const NOTICE_FIELD = "\156\x6f\164\x69\x63\145\x5f\x6d\x65\163\x73\x61\x67\x65\x73\x5f\154\151\163\164";
    const NOTICE_INFO = "\151\156\x66\157";
    const NOTICE_ERROR = "\145\x72\162\x6f\x72";
    const NOTICE_WARNING = "\167\141\162\x6e\151\x6e\147";
    const NOTICE_SUCCESS = "\163\165\x63\143\x65\163\163";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\145\156\x64\x65\x72\x5f\156\x6f\x74\151\143\145\x73", [$this, "\162\145\x6e\144\145\162"])->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\156\157\x74\x69\143\145\163", [$this, "\x77\141\x69\155\167\145\x61\x73\x75\151\x65\155\x6b\155\x65\x65"]);
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
        ecssgmuciqiskkme:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto iqcsqkgycusqgswk;
        gaweywgyiqymqqae:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wscecwieywoacuyc;
        }
        goto ecssgmuciqiskkme;
        uiagegwaiiacsqoo:
        return $megmggkiokqkcwou;
        goto qmygamkeyyeweaug;
        coukaukykckssymw:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eygewmcawygoamqm;
        aaayqmggygqagqes:
        wscecwieywoacuyc:
        goto coukaukykckssymw;
        eygewmcawygoamqm:
        mooukkaawioceqgu:
        goto uiagegwaiiacsqoo;
        iueqqswmweckwaui:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto figsecwawwycsiia;
        iqcsqkgycusqgswk:
        if (!$megmggkiokqkcwou) {
            goto cekiucuusaiieqyy;
        }
        goto iueqqswmweckwaui;
        ioqcemkiiscgiseo:
        goto mooukkaawioceqgu;
        goto aaayqmggygqagqes;
        figsecwawwycsiia:
        cekiucuusaiieqyy:
        goto ioqcemkiiscgiseo;
        qmygamkeyyeweaug:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto kiagckcoykiwemaq;
        aeksiqkwsmsqqkem:
        gqmomswmsooweyco:
        goto swcoukyskageuyec;
        quwomueueaekwyqo:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto ymgmkyymcokcqcge;
        ukucugmwieqomaii:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto aeksiqkwsmsqqkem;
        ymgmkyymcokcqcge:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto gcgmcwkcywoeqyua;
        }
        goto qcacqoowkyyyeies;
        qcacqoowkyyyeies:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        swcoukyskageuyec:
        scqewiwsusqceycg:
        goto wawekyqmeyuiuuwo;
        soacwieaayswiusy:
        gcgmcwkcywoeqyua:
        goto ukucugmwieqomaii;
        mgwwogkgkaycgokq:
        goto gqmomswmsooweyco;
        goto soacwieaayswiusy;
        kiagckcoykiwemaq:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto oucyomommkeoegkm;
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
        cmoyaiiqasygkgwo:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto skygcamewiewwsoe;
        qwoyicsekiisaaqm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto aqiagiqyqiaikgae;
        okmyyqowusoyusau:
        mqwciycqokgiaask:
        goto qwoyicsekiisaaqm;
        aqiagiqyqiaikgae:
        iawkamauikumcukc:
        goto sqwqoquwewuwugsa;
        giiysqgsikwwiqoe:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto mqauewesgmogaowc;
            cawauskkiaoeqigk:
            iuweayiqouuegcgq:
            goto wuewsqueiuoiwmqw;
            ioyeuscyccuwmqqs:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto cawauskkiaoeqigk;
            mqauewesgmogaowc:
            $ycyucwoysmwkgiui["\151\x64"] = $aokagokqyuysuksm;
            goto ioyeuscyccuwmqqs;
            wuewsqueiuoiwmqw:
        }
        goto okmyyqowusoyusau;
        skygcamewiewwsoe:
        if (!$goyemikogeuskgas) {
            goto iawkamauikumcukc;
        }
        goto giiysqgsikwwiqoe;
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
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\151\144" => $aokagokqyuysuksm, "\143\x6c\141\163\163" => "\155\x79\55\62"]);
        goto eiecqmeuaaaiwgiq;
        iekieuqmokeakays:
        myoyukwoaecqcsuw:
        goto csucwqwqcoiyeesk;
        augcwakayywksmce:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\163\163\141\x67\x65"];
        goto egmkkmiqwqgsyeyy;
        awekeisckwgiksmw:
        $ycyucwoysmwkgiui = '';
        goto mamcceoisymceocq;
        csucwqwqcoiyeesk:
        return $ycyucwoysmwkgiui;
        goto kmmcmckqqsioiqes;
        icmgkesuuwsmygme:
        echo $ycyucwoysmwkgiui;
        goto iekieuqmokeakays;
        wwoksycisiauaemc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x64\x69\163\x6d\151\163\x73" => true, "\x6d\x65\163\163\x61\x67\x65" => '', "\x6c\x65\x76\145\154" => self::NOTICE_INFO, "\145\143\x68\157" => true, "\151\144" => '']);
        goto awekeisckwgiksmw;
        eiecqmeuaaaiwgiq:
        kywqaioimyosmiui:
        goto icisyikkoqqasowa;
        egmkkmiqwqgsyeyy:
        if (!$uamcoiueqaamsqma) {
            goto kywqaioimyosmiui;
        }
        goto gqoiykcskgcqsikm;
        syeiaogwuowqeggi:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\x69\x64"] ?: $iqaosyayeiuaisqi;
        goto augcwakayywksmce;
        icisyikkoqqasowa:
        if (!$ywmkwiwkosakssii["\145\x63\150\x6f"]) {
            goto myoyukwoaecqcsuw;
        }
        goto icmgkesuuwsmygme;
        mamcceoisymceocq:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\x6c\145\166\x65\x6c"];
        goto syeiaogwuowqeggi;
        kmmcmckqqsioiqes:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto qeoeagouucmwsyqw;
        umymemssaqquqisa:
        return $ycyucwoysmwkgiui;
        goto asywiwgmyyoikyke;
        qeoeagouucmwsyqw:
        $ycyucwoysmwkgiui = '';
        goto oisqamuwmiswywko;
        oyiyakeisgumawcu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto ewcwmioqiiogasky;
        mcokememaqyocmww:
        $this->remove($aokagokqyuysuksm);
        goto aaemagwasykayacy;
        skamksaaqymicwgm:
        egkqsyyusoukuieu:
        goto umymemssaqquqisa;
        ycuaeigqqkcqywcm:
        $this->ycasmmgsmaaumweg([]);
        goto usogieysoyaiwmqu;
        jkoscsaeoquakoss:
        waowywqegyiieeke:
        goto ayysooqqqwcueuey;
        imieoekoumoucuag:
        eiaqgiaygokkeksu:
        goto osocgummgayysiag;
        usogieysoyaiwmqu:
        goto awekmuqsuwwkemoa;
        goto ygyqcgyoyckqqqsk;
        kkgyymqwugkcgoew:
        if (!$uamcoiueqaamsqma) {
            goto miaqksuykcksyyuo;
        }
        goto mcokememaqyocmww;
        uymugyyimciiyuos:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            egksuoqocciukoaq:
        }
        goto jkoscsaeoquakoss;
        aaemagwasykayacy:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto iusacogsuyamauuw;
        ewcwmioqiiogasky:
        if (!$wumguikkgaigkoee) {
            goto qmcmiosogysemwsc;
        }
        goto uymugyyimciiyuos;
        wiqoigsossioeckw:
        goto egkqsyyusoukuieu;
        goto imieoekoumoucuag;
        uggkyoamgoaywawg:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto imswukmmekkkaeqo;
        xiuwuuokasgwkicc:
        qmcmiosogysemwsc:
        goto wiqoigsossioeckw;
        osocgummgayysiag:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto kkgyymqwugkcgoew;
        ygyqcgyoyckqqqsk:
        ikemoyeuukmcueoi:
        goto uggkyoamgoaywawg;
        iusacogsuyamauuw:
        miaqksuykcksyyuo:
        goto skamksaaqymicwgm;
        oisqamuwmiswywko:
        if ($aokagokqyuysuksm) {
            goto eiaqgiaygokkeksu;
        }
        goto oyiyakeisgumawcu;
        ayysooqqqwcueuey:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikemoyeuukmcueoi;
        }
        goto ycuaeigqqkcqywcm;
        imswukmmekkkaeqo:
        awekmuqsuwwkemoa:
        goto xiuwuuokasgwkicc;
        asywiwgmyyoikyke:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto egkqesmwiiaqiiyc;
        ssuiuyiqqcwciysg:
        return $uamcoiueqaamsqma;
        goto ymamscycaiaguigo;
        egkqesmwiiaqiiyc:
        if (!$uamcoiueqaamsqma) {
            goto sucgueksmmwgekau;
        }
        goto eakyagcgwegumqqq;
        ymasgcocsigmuwoc:
        sucgueksmmwgekau:
        goto ssuiuyiqqcwciysg;
        eakyagcgwegumqqq:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\144" => $aokagokqyuysuksm, "\154\145\x76\x65\x6c" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\x65\x76\x65\x6c", self::NOTICE_INFO), "\x6d\x65\163\163\x61\x67\145" => ManipulateArray::get($uamcoiueqaamsqma, "\x6d\x65\x73\x73\x61\147\x65", self::NOTICE_INFO)]));
        goto ymasgcocsigmuwoc;
        ymamscycaiaguigo:
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        goto aouekkmogmyoeguw;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\x6c\145\x76\x65\154" => $iqaosyayeiuaisqi, "\x6d\x65\163\x73\141\147\x65" => $uamcoiueqaamsqma]];
        goto ycemmsosewuoyiqs;
        aouekkmogmyoeguw:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto imkoimywaemoquiu;
        muiggeckwwywcusy:
        oeuqcqkguageoagc:
        goto wcosqycukygikgsa;
        wgagqmumyekewuge:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        wcosqycukygikgsa:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto kysgwgoeaoiyaqea;
        ycemmsosewuoyiqs:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto aqimagkgyewmgkyw;
        aqimagkgyewmgkyw:
        if (!$megmggkiokqkcwou) {
            goto kqiiyyqmssquuoic;
        }
        goto cywkuyeqqawqwgwo;
        kiswkeissywuosao:
        kqiiyyqmssquuoic:
        goto wqkekssiaiaqkqck;
        kysgwgoeaoiyaqea:
        gwgqcomgikwoquyy:
        goto scssmwmagsaouymy;
        cywkuyeqqawqwgwo:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto kiswkeissywuosao;
        wqkekssiaiaqkqck:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeuqcqkguageoagc;
        }
        goto wgagqmumyekewuge;
        gscssgigiaqmgiuw:
        goto gwgqcomgikwoquyy;
        goto muiggeckwwywcusy;
        scssmwmagsaouymy:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
