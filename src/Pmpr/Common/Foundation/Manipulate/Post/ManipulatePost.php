<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post;
use WP_Post_Type;
use WP_Query;

class ManipulatePost extends Common
{
    
    public static function wugecumwuwwwqyoe($post)
    {
        return DecoratorPost::wugecumwuwwwqyoe(self::mwikyscisascoeea($post, true));
    }
    
    public static function cwucesiiikgqsgui()
    {
        goto smqeqmsuawsimmcs;
        kicogigewkgmqwym:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto akggggqgqmmgcaiy;
        kikyssscmqesqkaa:
        if ($sqeykgyoooqysmca) {
            goto cwycogckouesaesk;
        }
        goto igqswueceimwyksq;
        sqqmacumauekywma:
        awywowqmgkeiawky:
        goto kckywuggymioosew;
        imggygaykcwqeeqa:
        return $sqeykgyoooqysmca;
        goto mquqqwyaksscucig;
        egymseeqcsgsiuqy:
        myyskgacygigeayu:
        goto kicogigewkgmqwym;
        igqswueceimwyksq:
        global $typenow, $current_screen;
        goto weccmykeusmgswkc;
        qkqqysiiugqceokw:
        goto eqoegikgmweyoeca;
        goto kykyayauiiamcskk;
        akggggqgqmmgcaiy:
        eqoegikgmweyoeca:
        goto oiswowekmymaweog;
        kykyayauiiamcskk:
        koqequoesgsqmeye:
        goto osuqweqwqukwwaqc;
        kckywuggymioosew:
        cwycogckouesaesk:
        goto imggygaykcwqeeqa;
        oiswowekmymaweog:
        if ($sqeykgyoooqysmca) {
            goto awywowqmgkeiawky;
        }
        goto wwgsooeeqeiaswoi;
        qcciqymcyggowaow:
        qucseiiyqgwmyyik:
        goto sqqmacumauekywma;
        oqcooececqwqwiya:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto yisacmyycgcuaimi;
        weccmykeusmgswkc:
        if ($typenow) {
            goto koqequoesgsqmeye;
        }
        goto gwkaweoeoyumiagw;
        wokiacaaeqwoamgu:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto qcciqymcyggowaow;
        syoykqauiiuuiaae:
        goto eqoegikgmweyoeca;
        goto egymseeqcsgsiuqy;
        yisacmyycgcuaimi:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto qucseiiyqgwmyyik;
        }
        goto wokiacaaeqwoamgu;
        smqeqmsuawsimmcs:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto kikyssscmqesqkaa;
        gwkaweoeoyumiagw:
        if ($current_screen) {
            goto myyskgacygigeayu;
        }
        goto qkqqysiiugqceokw;
        osuqweqwqukwwaqc:
        $sqeykgyoooqysmca = $typenow;
        goto syoykqauiiuuiaae;
        wwgsooeeqeiaswoi:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto oqcooececqwqwiya;
        mquqqwyaksscucig:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\x70\x6f\x73\164\x5f\x70\141\x72\x65\x6e\164");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto aygaeqqgkosiccik;
        gykwuammuiuimcqe:
        osquygowswqqgcqu:
        goto ycioskgosgkaocui;
        kykqywkcmkkiimqu:
        the_post();
        goto aoquqswgmegqeemm;
        kwkwaqqwaoewgqwc:
        ccgwgmsawecwassc:
        goto weqaocmesamqkcic;
        aygaeqqgkosiccik:
        $wyoiwuqokyeeuguk = [];
        goto wwuscguquemeomsm;
        aoquqswgmegqeemm:
        $wyoiwuqokyeeuguk[] = self::get();
        goto qaiqiokieeggcoym;
        qaiqiokieeggcoym:
        goto ccgwgmsawecwassc;
        goto ucgaaaeumkcmsios;
        ucgaaaeumkcmsios:
        ygoekseuwuqgsqiw:
        goto gykwuammuiuimcqe;
        ycioskgosgkaocui:
        return $wyoiwuqokyeeuguk;
        goto qumcciymugkuayyo;
        wwuscguquemeomsm:
        if (!have_posts()) {
            goto osquygowswqqgcqu;
        }
        goto kwkwaqqwaoewgqwc;
        weqaocmesamqkcic:
        if (!have_posts()) {
            goto ygoekseuwuqgsqiw;
        }
        goto kykqywkcmkkiimqu;
        qumcciymugkuayyo:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto kaeyaqskwuaaagmg;
        kaeyaqskwuaaagmg:
        $post = self::get($post);
        goto mygqkusgqoqgwayy;
        mygqkusgqoqgwayy:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto uayoaukucommuwki;
        okemiqakkiysqqyc:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\x5b\72\163\x70\x61\143\x65\72\x5d\x5d\57", "\x20", $ewgwqamkygiqaawc);
        goto mkcsuwyggueicysc;
        iucgiywuayaqoiis:
        
        return count($emeuskyoeemoywwi);
        goto ioamsuyiukoaawiw;
        mkcsuwyggueicysc:
        
        
        $emeuskyoeemoywwi = preg_split("\57\133\12\xd\11\x20\x5d\53\x2f", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto iucgiywuayaqoiis;
        uayoaukucommuwki:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\x5b\72\x70\165\x6e\x63\164\x3a\x5d\133\72\144\x69\x67\151\164\72\x5d\135\x2f", '', $ewgwqamkygiqaawc);
        goto okemiqakkiysqqyc;
        ioamsuyiukoaawiw:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto maaqgkcmqkcguscg;
        qsocqumaigsayksm:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto eywcgcyicisgcumk;
        iwuiyecakwogaqos:
        goto eykcgaaeakyayico;
        goto eceyessoaayaagci;
        yuqyccgsmegiicoc:
        sakqwiaagsykwauy:
        goto igommeoookeycwmc;
        akeeousiaemumwqy:
        if ($ooiewiwkegguusum) {
            goto iwsgeyycmqmicaag;
        }
        goto ymmkmyqiigmskumu;
        eceyessoaayaagci:
        uaguekkygoeqeuoy:
        goto oekkqiisaauoowkm;
        ousuggsuweyeqyuo:
        ogasqekksgksomcu:
        goto kmeqemccwyaskwqk;
        gokeooqgmyisigwu:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto kiaeuogcagqymoia;
        cagckkqacmeaemik:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto gokeooqgmyisigwu;
        mswiyiyqqqqqmccc:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto ousuggsuweyeqyuo;
        iuqesqwcmseaoouo:
        eykcgaaeakyayico:
        goto gyqeokswmeikygki;
        gcqmmuowwaseagoa:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto ksewmguscaqkiiso;
        }
        goto qsocqumaigsayksm;
        gyqeokswmeikygki:
        $ksaameoqigiaoigg = [];
        goto gcqmmuowwaseagoa;
        mcyiwawwcsquwiqq:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto eegacceeuuycmssm;
            okwcqgkysyueokie:
            goto ooweqiekgaaqweig;
            goto skgmwkqigcucecks;
            qaugoawikwesmkqo:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto swekqcymmemsckim;
            qoukygmscqwwmeci:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto cyoqykquycmuksqu;
            owcyysasyeaaowwk:
            wgkewusaiaqwwmmk:
            goto eiqwmksumaugsiue;
            imgcoqgqsgmwussc:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto ayocomqsygokygku;
            kmgmsagugycgguso:
            ooweqiekgaaqweig:
            goto qoukygmscqwwmeci;
            yswsuyqqsygkqcgi:
            if (!$igqsaukqcqscimok) {
                goto saaqoyeqicykmmuu;
            }
            goto imgcoqgqsgmwussc;
            ayocomqsygokygku:
            if ($sogksuscggsicmac === self::LABELS) {
                goto cwaaqwgckkmmuayw;
            }
            goto cyweqwceuyeuqwiq;
            cyoqykquycmuksqu:
            saaqoyeqicykmmuu:
            goto owcyysasyeaaowwk;
            eegacceeuuycmssm:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto yswsuyqqsygkqcgi;
            cyweqwceuyeuqwiq:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto yemeacuywsiqecgm;
            }
            goto okwcqgkysyueokie;
            mgsqaweekeiqgcys:
            yemeacuywsiqecgm:
            goto ccyskouwcaewmmuq;
            swekqcymmemsckim:
            goto ooweqiekgaaqweig;
            goto mgsqaweekeiqgcys;
            ccyskouwcaewmmuq:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto kmgmsagugycgguso;
            skgmwkqigcucecks:
            cwaaqwgckkmmuayw:
            goto qaugoawikwesmkqo;
            eiqwmksumaugsiue:
        }
        goto akkuiemqaogigaqa;
        igommeoookeycwmc:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\x70\x75\x62\154\x69\143" => true, "\137\142\x75\x69\154\164\x69\x6e" => false, "\160\x75\x62\154\x69\143\154\171\137\161\165\x65\162\171\x61\142\x6c\145" => true]);
        goto scmqkqwakowggkmu;
        cumcsgcamqomeygk:
        goto eykcgaaeakyayico;
        goto kikyqwgykkiskoik;
        sgiswsoiyoowcqsw:
        goto aseackwooioggwyc;
        goto yuqyccgsmegiicoc;
        akkuiemqaogigaqa:
        ausqcauoasmqoqiq:
        goto csciwewamgcguguc;
        emmkqsuswgssikec:
        return $ksaameoqigiaoigg;
        goto agwoisgcwqooygsg;
        kikyqwgykkiskoik:
        iwsgeyycmqmicaag:
        goto kusaguaukqyawgck;
        maaqgkcmqkcguscg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\161\x75\145\162\171" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto mwkyqwwyuoquwycw;
        kiaeuogcagqymoia:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto ekieuqyaekgaekem;
        uycmykimwqoyykmo:
        if (!$ooiewiwkegguusum) {
            goto sakqwiaagsykwauy;
        }
        goto gyakkgyocuygkkwi;
        oekkqiisaauoowkm:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto iuqesqwcmseaoouo;
        ekieuqyaekgaekem:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto uycmykimwqoyykmo;
        yaggoqgeaucmkmsi:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto weuicwuusquqioeo;
        eywcgcyicisgcumk:
        goto qkccmuekscemyiqi;
        goto esggoysyykycecyq;
        weuicwuusquqioeo:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto ogasqekksgksomcu;
        }
        goto mswiyiyqqqqqmccc;
        mwkyqwwyuoquwycw:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\x75\145\162\x79");
        goto cagckkqacmeaemik;
        esggoysyykycecyq:
        ksewmguscaqkiiso:
        goto mcyiwawwcsquwiqq;
        kusaguaukqyawgck:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto iwuiyecakwogaqos;
        ymmkmyqiigmskumu:
        if ($yemgmmgogcwccuky) {
            goto uaguekkygoeqeuoy;
        }
        goto cumcsgcamqomeygk;
        gyakkgyocuygkkwi:
        $gqgemcmoicmgaqie = [];
        goto sgiswsoiyoowcqsw;
        kmeqemccwyaskwqk:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto akeeousiaemumwqy;
        scmqkqwakowggkmu:
        aseackwooioggwyc:
        goto yaggoqgeaucmkmsi;
        csciwewamgcguguc:
        qkccmuekscemyiqi:
        goto emmkqsuswgssikec;
        agwoisgcwqooygsg:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto wccuioiewmeamewo;
        scywsowkeyyssgqo:
        suqaqoaowamkiymi:
        goto woaewkuksuiogeoo;
        ugqqciuuwaioyowe:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto scywsowkeyyssgqo;
        uwyuiwkkeuwsykys:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto acmoiyiogowkkesw;
        imsmuoawuiemiisk:
        
        array_push($auwuoyyagaiegwae, home_url("\57"));
        goto qqewuuoigkoeeocq;
        woaewkuksuiogeoo:
        return $auwuoyyagaiegwae;
        goto acoociuqgmymeggw;
        ocsyqkkqkwekgakm:
        ccgsasimykggyess:
        goto wuucmmcggqqsmakc;
        amaoecqeywkkmyoi:
        $gwiqqkoakiiquksg = str_replace("\x5f\x5f\x74\162\141\x73\150\145\x64", '', $gwiqqkoakiiquksg);
        goto oymoaaossqyocmue;
        wccuioiewmeamewo:
        $auwuoyyagaiegwae = [];
        goto ucwuomcmcoqmyqwm;
        ikuuqaoiwigcmwyu:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto amaoecqeywkkmyoi;
        ksmsiiaeokcggegc:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\163\150\157\x77\137\157\156\x5f\x66\162\157\x6e\164") == "\160\x61\147\x65")) {
            goto suqaqoaowamkiymi;
        }
        goto ugqqciuuwaioyowe;
        gmwqisoikakuqicc:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto oouaueaaciqmoaek;
        cscciumkmikyqica:
        aeamameocikekces:
        goto imsmuoawuiemiisk;
        wuucmmcggqqsmakc:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto eemuaaqoyiqiyyoe;
        oymoaaossqyocmue:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\x66\145\x65\144\57");
        goto cscciumkmikyqica;
        ucwuomcmcoqmyqwm:
        $post = self::get($post);
        goto iomigqssyeeaqgsg;
        kcaciomiguuugugi:
        uqoowswseqmmisei:
        goto kwqoqgccuqgigkoc;
        eemuaaqoyiqiyyoe:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto gmwqisoikakuqicc;
        eqooqiomasygymwk:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto kcaciomiguuugugi;
        acmoiyiogowkkesw:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wwkgimsumqsaicoy;
            ueocsmuykwyoywui:
            kkicowiukwoykmms:
            goto kawkoccmuqqeamms;
            wwkgimsumqsaicoy:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto ugiegewmsumyuqmq;
            geiwkqgwawsmyeiw:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto oeewoegiqgywwmos;
                wceiwqiccssqgcuw:
                qokggikksgqmecam:
                goto ueoygowuiugooicc;
                mmgissacqioqksmk:
                goto uumasiqguewuwcaa;
                goto wceiwqiccssqgcuw;
                ycygwiuuauuwwmyc:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto ywimgeoyusmceogc;
                aqgmwywwecioauqg:
                smiwewgysqykaqee:
                goto sqgkqqoeksyicmoa;
                cqycwggykmmyacuk:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto qokggikksgqmecam;
                }
                goto ugkgqeugmkumauos;
                ekaasiygiigkuasg:
                if (!$voccgqswsiwauyow) {
                    goto saigoogiqigowuqo;
                }
                goto aaqiykkkmossycmw;
                ugkgqeugmkumauos:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\x61\x67\x65\57" . user_trailingslashit($ciyackuwsqkoqese);
                goto yskwigcmaicqamqy;
                rkasqqqgemowweeg:
                uumasiqguewuwcaa:
                goto cqycwggykmmyacuk;
                oeewoegiqgywwmos:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto ekaasiygiigkuasg;
                sqgkqqoeksyicmoa:
                $ciyackuwsqkoqese++;
                goto mmgissacqioqksmk;
                cuockkkkmamkuygc:
                saigoogiqigowuqo:
                goto cquyikuyaiskayos;
                ywimgeoyusmceogc:
                if (!$weyoqgcesqgeusiu) {
                    goto gkwycwegcuicsgas;
                }
                goto aswkmiocmcogokyy;
                yskwigcmaicqamqy:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto aqgmwywwecioauqg;
                uussagskoysuoeiw:
                $ciyackuwsqkoqese = 2;
                goto rkasqqqgemowweeg;
                gqeeomoukqkowycw:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto uussagskoysuoeiw;
                cquyikuyaiskayos:
                kgqqosqskwaaogyu:
                goto kwsusuqioqiaokmk;
                qyyosiukaswscmuu:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto gqeeomoukqkowycw;
                aaqiykkkmossycmw:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto ycygwiuuauuwwmyc;
                aswkmiocmcogokyy:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto qyyosiukaswscmuu;
                ueoygowuiugooicc:
                gkwycwegcuicsgas:
                goto cuockkkkmamkuygc;
                kwsusuqioqiaokmk:
            }
            goto aesusogymakeuios;
            ugiegewmsumyuqmq:
            if (!$uyuaosigqymaqsaa) {
                goto mwsmaceeuacaoeas;
            }
            goto geiwkqgwawsmyeiw;
            seqgigumouyguowy:
            mwsmaceeuacaoeas:
            goto ueocsmuykwyoywui;
            aesusogymakeuios:
            eueuyagcqqwwsick:
            goto seqgigumouyguowy;
            kawkoccmuqqeamms:
        }
        goto ocsyqkkqkwekgakm;
        oouaueaaciqmoaek:
        if (!($myyccyuumcscsagc == true)) {
            goto uqoowswseqmmisei;
        }
        goto eqooqiomasygymwk;
        ogekauwggisguwkq:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto uwyuiwkkeuwsykys;
        iomigqssyeeaqgsg:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto ogekauwggisguwkq;
        kwqoqgccuqgigkoc:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\162\141\x73\150")) {
            goto aeamameocikekces;
        }
        goto ikuuqaoiwigcmwyu;
        qqewuuoigkoeeocq:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto ksmsiiaeokcggegc;
        acoociuqgmymeggw:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto ycimqmmmgskimkgi;
        agqsiuycgsaoescw:
        wyuyokmygemgqsmk:
        goto wgceoaueoiiwwuum;
        kcgismqksoywmcea:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto msyksokkggaqasey;
        gcywkgcegesysuoy:
        $wkaqekwwgqsqwcoi = "\141\x64\155\x69\x6e\x2d{$useksmwkuswkwcqg}";
        goto agqsiuycgsaoescw;
        msyksokkggaqasey:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto amgecmwokwwiiuac;
        siymkkcgeegouiuq:
        if (!$mksyucucyswaukig) {
            goto muisqceosooggyoy;
        }
        goto kcgismqksoywmcea;
        amgecmwokwwiiuac:
        muisqceosooggyoy:
        goto wgwsicukewmsscec;
        wmssywakgoiswqey:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto siymkkcgeegouiuq;
        wgwsicukewmsscec:
        if ($wkaqekwwgqsqwcoi) {
            goto wyuyokmygemgqsmk;
        }
        goto gcywkgcegesysuoy;
        ycimqmmmgskimkgi:
        $wkaqekwwgqsqwcoi = '';
        goto wmssywakgoiswqey;
        wgceoaueoiiwwuum:
        return $wkaqekwwgqsqwcoi;
        goto imyoymgguyuiksia;
        imyoymgguyuiksia:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto aigiscsuosewiuus;
        ousiykwqkgeokoqs:
        if (!$useksmwkuswkwcqg) {
            goto ycuamgwmgueemuaq;
        }
        goto qcimcgcggicewoug;
        qcimcgcggicewoug:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\141\142\145\154\163\56\x73\x69\x6e\x67\165\x6c\141\162\x5f\156\141\x6d\145");
        goto iqeuoqeeceiikmse;
        aigiscsuosewiuus:
        $post = self::get($post);
        goto asmoomkuqyqqywkk;
        suusasmyiceigsyk:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto ousiykwqkgeokoqs;
        asmoomkuqyqqywkk:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto suusasmyiceigsyk;
        ksukaiqewqogiqwu:
        return sprintf("\x25\x73\x20\x2d\40\x25\163", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto eyuickmcmiiwcgss;
        iqeuoqeeceiikmse:
        ycuamgwmgueemuaq:
        goto ksukaiqewqogiqwu;
        eyuickmcmiiwcgss:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\157" => false, self::TYPE => "\x6d\157\156\164\150\x6c\171", self::ORDER => "\x44\105\123\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto omaqoumkmmmuuwkq;
        uwkaawaqoswkcuye:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto ocykayyqumgsymkk;
        uwkcasugwwwwmmqu:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto sigseymecgiowiii;
        ocykayyqumgsymkk:
        weeeiiqqgqoymeke:
        goto eguuyyiaceyocoge;
        eguuyyiaceyocoge:
        return $cekoogweeooasayu;
        goto skyscuweykackoci;
        omaqoumkmmmuuwkq:
        $cekoogweeooasayu = false;
        goto uwkcasugwwwwmmqu;
        sigseymecgiowiii:
        if (!$sqeykgyoooqysmca) {
            goto weeeiiqqgqoymeke;
        }
        goto uwkaawaqoswkcuye;
        skyscuweykackoci:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto smqgoowsgakckqse;
        oyqsaukeioykugmm:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto meeceoqcuuasiiio;
        iayksyuawioekakq:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto uesmmkgaqoqmaiik;
        wequuyiayswgoosg:
        return $eeamcawaiqocomwy;
        goto iyqaossmgeskkcgg;
        uesmmkgaqoqmaiik:
        kyouiqwywyqgkuso:
        goto wequuyiayswgoosg;
        meeceoqcuuasiiio:
        if (!$qscaoekmoooeuyqg) {
            goto kyouiqwywyqgkuso;
        }
        goto iayksyuawioekakq;
        smqgoowsgakckqse:
        $eeamcawaiqocomwy = null;
        goto oyqsaukeioykugmm;
        iyqaossmgeskkcgg:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto euceooqmeegmumya;
        igkuwcieaaaimceu:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto imgkgmwywoyggiiy;
        imgkgmwywoyggiiy:
        gkweycueymqasawm:
        goto qsqgsggawskeqauc;
        qsqgsggawskeqauc:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto kwigmoscuksaeaik;
        euceooqmeegmumya:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto gkweycueymqasawm;
        }
        goto igkuwcieaaaimceu;
        kwigmoscuksaeaik:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto eqooeogyogusoyci;
        awcgaimyecemucay:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto cymkauiwaemgisae;
        isawkmamaukaekcg:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto keqweiemkiakogck;
        keqweiemkiakogck:
        ieyqmiueyikwcwso:
        goto sqigokysuqqoyoqq;
        eqooeogyogusoyci:
        $sogksuscggsicmac = null;
        goto awcgaimyecemucay;
        cgwwckgiugakqowu:
        if ($wyoiwuqokyeeuguk) {
            goto ieyqmiueyikwcwso;
        }
        goto aookismekyuisiqy;
        sqigokysuqqoyoqq:
        return $sogksuscggsicmac;
        goto qacmciyceoyqmims;
        cymkauiwaemgisae:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\x74\137\164\151\164\154\145" => '', "\x70\x6f\163\x74\137\156\x61\x6d\145" => '', "\x70\x6f\163\x74\x5f\143\157\156\x74\145\156\164" => '', "\x70\x6f\163\164\x5f\x73\164\x61\164\165\163" => '']);
        goto wwuyacuysiocqcwq;
        aookismekyuisiqy:
        $ywmkwiwkosakssii["\x70\157\163\x74\x5f\141\165\x74\150\157\x72"] = ManipulateUser::mwikyscisascoeea();
        goto isawkmamaukaekcg;
        wwuyacuysiocqcwq:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\160\157\x73\x74\137\x6e\141\x6d\145"], self::POSTS_PER_PAGE => 1]);
        goto cgwwckgiugakqowu;
        qacmciyceoyqmims:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\160\x6f\x73\164\x5f\x69\x64"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto qeeiayaggickmsem;
        daaaoeseaeakowis:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\x2e\x70\x6f\163\x74\137\x70\x61\163\x73\x77\157\162\x64\40\75\40\x27\47";
        goto mqqqskweuccusqsg;
        oaquckygauqeycue:
        global $wpdb;
        goto ouuuiwcmacckekgw;
        mweuowgyuuomycug:
        return $qwcmueausqgiwigy;
        goto iuagymwagckgasgy;
        emwuosqcciqgwuec:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikggeywmqciukyuy;
        }
        goto daaaoeseaeakowis;
        ygyikqcaweccikoy:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto uogugagqqgaumeui;
        }
        goto oaquckygauqeycue;
        usymiywgyuqgsmgo:
        uogugagqqgaumeui:
        goto mweuowgyuuomycug;
        mqqqskweuccusqsg:
        ikggeywmqciukyuy:
        goto egssagkqigycaowo;
        akiaoyqwwgyogmwa:
        $qwcmueausqgiwigy = [];
        goto mygoemwmmmmeswoy;
        ouuuiwcmacckekgw:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto siikoyaookakcsya;
        qeeiayaggickmsem:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\x73\145\x61\x72\143\x68\137\x74\145\162\155\x73");
        goto ygyikqcaweccikoy;
        egssagkqigycaowo:
        $qwcmueausqgiwigy = "\x20\x41\116\x44\40" . implode("\x20\x41\116\x44\x20", $qwcmueausqgiwigy);
        goto usymiywgyuqgsmgo;
        wsocqyukguoqmoou:
        ksycyguoaoakaasa:
        goto emwuosqcciqgwuec;
        siikoyaookakcsya:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\141\143\x74"]) ? '' : "\x25";
        goto akiaoyqwwgyogmwa;
        mygoemwmmmmeswoy:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\x2e\x70\x6f\x73\x74\x5f\164\x69\164\x6c\x65\40\114\111\113\105\40\x25\x73", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            eqgewqgayssmyqyi:
        }
        goto wsocqyukguoqmoou;
        iuagymwagckgasgy:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto qqsoyoesgkwakcwc;
        asqikgqmeqysakky:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto yyckkkysceayoacc;
        qqsoyoesgkwakcwc:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto yieyamwmiyceaysm;
        }
        goto wqsikiwycqwksiwy;
        umugkkiiiakomyae:
        yieyamwmiyceaysm:
        goto ssseiiwsmacscqkk;
        ssseiiwsmacscqkk:
        return $useksmwkuswkwcqg;
        goto wsagsuekaoamamwq;
        fgacmumaqamuggaw:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto umugkkiiiakomyae;
        wqsikiwycqwksiwy:
        if ($useksmwkuswkwcqg) {
            goto gogeigmcqokqqiwc;
        }
        goto asqikgqmeqysakky;
        yyckkkysceayoacc:
        gogeigmcqokqqiwc:
        goto fgacmumaqamuggaw;
        wsagsuekaoamamwq:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto sgwggiwoawyysamo;
        qckuswayaoymsksk:
        ywkowqwiseoaosue:
        goto egoyusisgekiqoye;
        egoyusisgekiqoye:
        giismoqygwoeiucm:
        goto eukasuwuekwugokm;
        zoeammwiceimsmea:
        $post = ManipulateArray::get($post, "\111\104");
        goto gawoykaumugqiiiw;
        qyowaswasswaayey:
        goto ywkowqwiseoaosue;
        goto iqayckmwkoaoyusg;
        iwgymiqeamaeqqom:
        return $post;
        goto aamackwoccmccyks;
        cusamwcumoyaccig:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto qckuswayaoymsksk;
        gawoykaumugqiiiw:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto giismoqygwoeiucm;
        }
        goto oeiyuauoweasyegq;
        iqayckmwkoaoyusg:
        gqkckwmwucyicaom:
        goto cusamwcumoyaccig;
        sgwggiwoawyysamo:
        if (is_numeric($post)) {
            goto usayuwaoekoyeigw;
        }
        goto zoeammwiceimsmea;
        eukasuwuekwugokm:
        usayuwaoekoyeigw:
        goto iwgymiqeamaeqqom;
        oeyaaksqsgmecwmm:
        $post = get_the_ID();
        goto qyowaswasswaayey;
        oeiyuauoweasyegq:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto gqkckwmwucyicaom;
        }
        goto oeyaaksqsgmecwmm;
        aamackwoccmccyks:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto uaequckaaeewaqiy;
        mmmaqiceqwswaica:
        meamgyseweakcwms:
        goto ukamoqcwkkacmkuo;
        eqyccakwmkgmsyik:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto mmmaqiceqwswaica;
        uaequckaaeewaqiy:
        if ($sciomagaqmgggsiu) {
            goto meamgyseweakcwms;
        }
        goto eqyccakwmkgmsyik;
        ukamoqcwkkacmkuo:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\160\157\x73\164\137\x73\x74\x61\x74\165\163" => "\160\165\x62\x6c\x69\x73\150", "\x66\151\x65\x6c\144\x73" => self::IDS]);
        goto osisauycomkeaisq;
        osisauycomkeaisq:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\x6f\x73\164\x5f\156\x61\155\145", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto sysqgmqceqakymga;
        kegkgqcaoogqqwuy:
        return $gaeqamemwmwsyukm;
        goto ueyscskqyqmwgyqq;
        sysqgmqceqakymga:
        global $wpdb;
        goto ckoqcgskyowkgwqc;
        imkggwewaoaeaaaa:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\123\105\114\x45\x43\124\40\x43\x4f\125\116\124\50\143\x6f\155\x6d\145\156\164\137\111\104\x29\12\x9\11\x9\x9\11\x46\x52\117\x4d\40{$wpdb->comments}\40\127\x48\105\x52\x45\40\143\x6f\x6d\x6d\x65\156\164\137\160\x6f\x73\x74\x5f\x49\104\40\151\156\x20\x28\12\x9\11\x9\x9\x9\123\x45\114\x45\103\x54\40\111\104\x20\106\x52\x4f\115\40{$wpdb->posts}\x20\127\110\105\x52\x45\x20\x70\157\x73\164\x5f\164\171\x70\145\40\x3d\40\47{$useksmwkuswkwcqg}\47\12\11\11\11\x9\x9\x41\116\x44\40\x70\x6f\163\164\x5f\x73\x74\141\x74\x75\163\x20\x3d\x20\x27\x70\165\x62\154\x69\163\150\47\x29\40\101\116\x44\x20\x63\157\155\x6d\145\x6e\164\x5f\x61\160\160\162\x6f\x76\x65\x64\x20\75\x20\x27\61\x27");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto kegkgqcaoogqqwuy;
        ckoqcgskyowkgwqc:
        $gaeqamemwmwsyukm = 0;
        goto imkggwewaoaeaaaa;
        ueyscskqyqmwgyqq:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\163\164\x5f\163\x74\x61\x74\165\163", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\x70\x6f\163\x74\x5f\x61\x75\x74\150\157\162", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\x67\145\164\x5f\160\x6f\x73\x74\137\167\x6f\162\144\x5f\x63\x6f\165\x6e\164", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto qgsqycogyicuiioq;
        qgsqycogyicuiioq:
        $ywmkwiwkosakssii["\156\141\x6d\x65"] = $ymqmyyeuycgmigyo;
        goto eycmewmysuymswuk;
        eycmewmysuymswuk:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto sccqosiycoaosikm;
        sccqosiycoaosikm:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto wcykiuessuoeagki;
        wcykiuessuoeagki:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\160\157\x73\164", $ywmkwiwkosakssii = [])
    {
        goto gmycyuqoscismuig;
        gmycyuqoscismuig:
        $ycmguuqqaiisymgg = ["\156\x75\x6d\x62\145\162\x70\x6f\x73\x74\163" => 5, "\x63\141\x74\x65\147\x6f\x72\171" => 0, "\157\x72\x64\145\162\x62\171" => "\144\x61\164\145", "\157\162\144\x65\x72" => "\104\105\123\103", "\x69\156\x63\154\x75\x64\x65" => [], "\x65\170\143\x6c\165\144\145" => [], "\155\145\164\141\137\153\x65\171" => '', "\155\145\164\x61\137\x76\141\154\165\145" => '', "\160\157\x73\x74\x5f\164\171\x70\145" => $useksmwkuswkwcqg, "\x73\165\x70\160\162\x65\x73\x73\137\146\x69\154\x74\145\x72\x73" => true];
        goto qqmeumqiyqkoycww;
        mioiyawikawqyaay:
        $yiasugywggckywoa["\x69\147\x6e\157\x72\x65\x5f\x73\164\151\143\153\171\x5f\160\x6f\163\164\163"] = true;
        goto wwcimuywiwqwagoq;
        iaqwyagqyokkmeoo:
        $yiasugywggckywoa["\143\141\x74"] = $yiasugywggckywoa["\143\x61\164\145\x67\157\162\171"];
        goto uqowsoiyaummsyoy;
        agksaoiusscawcwc:
        goto easusuoaqiwgcuui;
        goto oayuucaeciioiwqw;
        uqowsoiyaummsyoy:
        uwmckciqcuwoyemm:
        goto syuoooyaackuoues;
        ikqwwkscesmugsuq:
        easusuoaqiwgcuui:
        goto mioiyawikawqyaay;
        gacwuumiuewqgeim:
        $yiasugywggckywoa["\x70\157\x73\x74\x73\x5f\160\145\162\x5f\x70\141\147\145"] = $yiasugywggckywoa["\156\165\155\x62\x65\162\160\157\163\164\x73"];
        goto iecocimeqmmockam;
        oayuucaeciioiwqw:
        sqmqymmecmqykiqs:
        goto gqkuecyoaomqacgk;
        iecocimeqmmockam:
        ameoiemwymmeomqq:
        goto ceogiuqcsqkmysga;
        wwcimuywiwqwagoq:
        $yiasugywggckywoa["\x6e\157\x5f\146\x6f\x75\x6e\144\137\x72\157\x77\163"] = true;
        goto qycekaqowowqaosm;
        ukaocimwskuqgqso:
        $yiasugywggckywoa["\x70\157\163\x74\x5f\x5f\151\x6e"] = $egekuwigiusmwiek;
        goto quwqksyoiigamkys;
        ocuocqiyuecksmsi:
        $yiasugywggckywoa["\160\x6f\163\x74\x5f\x73\164\x61\x74\165\x73"] = "\x61\x74\164\x61\143\x68\155\x65\156\x74" === $yiasugywggckywoa["\160\157\x73\x74\137\x74\x79\160\x65"] ? "\151\x6e\x68\145\162\151\164" : "\x70\x75\142\x6c\x69\x73\150";
        goto ekayucummqeqmwgc;
        qqmeumqiyqkoycww:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto eewcoeiokouymaic;
        eqwmoigeokkskwuy:
        youwoggqmcuggmyy:
        goto kyicaqywsmawwwuo;
        syuoooyaackuoues:
        if (!empty($yiasugywggckywoa["\x69\156\x63\154\165\x64\145"])) {
            goto sqmqymmecmqykiqs;
        }
        goto kusoiyymwykqsgue;
        suicyusecackqaii:
        if (!(!empty($yiasugywggckywoa["\x6e\165\155\142\145\162\160\157\163\164\x73"]) && empty($yiasugywggckywoa["\x70\157\x73\164\x73\137\x70\145\162\137\x70\x61\147\145"]))) {
            goto ameoiemwymmeomqq;
        }
        goto gacwuumiuewqgeim;
        asgkgomkmykaqeac:
        $yiasugywggckywoa["\160\x6f\x73\x74\163\137\160\145\x72\x5f\160\141\147\x65"] = count($egekuwigiusmwiek);
        goto ukaocimwskuqgqso;
        kyicaqywsmawwwuo:
        $yiasugywggckywoa["\160\157\163\x74\x5f\x5f\156\157\164\x5f\151\156"] = wp_parse_id_list($yiasugywggckywoa["\x65\x78\143\x6c\165\144\x65"]);
        goto ikqwwkscesmugsuq;
        ekayucummqeqmwgc:
        xeeuigemugoamqao:
        goto suicyusecackqaii;
        gqkuecyoaomqacgk:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\156\143\x6c\165\x64\145"]);
        goto asgkgomkmykaqeac;
        kusoiyymwykqsgue:
        if (!empty($yiasugywggckywoa["\x65\170\x63\x6c\165\144\145"])) {
            goto youwoggqmcuggmyy;
        }
        goto agksaoiusscawcwc;
        quwqksyoiigamkys:
        goto easusuoaqiwgcuui;
        goto eqwmoigeokkskwuy;
        eewcoeiokouymaic:
        if (!empty($yiasugywggckywoa["\160\x6f\x73\x74\x5f\x73\164\141\x74\x75\x73"])) {
            goto xeeuigemugoamqao;
        }
        goto ocuocqiyuecksmsi;
        qycekaqowowqaosm:
        return new WP_Query($yiasugywggckywoa);
        goto iuaikkckoskwuwyw;
        ceogiuqcsqkmysga:
        if (empty($yiasugywggckywoa["\143\x61\164\145\x67\157\162\171"])) {
            goto uwmckciqcuwoyemm;
        }
        goto iaqwyagqyokkmeoo;
        iuaikkckoskwuwyw:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto kwugcgwmcsoswees;
        gwimqwmmuacwkmou:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto oksiwycekgweuyoc;
        }
        goto kswkocesygkuqiiy;
        kswkocesygkuqiiy:
        $uyuaosigqymaqsaa = [];
        goto kwiuwccmuwwwwcak;
        kwugcgwmcsoswees:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto gwimqwmmuacwkmou;
        kwiuwccmuwwwwcak:
        oksiwycekgweuyoc:
        goto wakcuqwemksmyeos;
        wakcuqwemksmyeos:
        return $uyuaosigqymaqsaa;
        goto eqyykccckaqyikas;
        eqyykccckaqyikas:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto swqycaokmkkykkea;
        swqycaokmkkykkea:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto aoycieuggikeomis;
        oeegykgsgkscwcio:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto qmgqguiisgckwocw;
        qmgqguiisgckwocw:
        uwscoaaycokmqegk:
        goto imsqyecesygwiwkk;
        imsqyecesygwiwkk:
        return $qscaoekmoooeuyqg;
        goto yysqgqeoyckgmcsa;
        uwgksqcakaieyscy:
        $wwgucssaecqekuek["\x68\162\145\x66"] = $qscaoekmoooeuyqg;
        goto oqcgimyqwmqgyygw;
        oqcgimyqwmqgyygw:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\144\151\x73\x70\154\141\x79\137\156\141\155\x65", self::mguqscccckuywsya($post));
        goto oeegykgsgkscwcio;
        aoycieuggikeomis:
        if (!$qscaoekmoooeuyqg) {
            goto uwscoaaycokmqegk;
        }
        goto uwgksqcakaieyscy;
        yysqgqeoyckgmcsa:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto wawiggqugqwwacgq;
        yoceycuiiwwmscci:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\157\163\164\x5f\164\x79\160\x65");
        goto xeyusieocqgkowca;
        siiyycmowckwsemw:
        return $useksmwkuswkwcqg;
        goto aecweaquqmiiimsc;
        wimqsusyesasaism:
        if (!$awqscowmskeuymeu) {
            goto qsweawwuowkoeemg;
        }
        goto uockmkmeymgyqsqi;
        xeyusieocqgkowca:
        cauamyimeqmgwick:
        goto mmgsqoiukqkyiayw;
        wawiggqugqwwacgq:
        $useksmwkuswkwcqg = get_post_type();
        goto qwkwyciyyigugcms;
        kmocumwwsgkgeqay:
        ymiiukyiasogueiq:
        goto wimqsusyesasaism;
        qwkwyciyyigugcms:
        if (!is_numeric($post)) {
            goto coaiaawqcaggmemg;
        }
        goto ceqcqskmksiuosuy;
        qeyuquwgysuucygo:
        $useksmwkuswkwcqg = ManipulateServer::get("\160\x6f\163\164\x5f\164\x79\x70\145");
        goto kmocumwwsgkgeqay;
        wgyqskiikcoamceq:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto cauamyimeqmgwick;
        }
        goto yoceycuiiwwmscci;
        mmgsqoiukqkyiayw:
        if ($useksmwkuswkwcqg) {
            goto ymiiukyiasogueiq;
        }
        goto qeyuquwgysuucygo;
        ceqcqskmksiuosuy:
        $post = self::get($post);
        goto ygygqysoqeimimgm;
        ygygqysoqeimimgm:
        coaiaawqcaggmemg:
        goto wgyqskiikcoamceq;
        sigisgiqiuiuqemc:
        qsweawwuowkoeemg:
        goto siiyycmowckwsemw;
        uockmkmeymgyqsqi:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto sigisgiqiuiuqemc;
        aecweaquqmiiimsc:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\154\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\160\x75\x62\154\x69\163\150", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto uaeyogsicwkuwcak;
        kymkyymiquekuscq:
        $ywmkwiwkosakssii["\163\165\x70\x70\x72\x65\x73\x73\137\x66\151\x6c\164\145\x72\163"] = false;
        goto ckqgkowqkggscuoi;
        ckqgkowqkggscuoi:
        wkkwgyuaqwiygawe:
        goto qowqokqkiweosuwa;
        kocoameeyqygkwok:
        DecoratorHook::ggmgmqswqkgecosg("\160\157\x73\x74\x73\x5f\x73\x65\141\162\x63\150", [__CLASS__, "\163\145\x61\162\x63\x68\102\171\124\151\x74\154\x65"], 10);
        goto osgkqqqqimmwsmsi;
        qowqokqkiweosuwa:
        DecoratorHook::cecaguuoecmccuse("\160\157\x73\x74\163\x5f\163\x65\141\x72\x63\x68", [__CLASS__, "\x73\x65\x61\162\x63\150\x42\171\124\151\164\154\145"], 10, 2);
        goto qucmewyuwkkwsseo;
        qucmewyuwkkwsseo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto kocoameeyqygkwok;
        osgkqqqqimmwsmsi:
        return $wyoiwuqokyeeuguk;
        goto megauiwcsiuuiquk;
        iwcwuugoguscgqye:
        $ywmkwiwkosakssii["\163"] = $meqocwsecsywiiqs;
        goto kymkyymiquekuscq;
        uaeyogsicwkuwcak:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6f\162\x64\x65\x72" => "\101\x53\103", "\160\x6f\x73\x74\x73\x5f\160\145\162\137\x70\x61\x67\145" => 10]);
        goto ikwwiueqmmkayyce;
        ikwwiueqmmkayyce:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto wkkwgyuaqwiygawe;
        }
        goto iwcwuugoguscgqye;
        megauiwcsiuuiquk:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto qsaagygqqsmgiesk;
        eceowukgiumqosom:
        $uyuaosigqymaqsaa = null;
        goto wywyyuawikmwceym;
        okeewwyoqawamsoa:
        if (!$qqgsimqiqyaugceg) {
            goto zkuyggayyoqeeqek;
        }
        goto sgguaokgyweasccc;
        cyamaucweckqmscc:
        return $uyuaosigqymaqsaa;
        goto ssiwoquqiiuysuma;
        gcaaimgqweguwksg:
        iimqqykwwmqeukai:
        goto cyamaucweckqmscc;
        eomwsawiqyuyiiiw:
        omcseuaowsucussk:
        goto okeewwyoqawamsoa;
        qsaagygqqsmgiesk:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto qymkekiqwouwaoos;
        gyuioyyowaiqcywy:
        zkuyggayyoqeeqek:
        goto gcaaimgqweguwksg;
        qymkekiqwouwaoos:
        if (is_array($uyuaosigqymaqsaa)) {
            goto omcseuaowsucussk;
        }
        goto eceowukgiumqosom;
        wywyyuawikmwceym:
        goto iimqqykwwmqeukai;
        goto eomwsawiqyuyiiiw;
        sgguaokgyweasccc:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto gyuioyyowaiqcywy;
        ssiwoquqiiuysuma:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto yucmskwuguqgqimc;
        eeieegmqysegumei:
        $iayakwckycsumkqa = null;
        goto usyyyguieaqqyswa;
        mgywqmgswkeyucaq:
        return $iayakwckycsumkqa;
        goto mqkwmkuieegmucmg;
        yucmskwuguqgqimc:
        $post = self::get($post);
        goto eeieegmqysegumei;
        smsymmwykgkakeqk:
        iiukckigywisaego:
        goto mgywqmgswkeyucaq;
        usyyyguieaqqyswa:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto iiukckigywisaego;
        }
        goto ousiqsmccumayaes;
        ousiqsmccumayaes:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto smsymmwykgkakeqk;
        mqkwmkuieegmucmg:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto okyuswywywsaeias;
        okyuswywywsaeias:
        global $pagenow;
        goto aeaqgqqqowqykgcc;
        aeaqgqqqowqykgcc:
        $sogksuscggsicmac = false;
        goto iycimwiaauksigiw;
        cccgemwsykwgemeg:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto cyomqwmieugiasem;
        iycimwiaauksigiw:
        if (!($pagenow == "\x65\x64\x69\164\x2e\160\150\x70" && is_admin())) {
            goto agauowggkqsoyqiq;
        }
        goto cccgemwsykwgemeg;
        yuycmoyawueickya:
        $sogksuscggsicmac = true;
        goto oieoyiowucgkouoq;
        cyomqwmieugiasem:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto ugaowwakggeccsic;
        }
        goto yuycmoyawueickya;
        oieoyiowucgkouoq:
        ugaowwakggeccsic:
        goto aiaiswgwmcguoues;
        mwuisiuasugcaywu:
        return $sogksuscggsicmac;
        goto asckqiuugiguuiwe;
        aiaiswgwmcguoues:
        agauowggkqsoyqiq:
        goto mwuisiuasugcaywu;
        asckqiuugiguuiwe:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\141\160\160\x72\x6f\166\x65\144")
    {
        $egkygecqiowwuuuu = DecoratorPost::ymgsgecsiqeegseg(self::mwikyscisascoeea($post));
        return ManipulateArray::get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $omasqoksqewuwwkq = false)
    {
        return DecoratorPost::giwmekimakcaawsq(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw = '', $post = null, bool $cuyooiakswegosog = true)
    {
        return DecoratorPost::igawqaomowicuayw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function souwykwwmyygqyqi($post = null, $egkeamycaysqsoma = true) : ?string
    {
        goto ciqqeouuygcaiiiq;
        gggayasokuomgeus:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\x70\x6f\x73\164\137\143\x6f\156\x74\x65\156\164");
        goto cqmkeyweesgwycgy;
        qgyqamakooyqciyo:
        $ewgwqamkygiqaawc = '';
        goto wioicqyeyqmsckwg;
        wioicqyeyqmsckwg:
        if ($egkeamycaysqsoma) {
            goto iimwiesgggauwcqk;
        }
        goto iiysucwqgweammss;
        gioogyikawiiiyqq:
        iimwiesgggauwcqk:
        goto seggcuqcuiaegeya;
        ciqqeouuygcaiiiq:
        $post = self::get($post);
        goto qgyqamakooyqciyo;
        gsoskqieucsesaks:
        return $ewgwqamkygiqaawc;
        goto guoyescsqcuuymku;
        gaqccucuqyssqkmy:
        goto wcuuyecsiamsaqqy;
        goto gioogyikawiiiyqq;
        ucouymumcuosygii:
        goto wcuuyecsiamsaqqy;
        goto woquimckgiecokuo;
        cqmkeyweesgwycgy:
        wcuuyecsiamsaqqy:
        goto gsoskqieucsesaks;
        iiysucwqgweammss:
        if ($post) {
            goto gomiiockquaqsyuo;
        }
        goto gaqccucuqyssqkmy;
        seggcuqcuiaegeya:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto ucouymumcuosygii;
        woquimckgiecokuo:
        gomiiockquaqsyuo:
        goto gggayasokuomgeus;
        guoyescsqcuuymku:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\163\164\x5f\x70\141\162\x65\156\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto euuaeuyegkksasge;
        wmsigkymceakwywo:
        emkqygwcsiyiykiw:
        goto equokkeomguewmua;
        akuskaiiaswmksko:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            yeuqcwawkauowkgu:
        }
        goto wmsigkymceakwywo;
        euuaeuyegkksasge:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto akuskaiiaswmksko;
        equokkeomguewmua:
        return $eyagosskwwmgwmog;
        goto cigaaqeauwccoiqa;
        cigaaqeauwccoiqa:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto xocaameouysockim;
        weyumyqgceqsimmq:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto gacasmwcscckymwc;
            keygywkiwuoagqsw:
            seqwmeeoiicciigo:
            goto hwiqmsqyyiscmeiu;
            gacasmwcscckymwc:
            $meqocwsecsywiiqs = get_the_title($post);
            goto koiimcuoyakqsuam;
            koiimcuoyakqsuam:
            if (!$meqocwsecsywiiqs) {
                goto seqwmeeoiicciigo;
            }
            goto eskmkqowoyogaoko;
            eskmkqowoyogaoko:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto keygywkiwuoagqsw;
            hwiqmsqyyiscmeiu:
            mekmscssquqsgquc:
            goto iwmassqyauymkwaa;
            iwmassqyauymkwaa:
        }
        goto mkiyekcyyukamwck;
        ogisaykaiaeuiika:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto vseyiyomcwkayoio;
        mkiyekcyyukamwck:
        qwkoeagysgskmuyq:
        goto guwikcacqsmwkyya;
        vseyiyomcwkayoio:
        goto sqecccyugmaiuwsq;
        goto kwgwkkkaagkkesik;
        kwgwkkkaagkkesik:
        iccqsmwsmisaayam:
        goto weyumyqgceqsimmq;
        yaswwoqemsqmawse:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto icwuocgiukckmyyu;
        cioomiusgwycykag:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto aeesuccguagwomqw;
        ueiqomqieicasmsi:
        return $sogksuscggsicmac;
        goto domskgkmquiwwqcg;
        xocaameouysockim:
        $sogksuscggsicmac = [];
        goto sycecywsiomgcuiq;
        aeesuccguagwomqw:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto iccqsmwsmisaayam;
        }
        goto ogisaykaiaeuiika;
        guwikcacqsmwkyya:
        sqecccyugmaiuwsq:
        goto ueiqomqieicasmsi;
        icwuocgiukckmyyu:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\x70\157\x73\x74\x73\137\141\162\x67\163", $ywmkwiwkosakssii);
        goto cioomiusgwycykag;
        sycecywsiomgcuiq:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto yaswwoqemsqmawse;
        domskgkmquiwwqcg:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\x70\x6f\x73\164\x2d\x74\150\165\x6d\142\156\141\x69\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\x70\157\x73\164\137\x74\x68\165\x6d\142\x6e\141\x69\154\137\x75\162\154", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\160\157\x73\164\x5f\163\x74\141\164\165\163" => "\x70\165\142\x6c\151\163\150"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto qqecycksisecgwiw;
        uucqywaoqssqggug:
        return $ocogsiouoiuuguym;
        goto kaaweieegskiqqgm;
        uuauuoykcoseecuu:
        if (!$post) {
            goto cqoeiqeeukaiioia;
        }
        goto okwgeicyaawqyoye;
        qqecycksisecgwiw:
        $post = self::get($post);
        goto ueeowwusmsueouao;
        okwgeicyaawqyoye:
        if ($saqmwwmqiwmkiwaa) {
            goto seousiqwmmcaygac;
        }
        goto wgcewuoaksusicyi;
        siceqsgwyswyguog:
        ukqomyqaykkiygwu:
        goto qmsmcsoqgumsigme;
        bgsaeeicmsikiwgm:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto wmwkgawmkmciaeoi;
        qmsmcsoqgumsigme:
        cqoeiqeeukaiioia:
        goto uucqywaoqssqggug;
        wmwkgawmkmciaeoi:
        if (!$egkeamycaysqsoma) {
            goto ukqomyqaykkiygwu;
        }
        goto ssqieyoogiwsyksk;
        ueeowwusmsueouao:
        $ocogsiouoiuuguym = null;
        goto uuauuoykcoseecuu;
        oeqsgusqqgoioqwu:
        seousiqwmmcaygac:
        goto bgsaeeicmsikiwgm;
        ssqieyoogiwsyksk:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\x74\137\164\150\x65\137\144\x61\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto siceqsgwyswyguog;
        wgcewuoaksusicyi:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto oeqsgusqqgoioqwu;
        kaaweieegskiqqgm:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto yagoqwkegiyqceoe;
        eyimaakssauckmgk:
        gqcsicosskykmgiu:
        goto ceoicyukguaouuwa;
        oywouymwcigkauye:
        if (!$post && $cwwowqyuwccuykom) {
            goto igegouiwyasqgwwc;
        }
        goto iaekkeskykqsyiim;
        yagoqwkegiyqceoe:
        if ($post instanceof WP_Post) {
            goto gqcsicosskykmgiu;
        }
        goto oywouymwcigkauye;
        ygiwsaegqoeaocqi:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto wwkeoqicoeqmsuui;
        ceoicyukguaouuwa:
        return $post;
        goto ygeaissawcacmmyu;
        wwkeoqicoeqmsuui:
        goto mamieseosscguoye;
        goto iswuimkowigsiwmi;
        skuwwwayeyemggoe:
        $post = ManipulateServer::get(self::POST);
        goto ieywgqsawwkgiamc;
        umuwmuiugqisoyek:
        mamieseosscguoye:
        goto eyimaakssauckmgk;
        iaekkeskykqsyiim:
        if ($post) {
            goto kgkweawaqmqomkuc;
        }
        goto skuwwwayeyemggoe;
        iswuimkowigsiwmi:
        igegouiwyasqgwwc:
        goto yysqwceyageaeieo;
        ieywgqsawwkgiamc:
        kgkweawaqmqomkuc:
        goto ygiwsaegqoeaocqi;
        yysqwceyageaeieo:
        $post = null;
        goto umuwmuiugqisoyek;
        ygeaissawcacmmyu:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ukmmkgmcooowqksi;
        eoiysyeyuwwugsee:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto eoqgquwgcgkugouq;
        yygauekecaiessss:
        return trailingslashit($migiiksoiymissge);
        goto faiesskquaeiqqom;
        usuwmkwcsukckuee:
        goto ymgyewqwqmcukmyu;
        goto ewmmuusmqgceimky;
        eoqgquwgcgkugouq:
        goto ymgyewqwqmcukmyu;
        goto qaewuekauiwkuwoa;
        qgumkmmmeaoskamq:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto makigymuacqucieo;
        ukmmkgmcooowqksi:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto sisumqgocskwyago;
        makigymuacqucieo:
        ymgyewqwqmcukmyu:
        goto yygauekecaiessss;
        sisumqgocskwyago:
        $migiiksoiymissge = '';
        goto miyyiuaokyesyygy;
        ewmmuusmqgceimky:
        wmgqacaeeuokysey:
        goto eoiysyeyuwwugsee;
        qaewuekauiwkuwoa:
        wecuakwyikeqwyac:
        goto qgumkmmmeaoskamq;
        iocmmwiqausgmkcu:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto wecuakwyikeqwyac;
        }
        goto usuwmkwcsukckuee;
        miyyiuaokyesyygy:
        if ($post) {
            goto wmgqacaeeuokysey;
        }
        goto iocmmwiqausgmkcu;
        faiesskquaeiqqom:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\157\x73\x74\137\160\141\162\145\x6e\x74"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto iqkgeamgsuwqkckg;
        giuwumskimssakwo:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\x74\x68\x65\x5f\155\157\x64\151\x66\151\x65\x64\137\x64\x61\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto mumcqcssasmyqmca;
        sweyywawiwkgsqkw:
        return $ocogsiouoiuuguym;
        goto wycsycuaymkqqgce;
        wgiakoeckyswemak:
        $ocogsiouoiuuguym = null;
        goto uiyuycigkskokcco;
        iiugkqmswuikwcuo:
        iqiwskswayisages:
        goto sweyywawiwkgsqkw;
        iygakaaakekgyeqy:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ewqwyuuyegqukcmw;
        suuocycsksmcsqsm:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto yaioeuewuagwmaym;
        suqyiooacuiiqcuk:
        if ($saqmwwmqiwmkiwaa) {
            goto wayoumqqasqeowsk;
        }
        goto iygakaaakekgyeqy;
        ewqwyuuyegqukcmw:
        wayoumqqasqeowsk:
        goto suuocycsksmcsqsm;
        mumcqcssasmyqmca:
        syauycikyosiscgs:
        goto iiugkqmswuikwcuo;
        yaioeuewuagwmaym:
        if (!$egkeamycaysqsoma) {
            goto syauycikyosiscgs;
        }
        goto giuwumskimssakwo;
        iqkgeamgsuwqkckg:
        $post = self::get($post);
        goto wgiakoeckyswemak;
        uiyuycigkskokcco:
        if (!$post) {
            goto iqiwskswayisages;
        }
        goto suqyiooacuiiqcuk;
        wycsycuaymkqqgce:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\x62\x6f\x74\150")
    {
        goto sckagcuweuycciog;
        kemyesuyqgygsgmc:
        return $sogksuscggsicmac;
        goto yuaeosigaqocaswy;
        ieiwqquomwgcgasg:
        csmwsuakqgukaqkm:
        goto kemyesuyqgygsgmc;
        gasqiqwuuokswuak:
        aocacgkcisiuosug:
        goto ieiwqquomwgcgasg;
        quwawmyimwumqiik:
        aikomgoeseyekwqa:
        goto aoasseeyymigiuqg;
        aoasseeyymigiuqg:
        ioecigquiawyecis:
        goto gasqiqwuuokswuak;
        kqgkgyyskmmomkuy:
        global $pagenow;
        goto mkmcaqquqsycicwk;
        yimcyeuemqyssysu:
        if ($sciomagaqmgggsiu) {
            goto ggwgiusgggqqckqw;
        }
        goto towiyceuykgmeooc;
        ciusceaiyqsgwesy:
        ggwgiusgggqqckqw:
        goto agmoeimoggkkmamk;
        iyeukmoycqcoeoww:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto aocacgkcisiuosug;
        }
        goto cgmkwykqsuikugio;
        cgmkwykqsuikugio:
        switch ($ccamueccusigaaio) {
            case "\145\x64\151\x74":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\164\x2e\160\150\x70"]);
                goto ioecigquiawyecis;
            case "\156\x65\167":
                $sogksuscggsicmac = in_array($pagenow, ["\160\157\x73\164\x2d\156\x65\167\x2e\160\150\160"]);
                goto ioecigquiawyecis;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\163\164\x2e\160\x68\x70", "\x70\157\x73\164\x2d\x6e\145\167\x2e\160\150\160"]);
        }
        goto quwawmyimwumqiik;
        mkmcaqquqsycicwk:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto iyeukmoycqcoeoww;
        agmoeimoggkkmamk:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto csmwsuakqgukaqkm;
        }
        goto kqgkgyyskmmomkuy;
        sckagcuweuycciog:
        $sogksuscggsicmac = false;
        goto yimcyeuemqyssysu;
        towiyceuykgmeooc:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto ciusceaiyqsgwesy;
        yuaeosigaqocaswy:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\x65\x74\141\137\x6b\x65\171" => $gwiwsycaaqgwmewg, "\155\x65\164\x61\x5f\166\x61\x6c\165\x65" => $aucgaecqisksougg, "\x70\157\163\x74\137\163\164\141\x74\165\x73" => "\x61\x6e\x79"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
