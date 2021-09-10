<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const NOTICE_FIELD = "\x6e\157\x74\151\x63\145\137\x6d\x65\x73\163\141\147\145\x73\x5f\x6c\x69\163\164";
    const NOTICE_INFO = "\151\156\146\157";
    const NOTICE_ERROR = "\145\x72\x72\x6f\x72";
    const NOTICE_WARNING = "\167\x61\162\x6e\151\x6e\147";
    const NOTICE_SUCCESS = "\163\165\x63\143\145\163\x73";
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\145\x6e\x64\x65\162\x5f\156\157\x74\151\x63\x65\x73", [$this, "\162\145\x6e\x64\x65\x72"])->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x6e\157\x74\x69\143\x65\163", [$this, "\167\141\x69\x6d\167\145\141\163\x75\151\x65\x6d\x6b\x6d\x65\x65"]);
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
        goto cekiucuusaiieqyy;
        cekiucuusaiieqyy:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wucqauasuekkoayw;
        }
        goto wscecwieywoacuyc;
        iqcsqkgycusqgswk:
        goto qiuucioewqyqqwok;
        goto iueqqswmweckwaui;
        iueqqswmweckwaui:
        wucqauasuekkoayw:
        goto figsecwawwycsiia;
        mooukkaawioceqgu:
        if (!$megmggkiokqkcwou) {
            goto gogmaqgwwsoekumo;
        }
        goto gaweywgyiqymqqae;
        ecssgmuciqiskkme:
        gogmaqgwwsoekumo:
        goto iqcsqkgycusqgswk;
        ioqcemkiiscgiseo:
        qiuucioewqyqqwok:
        goto aaayqmggygqagqes;
        figsecwawwycsiia:
        $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto ioqcemkiiscgiseo;
        gaweywgyiqymqqae:
        $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
        goto ecssgmuciqiskkme;
        wscecwieywoacuyc:
        $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
        goto mooukkaawioceqgu;
        aaayqmggygqagqes:
        return $megmggkiokqkcwou;
        goto coukaukykckssymw;
        coukaukykckssymw:
    }
    
    public function remove($aokagokqyuysuksm)
    {
        goto gcgmcwkcywoeqyua;
        soacwieaayswiusy:
        qmygamkeyyeweaug:
        goto ukucugmwieqomaii;
        qcacqoowkyyyeies:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto mgwwogkgkaycgokq;
        mgwwogkgkaycgokq:
        uiagegwaiiacsqoo:
        goto soacwieaayswiusy;
        ymgmkyymcokcqcge:
        eygewmcawygoamqm:
        goto qcacqoowkyyyeies;
        kiagckcoykiwemaq:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto eygewmcawygoamqm;
        }
        goto oucyomommkeoegkm;
        scqewiwsusqceycg:
        ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
        goto kiagckcoykiwemaq;
        gcgmcwkcywoeqyua:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto gqmomswmsooweyco;
        gqmomswmsooweyco:
        if (!$wumguikkgaigkoee) {
            goto qmygamkeyyeweaug;
        }
        goto scqewiwsusqceycg;
        oucyomommkeoegkm:
        $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto quwomueueaekwyqo;
        quwomueueaekwyqo:
        goto uiagegwaiiacsqoo;
        goto ymgmkyymcokcqcge;
        ukucugmwieqomaii:
    }
    
    public function waimweasuiemkmee()
    {
        goto cawauskkiaoeqigk;
        giiysqgsikwwiqoe:
        ioyeuscyccuwmqqs:
        goto okmyyqowusoyusau;
        wuewsqueiuoiwmqw:
        if (!$goyemikogeuskgas) {
            goto ioyeuscyccuwmqqs;
        }
        goto iawkamauikumcukc;
        skygcamewiewwsoe:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto giiysqgsikwwiqoe;
        iawkamauikumcukc:
        foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
            goto wawekyqmeyuiuuwo;
            wawekyqmeyuiuuwo:
            $ycyucwoysmwkgiui["\x69\x64"] = $aokagokqyuysuksm;
            goto mqwciycqokgiaask;
            iuweayiqouuegcgq:
            swcoukyskageuyec:
            goto mqauewesgmogaowc;
            mqwciycqokgiaask:
            $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
            goto iuweayiqouuegcgq;
            mqauewesgmogaowc:
        }
        goto cmoyaiiqasygkgwo;
        cmoyaiiqasygkgwo:
        aeksiqkwsmsqqkem:
        goto skygcamewiewwsoe;
        cawauskkiaoeqigk:
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        goto wuewsqueiuoiwmqw;
        okmyyqowusoyusau:
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        goto sqwqoquwewuwugsa;
        mamcceoisymceocq:
        if (!$uamcoiueqaamsqma) {
            goto qwoyicsekiisaaqm;
        }
        goto syeiaogwuowqeggi;
        sqwqoquwewuwugsa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x64\x69\x73\x6d\x69\x73\163" => true, "\x6d\x65\x73\x73\141\147\145" => '', "\x6c\x65\x76\145\154" => self::NOTICE_INFO, "\x65\x63\150\157" => true, "\151\x64" => '']);
        goto kywqaioimyosmiui;
        icisyikkoqqasowa:
        return $ycyucwoysmwkgiui;
        goto icmgkesuuwsmygme;
        wwoksycisiauaemc:
        $aokagokqyuysuksm = $ywmkwiwkosakssii["\151\x64"] ?: $iqaosyayeiuaisqi;
        goto awekeisckwgiksmw;
        kywqaioimyosmiui:
        $ycyucwoysmwkgiui = '';
        goto myoyukwoaecqcsuw;
        syeiaogwuowqeggi:
        $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ["\x69\x64" => $aokagokqyuysuksm, "\x63\154\141\163\x73" => "\x6d\171\x2d\x32"]);
        goto augcwakayywksmce;
        gqoiykcskgcqsikm:
        echo $ycyucwoysmwkgiui;
        goto eiecqmeuaaaiwgiq;
        myoyukwoaecqcsuw:
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii["\154\145\166\145\154"];
        goto wwoksycisiauaemc;
        eiecqmeuaaaiwgiq:
        aqiagiqyqiaikgae:
        goto icisyikkoqqasowa;
        egmkkmiqwqgsyeyy:
        if (!$ywmkwiwkosakssii["\x65\x63\x68\157"]) {
            goto aqiagiqyqiaikgae;
        }
        goto gqoiykcskgcqsikm;
        augcwakayywksmce:
        qwoyicsekiisaaqm:
        goto egmkkmiqwqgsyeyy;
        awekeisckwgiksmw:
        $uamcoiueqaamsqma = $ywmkwiwkosakssii["\155\x65\x73\163\141\x67\145"];
        goto mamcceoisymceocq;
        icmgkesuuwsmygme:
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        goto qmcmiosogysemwsc;
        egkqsyyusoukuieu:
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        goto qeoeagouucmwsyqw;
        imswukmmekkkaeqo:
        ikemoyeuukmcueoi:
        goto xiuwuuokasgwkicc;
        kkgyymqwugkcgoew:
        iekieuqmokeakays:
        goto mcokememaqyocmww;
        oisqamuwmiswywko:
        foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            kmmcmckqqsioiqes:
        }
        goto oyiyakeisgumawcu;
        uymugyyimciiyuos:
        $this->ycasmmgsmaaumweg([]);
        goto jkoscsaeoquakoss;
        qeoeagouucmwsyqw:
        if (!$wumguikkgaigkoee) {
            goto egksuoqocciukoaq;
        }
        goto oisqamuwmiswywko;
        xiuwuuokasgwkicc:
        $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
        goto wiqoigsossioeckw;
        qmcmiosogysemwsc:
        $ycyucwoysmwkgiui = '';
        goto eiaqgiaygokkeksu;
        aaemagwasykayacy:
        return $ycyucwoysmwkgiui;
        goto iusacogsuyamauuw;
        ygyqcgyoyckqqqsk:
        egksuoqocciukoaq:
        goto uggkyoamgoaywawg;
        jkoscsaeoquakoss:
        goto waowywqegyiieeke;
        goto ayysooqqqwcueuey;
        uggkyoamgoaywawg:
        goto awekmuqsuwwkemoa;
        goto imswukmmekkkaeqo;
        ayysooqqqwcueuey:
        miaqksuykcksyyuo:
        goto ycuaeigqqkcqywcm;
        eiaqgiaygokkeksu:
        if ($aokagokqyuysuksm) {
            goto ikemoyeuukmcueoi;
        }
        goto egkqsyyusoukuieu;
        imieoekoumoucuag:
        $this->remove($aokagokqyuysuksm);
        goto osocgummgayysiag;
        mcokememaqyocmww:
        awekmuqsuwwkemoa:
        goto aaemagwasykayacy;
        oyiyakeisgumawcu:
        csucwqwqcoiyeesk:
        goto ewcwmioqiiogasky;
        ewcwmioqiiogasky:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto miaqksuykcksyyuo;
        }
        goto uymugyyimciiyuos;
        osocgummgayysiag:
        $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
        goto kkgyymqwugkcgoew;
        wiqoigsossioeckw:
        if (!$uamcoiueqaamsqma) {
            goto iekieuqmokeakays;
        }
        goto imieoekoumoucuag;
        ycuaeigqqkcqywcm:
        DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        goto usogieysoyaiwmqu;
        usogieysoyaiwmqu:
        waowywqegyiieeke:
        goto ygyqcgyoyckqqqsk;
        iusacogsuyamauuw:
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        goto umymemssaqquqisa;
        egkqesmwiiaqiiyc:
        return $uamcoiueqaamsqma;
        goto eakyagcgwegumqqq;
        sucgueksmmwgekau:
        skamksaaqymicwgm:
        goto egkqesmwiiaqiiyc;
        umymemssaqquqisa:
        if (!$uamcoiueqaamsqma) {
            goto skamksaaqymicwgm;
        }
        goto asywiwgmyyoikyke;
        asywiwgmyyoikyke:
        $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\144" => $aokagokqyuysuksm, "\x6c\x65\166\145\154" => ManipulateArray::get($uamcoiueqaamsqma, "\x6c\145\166\x65\154", self::NOTICE_INFO), "\155\x65\163\x73\x61\x67\145" => ManipulateArray::get($uamcoiueqaamsqma, "\x6d\x65\163\163\141\x67\x65", self::NOTICE_INFO)]));
        goto sucgueksmmwgekau;
        eakyagcgwegumqqq:
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        goto kqiiyyqmssquuoic;
        ycemmsosewuoyiqs:
        ymasgcocsigmuwoc:
        goto aqimagkgyewmgkyw;
        wgagqmumyekewuge:
        ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        goto gscssgigiaqmgiuw;
        kqiiyyqmssquuoic:
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        goto oeuqcqkguageoagc;
        gscssgigiaqmgiuw:
        ymamscycaiaguigo:
        goto muiggeckwwywcusy;
        imkoimywaemoquiu:
        $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        goto ycemmsosewuoyiqs;
        aqimagkgyewmgkyw:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ssuiuyiqqcwciysg;
        }
        goto cywkuyeqqawqwgwo;
        kiswkeissywuosao:
        goto ymamscycaiaguigo;
        goto wqkekssiaiaqkqck;
        aouekkmogmyoeguw:
        if (!$megmggkiokqkcwou) {
            goto ymasgcocsigmuwoc;
        }
        goto imkoimywaemoquiu;
        wqkekssiaiaqkqck:
        ssuiuyiqqcwciysg:
        goto wgagqmumyekewuge;
        cywkuyeqqawqwgwo:
        $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        goto kiswkeissywuosao;
        gwgqcomgikwoquyy:
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        goto aouekkmogmyoeguw;
        oeuqcqkguageoagc:
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ["\x6c\145\x76\x65\154" => $iqaosyayeiuaisqi, "\155\145\x73\163\141\x67\x65" => $uamcoiueqaamsqma]];
        goto gwgqcomgikwoquyy;
        muiggeckwwywcusy:
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
