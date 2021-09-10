<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        kwgcqewsuiemmcgu:
        global $_wp_additional_image_sizes;
        goto qqcsmicsiguamkmi;
        umwakiomkqmysuaw:
        return $wkuikksoimmikkek;
        goto ecckggwkscqiewwu;
        oysecwgkqeacouqw:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto akkkmwcmiugmgqim;
        icaauuyceicoqeyw:
        ggogugoaicomuice:
        goto kwgcqewsuiemmcgu;
        akkkmwcmiugmgqim:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto uyuqcoucaoqcmwos;
            yucmkqgkmoemmkig:
            if (!$qaiwqwwemmyyqosy) {
                goto egcmycuugqcugeii;
            }
            goto mskwaaokyikicquk;
            mskwaaokyikicquk:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto masysmcwwyggkoae;
            uyuqcoucaoqcmwos:
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            goto yucmkqgkmoemmkig;
            oqucmsieeqcyimuy:
            gmuoosscgmucqgms:
            goto csiksyqeyomuyyaw;
            masysmcwwyggkoae:
            egcmycuugqcugeii:
            goto oqucmsieeqcyimuy;
            csiksyqeyomuyyaw:
        }
        goto icaauuyceicoqeyw;
        qqcsmicsiguamkmi:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto yqyyymusqwmeiywm;
        }
        goto iasmguggqccoqgqg;
        wugkmusyoygmkqqe:
        $wkuikksoimmikkek = [];
        goto oysecwgkqeacouqw;
        iasmguggqccoqgqg:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto kamgwaowucoswyym;
        kamgwaowucoswyym:
        yqyyymusqwmeiywm:
        goto umwakiomkqmysuaw;
        ecckggwkscqiewwu:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto ycsuucmigqakaesa;
        icmgciksummeugya:
        mggoeksacaimyqkg:
        goto yieucwaowagkucaa;
        ckocskkiwaikikse:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\151\172\x65\x5f\x77"));
        goto cuaiomeoucgeaeqy;
        igyogusiuygqysyi:
        return $qaiwqwwemmyyqosy;
        goto ccmmogikyswuiyya;
        cuaiomeoucgeaeqy:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\163\x69\172\145\x5f\150"));
        goto cykwmywaqcgiikom;
        wmmueeiawggqookk:
        if ($qaiwqwwemmyyqosy) {
            goto ugoiguwucqucmsyq;
        }
        goto sykguyswkwowkmys;
        csgaywiswymcaqmy:
        $qaiwqwwemmyyqosy = ["\x63\x72\x6f\x70" => $euciqcqmqamuoqga, "\167\151\x64\164\150" => $qeswwaqqsyymqawg, "\150\x65\151\x67\x68\164" => $cswemwoyesycwkuq];
        goto icmgciksummeugya;
        yieucwaowagkucaa:
        ugoiguwucqucmsyq:
        goto igyogusiuygqysyi;
        sykguyswkwowkmys:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x63\162\157\160"));
        goto ckocskkiwaikikse;
        cykwmywaqcgiikom:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto mggoeksacaimyqkg;
        }
        goto csgaywiswymcaqmy;
        ycsuucmigqakaesa:
        global $_wp_additional_image_sizes;
        goto cimmeauiguggmemk;
        cimmeauiguggmemk:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto wmmueeiawggqookk;
        ccmmogikyswuiyya:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\x61\164\x74\x61\143\150\x6d\145\x6e\x74");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto sgkcimyicykmyueu;
        sgkcimyicykmyueu:
        $iwywmkygwewiamwm = false;
        goto waywoikgwqugqiay;
        waywoikgwqugqiay:
        if (!$aiooqyausygaasqm) {
            goto eawsywkeuwsmmsuu;
        }
        goto ssausyueecggqcec;
        koqequoesgsqmeye:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\x6f\167\x6e\154\x6f\x61\144\57{$ymacoouqwcqwwagu}\x2f";
        goto myyskgacygigeayu;
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
        eqoegikgmweyoeca:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto koqequoesgsqmeye;
        qucseiiyqgwmyyik:
        eawsywkeuwsmmsuu:
        goto awywowqmgkeiawky;
        ssausyueecggqcec:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto yysayeckiesuqcsa;
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
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x66\165\x6c\x6c")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\150\x75\x6d\142\x6e\141\x69\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto weccmykeusmgswkc;
        syoykqauiiuuiaae:
        goto kikyssscmqesqkaa;
        goto egymseeqcsgsiuqy;
        kicogigewkgmqwym:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto akggggqgqmmgcaiy;
        oiswowekmymaweog:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\x68\x72\x65\x66" => $iwywmkygwewiamwm, "\x74\151\x74\154\145" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\164\141\162\147\x65\x74" => "\137\142\154\141\156\153", "\144\157\x77\x6e\154\x6f\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]);
        goto wwgsooeeqeiaswoi;
        osuqweqwqukwwaqc:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto syoykqauiiuuiaae;
        oqcooececqwqwiya:
        return $siquossayskcwkea;
        goto yisacmyycgcuaimi;
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
        qkqqysiiugqceokw:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto kykyayauiiamcskk;
        egymseeqcsgsiuqy:
        smqeqmsuawsimmcs:
        goto kicogigewkgmqwym;
        wwgsooeeqeiaswoi:
        igqswueceimwyksq:
        goto oqcooececqwqwiya;
        kykyayauiiamcskk:
        if ($acsweksygkmmgggk) {
            goto smqeqmsuawsimmcs;
        }
        goto osuqweqwqukwwaqc;
        yisacmyycgcuaimi:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto aoquqswgmegqeemm;
        ycioskgosgkaocui:
        wokiacaaeqwoamgu:
        goto qumcciymugkuayyo;
        qumcciymugkuayyo:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto kaeyaqskwuaaagmg;
        aoquqswgmegqeemm:
        $aokagokqyuysuksm = 0;
        goto qaiqiokieeggcoym;
        mygqkusgqoqgwayy:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto uayoaukucommuwki;
        qaiqiokieeggcoym:
        $miawkwqioaeasiig = wp_upload_dir();
        goto ucgaaaeumkcmsios;
        ioamsuyiukoaawiw:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto sakqwiaagsykwauy;
        ucgaaaeumkcmsios:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\x61\163\x65\165\162\154"] . "\57"))) {
            goto wokiacaaeqwoamgu;
        }
        goto gykwuammuiuimcqe;
        uayoaukucommuwki:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto kykqywkcmkkiimqu;
        }
        goto okemiqakkiysqqyc;
        gykwuammuiuimcqe:
        return false;
        goto ycioskgosgkaocui;
        kaeyaqskwuaaagmg:
        $ywmkwiwkosakssii = ["\160\x6f\x73\x74\137\x74\x79\160\145" => "\x61\x74\x74\141\x63\x68\x6d\145\x6e\164", "\160\x6f\x73\x74\137\163\x74\x61\x74\165\163" => "\151\156\x68\x65\x72\151\x74", "\146\151\145\154\144\x73" => "\x69\x64\163", "\155\x65\x74\141\137\x71\165\145\x72\171" => [["\x76\141\x6c\x75\x65" => $qogsmwakwacwqogk, "\143\x6f\155\160\x61\162\145" => "\114\x49\113\x45", "\x6b\145\171" => "\x5f\x77\160\137\141\164\x74\141\x63\150\155\145\x6e\x74\137\155\x65\164\141\x64\141\x74\141"]]];
        goto mygqkusgqoqgwayy;
        mkcsuwyggueicysc:
        qcciqymcyggowaow:
        goto iucgiywuayaqoiis;
        okemiqakkiysqqyc:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto imggygaykcwqeeqa;
            ccgwgmsawecwassc:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto kckywuggymioosew;
            }
            goto osquygowswqqgcqu;
            aygaeqqgkosiccik:
            goto qcciqymcyggowaow;
            goto wwuscguquemeomsm;
            kwkwaqqwaoewgqwc:
            sqqmacumauekywma:
            goto weqaocmesamqkcic;
            ygoekseuwuqgsqiw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\x66\x69\154\145"]);
            goto ccgwgmsawecwassc;
            mquqqwyaksscucig:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\x69\x7a\x65\163"]) ? wp_list_pluck($ugugimquukqwogge["\163\151\172\145\163"], "\x66\x69\x6c\145") : [];
            goto ygoekseuwuqgsqiw;
            imggygaykcwqeeqa:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto mquqqwyaksscucig;
            osquygowswqqgcqu:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto aygaeqqgkosiccik;
            wwuscguquemeomsm:
            kckywuggymioosew:
            goto kwkwaqqwaoewgqwc;
            weqaocmesamqkcic:
        }
        goto mkcsuwyggueicysc;
        iucgiywuayaqoiis:
        kykqywkcmkkiimqu:
        goto ioamsuyiukoaawiw;
        sakqwiaagsykwauy:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\x68\165\155\142\156\141\151\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto ogasqekksgksomcu;
        ausqcauoasmqoqiq:
        return $nsmgceoqaqogqmuw;
        goto wgkewusaiaqwwmmk;
        ogasqekksgksomcu:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto eykcgaaeakyayico;
        eykcgaaeakyayico:
        if (!$sscegwueamckwmcy) {
            goto aseackwooioggwyc;
        }
        goto iwsgeyycmqmicaag;
        uaguekkygoeqeuoy:
        aseackwooioggwyc:
        goto ausqcauoasmqoqiq;
        iwsgeyycmqmicaag:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\x77\160\137\x67\145\164\x5f\141\164\x74\x61\143\150\155\145\x6e\164\137\151\155\x61\147\145", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto uaguekkygoeqeuoy;
        wgkewusaiaqwwmmk:
    }
}
