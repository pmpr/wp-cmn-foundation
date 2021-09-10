<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        maowyiwmuococgku:
        aisysqymsawuomqo:
        goto aismaqwymeosqoyq;
        mcuwmuamkysmycuq:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto ikmkcieiyggeokam;
        aismaqwymeosqoyq:
        return $wkuikksoimmikkek;
        goto twmiwuiakgeomosm;
        saaeyiqggocsqici:
        global $_wp_additional_image_sizes;
        goto meyokciwwsksmykm;
        giimkwieukqwesyc:
        $wkuikksoimmikkek = [];
        goto mcuwmuamkysmycuq;
        mcoegugoeeuowgkq:
        igeaueoqcuacaims:
        goto saaeyiqggocsqici;
        ikmkcieiyggeokam:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto ogaykeacicqmowss;
            oeuecmgcqammueiw:
            kcsmyiqgeukocugm:
            goto isuykcgsgyyqogeq;
            ewimgmyosqwoeawa:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto oeuecmgcqammueiw;
            gyuwiiamkaoiqoyg:
            if (!$qaiwqwwemmyyqosy) {
                goto kcsmyiqgeukocugm;
            }
            goto ewimgmyosqwoeawa;
            ogaykeacicqmowss:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto gyuwiiamkaoiqoyg;
            isuykcgsgyyqogeq:
            eaeciuwyqckwomio:
            goto qkcyoowaicaciwcg;
            qkcyoowaicaciwcg:
        }
        goto mcoegugoeeuowgkq;
        ocsmamaueksquiau:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto maowyiwmuococgku;
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
        ykuaoqecgmioscey:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\163\151\x7a\x65\137\150"));
        goto qmyawqywcoawoeim;
        ciqqmaiawkmiwgmy:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\163\x69\x7a\x65\x5f\x77"));
        goto ykuaoqecgmioscey;
        igikiyqycooasgey:
        return $qaiwqwwemmyyqosy;
        goto iwwsckgkuyykggwm;
        imqeiaoiomcusmys:
        koqmmigmqsawcqci:
        goto qiagkoiassqawesu;
        qmyawqywcoawoeim:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto koqmmigmqsawcqci;
        }
        goto iygyaykccksksmka;
        iygyaykccksksmka:
        $qaiwqwwemmyyqosy = ["\143\x72\x6f\x70" => $euciqcqmqamuoqga, "\167\151\144\164\150" => $qeswwaqqsyymqawg, "\150\x65\x69\147\x68\164" => $cswemwoyesycwkuq];
        goto imqeiaoiomcusmys;
        qweguymgasscgmec:
        if ($qaiwqwwemmyyqosy) {
            goto reuuqqqwucksmwwo;
        }
        goto gkiskesiwecgcuyo;
        gwoqcyqoguaykmae:
        global $_wp_additional_image_sizes;
        goto sguwkgiguoscuowe;
        sguwkgiguoscuowe:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto qweguymgasscgmec;
        gkiskesiwecgcuyo:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\143\162\x6f\x70"));
        goto ciqqmaiawkmiwgmy;
        qiagkoiassqawesu:
        reuuqqqwucksmwwo:
        goto igikiyqycooasgey;
        iwwsckgkuyykggwm:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\141\x74\x74\141\x63\150\x6d\x65\x6e\x74");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto saqyqgeqayiqykao;
        gekgyswocciysksa:
        wmqcsqscwmkocacm:
        goto sywsuomwieouwayw;
        qwkmscimkwuuqkyy:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x64\157\x77\156\154\157\141\x64\x2f{$ymacoouqwcqwwagu}\57";
        goto nisqcoeqcgqqqaai;
        saqyqgeqayiqykao:
        $iwywmkygwewiamwm = false;
        goto gauuayyuaimeqgms;
        gauuayyuaimeqgms:
        if (!$aiooqyausygaasqm) {
            goto wmqcsqscwmkocacm;
        }
        goto koycomwmwaigmeim;
        nisqcoeqcgqqqaai:
        mswykgiqgmcugqes:
        goto gekgyswocciysksa;
        sywsuomwieouwayw:
        return $iwywmkygwewiamwm;
        goto wgqeiquyekoaaiqs;
        seygmewkwgggmgqa:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto qwkmscimkwuuqkyy;
        koycomwmwaigmeim:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto kiewsmqeekaymgeo;
        kiewsmqeekaymgeo:
        if (!$aokagokqyuysuksm) {
            goto mswykgiqgmcugqes;
        }
        goto seygmewkwgggmgqa;
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
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\146\165\154\154")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\x68\x75\x6d\x62\156\x61\x69\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto aeamuikiyeskkkee;
        egcmycuugqcugeii:
        uscqgqwkeqmmeqay:
        goto uyuqcoucaoqcmwos;
        wyowoaggksqmaums:
        if ($acsweksygkmmgggk) {
            goto eqsoeagckkeueyoy;
        }
        goto iewmgooekimcooem;
        iewmgooekimcooem:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto awomwemokoaommck;
        ggogugoaicomuice:
        qewioskiigymoaae:
        goto gmuoosscgmucqgms;
        uyuqcoucaoqcmwos:
        return $siquossayskcwkea;
        goto yucmkqgkmoemmkig;
        aeamuikiyeskkkee:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto wiuuqwgymuyoiciu;
        iuuekasywyywqcmy:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto wyowoaggksqmaums;
        msykyyqmmqsyqmkg:
        eqsoeagckkeueyoy:
        goto wcimeswkkmqyaqoa;
        awomwemokoaommck:
        goto qewioskiigymoaae;
        goto msykyyqmmqsyqmkg;
        wcimeswkkmqyaqoa:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto ggogugoaicomuice;
        wiuuqwgymuyoiciu:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto uscqgqwkeqmmeqay;
        }
        goto iuuekasywyywqcmy;
        gmuoosscgmucqgms:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\150\162\x65\x66" => $iwywmkygwewiamwm, "\x74\151\x74\154\145" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\164\141\x72\147\x65\x74" => "\x5f\x62\154\141\156\153", "\x64\x6f\x77\156\x6c\x6f\x61\144" => rawurldecode(basename($acqcekoeswseswws))]);
        goto egcmycuugqcugeii;
        yucmkqgkmoemmkig:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto ecckggwkscqiewwu;
        cuaiomeoucgeaeqy:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto umwakiomkqmysuaw;
        }
        goto cykwmywaqcgiikom;
        mggoeksacaimyqkg:
        $miawkwqioaeasiig = wp_upload_dir();
        goto ugoiguwucqucmsyq;
        cykwmywaqcgiikom:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto yqyyymusqwmeiywm;
            oysecwgkqeacouqw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\146\151\x6c\145"]);
            goto akkkmwcmiugmgqim;
            yqyyymusqwmeiywm:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto wugkmusyoygmkqqe;
            akkkmwcmiugmgqim:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto csiksyqeyomuyyaw;
            }
            goto icaauuyceicoqeyw;
            qqcsmicsiguamkmi:
            csiksyqeyomuyyaw:
            goto iasmguggqccoqgqg;
            kwgcqewsuiemmcgu:
            goto masysmcwwyggkoae;
            goto qqcsmicsiguamkmi;
            iasmguggqccoqgqg:
            oqucmsieeqcyimuy:
            goto kamgwaowucoswyym;
            wugkmusyoygmkqqe:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\x69\x7a\x65\x73"]) ? wp_list_pluck($ugugimquukqwogge["\x73\x69\172\145\x73"], "\x66\x69\x6c\145") : [];
            goto oysecwgkqeacouqw;
            icaauuyceicoqeyw:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto kwgcqewsuiemmcgu;
            kamgwaowucoswyym:
        }
        goto csgaywiswymcaqmy;
        ecckggwkscqiewwu:
        $aokagokqyuysuksm = 0;
        goto mggoeksacaimyqkg;
        cimmeauiguggmemk:
        mskwaaokyikicquk:
        goto wmmueeiawggqookk;
        ckocskkiwaikikse:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto cuaiomeoucgeaeqy;
        icmgciksummeugya:
        umwakiomkqmysuaw:
        goto yieucwaowagkucaa;
        wmmueeiawggqookk:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto sykguyswkwowkmys;
        sykguyswkwowkmys:
        $ywmkwiwkosakssii = ["\160\x6f\163\x74\137\x74\x79\160\145" => "\141\164\x74\141\143\x68\155\x65\156\x74", "\x70\157\x73\x74\137\163\x74\141\x74\x75\163" => "\x69\156\x68\x65\162\151\164", "\x66\151\145\x6c\144\x73" => "\151\144\163", "\x6d\x65\x74\141\x5f\x71\x75\145\x72\171" => [["\166\x61\x6c\x75\145" => $qogsmwakwacwqogk, "\x63\157\155\160\141\162\x65" => "\114\x49\113\105", "\x6b\145\171" => "\137\x77\x70\137\141\x74\x74\141\x63\x68\155\145\x6e\164\x5f\155\x65\164\x61\144\x61\x74\x61"]]];
        goto ckocskkiwaikikse;
        yieucwaowagkucaa:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto igyogusiuygqysyi;
        csgaywiswymcaqmy:
        masysmcwwyggkoae:
        goto icmgciksummeugya;
        ycsuucmigqakaesa:
        return false;
        goto cimmeauiguggmemk;
        ugoiguwucqucmsyq:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\141\163\145\165\162\x6c"] . "\x2f"))) {
            goto mskwaaokyikicquk;
        }
        goto ycsuucmigqakaesa;
        igyogusiuygqysyi:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\164\x68\165\x6d\142\x6e\x61\x69\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto ukmkckcqukygqosw;
        eawsywkeuwsmmsuu:
        if (!$sscegwueamckwmcy) {
            goto ccmmogikyswuiyya;
        }
        goto sgkcimyicykmyueu;
        waywoikgwqugqiay:
        ccmmogikyswuiyya:
        goto ssausyueecggqcec;
        ukmkckcqukygqosw:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto eawsywkeuwsmmsuu;
        sgkcimyicykmyueu:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\167\160\x5f\x67\145\x74\137\141\x74\164\141\143\150\x6d\x65\156\164\x5f\x69\155\x61\147\x65", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto waywoikgwqugqiay;
        ssausyueecggqcec:
        return $nsmgceoqaqogqmuw;
        goto yysayeckiesuqcsa;
        yysayeckiesuqcsa:
    }
}
