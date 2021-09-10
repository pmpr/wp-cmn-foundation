<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto oysecwgkqeacouqw;
        ecckggwkscqiewwu:
        return $wkuikksoimmikkek;
        goto mggoeksacaimyqkg;
        iasmguggqccoqgqg:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto wugkmusyoygmkqqe;
        }
        goto kamgwaowucoswyym;
        kamgwaowucoswyym:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto umwakiomkqmysuaw;
        icaauuyceicoqeyw:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto yucmkqgkmoemmkig;
            yucmkqgkmoemmkig:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto mskwaaokyikicquk;
            oqucmsieeqcyimuy:
            uyuqcoucaoqcmwos:
            goto csiksyqeyomuyyaw;
            mskwaaokyikicquk:
            if (!$qaiwqwwemmyyqosy) {
                goto uyuqcoucaoqcmwos;
            }
            goto masysmcwwyggkoae;
            csiksyqeyomuyyaw:
            egcmycuugqcugeii:
            goto yqyyymusqwmeiywm;
            masysmcwwyggkoae:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto oqucmsieeqcyimuy;
            yqyyymusqwmeiywm:
        }
        goto kwgcqewsuiemmcgu;
        akkkmwcmiugmgqim:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto icaauuyceicoqeyw;
        kwgcqewsuiemmcgu:
        gmuoosscgmucqgms:
        goto qqcsmicsiguamkmi;
        umwakiomkqmysuaw:
        wugkmusyoygmkqqe:
        goto ecckggwkscqiewwu;
        qqcsmicsiguamkmi:
        global $_wp_additional_image_sizes;
        goto iasmguggqccoqgqg;
        oysecwgkqeacouqw:
        $wkuikksoimmikkek = [];
        goto akkkmwcmiugmgqim;
        mggoeksacaimyqkg:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto cimmeauiguggmemk;
        cuaiomeoucgeaeqy:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\151\172\145\x5f\167"));
        goto cykwmywaqcgiikom;
        igyogusiuygqysyi:
        ycsuucmigqakaesa:
        goto ccmmogikyswuiyya;
        yieucwaowagkucaa:
        ugoiguwucqucmsyq:
        goto igyogusiuygqysyi;
        cimmeauiguggmemk:
        global $_wp_additional_image_sizes;
        goto wmmueeiawggqookk;
        ccmmogikyswuiyya:
        return $qaiwqwwemmyyqosy;
        goto ukmkckcqukygqosw;
        sykguyswkwowkmys:
        if ($qaiwqwwemmyyqosy) {
            goto ycsuucmigqakaesa;
        }
        goto ckocskkiwaikikse;
        ckocskkiwaikikse:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x63\162\x6f\x70"));
        goto cuaiomeoucgeaeqy;
        csgaywiswymcaqmy:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto ugoiguwucqucmsyq;
        }
        goto icmgciksummeugya;
        cykwmywaqcgiikom:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\151\x7a\145\137\150"));
        goto csgaywiswymcaqmy;
        icmgciksummeugya:
        $qaiwqwwemmyyqosy = ["\143\162\x6f\160" => $euciqcqmqamuoqga, "\x77\151\x64\164\150" => $qeswwaqqsyymqawg, "\150\x65\151\x67\150\x74" => $cswemwoyesycwkuq];
        goto yieucwaowagkucaa;
        wmmueeiawggqookk:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto sykguyswkwowkmys;
        ukmkckcqukygqosw:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\141\x74\x74\x61\x63\x68\x6d\145\x6e\164");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto waywoikgwqugqiay;
        yysayeckiesuqcsa:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto eqoegikgmweyoeca;
        cwycogckouesaesk:
        return $iwywmkygwewiamwm;
        goto smqeqmsuawsimmcs;
        ssausyueecggqcec:
        if (!$aiooqyausygaasqm) {
            goto sgkcimyicykmyueu;
        }
        goto yysayeckiesuqcsa;
        eqoegikgmweyoeca:
        if (!$aokagokqyuysuksm) {
            goto eawsywkeuwsmmsuu;
        }
        goto koqequoesgsqmeye;
        koqequoesgsqmeye:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto myyskgacygigeayu;
        qucseiiyqgwmyyik:
        eawsywkeuwsmmsuu:
        goto awywowqmgkeiawky;
        waywoikgwqugqiay:
        $iwywmkygwewiamwm = false;
        goto ssausyueecggqcec;
        myyskgacygigeayu:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\157\167\156\154\x6f\x61\x64\x2f{$ymacoouqwcqwwagu}\x2f";
        goto qucseiiyqgwmyyik;
        awywowqmgkeiawky:
        sgkcimyicykmyueu:
        goto cwycogckouesaesk;
        smqeqmsuawsimmcs:
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x66\165\154\154")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\x6d\142\156\141\x69\x6c", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto gwkaweoeoyumiagw;
        kicogigewkgmqwym:
        kikyssscmqesqkaa:
        goto akggggqgqmmgcaiy;
        syoykqauiiuuiaae:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto egymseeqcsgsiuqy;
        osuqweqwqukwwaqc:
        if ($acsweksygkmmgggk) {
            goto kikyssscmqesqkaa;
        }
        goto syoykqauiiuuiaae;
        gwkaweoeoyumiagw:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto qkqqysiiugqceokw;
        egymseeqcsgsiuqy:
        goto igqswueceimwyksq;
        goto kicogigewkgmqwym;
        qkqqysiiugqceokw:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto weccmykeusmgswkc;
        }
        goto kykyayauiiamcskk;
        oiswowekmymaweog:
        igqswueceimwyksq:
        goto wwgsooeeqeiaswoi;
        yisacmyycgcuaimi:
        return $siquossayskcwkea;
        goto wokiacaaeqwoamgu;
        oqcooececqwqwiya:
        weccmykeusmgswkc:
        goto yisacmyycgcuaimi;
        kykyayauiiamcskk:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto osuqweqwqukwwaqc;
        akggggqgqmmgcaiy:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto oiswowekmymaweog;
        wwgsooeeqeiaswoi:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\150\x72\x65\146" => $iwywmkygwewiamwm, "\x74\151\164\154\x65" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\x74\x61\162\x67\x65\164" => "\137\x62\154\141\156\153", "\x64\157\167\156\154\x6f\141\x64" => rawurldecode(basename($acqcekoeswseswws))]);
        goto oqcooececqwqwiya;
        wokiacaaeqwoamgu:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto qaiqiokieeggcoym;
        uayoaukucommuwki:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto okemiqakkiysqqyc;
        sakqwiaagsykwauy:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto aseackwooioggwyc;
        kaeyaqskwuaaagmg:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto mygqkusgqoqgwayy;
        ioamsuyiukoaawiw:
        aoquqswgmegqeemm:
        goto sakqwiaagsykwauy;
        iucgiywuayaqoiis:
        sqqmacumauekywma:
        goto ioamsuyiukoaawiw;
        gykwuammuiuimcqe:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\x62\141\x73\145\x75\x72\154"] . "\x2f"))) {
            goto qcciqymcyggowaow;
        }
        goto ycioskgosgkaocui;
        ucgaaaeumkcmsios:
        $miawkwqioaeasiig = wp_upload_dir();
        goto gykwuammuiuimcqe;
        mkcsuwyggueicysc:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto mquqqwyaksscucig;
            ccgwgmsawecwassc:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\x66\x69\154\145"]);
            goto osquygowswqqgcqu;
            mquqqwyaksscucig:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto ygoekseuwuqgsqiw;
            kwkwaqqwaoewgqwc:
            imggygaykcwqeeqa:
            goto weqaocmesamqkcic;
            ygoekseuwuqgsqiw:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\x73\x69\x7a\145\x73"]) ? wp_list_pluck($ugugimquukqwogge["\x73\x69\x7a\x65\x73"], "\146\x69\x6c\x65") : [];
            goto ccgwgmsawecwassc;
            aygaeqqgkosiccik:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto wwuscguquemeomsm;
            wwuscguquemeomsm:
            goto sqqmacumauekywma;
            goto kwkwaqqwaoewgqwc;
            osquygowswqqgcqu:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto imggygaykcwqeeqa;
            }
            goto aygaeqqgkosiccik;
            weqaocmesamqkcic:
            kckywuggymioosew:
            goto kykqywkcmkkiimqu;
            kykqywkcmkkiimqu:
        }
        goto iucgiywuayaqoiis;
        ycioskgosgkaocui:
        return false;
        goto qumcciymugkuayyo;
        mygqkusgqoqgwayy:
        $ywmkwiwkosakssii = ["\x70\x6f\x73\x74\137\164\171\x70\x65" => "\x61\164\x74\141\x63\x68\155\145\x6e\x74", "\x70\x6f\x73\x74\137\x73\164\141\164\165\x73" => "\151\x6e\150\x65\x72\151\x74", "\x66\x69\145\x6c\x64\x73" => "\151\x64\x73", "\x6d\x65\164\x61\x5f\161\x75\x65\x72\x79" => [["\x76\x61\154\x75\145" => $qogsmwakwacwqogk, "\x63\x6f\155\x70\141\162\145" => "\114\111\113\x45", "\x6b\x65\171" => "\x5f\x77\x70\x5f\x61\x74\164\141\143\x68\155\145\x6e\164\137\155\x65\x74\x61\144\141\164\141"]]];
        goto uayoaukucommuwki;
        qaiqiokieeggcoym:
        $aokagokqyuysuksm = 0;
        goto ucgaaaeumkcmsios;
        qumcciymugkuayyo:
        qcciqymcyggowaow:
        goto kaeyaqskwuaaagmg;
        okemiqakkiysqqyc:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto aoquqswgmegqeemm;
        }
        goto mkcsuwyggueicysc;
        aseackwooioggwyc:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\x68\x75\x6d\142\156\141\151\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto eykcgaaeakyayico;
        iwsgeyycmqmicaag:
        if (!$sscegwueamckwmcy) {
            goto ogasqekksgksomcu;
        }
        goto uaguekkygoeqeuoy;
        uaguekkygoeqeuoy:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\x77\x70\137\147\x65\164\137\x61\x74\164\x61\143\150\155\x65\156\x74\x5f\151\x6d\x61\147\x65", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto ausqcauoasmqoqiq;
        ausqcauoasmqoqiq:
        ogasqekksgksomcu:
        goto wgkewusaiaqwwmmk;
        eykcgaaeakyayico:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto iwsgeyycmqmicaag;
        wgkewusaiaqwwmmk:
        return $nsmgceoqaqogqmuw;
        goto ooweqiekgaaqweig;
        ooweqiekgaaqweig:
    }
}
