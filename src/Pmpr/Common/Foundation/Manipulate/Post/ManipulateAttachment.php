<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto ckgqqiewiuyycyee;
        qkiqgucaomigsesq:
        uwwkacwywyygyomc:
        goto uaeuiiegyuoocksu;
        uaeuiiegyuoocksu:
        return $wkuikksoimmikkek;
        goto aqqemqcsowckquqa;
        oqssaoscmiskagum:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto uwwkacwywyygyomc;
        }
        goto ukkegcmwcuymceua;
        ukkegcmwcuymceua:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto qkiqgucaomigsesq;
        eyqugyuuucmscwqg:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto ciqusemcegueoegm;
        ckgqqiewiuyycyee:
        $wkuikksoimmikkek = [];
        goto eyqugyuuucmscwqg;
        ciqusemcegueoegm:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto eckqskkgosseskmc;
            kuacwismecyuequy:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto qcoagmaceeioumey;
            qcoagmaceeioumey:
            yukqeyeyuucieqga:
            goto uaqieigykmeagcoi;
            uaqieigykmeagcoi:
            uamaycseqskcgogs:
            goto auymguqowwoccwiq;
            acmaoyccqewmweaw:
            if (!$qaiwqwwemmyyqosy) {
                goto yukqeyeyuucieqga;
            }
            goto kuacwismecyuequy;
            eckqskkgosseskmc:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto acmaoyccqewmweaw;
            auymguqowwoccwiq:
        }
        goto gguiymqokicqscom;
        smewgosmeuaqukya:
        global $_wp_additional_image_sizes;
        goto oqssaoscmiskagum;
        gguiymqokicqscom:
        wmyewgwkuyyswgge:
        goto smewgosmeuaqukya;
        aqqemqcsowckquqa:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto ueikewqggcwskseu;
        iiqwggyqyekwkako:
        wscyocimqesyaqeu:
        goto kckcsuuiykyaawke;
        squouqwsoywkecwy:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto ewauqkmweawmkgas;
        }
        goto mkkeagwoaksoqsii;
        ciwcueuqsueyeyeu:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto ooasiqaamqsiuqio;
        ooasiqaamqsiuqio:
        if ($qaiwqwwemmyyqosy) {
            goto wscyocimqesyaqeu;
        }
        goto uyqmicaayqwwommo;
        mkkeagwoaksoqsii:
        $qaiwqwwemmyyqosy = ["\143\162\157\x70" => $euciqcqmqamuoqga, "\167\151\x64\x74\x68" => $qeswwaqqsyymqawg, "\x68\145\151\147\x68\x74" => $cswemwoyesycwkuq];
        goto uaaouwkcigacguou;
        uyqmicaayqwwommo:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\143\162\x6f\160"));
        goto scioseuqqegcycuu;
        ueikewqggcwskseu:
        global $_wp_additional_image_sizes;
        goto ciwcueuqsueyeyeu;
        kckcsuuiykyaawke:
        return $qaiwqwwemmyyqosy;
        goto egcakiyaioiqacsg;
        egoewmaccsammqkc:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x73\151\172\x65\137\150"));
        goto squouqwsoywkecwy;
        uaaouwkcigacguou:
        ewauqkmweawmkgas:
        goto iiqwggyqyekwkako;
        scioseuqqegcycuu:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\x73\x69\172\145\137\x77"));
        goto egoewmaccsammqkc;
        egcakiyaioiqacsg:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\141\164\x74\141\143\150\155\x65\156\x74");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto muaoymyciyauqiae;
        amkyoauqecoimiau:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto uueakweiqiqqukes;
        ogqgmqiweiwqeyck:
        wcywgsiukiucoyau:
        goto oskmiqqwqkuyugqq;
        uueakweiqiqqukes:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x64\x6f\x77\156\154\157\141\144\57{$ymacoouqwcqwwagu}\x2f";
        goto ogqgmqiweiwqeyck;
        taqemmwguqueqemw:
        if (!$aokagokqyuysuksm) {
            goto wcywgsiukiucoyau;
        }
        goto amkyoauqecoimiau;
        ooisukscqugmceuy:
        return $iwywmkygwewiamwm;
        goto waeweckgowcciukq;
        muaoymyciyauqiae:
        $iwywmkygwewiamwm = false;
        goto uyqqcioceqguesgw;
        uyqqcioceqguesgw:
        if (!$aiooqyausygaasqm) {
            goto iamagkcimokqwswc;
        }
        goto mqukeuyogggewmmu;
        oskmiqqwqkuyugqq:
        iamagkcimokqwswc:
        goto ooisukscqugmceuy;
        mqukeuyogggewmmu:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto taqemmwguqueqemw;
        waeweckgowcciukq:
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x66\165\154\x6c")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\150\x75\155\x62\156\x61\151\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto kkwammqmykqmseky;
        emmwgomqmskywumg:
        qesiqimsweuqacgc:
        goto gkcqguoasqokuaug;
        gkoeukkaesoaseqg:
        goto amaqgiegqwsmcqak;
        goto emmwgomqmskywumg;
        qqgmsukugueeaesq:
        return $siquossayskcwkea;
        goto acqyyksaoeeomiia;
        uagqceymsywggcgs:
        amaqgiegqwsmcqak:
        goto omysmgiqyswuigkq;
        omysmgiqyswuigkq:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\150\162\x65\x66" => $iwywmkygwewiamwm, "\x74\151\164\154\145" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\x74\x61\x72\x67\x65\x74" => "\x5f\x62\154\141\156\153", "\x64\x6f\x77\x6e\154\157\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]);
        goto ceacseyocykwqyyw;
        oaeqccuiuqwqomeg:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto wwockyuqacckgmkm;
        }
        goto ssmawuwisimwmqsa;
        gqacwwimmmoswagw:
        if ($acsweksygkmmgggk) {
            goto qesiqimsweuqacgc;
        }
        goto gmgomyaaquiiekcg;
        gkcqguoasqokuaug:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto uagqceymsywggcgs;
        ssmawuwisimwmqsa:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto gqacwwimmmoswagw;
        ceacseyocykwqyyw:
        wwockyuqacckgmkm:
        goto qqgmsukugueeaesq;
        kkwammqmykqmseky:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto oaeqccuiuqwqomeg;
        gmgomyaaquiiekcg:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto gkoeukkaesoaseqg;
        acqyyksaoeeomiia:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto gyuwiiamkaoiqoyg;
        ikmkcieiyggeokam:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto ogaykeacicqmowss;
        }
        goto mcoegugoeeuowgkq;
        isuykcgsgyyqogeq:
        return false;
        goto qkcyoowaicaciwcg;
        mcuwmuamkysmycuq:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto ikmkcieiyggeokam;
        qkcyoowaicaciwcg:
        wmysaywgeqwcaims:
        goto aisysqymsawuomqo;
        ewimgmyosqwoeawa:
        $miawkwqioaeasiig = wp_upload_dir();
        goto oeuecmgcqammueiw;
        mcoegugoeeuowgkq:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto yqgcksakiqqsuqec;
            igeaueoqcuacaims:
            saimqwoekaggasik:
            goto eaeciuwyqckwomio;
            eoyikamgogkskgao:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto saimqwoekaggasik;
            }
            goto ksimceecsmqscemk;
            yqgcksakiqqsuqec:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto kyqwosmmiuemmkug;
            ugmkgeamwiemieag:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\x66\151\x6c\145"]);
            goto eoyikamgogkskgao;
            jycseygmyuiggacq:
            goto cqomyeiacimqacuw;
            goto igeaueoqcuacaims;
            kyqwosmmiuemmkug:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\x73\x69\172\x65\x73"]) ? wp_list_pluck($ugugimquukqwogge["\163\151\x7a\x65\163"], "\146\x69\154\x65") : [];
            goto ugmkgeamwiemieag;
            ksimceecsmqscemk:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto jycseygmyuiggacq;
            eaeciuwyqckwomio:
            myoocyaewqimqeui:
            goto kcsmyiqgeukocugm;
            kcsmyiqgeukocugm:
        }
        goto saaeyiqggocsqici;
        giimkwieukqwesyc:
        $ywmkwiwkosakssii = ["\160\157\x73\164\137\x74\171\160\x65" => "\x61\x74\x74\x61\x63\x68\155\145\x6e\164", "\160\157\163\x74\137\x73\x74\141\x74\x75\163" => "\x69\156\150\145\162\151\x74", "\x66\x69\145\154\144\163" => "\x69\144\163", "\x6d\x65\164\x61\137\161\165\145\162\x79" => [["\x76\x61\154\165\x65" => $qogsmwakwacwqogk, "\x63\157\x6d\160\x61\x72\145" => "\114\x49\x4b\105", "\x6b\x65\x79" => "\137\167\160\x5f\141\164\164\x61\x63\150\155\x65\x6e\164\137\x6d\x65\164\141\144\x61\164\141"]]];
        goto mcuwmuamkysmycuq;
        gyuwiiamkaoiqoyg:
        $aokagokqyuysuksm = 0;
        goto ewimgmyosqwoeawa;
        aisysqymsawuomqo:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto giimkwieukqwesyc;
        meyokciwwsksmykm:
        ogaykeacicqmowss:
        goto ocsmamaueksquiau;
        oeuecmgcqammueiw:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\141\163\x65\165\162\x6c"] . "\x2f"))) {
            goto wmysaywgeqwcaims;
        }
        goto isuykcgsgyyqogeq;
        saaeyiqggocsqici:
        cqomyeiacimqacuw:
        goto meyokciwwsksmykm;
        ocsmamaueksquiau:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto maowyiwmuococgku;
        maowyiwmuococgku:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\150\165\x6d\142\x6e\141\x69\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto twmiwuiakgeomosm;
        koqmmigmqsawcqci:
        if (!$sscegwueamckwmcy) {
            goto aismaqwymeosqoyq;
        }
        goto reuuqqqwucksmwwo;
        sguwkgiguoscuowe:
        return $nsmgceoqaqogqmuw;
        goto qweguymgasscgmec;
        twmiwuiakgeomosm:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto koqmmigmqsawcqci;
        gwoqcyqoguaykmae:
        aismaqwymeosqoyq:
        goto sguwkgiguoscuowe;
        reuuqqqwucksmwwo:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\167\160\x5f\x67\145\164\137\141\x74\164\141\x63\150\x6d\x65\x6e\x74\137\151\x6d\x61\147\145", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto gwoqcyqoguaykmae;
        qweguymgasscgmec:
    }
}
