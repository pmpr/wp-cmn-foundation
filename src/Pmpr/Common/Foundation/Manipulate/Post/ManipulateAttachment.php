<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        oysecwgkqeacouqw:
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        goto akkkmwcmiugmgqim;
        kwgcqewsuiemmcgu:
        global $_wp_additional_image_sizes;
        goto qqcsmicsiguamkmi;
        iasmguggqccoqgqg:
        $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        goto kamgwaowucoswyym;
        umwakiomkqmysuaw:
        return $wkuikksoimmikkek;
        goto ecckggwkscqiewwu;
        qqcsmicsiguamkmi:
        if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) {
            goto yqyyymusqwmeiywm;
        }
        goto iasmguggqccoqgqg;
        kamgwaowucoswyym:
        yqyyymusqwmeiywm:
        goto umwakiomkqmysuaw;
        akkkmwcmiugmgqim:
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            goto uyuqcoucaoqcmwos;
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
            mskwaaokyikicquk:
            $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            goto masysmcwwyggkoae;
            oqucmsieeqcyimuy:
            gmuoosscgmucqgms:
            goto csiksyqeyomuyyaw;
            csiksyqeyomuyyaw:
        }
        goto icaauuyceicoqeyw;
        wugkmusyoygmkqqe:
        $wkuikksoimmikkek = [];
        goto oysecwgkqeacouqw;
        icaauuyceicoqeyw:
        ggogugoaicomuice:
        goto kwgcqewsuiemmcgu;
        ecckggwkscqiewwu:
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        goto ycsuucmigqakaesa;
        cykwmywaqcgiikom:
        if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) {
            goto mggoeksacaimyqkg;
        }
        goto csgaywiswymcaqmy;
        wmmueeiawggqookk:
        if ($qaiwqwwemmyyqosy) {
            goto ugoiguwucqucmsyq;
        }
        goto sykguyswkwowkmys;
        ycsuucmigqakaesa:
        global $_wp_additional_image_sizes;
        goto cimmeauiguggmemk;
        igyogusiuygqysyi:
        return $qaiwqwwemmyyqosy;
        goto ccmmogikyswuiyya;
        sykguyswkwowkmys:
        $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\x63\x72\157\160"));
        goto ckocskkiwaikikse;
        csgaywiswymcaqmy:
        $qaiwqwwemmyyqosy = ["\x63\162\157\160" => $euciqcqmqamuoqga, "\167\x69\x64\x74\150" => $qeswwaqqsyymqawg, "\150\x65\151\x67\x68\164" => $cswemwoyesycwkuq];
        goto icmgciksummeugya;
        yieucwaowagkucaa:
        ugoiguwucqucmsyq:
        goto igyogusiuygqysyi;
        cuaiomeoucgeaeqy:
        $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\137\x73\151\172\x65\137\x68"));
        goto cykwmywaqcgiikom;
        icmgciksummeugya:
        mggoeksacaimyqkg:
        goto yieucwaowagkucaa;
        cimmeauiguggmemk:
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        goto wmmueeiawggqookk;
        ckocskkiwaikikse:
        $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}\x5f\163\151\x7a\145\137\167"));
        goto cuaiomeoucgeaeqy;
        ccmmogikyswuiyya:
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, "\141\x74\x74\141\143\x68\155\145\x6e\x74");
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto sgkcimyicykmyueu;
        waywoikgwqugqiay:
        if (!$aiooqyausygaasqm) {
            goto eawsywkeuwsmmsuu;
        }
        goto ssausyueecggqcec;
        ssausyueecggqcec:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
        goto yysayeckiesuqcsa;
        sgkcimyicykmyueu:
        $iwywmkygwewiamwm = false;
        goto waywoikgwqugqiay;
        yysayeckiesuqcsa:
        if (!$aokagokqyuysuksm) {
            goto ukmkckcqukygqosw;
        }
        goto eqoegikgmweyoeca;
        qucseiiyqgwmyyik:
        eawsywkeuwsmmsuu:
        goto awywowqmgkeiawky;
        koqequoesgsqmeye:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\144\157\x77\156\154\157\x61\x64\57{$ymacoouqwcqwwagu}\57";
        goto myyskgacygigeayu;
        eqoegikgmweyoeca:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto koqequoesgsqmeye;
        myyskgacygigeayu:
        ukmkckcqukygqosw:
        goto qucseiiyqgwmyyik;
        awywowqmgkeiawky:
        return $iwywmkygwewiamwm;
        goto cwycogckouesaesk;
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
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\146\165\154\x6c")
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
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\165\x6d\142\156\141\x69\154", $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        goto weccmykeusmgswkc;
        egymseeqcsgsiuqy:
        smqeqmsuawsimmcs:
        goto kicogigewkgmqwym;
        osuqweqwqukwwaqc:
        $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
        goto syoykqauiiuuiaae;
        oqcooececqwqwiya:
        return $siquossayskcwkea;
        goto yisacmyycgcuaimi;
        wwgsooeeqeiaswoi:
        igqswueceimwyksq:
        goto oqcooececqwqwiya;
        kykyayauiiamcskk:
        if ($acsweksygkmmgggk) {
            goto smqeqmsuawsimmcs;
        }
        goto osuqweqwqukwwaqc;
        qkqqysiiugqceokw:
        $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
        goto kykyayauiiamcskk;
        kicogigewkgmqwym:
        $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
        goto akggggqgqmmgcaiy;
        gwkaweoeoyumiagw:
        if (!Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            goto igqswueceimwyksq;
        }
        goto qkqqysiiugqceokw;
        oiswowekmymaweog:
        $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ["\150\x72\x65\x66" => $iwywmkygwewiamwm, "\164\151\164\x6c\x65" => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), "\164\x61\x72\x67\145\164" => "\137\142\x6c\141\156\153", "\x64\157\x77\x6e\154\157\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]);
        goto wwgsooeeqeiaswoi;
        akggggqgqmmgcaiy:
        kikyssscmqesqkaa:
        goto oiswowekmymaweog;
        weccmykeusmgswkc:
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        goto gwkaweoeoyumiagw;
        syoykqauiiuuiaae:
        goto kikyssscmqesqkaa;
        goto egymseeqcsgsiuqy;
        yisacmyycgcuaimi:
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        goto aoquqswgmegqeemm;
        iucgiywuayaqoiis:
        kykqywkcmkkiimqu:
        goto ioamsuyiukoaawiw;
        gykwuammuiuimcqe:
        return false;
        goto ycioskgosgkaocui;
        uayoaukucommuwki:
        if (!$gqgemcmoicmgaqie->have_posts()) {
            goto kykqywkcmkkiimqu;
        }
        goto okemiqakkiysqqyc;
        qumcciymugkuayyo:
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        goto kaeyaqskwuaaagmg;
        ucgaaaeumkcmsios:
        
        if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\x61\x73\145\165\162\154"] . "\57"))) {
            goto wokiacaaeqwoamgu;
        }
        goto gykwuammuiuimcqe;
        okemiqakkiysqqyc:
        foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
            goto imggygaykcwqeeqa;
            ccgwgmsawecwassc:
            if (!($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk))) {
                goto kckywuggymioosew;
            }
            goto osquygowswqqgcqu;
            mquqqwyaksscucig:
            $ccgkuocaoksweawk = isset($ugugimquukqwogge["\163\x69\172\145\163"]) ? wp_list_pluck($ugugimquukqwogge["\163\x69\x7a\x65\x73"], "\146\x69\154\x65") : [];
            goto ygoekseuwuqgsqiw;
            wwuscguquemeomsm:
            kckywuggymioosew:
            goto kwkwaqqwaoewgqwc;
            aygaeqqgkosiccik:
            goto qcciqymcyggowaow;
            goto wwuscguquemeomsm;
            imggygaykcwqeeqa:
            $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
            goto mquqqwyaksscucig;
            kwkwaqqwaoewgqwc:
            sqqmacumauekywma:
            goto weqaocmesamqkcic;
            osquygowswqqgcqu:
            $aokagokqyuysuksm = $gcqseksiskwueksc;
            goto aygaeqqgkosiccik;
            ygoekseuwuqgsqiw:
            $wsiwwymgaoqsyagc = basename($ugugimquukqwogge["\x66\151\x6c\145"]);
            goto ccgwgmsawecwassc;
            weqaocmesamqkcic:
        }
        goto mkcsuwyggueicysc;
        ycioskgosgkaocui:
        wokiacaaeqwoamgu:
        goto qumcciymugkuayyo;
        mygqkusgqoqgwayy:
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        goto uayoaukucommuwki;
        kaeyaqskwuaaagmg:
        $ywmkwiwkosakssii = ["\x70\x6f\x73\164\x5f\164\x79\160\x65" => "\141\x74\164\141\x63\150\x6d\x65\156\x74", "\160\157\x73\164\x5f\163\x74\x61\x74\x75\163" => "\151\156\x68\145\162\151\164", "\x66\151\145\x6c\144\x73" => "\x69\144\x73", "\x6d\145\164\x61\x5f\x71\165\x65\x72\x79" => [["\166\x61\x6c\x75\x65" => $qogsmwakwacwqogk, "\143\x6f\155\160\141\x72\x65" => "\114\x49\113\105", "\x6b\145\171" => "\x5f\x77\x70\137\x61\164\164\141\x63\150\x6d\145\156\x74\x5f\x6d\145\164\141\144\141\164\x61"]]];
        goto mygqkusgqoqgwayy;
        qaiqiokieeggcoym:
        $miawkwqioaeasiig = wp_upload_dir();
        goto ucgaaaeumkcmsios;
        ioamsuyiukoaawiw:
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
        goto sakqwiaagsykwauy;
        mkcsuwyggueicysc:
        qcciqymcyggowaow:
        goto iucgiywuayaqoiis;
        aoquqswgmegqeemm:
        $aokagokqyuysuksm = 0;
        goto qaiqiokieeggcoym;
        sakqwiaagsykwauy:
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = "\x74\x68\x75\x6d\x62\156\x61\x69\x6c", $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        goto ogasqekksgksomcu;
        eykcgaaeakyayico:
        if (!$sscegwueamckwmcy) {
            goto aseackwooioggwyc;
        }
        goto iwsgeyycmqmicaag;
        ogasqekksgksomcu:
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto eykcgaaeakyayico;
        iwsgeyycmqmicaag:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\167\x70\137\x67\x65\164\x5f\141\164\x74\x61\x63\150\x6d\x65\156\164\x5f\x69\155\x61\147\145", $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        goto uaguekkygoeqeuoy;
        ausqcauoasmqoqiq:
        return $nsmgceoqaqogqmuw;
        goto wgkewusaiaqwwmmk;
        uaguekkygoeqeuoy:
        aseackwooioggwyc:
        goto ausqcauoasmqoqiq;
        wgkewusaiaqwwmmk:
    }
}
