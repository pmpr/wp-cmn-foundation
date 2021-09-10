<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto isuykcgsgyyqogeq;
        mcuwmuamkysmycuq:
        global $_wp_additional_image_sizes;
        goto ikmkcieiyggeokam;
        mcoegugoeeuowgkq:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto saaeyiqggocsqici;
        giimkwieukqwesyc:
        eoyikamgogkskgao:
        goto mcuwmuamkysmycuq;
        saaeyiqggocsqici:
        oeuecmgcqammueiw:
        goto meyokciwwsksmykm;
        meyokciwwsksmykm:
        return $wkuikksoimmikkek;
        goto ocsmamaueksquiau;
        isuykcgsgyyqogeq:
        $wkuikksoimmikkek = [];
        goto qkcyoowaicaciwcg;
        ikmkcieiyggeokam:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto oeuecmgcqammueiw;
        }
        goto mcoegugoeeuowgkq;
        aisysqymsawuomqo:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto igeaueoqcuacaims;
            kcsmyiqgeukocugm:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto ogaykeacicqmowss;
            ogaykeacicqmowss:
            jycseygmyuiggacq:
            goto gyuwiiamkaoiqoyg;
            gyuwiiamkaoiqoyg:
            ksimceecsmqscemk:
            goto ewimgmyosqwoeawa;
            eaeciuwyqckwomio:
            if (!$qaiwqwwemmyyqosy) {
                goto jycseygmyuiggacq;
            }
            goto kcsmyiqgeukocugm;
            igeaueoqcuacaims:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto eaeciuwyqckwomio;
            ewimgmyosqwoeawa:
        }
        goto giimkwieukqwesyc;
        qkcyoowaicaciwcg:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto aisysqymsawuomqo;
        ocsmamaueksquiau:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto twmiwuiakgeomosm;
        koqmmigmqsawcqci:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto reuuqqqwucksmwwo;
        gwoqcyqoguaykmae:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x63\162\x6f\160"));
        goto sguwkgiguoscuowe;
        reuuqqqwucksmwwo:
        if ($qaiwqwwemmyyqosy) {
            goto aismaqwymeosqoyq;
        }
        goto gwoqcyqoguaykmae;
        sguwkgiguoscuowe:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\x69\172\145\137\167"));
        goto qweguymgasscgmec;
        qweguymgasscgmec:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\163\x69\172\x65\137\150"));
        goto gkiskesiwecgcuyo;
        iygyaykccksksmka:
        return $qaiwqwwemmyyqosy;
        goto imqeiaoiomcusmys;
        gkiskesiwecgcuyo:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto maowyiwmuococgku;
        }
        goto ciqqmaiawkmiwgmy;
        twmiwuiakgeomosm:
        global $_wp_additional_image_sizes;
        goto koqmmigmqsawcqci;
        ykuaoqecgmioscey:
        maowyiwmuococgku:
        goto qmyawqywcoawoeim;
        ciqqmaiawkmiwgmy:
        $qaiwqwwemmyyqosy = ["\x63\x72\157\160" => $euciqcqmqamuoqga, "\x77\151\144\164\x68" => $qeswwaqqsyymqawg, "\x68\x65\151\147\150\x74" => $cswemwoyesycwkuq];
        goto ykuaoqecgmioscey;
        qmyawqywcoawoeim:
        aismaqwymeosqoyq:
        goto iygyaykccksksmka;
        imqeiaoiomcusmys:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\x61\164\164\x61\x63\150\x6d\x65\x6e\x74");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto iwwsckgkuyykggwm;
        mswykgiqgmcugqes:
        if (!$aiooqyausygaasqm) {
            goto igikiyqycooasgey;
        }
        goto wmqcsqscwmkocacm;
        wmqcsqscwmkocacm:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto saqyqgeqayiqykao;
        saqyqgeqayiqykao:
        if (!$aokagokqyuysuksm) {
            goto qiagkoiassqawesu;
        }
        goto gauuayyuaimeqgms;
        seygmewkwgggmgqa:
        igikiyqycooasgey:
        goto qwkmscimkwuuqkyy;
        koycomwmwaigmeim:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\144\x6f\167\156\154\x6f\x61\144\57{$ymacoouqwcqwwagu}\57";
        goto kiewsmqeekaymgeo;
        gauuayyuaimeqgms:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto koycomwmwaigmeim;
        qwkmscimkwuuqkyy:
        return $iwywmkygwewiamwm;
        goto nisqcoeqcgqqqaai;
        iwwsckgkuyykggwm:
        $iwywmkygwewiamwm = false;
        goto mswykgiqgmcugqes;
        kiewsmqeekaymgeo:
        qiagkoiassqawesu:
        goto seygmewkwgggmgqa;
        nisqcoeqcgqqqaai:
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x66\x75\154\x6c")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\165\x6d\x62\x6e\x61\151\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto eqsoeagckkeueyoy;
        iewmgooekimcooem:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto awomwemokoaommck;
        wyowoaggksqmaums:
        gekgyswocciysksa:
        goto iewmgooekimcooem;
        qewioskiigymoaae:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto wgqeiquyekoaaiqs;
        }
        goto uscqgqwkeqmmeqay;
        ggogugoaicomuice:
        return $siquossayskcwkea;
        goto gmuoosscgmucqgms;
        msykyyqmmqsyqmkg:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\150\x72\x65\146" => $iwywmkygwewiamwm, "\x74\x69\x74\154\145" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\x74\x61\x72\x67\145\x74" => "\137\x62\x6c\141\x6e\153", "\x64\157\167\x6e\154\x6f\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]);
        goto wcimeswkkmqyaqoa;
        awomwemokoaommck:
        sywsuomwieouwayw:
        goto msykyyqmmqsyqmkg;
        uscqgqwkeqmmeqay:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto aeamuikiyeskkkee;
        aeamuikiyeskkkee:
        if ($acsweksygkmmgggk) {
            goto gekgyswocciysksa;
        }
        goto wiuuqwgymuyoiciu;
        wiuuqwgymuyoiciu:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto iuuekasywyywqcmy;
        iuuekasywyywqcmy:
        goto sywsuomwieouwayw;
        goto wyowoaggksqmaums;
        wcimeswkkmqyaqoa:
        wgqeiquyekoaaiqs:
        goto ggogugoaicomuice;
        eqsoeagckkeueyoy:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto qewioskiigymoaae;
        gmuoosscgmucqgms:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto iasmguggqccoqgqg;
        kamgwaowucoswyym:
        $miawkwqioaeasiig = wp_upload_dir();
        goto umwakiomkqmysuaw;
        iasmguggqccoqgqg:
        $aokagokqyuysuksm = 0;
        goto kamgwaowucoswyym;
        ecckggwkscqiewwu:
        return false;
        goto mggoeksacaimyqkg;
        cimmeauiguggmemk:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto wmmueeiawggqookk;
        ckocskkiwaikikse:
        uyuqcoucaoqcmwos:
        goto cuaiomeoucgeaeqy;
        umwakiomkqmysuaw:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\x62\141\163\x65\165\x72\154"] . "\x2f"))) {
            goto egcmycuugqcugeii;
        }
        goto ecckggwkscqiewwu;
        ugoiguwucqucmsyq:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto ycsuucmigqakaesa;
        cykwmywaqcgiikom:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto csgaywiswymcaqmy;
        mggoeksacaimyqkg:
        egcmycuugqcugeii:
        goto ugoiguwucqucmsyq;
        cuaiomeoucgeaeqy:
        qqcsmicsiguamkmi:
        goto cykwmywaqcgiikom;
        sykguyswkwowkmys:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto masysmcwwyggkoae;
            masysmcwwyggkoae:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto oqucmsieeqcyimuy;
            yqyyymusqwmeiywm:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto mskwaaokyikicquk;
            }
            goto wugkmusyoygmkqqe;
            oysecwgkqeacouqw:
            goto uyuqcoucaoqcmwos;
            goto akkkmwcmiugmgqim;
            akkkmwcmiugmgqim:
            mskwaaokyikicquk:
            goto icaauuyceicoqeyw;
            wugkmusyoygmkqqe:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto oysecwgkqeacouqw;
            csiksyqeyomuyyaw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\x66\151\154\145"]);
            goto yqyyymusqwmeiywm;
            icaauuyceicoqeyw:
            yucmkqgkmoemmkig:
            goto kwgcqewsuiemmcgu;
            oqucmsieeqcyimuy:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\x69\x7a\x65\163"]) ? wp_list_pluck($ugugimquukqwogge["\x73\x69\172\x65\x73"], "\x66\151\x6c\x65") : [];
            goto csiksyqeyomuyyaw;
            kwgcqewsuiemmcgu:
        }
        goto ckocskkiwaikikse;
        wmmueeiawggqookk:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto qqcsmicsiguamkmi;
        }
        goto sykguyswkwowkmys;
        ycsuucmigqakaesa:
        $ywmkwiwkosakssii = ["\160\157\163\164\x5f\164\x79\160\145" => "\141\164\164\x61\143\x68\155\145\x6e\164", "\160\157\x73\164\137\x73\x74\x61\164\x75\x73" => "\x69\156\x68\145\x72\151\x74", "\146\x69\x65\x6c\x64\163" => "\x69\x64\x73", "\155\145\164\x61\137\x71\165\x65\162\x79" => [["\x76\141\154\165\145" => $qogsmwakwacwqogk, "\x63\157\155\160\141\x72\145" => "\x4c\x49\x4b\105", "\153\x65\171" => "\x5f\x77\160\x5f\x61\x74\x74\141\143\x68\x6d\x65\x6e\164\137\x6d\x65\164\141\144\x61\164\x61"]]];
        goto cimmeauiguggmemk;
        csgaywiswymcaqmy:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\150\x75\155\x62\x6e\141\151\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto yieucwaowagkucaa;
        eawsywkeuwsmmsuu:
        return $nsmgceoqaqogqmuw;
        goto sgkcimyicykmyueu;
        igyogusiuygqysyi:
        if (!$sscegwueamckwmcy) {
            goto icmgciksummeugya;
        }
        goto ccmmogikyswuiyya;
        yieucwaowagkucaa:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto igyogusiuygqysyi;
        ccmmogikyswuiyya:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\x77\160\x5f\147\145\x74\137\x61\164\x74\x61\143\x68\x6d\145\156\x74\137\x69\x6d\x61\147\x65", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto ukmkckcqukygqosw;
        ukmkckcqukygqosw:
        icmgciksummeugya:
        goto eawsywkeuwsmmsuu;
        sgkcimyicykmyueu:
    }
}
