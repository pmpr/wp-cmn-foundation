<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto wugkmusyoygmkqqe;
        kamgwaowucoswyym:
        yqyyymusqwmeiywm:
        goto umwakiomkqmysuaw;
        umwakiomkqmysuaw:
        return $wkuikksoimmikkek;
        goto ecckggwkscqiewwu;
        wugkmusyoygmkqqe:
        $wkuikksoimmikkek = [];
        goto oysecwgkqeacouqw;
        kwgcqewsuiemmcgu:
        global $_wp_additional_image_sizes;
        goto qqcsmicsiguamkmi;
        qqcsmicsiguamkmi:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto yqyyymusqwmeiywm;
        }
        goto iasmguggqccoqgqg;
        oysecwgkqeacouqw:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto akkkmwcmiugmgqim;
        icaauuyceicoqeyw:
        ggogugoaicomuice:
        goto kwgcqewsuiemmcgu;
        akkkmwcmiugmgqim:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto uyuqcoucaoqcmwos;
            mskwaaokyikicquk:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto masysmcwwyggkoae;
            uyuqcoucaoqcmwos:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto yucmkqgkmoemmkig;
            masysmcwwyggkoae:
            egcmycuugqcugeii:
            goto oqucmsieeqcyimuy;
            yucmkqgkmoemmkig:
            if (!$qaiwqwwemmyyqosy) {
                goto egcmycuugqcugeii;
            }
            goto mskwaaokyikicquk;
            oqucmsieeqcyimuy:
            gmuoosscgmucqgms:
            goto csiksyqeyomuyyaw;
            csiksyqeyomuyyaw:
        }
        goto icaauuyceicoqeyw;
        iasmguggqccoqgqg:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto kamgwaowucoswyym;
        ecckggwkscqiewwu:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto ycsuucmigqakaesa;
        ckocskkiwaikikse:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\x69\172\145\137\x77"));
        goto cuaiomeoucgeaeqy;
        yieucwaowagkucaa:
        ugoiguwucqucmsyq:
        goto igyogusiuygqysyi;
        igyogusiuygqysyi:
        return $qaiwqwwemmyyqosy;
        goto ccmmogikyswuiyya;
        sykguyswkwowkmys:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\143\x72\x6f\160"));
        goto ckocskkiwaikikse;
        cuaiomeoucgeaeqy:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x73\151\172\145\137\150"));
        goto cykwmywaqcgiikom;
        icmgciksummeugya:
        mggoeksacaimyqkg:
        goto yieucwaowagkucaa;
        csgaywiswymcaqmy:
        $qaiwqwwemmyyqosy = ["\143\x72\x6f\160" => $euciqcqmqamuoqga, "\x77\x69\144\164\150" => $qeswwaqqsyymqawg, "\150\145\x69\x67\x68\x74" => $cswemwoyesycwkuq];
        goto icmgciksummeugya;
        cykwmywaqcgiikom:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto mggoeksacaimyqkg;
        }
        goto csgaywiswymcaqmy;
        ycsuucmigqakaesa:
        global $_wp_additional_image_sizes;
        goto cimmeauiguggmemk;
        wmmueeiawggqookk:
        if ($qaiwqwwemmyyqosy) {
            goto ugoiguwucqucmsyq;
        }
        goto sykguyswkwowkmys;
        cimmeauiguggmemk:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto wmmueeiawggqookk;
        ccmmogikyswuiyya:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\x61\164\164\x61\143\150\155\x65\156\164");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto sgkcimyicykmyueu;
        eqoegikgmweyoeca:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto koqequoesgsqmeye;
        koqequoesgsqmeye:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x64\157\x77\x6e\154\x6f\x61\x64\x2f{$ymacoouqwcqwwagu}\x2f";
        goto myyskgacygigeayu;
        ssausyueecggqcec:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto yysayeckiesuqcsa;
        waywoikgwqugqiay:
        if (!$aiooqyausygaasqm) {
            goto eawsywkeuwsmmsuu;
        }
        goto ssausyueecggqcec;
        awywowqmgkeiawky:
        return $iwywmkygwewiamwm;
        goto cwycogckouesaesk;
        yysayeckiesuqcsa:
        if (!$aokagokqyuysuksm) {
            goto ukmkckcqukygqosw;
        }
        goto eqoegikgmweyoeca;
        myyskgacygigeayu:
        ukmkckcqukygqosw:
        goto qucseiiyqgwmyyik;
        qucseiiyqgwmyyik:
        eawsywkeuwsmmsuu:
        goto awywowqmgkeiawky;
        sgkcimyicykmyueu:
        $iwywmkygwewiamwm = false;
        goto waywoikgwqugqiay;
        cwycogckouesaesk:
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\146\165\x6c\154")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\165\155\142\x6e\x61\151\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto weccmykeusmgswkc;
        wwgsooeeqeiaswoi:
        igqswueceimwyksq:
        goto oqcooececqwqwiya;
        egymseeqcsgsiuqy:
        smqeqmsuawsimmcs:
        goto kicogigewkgmqwym;
        syoykqauiiuuiaae:
        goto kikyssscmqesqkaa;
        goto egymseeqcsgsiuqy;
        kicogigewkgmqwym:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto akggggqgqmmgcaiy;
        akggggqgqmmgcaiy:
        kikyssscmqesqkaa:
        goto oiswowekmymaweog;
        weccmykeusmgswkc:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto gwkaweoeoyumiagw;
        gwkaweoeoyumiagw:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto igqswueceimwyksq;
        }
        goto qkqqysiiugqceokw;
        kykyayauiiamcskk:
        if ($acsweksygkmmgggk) {
            goto smqeqmsuawsimmcs;
        }
        goto osuqweqwqukwwaqc;
        osuqweqwqukwwaqc:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto syoykqauiiuuiaae;
        oqcooececqwqwiya:
        return $siquossayskcwkea;
        goto yisacmyycgcuaimi;
        qkqqysiiugqceokw:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto kykyayauiiamcskk;
        oiswowekmymaweog:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\x68\x72\x65\146" => $iwywmkygwewiamwm, "\164\x69\x74\154\145" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\164\x61\x72\x67\145\x74" => "\137\142\154\x61\x6e\153", "\x64\157\167\156\x6c\x6f\141\144" => rawurldecode(basename($acqcekoeswseswws))]);
        goto wwgsooeeqeiaswoi;
        yisacmyycgcuaimi:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto aoquqswgmegqeemm;
        kaeyaqskwuaaagmg:
        $ywmkwiwkosakssii = ["\x70\157\x73\164\x5f\x74\171\160\145" => "\141\164\164\141\x63\x68\155\145\x6e\x74", "\x70\157\163\x74\x5f\x73\x74\x61\x74\165\x73" => "\151\156\150\145\162\151\x74", "\146\x69\145\x6c\144\163" => "\x69\x64\163", "\x6d\x65\164\x61\137\x71\x75\x65\x72\x79" => [["\x76\x61\x6c\165\145" => $qogsmwakwacwqogk, "\x63\157\x6d\x70\x61\x72\145" => "\x4c\111\113\105", "\x6b\145\x79" => "\x5f\x77\x70\137\141\x74\164\x61\x63\150\x6d\145\x6e\x74\x5f\x6d\145\164\141\144\x61\164\141"]]];
        goto mygqkusgqoqgwayy;
        qaiqiokieeggcoym:
        $miawkwqioaeasiig = wp_upload_dir();
        goto ucgaaaeumkcmsios;
        qumcciymugkuayyo:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto kaeyaqskwuaaagmg;
        iucgiywuayaqoiis:
        kykqywkcmkkiimqu:
        goto ioamsuyiukoaawiw;
        uayoaukucommuwki:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto kykqywkcmkkiimqu;
        }
        goto okemiqakkiysqqyc;
        ucgaaaeumkcmsios:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\141\163\145\x75\162\154"] . "\57"))) {
            goto wokiacaaeqwoamgu;
        }
        goto gykwuammuiuimcqe;
        ycioskgosgkaocui:
        wokiacaaeqwoamgu:
        goto qumcciymugkuayyo;
        mygqkusgqoqgwayy:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto uayoaukucommuwki;
        ioamsuyiukoaawiw:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto sakqwiaagsykwauy;
        aoquqswgmegqeemm:
        $aokagokqyuysuksm = 0;
        goto qaiqiokieeggcoym;
        okemiqakkiysqqyc:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto imggygaykcwqeeqa;
            osquygowswqqgcqu:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto aygaeqqgkosiccik;
            ccgwgmsawecwassc:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto kckywuggymioosew;
            }
            goto osquygowswqqgcqu;
            imggygaykcwqeeqa:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto mquqqwyaksscucig;
            kwkwaqqwaoewgqwc:
            sqqmacumauekywma:
            goto weqaocmesamqkcic;
            wwuscguquemeomsm:
            kckywuggymioosew:
            goto kwkwaqqwaoewgqwc;
            mquqqwyaksscucig:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\x69\x7a\145\x73"]) ? wp_list_pluck($ugugimquukqwogge["\x73\x69\172\145\163"], "\146\x69\x6c\145") : [];
            goto ygoekseuwuqgsqiw;
            ygoekseuwuqgsqiw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\146\151\x6c\x65"]);
            goto ccgwgmsawecwassc;
            aygaeqqgkosiccik:
            goto qcciqymcyggowaow;
            goto wwuscguquemeomsm;
            weqaocmesamqkcic:
        }
        goto mkcsuwyggueicysc;
        mkcsuwyggueicysc:
        qcciqymcyggowaow:
        goto iucgiywuayaqoiis;
        gykwuammuiuimcqe:
        return false;
        goto ycioskgosgkaocui;
        sakqwiaagsykwauy:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\x68\x75\155\142\x6e\141\151\154", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto ogasqekksgksomcu;
        ausqcauoasmqoqiq:
        return $nsmgceoqaqogqmuw;
        goto wgkewusaiaqwwmmk;
        eykcgaaeakyayico:
        if (!$sscegwueamckwmcy) {
            goto aseackwooioggwyc;
        }
        goto iwsgeyycmqmicaag;
        uaguekkygoeqeuoy:
        aseackwooioggwyc:
        goto ausqcauoasmqoqiq;
        ogasqekksgksomcu:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto eykcgaaeakyayico;
        iwsgeyycmqmicaag:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\167\160\x5f\x67\145\164\x5f\141\x74\164\141\x63\x68\x6d\145\156\x74\137\x69\155\141\147\x65", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto uaguekkygoeqeuoy;
        wgkewusaiaqwwmmk:
    }
}
