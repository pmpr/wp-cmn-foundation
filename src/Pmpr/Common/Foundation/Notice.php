<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const NOTICE_FIELD = "\156\157\164\x69\x63\x65\137\x6d\x65\x73\x73\141\x67\145\163\137\154\151\x73\164";
    const NOTICE_INFO = "\151\156\146\x6f";
    const NOTICE_ERROR = "\145\x72\162\157\162";
    const NOTICE_WARNING = "\x77\x61\162\x6e\151\x6e\147";
    const NOTICE_SUCCESS = "\163\x75\143\143\145\163\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\x65\156\x64\145\x72\x5f\x6e\x6f\164\x69\143\145\x73", [$this, "\x72\x65\x6e\144\145\162"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\156\157\164\151\143\145\x73", [$this, "\167\x61\151\155\167\x65\x61\x73\165\151\145\155\153\x6d\145\145"]);
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
        iqcsqkgycusqgswk:
        if (!$megmggkiokqkcwou) {
            goto cekiucuusaiieqyy;
        }
        goto iueqqswmweckwaui;
        iueqqswmweckwaui:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto figsecwawwycsiia;
        ecssgmuciqiskkme:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto iqcsqkgycusqgswk;
        eygewmcawygoamqm:
        mooukkaawioceqgu:
        goto uiagegwaiiacsqoo;
        coukaukykckssymw:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto eygewmcawygoamqm;
        figsecwawwycsiia:
        cekiucuusaiieqyy:
        goto ioqcemkiiscgiseo;
        aaayqmggygqagqes:
        wscecwieywoacuyc:
        goto coukaukykckssymw;
        ioqcemkiiscgiseo:
        goto mooukkaawioceqgu;
        goto aaayqmggygqagqes;
        gaweywgyiqymqqae:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wscecwieywoacuyc;
        }
        goto ecssgmuciqiskkme;
        qmygamkeyyeweaug:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto kiagckcoykiwemaq;
        oucyomommkeoegkm:
        if (!$wumguikkgaigkoee) {
            goto scqewiwsusqceycg;
        }
        goto quwomueueaekwyqo;
        soacwieaayswiusy:
        gcgmcwkcywoeqyua:
        goto ukucugmwieqomaii;
        qcacqoowkyyyeies:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        swcoukyskageuyec:
        scqewiwsusqceycg:
        goto wawekyqmeyuiuuwo;
        quwomueueaekwyqo:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto ymgmkyymcokcqcge;
        ymgmkyymcokcqcge:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto gcgmcwkcywoeqyua;
        }
        goto qcacqoowkyyyeies;
        ukucugmwieqomaii:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto aeksiqkwsmsqqkem;
        kiagckcoykiwemaq:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto oucyomommkeoegkm;
        aeksiqkwsmsqqkem:
        gqmomswmsooweyco:
        goto swcoukyskageuyec;
        mgwwogkgkaycgokq:
        goto gqmomswmsooweyco;
        goto soacwieaayswiusy;
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
        okmyyqowusoyusau:
        mqwciycqokgiaask:
        goto qwoyicsekiisaaqm;
        cmoyaiiqasygkgwo:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto skygcamewiewwsoe;
        qwoyicsekiisaaqm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto aqiagiqyqiaikgae;
        aqiagiqyqiaikgae:
        iawkamauikumcukc:
        goto sqwqoquwewuwugsa;
        giiysqgsikwwiqoe:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto mqauewesgmogaowc;
            cawauskkiaoeqigk:
            iuweayiqouuegcgq:
            goto wuewsqueiuoiwmqw;
            mqauewesgmogaowc:
            $ycyucwoysmwkgiui["\x69\x64"] = $aokagokqyuysuksm;
            goto ioyeuscyccuwmqqs;
            ioyeuscyccuwmqqs:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto cawauskkiaoeqigk;
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
        syeiaogwuowqeggi:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\151\x64"] ?: $iqaosyayeiuaisqi;
        goto augcwakayywksmce;
        augcwakayywksmce:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\163\x73\x61\147\x65"];
        goto egmkkmiqwqgsyeyy;
        eiecqmeuaaaiwgiq:
        kywqaioimyosmiui:
        goto icisyikkoqqasowa;
        wwoksycisiauaemc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x64\x69\x73\155\x69\x73\163" => true, "\155\145\x73\163\141\x67\145" => '', "\154\x65\x76\x65\154" => self::NOTICE_INFO, "\145\143\x68\157" => true, "\151\x64" => '']);
        goto awekeisckwgiksmw;
        egmkkmiqwqgsyeyy:
        if (!$uamcoiueqaamsqma) {
            goto kywqaioimyosmiui;
        }
        goto gqoiykcskgcqsikm;
        csucwqwqcoiyeesk:
        return $ycyucwoysmwkgiui;
        goto kmmcmckqqsioiqes;
        iekieuqmokeakays:
        myoyukwoaecqcsuw:
        goto csucwqwqcoiyeesk;
        gqoiykcskgcqsikm:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\151\144" => $aokagokqyuysuksm, "\143\154\141\163\x73" => "\x6d\171\55\x32"]);
        goto eiecqmeuaaaiwgiq;
        icisyikkoqqasowa:
        if (!$ywmkwiwkosakssii["\x65\143\150\x6f"]) {
            goto myoyukwoaecqcsuw;
        }
        goto icmgkesuuwsmygme;
        icmgkesuuwsmygme:
        echo $ycyucwoysmwkgiui;
        goto iekieuqmokeakays;
        awekeisckwgiksmw:
        $ycyucwoysmwkgiui = '';
        goto mamcceoisymceocq;
        mamcceoisymceocq:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\x6c\x65\x76\x65\154"];
        goto syeiaogwuowqeggi;
        kmmcmckqqsioiqes:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto qeoeagouucmwsyqw;
        kkgyymqwugkcgoew:
        if (!$uamcoiueqaamsqma) {
            goto miaqksuykcksyyuo;
        }
        goto mcokememaqyocmww;
        ygyqcgyoyckqqqsk:
        ikemoyeuukmcueoi:
        goto uggkyoamgoaywawg;
        uymugyyimciiyuos:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            egksuoqocciukoaq:
        }
        goto jkoscsaeoquakoss;
        wiqoigsossioeckw:
        goto egkqsyyusoukuieu;
        goto imieoekoumoucuag;
        xiuwuuokasgwkicc:
        qmcmiosogysemwsc:
        goto wiqoigsossioeckw;
        uggkyoamgoaywawg:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto imswukmmekkkaeqo;
        ycuaeigqqkcqywcm:
        $this->ycasmmgsmaaumweg([]);
        goto usogieysoyaiwmqu;
        umymemssaqquqisa:
        return $ycyucwoysmwkgiui;
        goto asywiwgmyyoikyke;
        osocgummgayysiag:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto kkgyymqwugkcgoew;
        qeoeagouucmwsyqw:
        $ycyucwoysmwkgiui = '';
        goto oisqamuwmiswywko;
        ayysooqqqwcueuey:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikemoyeuukmcueoi;
        }
        goto ycuaeigqqkcqywcm;
        usogieysoyaiwmqu:
        goto awekmuqsuwwkemoa;
        goto ygyqcgyoyckqqqsk;
        oyiyakeisgumawcu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto ewcwmioqiiogasky;
        skamksaaqymicwgm:
        egkqsyyusoukuieu:
        goto umymemssaqquqisa;
        iusacogsuyamauuw:
        miaqksuykcksyyuo:
        goto skamksaaqymicwgm;
        ewcwmioqiiogasky:
        if (!$wumguikkgaigkoee) {
            goto qmcmiosogysemwsc;
        }
        goto uymugyyimciiyuos;
        oisqamuwmiswywko:
        if ($aokagokqyuysuksm) {
            goto eiaqgiaygokkeksu;
        }
        goto oyiyakeisgumawcu;
        jkoscsaeoquakoss:
        waowywqegyiieeke:
        goto ayysooqqqwcueuey;
        imieoekoumoucuag:
        eiaqgiaygokkeksu:
        goto osocgummgayysiag;
        mcokememaqyocmww:
        $this->remove($aokagokqyuysuksm);
        goto aaemagwasykayacy;
        imswukmmekkkaeqo:
        awekmuqsuwwkemoa:
        goto xiuwuuokasgwkicc;
        aaemagwasykayacy:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto iusacogsuyamauuw;
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
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\144" => $aokagokqyuysuksm, "\154\145\x76\x65\154" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\x65\166\x65\x6c", self::NOTICE_INFO), "\155\x65\163\x73\141\x67\x65" => ManipulateArray::get($uamcoiueqaamsqma, "\x6d\145\163\163\x61\x67\145", self::NOTICE_INFO)]));
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
        kiswkeissywuosao:
        kqiiyyqmssquuoic:
        goto wqkekssiaiaqkqck;
        cywkuyeqqawqwgwo:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto kiswkeissywuosao;
        wgagqmumyekewuge:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        wcosqycukygikgsa:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto kysgwgoeaoiyaqea;
        ycemmsosewuoyiqs:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto aqimagkgyewmgkyw;
        wqkekssiaiaqkqck:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeuqcqkguageoagc;
        }
        goto wgagqmumyekewuge;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\x6c\145\166\x65\x6c" => $iqaosyayeiuaisqi, "\155\145\x73\x73\141\x67\x65" => $uamcoiueqaamsqma]];
        goto ycemmsosewuoyiqs;
        kysgwgoeaoiyaqea:
        gwgqcomgikwoquyy:
        goto scssmwmagsaouymy;
        aouekkmogmyoeguw:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto imkoimywaemoquiu;
        gscssgigiaqmgiuw:
        goto gwgqcomgikwoquyy;
        goto muiggeckwwywcusy;
        muiggeckwwywcusy:
        oeuqcqkguageoagc:
        goto wcosqycukygikgsa;
        aqimagkgyewmgkyw:
        if (!$megmggkiokqkcwou) {
            goto kqiiyyqmssquuoic;
        }
        goto cywkuyeqqawqwgwo;
        scssmwmagsaouymy:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
