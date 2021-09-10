<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Filesystem;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WP_Post;
use WP_Query;

class ManipulateAttachment extends ManipulatePost
{
    
    public static function wgogyccwcysggaig() : array
    {
        goto giimkwieukqwesyc;
        mcuwmuamkysmycuq:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto ikmkcieiyggeokam;
        ocsmamaueksquiau:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto maowyiwmuococgku;
        maowyiwmuococgku:
        aisysqymsawuomqo:
        goto aismaqwymeosqoyq;
        saaeyiqggocsqici:
        global $_wp_additional_image_sizes;
        goto meyokciwwsksmykm;
        ikmkcieiyggeokam:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto ogaykeacicqmowss;
            ewimgmyosqwoeawa:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto oeuecmgcqammueiw;
            ogaykeacicqmowss:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto gyuwiiamkaoiqoyg;
            isuykcgsgyyqogeq:
            eaeciuwyqckwomio:
            goto qkcyoowaicaciwcg;
            oeuecmgcqammueiw:
            kcsmyiqgeukocugm:
            goto isuykcgsgyyqogeq;
            gyuwiiamkaoiqoyg:
            if (!$qaiwqwwemmyyqosy) {
                goto kcsmyiqgeukocugm;
            }
            goto ewimgmyosqwoeawa;
            qkcyoowaicaciwcg:
        }
        goto mcoegugoeeuowgkq;
        aismaqwymeosqoyq:
        return $wkuikksoimmikkek;
        goto twmiwuiakgeomosm;
        mcoegugoeeuowgkq:
        igeaueoqcuacaims:
        goto saaeyiqggocsqici;
        giimkwieukqwesyc:
        $wkuikksoimmikkek = [];
        goto mcuwmuamkysmycuq;
        meyokciwwsksmykm:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto aisysqymsawuomqo;
        }
        goto ocsmamaueksquiau;
        twmiwuiakgeomosm:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto gwoqcyqoguaykmae;
        ciqqmaiawkmiwgmy:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x73\x69\172\145\137\167"));
        goto ykuaoqecgmioscey;
        ykuaoqecgmioscey:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\x73\151\172\145\x5f\150"));
        goto qmyawqywcoawoeim;
        gkiskesiwecgcuyo:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\x63\x72\x6f\160"));
        goto ciqqmaiawkmiwgmy;
        qiagkoiassqawesu:
        reuuqqqwucksmwwo:
        goto igikiyqycooasgey;
        gwoqcyqoguaykmae:
        global $_wp_additional_image_sizes;
        goto sguwkgiguoscuowe;
        iygyaykccksksmka:
        $qaiwqwwemmyyqosy = ["\143\162\157\x70" => $euciqcqmqamuoqga, "\167\151\x64\x74\x68" => $qeswwaqqsyymqawg, "\150\x65\151\x67\x68\164" => $cswemwoyesycwkuq];
        goto imqeiaoiomcusmys;
        sguwkgiguoscuowe:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto qweguymgasscgmec;
        imqeiaoiomcusmys:
        koqmmigmqsawcqci:
        goto qiagkoiassqawesu;
        qweguymgasscgmec:
        if ($qaiwqwwemmyyqosy) {
            goto reuuqqqwucksmwwo;
        }
        goto gkiskesiwecgcuyo;
        qmyawqywcoawoeim:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto koqmmigmqsawcqci;
        }
        goto iygyaykccksksmka;
        igikiyqycooasgey:
        return $qaiwqwwemmyyqosy;
        goto iwwsckgkuyykggwm;
        iwwsckgkuyykggwm:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\141\x74\x74\141\143\x68\x6d\145\156\164");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto saqyqgeqayiqykao;
        gauuayyuaimeqgms:
        if (!$aiooqyausygaasqm) {
            goto wmqcsqscwmkocacm;
        }
        goto koycomwmwaigmeim;
        koycomwmwaigmeim:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto kiewsmqeekaymgeo;
        saqyqgeqayiqykao:
        $iwywmkygwewiamwm = false;
        goto gauuayyuaimeqgms;
        seygmewkwgggmgqa:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto qwkmscimkwuuqkyy;
        sywsuomwieouwayw:
        return $iwywmkygwewiamwm;
        goto wgqeiquyekoaaiqs;
        kiewsmqeekaymgeo:
        if (!$aokagokqyuysuksm) {
            goto mswykgiqgmcugqes;
        }
        goto seygmewkwgggmgqa;
        qwkmscimkwuuqkyy:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\157\167\x6e\x6c\157\x61\144\x2f{$ymacoouqwcqwwagu}\x2f";
        goto nisqcoeqcgqqqaai;
        gekgyswocciysksa:
        wmqcsqscwmkocacm:
        goto sywsuomwieouwayw;
        nisqcoeqcgqqqaai:
        mswykgiqgmcugqes:
        goto gekgyswocciysksa;
        wgqeiquyekoaaiqs:
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\146\165\x6c\x6c")
    {
        $mcqieaigyeeyaksm = self::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo);
        return ManipulateArray::get($mcqieaigyeeyaksm, 0);
    }
    
    public static function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk)
    {
        return DecoratorAttachment::smiqaaaecemiwugu(self::mwikyscisascoeea($aiooqyausygaasqm), $qogsmwakwacwqogk);
    }
    
    public static function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false)
    {
        return DecoratorAttachment::ckoygqywcuqasqea(self::mwikyscisascoeea($aiooqyausygaasqm), $beuoaqwyyugcgeas);
    }
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\x6d\142\156\141\x69\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto aeamuikiyeskkkee;
        iuuekasywyywqcmy:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto wyowoaggksqmaums;
        msykyyqmmqsyqmkg:
        eqsoeagckkeueyoy:
        goto wcimeswkkmqyaqoa;
        wcimeswkkmqyaqoa:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto ggogugoaicomuice;
        gmuoosscgmucqgms:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\x74\151\164\x6c\x65" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\164\x61\162\147\145\x74" => "\137\x62\x6c\x61\x6e\x6b", "\x64\x6f\x77\x6e\154\x6f\141\144" => rawurldecode(basename($acqcekoeswseswws))]);
        goto egcmycuugqcugeii;
        wiuuqwgymuyoiciu:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto uscqgqwkeqmmeqay;
        }
        goto iuuekasywyywqcmy;
        iewmgooekimcooem:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto awomwemokoaommck;
        ggogugoaicomuice:
        qewioskiigymoaae:
        goto gmuoosscgmucqgms;
        egcmycuugqcugeii:
        uscqgqwkeqmmeqay:
        goto uyuqcoucaoqcmwos;
        awomwemokoaommck:
        goto qewioskiigymoaae;
        goto msykyyqmmqsyqmkg;
        wyowoaggksqmaums:
        if ($acsweksygkmmgggk) {
            goto eqsoeagckkeueyoy;
        }
        goto iewmgooekimcooem;
        uyuqcoucaoqcmwos:
        return $siquossayskcwkea;
        goto yucmkqgkmoemmkig;
        aeamuikiyeskkkee:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto wiuuqwgymuyoiciu;
        yucmkqgkmoemmkig:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto ecckggwkscqiewwu;
        cimmeauiguggmemk:
        mskwaaokyikicquk:
        goto wmmueeiawggqookk;
        wmmueeiawggqookk:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto sykguyswkwowkmys;
        ecckggwkscqiewwu:
        $aokagokqyuysuksm = 0;
        goto mggoeksacaimyqkg;
        ckocskkiwaikikse:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto cuaiomeoucgeaeqy;
        cuaiomeoucgeaeqy:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto umwakiomkqmysuaw;
        }
        goto cykwmywaqcgiikom;
        cykwmywaqcgiikom:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto yqyyymusqwmeiywm;
            kwgcqewsuiemmcgu:
            goto masysmcwwyggkoae;
            goto qqcsmicsiguamkmi;
            qqcsmicsiguamkmi:
            csiksyqeyomuyyaw:
            goto iasmguggqccoqgqg;
            icaauuyceicoqeyw:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto kwgcqewsuiemmcgu;
            iasmguggqccoqgqg:
            oqucmsieeqcyimuy:
            goto kamgwaowucoswyym;
            oysecwgkqeacouqw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\146\x69\x6c\145"]);
            goto akkkmwcmiugmgqim;
            wugkmusyoygmkqqe:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\151\172\x65\x73"]) ? wp_list_pluck($ugugimquukqwogge["\163\x69\172\x65\163"], "\x66\x69\154\x65") : [];
            goto oysecwgkqeacouqw;
            yqyyymusqwmeiywm:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto wugkmusyoygmkqqe;
            akkkmwcmiugmgqim:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto csiksyqeyomuyyaw;
            }
            goto icaauuyceicoqeyw;
            kamgwaowucoswyym:
        }
        goto csgaywiswymcaqmy;
        icmgciksummeugya:
        umwakiomkqmysuaw:
        goto yieucwaowagkucaa;
        ycsuucmigqakaesa:
        return false;
        goto cimmeauiguggmemk;
        yieucwaowagkucaa:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto igyogusiuygqysyi;
        ugoiguwucqucmsyq:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\x62\141\163\145\x75\x72\x6c"] . "\x2f"))) {
            goto mskwaaokyikicquk;
        }
        goto ycsuucmigqakaesa;
        csgaywiswymcaqmy:
        masysmcwwyggkoae:
        goto icmgciksummeugya;
        mggoeksacaimyqkg:
        $miawkwqioaeasiig = wp_upload_dir();
        goto ugoiguwucqucmsyq;
        sykguyswkwowkmys:
        $ywmkwiwkosakssii = ["\x70\157\163\164\x5f\x74\x79\x70\145" => "\141\x74\164\141\x63\x68\x6d\x65\x6e\164", "\x70\x6f\163\164\137\163\164\141\x74\x75\163" => "\x69\156\150\x65\x72\151\x74", "\x66\151\x65\154\x64\x73" => "\x69\144\x73", "\155\x65\x74\x61\137\161\x75\x65\x72\171" => [["\x76\x61\154\x75\x65" => $qogsmwakwacwqogk, "\143\x6f\155\160\141\x72\145" => "\x4c\111\x4b\x45", "\153\x65\x79" => "\137\x77\160\x5f\x61\x74\164\x61\143\150\x6d\145\156\164\137\155\145\164\x61\144\x61\x74\x61"]]];
        goto ckocskkiwaikikse;
        igyogusiuygqysyi:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\150\165\155\x62\156\x61\x69\154", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto ukmkckcqukygqosw;
        waywoikgwqugqiay:
        ccmmogikyswuiyya:
        goto ssausyueecggqcec;
        ukmkckcqukygqosw:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto eawsywkeuwsmmsuu;
        eawsywkeuwsmmsuu:
        if (!$sscegwueamckwmcy) {
            goto ccmmogikyswuiyya;
        }
        goto sgkcimyicykmyueu;
        sgkcimyicykmyueu:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\x77\160\137\x67\145\x74\x5f\x61\164\164\141\143\150\155\x65\x6e\164\x5f\x69\x6d\141\147\145", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto waywoikgwqugqiay;
        ssausyueecggqcec:
        return $nsmgceoqaqogqmuw;
        goto yysayeckiesuqcsa;
        yysayeckiesuqcsa:
    }
}
