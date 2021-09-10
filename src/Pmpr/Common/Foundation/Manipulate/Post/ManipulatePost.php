<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto qucseiiyqgwmyyik;
        gwkaweoeoyumiagw:
        $sqeykgyoooqysmca = $typenow;
        goto qkqqysiiugqceokw;
        weccmykeusmgswkc:
        ssausyueecggqcec:
        goto gwkaweoeoyumiagw;
        egymseeqcsgsiuqy:
        if ($sqeykgyoooqysmca) {
            goto koqequoesgsqmeye;
        }
        goto kicogigewkgmqwym;
        syoykqauiiuuiaae:
        waywoikgwqugqiay:
        goto egymseeqcsgsiuqy;
        cwycogckouesaesk:
        global $typenow, $current_screen;
        goto smqeqmsuawsimmcs;
        akggggqgqmmgcaiy:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto oiswowekmymaweog;
        osuqweqwqukwwaqc:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto syoykqauiiuuiaae;
        yisacmyycgcuaimi:
        koqequoesgsqmeye:
        goto wokiacaaeqwoamgu;
        wokiacaaeqwoamgu:
        myyskgacygigeayu:
        goto qcciqymcyggowaow;
        smqeqmsuawsimmcs:
        if ($typenow) {
            goto ssausyueecggqcec;
        }
        goto kikyssscmqesqkaa;
        igqswueceimwyksq:
        goto waywoikgwqugqiay;
        goto weccmykeusmgswkc;
        kicogigewkgmqwym:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto akggggqgqmmgcaiy;
        awywowqmgkeiawky:
        if ($sqeykgyoooqysmca) {
            goto myyskgacygigeayu;
        }
        goto cwycogckouesaesk;
        kikyssscmqesqkaa:
        if ($current_screen) {
            goto yysayeckiesuqcsa;
        }
        goto igqswueceimwyksq;
        qucseiiyqgwmyyik:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto awywowqmgkeiawky;
        qcciqymcyggowaow:
        return $sqeykgyoooqysmca;
        goto sqqmacumauekywma;
        oiswowekmymaweog:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto eqoegikgmweyoeca;
        }
        goto wwgsooeeqeiaswoi;
        qkqqysiiugqceokw:
        goto waywoikgwqugqiay;
        goto kykyayauiiamcskk;
        wwgsooeeqeiaswoi:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto oqcooececqwqwiya;
        oqcooececqwqwiya:
        eqoegikgmweyoeca:
        goto yisacmyycgcuaimi;
        kykyayauiiamcskk:
        yysayeckiesuqcsa:
        goto osuqweqwqukwwaqc;
        sqqmacumauekywma:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\160\x6f\163\164\x5f\160\x61\x72\x65\156\164");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto ygoekseuwuqgsqiw;
        osquygowswqqgcqu:
        imggygaykcwqeeqa:
        goto aygaeqqgkosiccik;
        ccgwgmsawecwassc:
        if (!have_posts()) {
            goto mquqqwyaksscucig;
        }
        goto osquygowswqqgcqu;
        aygaeqqgkosiccik:
        if (!have_posts()) {
            goto kckywuggymioosew;
        }
        goto wwuscguquemeomsm;
        weqaocmesamqkcic:
        goto imggygaykcwqeeqa;
        goto kykqywkcmkkiimqu;
        qaiqiokieeggcoym:
        return $wyoiwuqokyeeuguk;
        goto ucgaaaeumkcmsios;
        aoquqswgmegqeemm:
        mquqqwyaksscucig:
        goto qaiqiokieeggcoym;
        kykqywkcmkkiimqu:
        kckywuggymioosew:
        goto aoquqswgmegqeemm;
        kwkwaqqwaoewgqwc:
        $wyoiwuqokyeeuguk[] = self::get();
        goto weqaocmesamqkcic;
        ygoekseuwuqgsqiw:
        $wyoiwuqokyeeuguk = [];
        goto ccgwgmsawecwassc;
        wwuscguquemeomsm:
        the_post();
        goto kwkwaqqwaoewgqwc;
        ucgaaaeumkcmsios:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto gykwuammuiuimcqe;
        ycioskgosgkaocui:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto qumcciymugkuayyo;
        gykwuammuiuimcqe:
        $post = self::get($post);
        goto ycioskgosgkaocui;
        uayoaukucommuwki:
        
        return count($emeuskyoeemoywwi);
        goto okemiqakkiysqqyc;
        qumcciymugkuayyo:
        
        $ewgwqamkygiqaawc = preg_replace("\57\133\x5b\x3a\x70\165\156\143\164\72\135\133\x3a\x64\x69\147\x69\164\72\135\135\x2f", '', $ewgwqamkygiqaawc);
        goto kaeyaqskwuaaagmg;
        kaeyaqskwuaaagmg:
        
        $ewgwqamkygiqaawc = preg_replace("\x2f\x5b\133\72\x73\160\141\143\x65\72\x5d\x5d\x2f", "\x20", $ewgwqamkygiqaawc);
        goto mygqkusgqoqgwayy;
        mygqkusgqoqgwayy:
        
        
        $emeuskyoeemoywwi = preg_split("\57\x5b\xa\15\11\40\x5d\x2b\x2f", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto uayoaukucommuwki;
        okemiqakkiysqqyc:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto eiqwmksumaugsiue;
        oekkqiisaauoowkm:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto cyoqykquycmuksqu;
        }
        goto iuqesqwcmseaoouo;
        eywcgcyicisgcumk:
        eykcgaaeakyayico:
        goto esggoysyykycecyq;
        iuqesqwcmseaoouo:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto gyqeokswmeikygki;
        esggoysyykycecyq:
        owcyysasyeaaowwk:
        goto mcyiwawwcsquwiqq;
        igommeoookeycwmc:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto ioamsuyiukoaawiw;
        }
        goto scmqkqwakowggkmu;
        gokeooqgmyisigwu:
        if (!$ooiewiwkegguusum) {
            goto mkcsuwyggueicysc;
        }
        goto kiaeuogcagqymoia;
        mwkyqwwyuoquwycw:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto cagckkqacmeaemik;
        eceyessoaayaagci:
        $ksaameoqigiaoigg = [];
        goto oekkqiisaauoowkm;
        ymmkmyqiigmskumu:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto cumcsgcamqomeygk;
        qsocqumaigsayksm:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto cwaaqwgckkmmuayw;
            skgmwkqigcucecks:
            wgkewusaiaqwwmmk:
            goto qaugoawikwesmkqo;
            mgsqaweekeiqgcys:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto ccyskouwcaewmmuq;
            okwcqgkysyueokie:
            goto uaguekkygoeqeuoy;
            goto skgmwkqigcucecks;
            eegacceeuuycmssm:
            if ($sogksuscggsicmac === self::LABELS) {
                goto ausqcauoasmqoqiq;
            }
            goto yswsuyqqsygkqcgi;
            kmgmsagugycgguso:
            iwsgeyycmqmicaag:
            goto qoukygmscqwwmeci;
            cwaaqwgckkmmuayw:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto yemeacuywsiqecgm;
            yemeacuywsiqecgm:
            if (!$igqsaukqcqscimok) {
                goto ooweqiekgaaqweig;
            }
            goto saaqoyeqicykmmuu;
            ayocomqsygokygku:
            ausqcauoasmqoqiq:
            goto cyweqwceuyeuqwiq;
            ccyskouwcaewmmuq:
            ooweqiekgaaqweig:
            goto kmgmsagugycgguso;
            yswsuyqqsygkqcgi:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto wgkewusaiaqwwmmk;
            }
            goto imgcoqgqsgmwussc;
            cyweqwceuyeuqwiq:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto okwcqgkysyueokie;
            imgcoqgqsgmwussc:
            goto uaguekkygoeqeuoy;
            goto ayocomqsygokygku;
            swekqcymmemsckim:
            uaguekkygoeqeuoy:
            goto mgsqaweekeiqgcys;
            saaqoyeqicykmmuu:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto eegacceeuuycmssm;
            qaugoawikwesmkqo:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto swekqcymmemsckim;
            qoukygmscqwwmeci:
        }
        goto eywcgcyicisgcumk;
        sgiswsoiyoowcqsw:
        iucgiywuayaqoiis:
        goto yuqyccgsmegiicoc;
        mcyiwawwcsquwiqq:
        return $ksaameoqigiaoigg;
        goto akkuiemqaogigaqa;
        gyakkgyocuygkkwi:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\160\x75\142\154\151\x63" => true, "\x5f\142\165\x69\x6c\x74\x69\156" => false, "\x70\165\142\x6c\x69\143\154\x79\x5f\x71\165\x65\x72\x79\x61\142\154\x65" => true]);
        goto sgiswsoiyoowcqsw;
        kmeqemccwyaskwqk:
        goto sakqwiaagsykwauy;
        goto akeeousiaemumwqy;
        scmqkqwakowggkmu:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto yaggoqgeaucmkmsi;
        maaqgkcmqkcguscg:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto mwkyqwwyuoquwycw;
        ousuggsuweyeqyuo:
        if ($yemgmmgogcwccuky) {
            goto ogasqekksgksomcu;
        }
        goto kmeqemccwyaskwqk;
        cagckkqacmeaemik:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto gokeooqgmyisigwu;
        yuqyccgsmegiicoc:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto igommeoookeycwmc;
        ekieuqyaekgaekem:
        goto iucgiywuayaqoiis;
        goto uycmykimwqoyykmo;
        gyqeokswmeikygki:
        goto owcyysasyeaaowwk;
        goto gcqmmuowwaseagoa;
        ksewmguscaqkiiso:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\x75\x65\x72\x79");
        goto qkccmuekscemyiqi;
        cumcsgcamqomeygk:
        goto sakqwiaagsykwauy;
        goto kikyqwgykkiskoik;
        gcqmmuowwaseagoa:
        cyoqykquycmuksqu:
        goto qsocqumaigsayksm;
        iwuiyecakwogaqos:
        sakqwiaagsykwauy:
        goto eceyessoaayaagci;
        akeeousiaemumwqy:
        aseackwooioggwyc:
        goto ymmkmyqiigmskumu;
        uycmykimwqoyykmo:
        mkcsuwyggueicysc:
        goto gyakkgyocuygkkwi;
        eiqwmksumaugsiue:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x71\x75\145\162\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto ksewmguscaqkiiso;
        weuicwuusquqioeo:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto mswiyiyqqqqqmccc;
        kikyqwgykkiskoik:
        ogasqekksgksomcu:
        goto kusaguaukqyawgck;
        mswiyiyqqqqqmccc:
        if ($ooiewiwkegguusum) {
            goto aseackwooioggwyc;
        }
        goto ousuggsuweyeqyuo;
        qkccmuekscemyiqi:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto maaqgkcmqkcguscg;
        yaggoqgeaucmkmsi:
        ioamsuyiukoaawiw:
        goto weuicwuusquqioeo;
        kiaeuogcagqymoia:
        $gqgemcmoicmgaqie = [];
        goto ekieuqyaekgaekem;
        kusaguaukqyawgck:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto iwuiyecakwogaqos;
        akkuiemqaogigaqa:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto uqoowswseqmmisei;
        aeamameocikekces:
        $post = self::get($post);
        goto suqaqoaowamkiymi;
        oouaueaaciqmoaek:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\162\141\x73\x68")) {
            goto ueocsmuykwyoywui;
        }
        goto eqooqiomasygymwk;
        eqooqiomasygymwk:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto kcaciomiguuugugi;
        suqaqoaowamkiymi:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto wccuioiewmeamewo;
        iomigqssyeeaqgsg:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto cquyikuyaiskayos;
            ugiegewmsumyuqmq:
            cuockkkkmamkuygc:
            goto geiwkqgwawsmyeiw;
            cquyikuyaiskayos:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto kwsusuqioqiaokmk;
            kwsusuqioqiaokmk:
            if (!$uyuaosigqymaqsaa) {
                goto cuockkkkmamkuygc;
            }
            goto mwsmaceeuacaoeas;
            wwkgimsumqsaicoy:
            agwoisgcwqooygsg:
            goto ugiegewmsumyuqmq;
            geiwkqgwawsmyeiw:
            emmkqsuswgssikec:
            goto aesusogymakeuios;
            mwsmaceeuacaoeas:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto uumasiqguewuwcaa;
                aswkmiocmcogokyy:
                $ciyackuwsqkoqese = 2;
                goto qyyosiukaswscmuu;
                rkasqqqgemowweeg:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto cqycwggykmmyacuk;
                ugkgqeugmkumauos:
                $ciyackuwsqkoqese++;
                goto yskwigcmaicqamqy;
                ycygwiuuauuwwmyc:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto ywimgeoyusmceogc;
                sqgkqqoeksyicmoa:
                qokggikksgqmecam:
                goto mmgissacqioqksmk;
                yskwigcmaicqamqy:
                goto kgqqosqskwaaogyu;
                goto aqgmwywwecioauqg;
                uumasiqguewuwcaa:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto gkwycwegcuicsgas;
                uussagskoysuoeiw:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\x61\147\145\57" . user_trailingslashit($ciyackuwsqkoqese);
                goto rkasqqqgemowweeg;
                wceiwqiccssqgcuw:
                ccgsasimykggyess:
                goto ueoygowuiugooicc;
                cqycwggykmmyacuk:
                eueuyagcqqwwsick:
                goto ugkgqeugmkumauos;
                aaqiykkkmossycmw:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto ycygwiuuauuwwmyc;
                gkwycwegcuicsgas:
                if (!$voccgqswsiwauyow) {
                    goto smiwewgysqykaqee;
                }
                goto saigoogiqigowuqo;
                qyyosiukaswscmuu:
                kgqqosqskwaaogyu:
                goto gqeeomoukqkowycw;
                oeewoegiqgywwmos:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto ekaasiygiigkuasg;
                mmgissacqioqksmk:
                smiwewgysqykaqee:
                goto wceiwqiccssqgcuw;
                aqgmwywwecioauqg:
                kkicowiukwoykmms:
                goto sqgkqqoeksyicmoa;
                saigoogiqigowuqo:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto oeewoegiqgywwmos;
                ekaasiygiigkuasg:
                if (!$weyoqgcesqgeusiu) {
                    goto qokggikksgqmecam;
                }
                goto aaqiykkkmossycmw;
                gqeeomoukqkowycw:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto kkicowiukwoykmms;
                }
                goto uussagskoysuoeiw;
                ywimgeoyusmceogc:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto aswkmiocmcogokyy;
                ueoygowuiugooicc:
            }
            goto wwkgimsumqsaicoy;
            aesusogymakeuios:
        }
        goto ogekauwggisguwkq;
        kcaciomiguuugugi:
        $gwiqqkoakiiquksg = str_replace("\x5f\137\x74\162\x61\x73\150\x65\x64", '', $gwiqqkoakiiquksg);
        goto kwqoqgccuqgigkoc;
        eemuaaqoyiqiyyoe:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto gmwqisoikakuqicc;
        oymoaaossqyocmue:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto cscciumkmikyqica;
        gmwqisoikakuqicc:
        seqgigumouyguowy:
        goto oouaueaaciqmoaek;
        amaoecqeywkkmyoi:
        
        array_push($auwuoyyagaiegwae, home_url("\x2f"));
        goto oymoaaossqyocmue;
        qqewuuoigkoeeocq:
        kawkoccmuqqeamms:
        goto ksmsiiaeokcggegc;
        cscciumkmikyqica:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\163\150\157\167\x5f\157\x6e\x5f\146\162\157\156\164") == "\x70\x61\x67\x65")) {
            goto kawkoccmuqqeamms;
        }
        goto imsmuoawuiemiisk;
        uwyuiwkkeuwsykys:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto acmoiyiogowkkesw;
        acmoiyiogowkkesw:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto ocsyqkkqkwekgakm;
        ocsyqkkqkwekgakm:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto wuucmmcggqqsmakc;
        imsmuoawuiemiisk:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto qqewuuoigkoeeocq;
        ucwuomcmcoqmyqwm:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto iomigqssyeeaqgsg;
        wccuioiewmeamewo:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto ucwuomcmcoqmyqwm;
        ksmsiiaeokcggegc:
        return $auwuoyyagaiegwae;
        goto ugqqciuuwaioyowe;
        wuucmmcggqqsmakc:
        if (!($myyccyuumcscsagc == true)) {
            goto seqgigumouyguowy;
        }
        goto eemuaaqoyiqiyyoe;
        ogekauwggisguwkq:
        csciwewamgcguguc:
        goto uwyuiwkkeuwsykys;
        uqoowswseqmmisei:
        $auwuoyyagaiegwae = [];
        goto aeamameocikekces;
        kwqoqgccuqgigkoc:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\x65\145\144\x2f");
        goto ikuuqaoiwigcmwyu;
        ikuuqaoiwigcmwyu:
        ueocsmuykwyoywui:
        goto amaoecqeywkkmyoi;
        ugqqciuuwaioyowe:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto acoociuqgmymeggw;
        amgecmwokwwiiuac:
        woaewkuksuiogeoo:
        goto wgwsicukewmsscec;
        kcgismqksoywmcea:
        if ($wkaqekwwgqsqwcoi) {
            goto woaewkuksuiogeoo;
        }
        goto msyksokkggaqasey;
        wmssywakgoiswqey:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto siymkkcgeegouiuq;
        siymkkcgeegouiuq:
        scywsowkeyyssgqo:
        goto kcgismqksoywmcea;
        muisqceosooggyoy:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto wyuyokmygemgqsmk;
        wyuyokmygemgqsmk:
        if (!$mksyucucyswaukig) {
            goto scywsowkeyyssgqo;
        }
        goto ycimqmmmgskimkgi;
        acoociuqgmymeggw:
        $wkaqekwwgqsqwcoi = '';
        goto muisqceosooggyoy;
        msyksokkggaqasey:
        $wkaqekwwgqsqwcoi = "\x61\x64\x6d\151\x6e\x2d{$useksmwkuswkwcqg}";
        goto amgecmwokwwiiuac;
        wgwsicukewmsscec:
        return $wkaqekwwgqsqwcoi;
        goto gcywkgcegesysuoy;
        ycimqmmmgskimkgi:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto wmssywakgoiswqey;
        gcywkgcegesysuoy:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto wgceoaueoiiwwuum;
        ycuamgwmgueemuaq:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto aigiscsuosewiuus;
        asmoomkuqyqqywkk:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\x61\x62\x65\x6c\x73\56\163\151\156\x67\x75\x6c\x61\162\x5f\156\x61\x6d\x65");
        goto suusasmyiceigsyk;
        imyoymgguyuiksia:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto ycuamgwmgueemuaq;
        ousiykwqkgeokoqs:
        return sprintf("\x25\163\40\x2d\40\x25\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto qcimcgcggicewoug;
        wgceoaueoiiwwuum:
        $post = self::get($post);
        goto imyoymgguyuiksia;
        suusasmyiceigsyk:
        agqsiuycgsaoescw:
        goto ousiykwqkgeokoqs;
        aigiscsuosewiuus:
        if (!$useksmwkuswkwcqg) {
            goto agqsiuycgsaoescw;
        }
        goto asmoomkuqyqqywkk;
        qcimcgcggicewoug:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\x68\x6f" => false, self::TYPE => "\x6d\x6f\x6e\x74\150\154\171", self::ORDER => "\x44\x45\123\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto ksukaiqewqogiqwu;
        uwkcasugwwwwmmqu:
        iqeuoqeeceiikmse:
        goto sigseymecgiowiii;
        ksukaiqewqogiqwu:
        $cekoogweeooasayu = false;
        goto eyuickmcmiiwcgss;
        weeeiiqqgqoymeke:
        if (!$sqeykgyoooqysmca) {
            goto iqeuoqeeceiikmse;
        }
        goto omaqoumkmmmuuwkq;
        eyuickmcmiiwcgss:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto weeeiiqqgqoymeke;
        omaqoumkmmmuuwkq:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto uwkcasugwwwwmmqu;
        sigseymecgiowiii:
        return $cekoogweeooasayu;
        goto uwkaawaqoswkcuye;
        uwkaawaqoswkcuye:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto eguuyyiaceyocoge;
        oyqsaukeioykugmm:
        ocykayyqumgsymkk:
        goto meeceoqcuuasiiio;
        smqgoowsgakckqse:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto oyqsaukeioykugmm;
        meeceoqcuuasiiio:
        return $eeamcawaiqocomwy;
        goto iayksyuawioekakq;
        eguuyyiaceyocoge:
        $eeamcawaiqocomwy = null;
        goto skyscuweykackoci;
        kyouiqwywyqgkuso:
        if (!$qscaoekmoooeuyqg) {
            goto ocykayyqumgsymkk;
        }
        goto smqgoowsgakckqse;
        skyscuweykackoci:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto kyouiqwywyqgkuso;
        iayksyuawioekakq:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto wequuyiayswgoosg;
        wequuyiayswgoosg:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto uesmmkgaqoqmaiik;
        }
        goto iyqaossmgeskkcgg;
        iyqaossmgeskkcgg:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto gkweycueymqasawm;
        gkweycueymqasawm:
        uesmmkgaqoqmaiik:
        goto euceooqmeegmumya;
        euceooqmeegmumya:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto igkuwcieaaaimceu;
        igkuwcieaaaimceu:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto qsqgsggawskeqauc;
        qsqgsggawskeqauc:
        $sogksuscggsicmac = null;
        goto kwigmoscuksaeaik;
        awcgaimyecemucay:
        if ($wyoiwuqokyeeuguk) {
            goto imgkgmwywoyggiiy;
        }
        goto cymkauiwaemgisae;
        wwuyacuysiocqcwq:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto cgwwckgiugakqowu;
        ieyqmiueyikwcwso:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\x73\164\137\x74\x69\164\154\145" => '', "\160\x6f\163\x74\137\x6e\141\x6d\145" => '', "\x70\157\163\x74\137\x63\157\x6e\164\145\156\164" => '', "\x70\x6f\x73\x74\x5f\163\x74\141\x74\165\x73" => '']);
        goto eqooeogyogusoyci;
        kwigmoscuksaeaik:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto ieyqmiueyikwcwso;
        aookismekyuisiqy:
        return $sogksuscggsicmac;
        goto isawkmamaukaekcg;
        cgwwckgiugakqowu:
        imgkgmwywoyggiiy:
        goto aookismekyuisiqy;
        eqooeogyogusoyci:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\x70\157\163\164\x5f\x6e\x61\x6d\x65"], self::POSTS_PER_PAGE => 1]);
        goto awcgaimyecemucay;
        cymkauiwaemgisae:
        $ywmkwiwkosakssii["\160\x6f\163\164\x5f\141\165\164\150\x6f\162"] = ManipulateUser::mwikyscisascoeea();
        goto wwuyacuysiocqcwq;
        isawkmamaukaekcg:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\160\x6f\163\164\x5f\151\144"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto eqgewqgayssmyqyi;
        ikggeywmqciukyuy:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto ksycyguoaoakaasa;
        }
        goto uogugagqqgaumeui;
        uogugagqqgaumeui:
        global $wpdb;
        goto qeeiayaggickmsem;
        mygoemwmmmmeswoy:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\56\x70\157\163\164\137\160\141\x73\x73\167\x6f\162\x64\40\x3d\40\x27\x27";
        goto wsocqyukguoqmoou;
        siikoyaookakcsya:
        keqweiemkiakogck:
        goto akiaoyqwwgyogmwa;
        emwuosqcciqgwuec:
        $qwcmueausqgiwigy = "\x20\101\116\x44\x20" . implode("\x20\101\116\x44\40", $qwcmueausqgiwigy);
        goto daaaoeseaeakowis;
        qeeiayaggickmsem:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto ygyikqcaweccikoy;
        oaquckygauqeycue:
        $qwcmueausqgiwigy = [];
        goto ouuuiwcmacckekgw;
        mqqqskweuccusqsg:
        return $qwcmueausqgiwigy;
        goto egssagkqigycaowo;
        wsocqyukguoqmoou:
        qacmciyceoyqmims:
        goto emwuosqcciqgwuec;
        eqgewqgayssmyqyi:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\163\x65\x61\162\x63\x68\x5f\x74\x65\x72\x6d\163");
        goto ikggeywmqciukyuy;
        daaaoeseaeakowis:
        ksycyguoaoakaasa:
        goto mqqqskweuccusqsg;
        ouuuiwcmacckekgw:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\x2e\x70\157\163\164\137\x74\x69\x74\x6c\x65\x20\x4c\111\x4b\x45\x20\45\163", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            sqigokysuqqoyoqq:
        }
        goto siikoyaookakcsya;
        ygyikqcaweccikoy:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\164"]) ? '' : "\45";
        goto oaquckygauqeycue;
        akiaoyqwwgyogmwa:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto qacmciyceoyqmims;
        }
        goto mygoemwmmmmeswoy;
        egssagkqigycaowo:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto iuagymwagckgasgy;
        yyckkkysceayoacc:
        return $useksmwkuswkwcqg;
        goto fgacmumaqamuggaw;
        yieyamwmiyceaysm:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto qqsoyoesgkwakcwc;
        qqsoyoesgkwakcwc:
        usymiywgyuqgsmgo:
        goto wqsikiwycqwksiwy;
        asqikgqmeqysakky:
        mweuowgyuuomycug:
        goto yyckkkysceayoacc;
        wqsikiwycqwksiwy:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto asqikgqmeqysakky;
        gogeigmcqokqqiwc:
        if ($useksmwkuswkwcqg) {
            goto usymiywgyuqgsmgo;
        }
        goto yieyamwmiyceaysm;
        iuagymwagckgasgy:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto mweuowgyuuomycug;
        }
        goto gogeigmcqokqqiwc;
        fgacmumaqamuggaw:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto ywkowqwiseoaosue;
        qyowaswasswaayey:
        ssseiiwsmacscqkk:
        goto iqayckmwkoaoyusg;
        iqayckmwkoaoyusg:
        wsagsuekaoamamwq:
        goto cusamwcumoyaccig;
        oeyaaksqsgmecwmm:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto qyowaswasswaayey;
        cusamwcumoyaccig:
        gqkckwmwucyicaom:
        goto qckuswayaoymsksk;
        ywkowqwiseoaosue:
        if (is_numeric($post)) {
            goto gqkckwmwucyicaom;
        }
        goto giismoqygwoeiucm;
        giismoqygwoeiucm:
        $post = ManipulateArray::get($post, "\111\104");
        goto usayuwaoekoyeigw;
        gawoykaumugqiiiw:
        goto ssseiiwsmacscqkk;
        goto oeiyuauoweasyegq;
        sgwggiwoawyysamo:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto umugkkiiiakomyae;
        }
        goto zoeammwiceimsmea;
        zoeammwiceimsmea:
        $post = get_the_ID();
        goto gawoykaumugqiiiw;
        qckuswayaoymsksk:
        return $post;
        goto egoyusisgekiqoye;
        oeiyuauoweasyegq:
        umugkkiiiakomyae:
        goto oeyaaksqsgmecwmm;
        usayuwaoekoyeigw:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto wsagsuekaoamamwq;
        }
        goto sgwggiwoawyysamo;
        egoyusisgekiqoye:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto iwgymiqeamaeqqom;
        aamackwoccmccyks:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto meamgyseweakcwms;
        uaequckaaeewaqiy:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\x70\157\x73\x74\x5f\163\164\x61\x74\165\163" => "\x70\x75\x62\x6c\x69\x73\150", "\x66\x69\x65\x6c\144\163" => self::IDS]);
        goto eqyccakwmkgmsyik;
        iwgymiqeamaeqqom:
        if ($sciomagaqmgggsiu) {
            goto eukasuwuekwugokm;
        }
        goto aamackwoccmccyks;
        meamgyseweakcwms:
        eukasuwuekwugokm:
        goto uaequckaaeewaqiy;
        eqyccakwmkgmsyik:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\163\x74\137\156\141\x6d\x65", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto mmmaqiceqwswaica;
        ukamoqcwkkacmkuo:
        $gaeqamemwmwsyukm = 0;
        goto osisauycomkeaisq;
        osisauycomkeaisq:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\123\x45\x4c\x45\x43\x54\40\103\117\x55\116\x54\x28\x63\x6f\155\x6d\x65\156\164\x5f\111\104\51\12\x9\11\x9\x9\11\106\122\117\115\40{$wpdb->comments}\40\x57\x48\105\x52\x45\40\143\x6f\x6d\155\x65\x6e\x74\137\x70\x6f\x73\x74\x5f\111\x44\40\x69\156\40\x28\xa\x9\11\x9\11\x9\123\x45\x4c\x45\103\124\40\x49\x44\x20\x46\x52\x4f\115\x20{$wpdb->posts}\x20\x57\110\x45\122\105\40\160\157\x73\x74\137\164\x79\x70\x65\x20\75\x20\x27{$useksmwkuswkwcqg}\47\xa\11\x9\11\x9\x9\x41\x4e\x44\40\x70\x6f\163\x74\137\x73\164\141\x74\165\x73\40\75\x20\47\x70\165\142\154\x69\163\150\47\51\40\101\116\x44\40\143\x6f\x6d\x6d\x65\x6e\x74\137\141\x70\160\162\157\x76\145\144\40\75\40\47\x31\x27");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto sysqgmqceqakymga;
        mmmaqiceqwswaica:
        global $wpdb;
        goto ukamoqcwkkacmkuo;
        sysqgmqceqakymga:
        return $gaeqamemwmwsyukm;
        goto ckoqcgskyowkgwqc;
        ckoqcgskyowkgwqc:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\x73\x74\x5f\163\164\141\164\x75\163", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\160\157\x73\x74\137\141\165\x74\x68\157\162", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\147\145\x74\137\x70\x6f\x73\164\137\x77\x6f\162\x64\x5f\143\157\x75\x6e\164", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto imkggwewaoaeaaaa;
        ueyscskqyqmwgyqq:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto qgsqycogyicuiioq;
        kegkgqcaoogqqwuy:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto ueyscskqyqmwgyqq;
        imkggwewaoaeaaaa:
        $ywmkwiwkosakssii["\156\x61\155\x65"] = $ymqmyyeuycgmigyo;
        goto kegkgqcaoogqqwuy;
        qgsqycogyicuiioq:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\160\x6f\x73\x74", $ywmkwiwkosakssii = [])
    {
        goto easusuoaqiwgcuui;
        gacwuumiuewqgeim:
        $yiasugywggckywoa["\143\x61\x74"] = $yiasugywggckywoa["\x63\x61\164\x65\147\x6f\162\x79"];
        goto iecocimeqmmockam;
        ikqwwkscesmugsuq:
        return new WP_Query($yiasugywggckywoa);
        goto mioiyawikawqyaay;
        iaqwyagqyokkmeoo:
        if (!empty($yiasugywggckywoa["\x65\x78\x63\x6c\165\x64\145"])) {
            goto uwmckciqcuwoyemm;
        }
        goto uqowsoiyaummsyoy;
        ocuocqiyuecksmsi:
        $yiasugywggckywoa["\x70\157\163\x74\163\x5f\160\x65\162\137\160\x61\147\145"] = $yiasugywggckywoa["\x6e\165\155\142\145\162\160\x6f\163\164\163"];
        goto ekayucummqeqmwgc;
        suicyusecackqaii:
        if (empty($yiasugywggckywoa["\143\x61\x74\x65\x67\x6f\162\171"])) {
            goto wcykiuessuoeagki;
        }
        goto gacwuumiuewqgeim;
        oayuucaeciioiwqw:
        $yiasugywggckywoa["\160\x6f\x73\x74\137\x5f\x69\156"] = $egekuwigiusmwiek;
        goto gqkuecyoaomqacgk;
        quwqksyoiigamkys:
        xeeuigemugoamqao:
        goto eqwmoigeokkskwuy;
        kyicaqywsmawwwuo:
        $yiasugywggckywoa["\156\157\137\146\157\165\156\x64\x5f\162\x6f\x77\x73"] = true;
        goto ikqwwkscesmugsuq;
        easusuoaqiwgcuui:
        $ycmguuqqaiisymgg = ["\x6e\165\155\x62\x65\162\x70\157\x73\164\x73" => 5, "\143\x61\164\x65\147\x6f\x72\x79" => 0, "\157\x72\144\x65\162\x62\171" => "\144\x61\x74\x65", "\157\162\x64\x65\x72" => "\x44\x45\123\x43", "\151\156\143\x6c\165\x64\145" => [], "\x65\x78\143\154\x75\x64\145" => [], "\x6d\x65\x74\x61\137\x6b\145\x79" => '', "\155\145\x74\141\x5f\166\x61\154\165\x65" => '', "\160\x6f\x73\164\x5f\x74\171\160\x65" => $useksmwkuswkwcqg, "\x73\165\x70\x70\162\x65\x73\x73\137\146\151\154\x74\145\162\x73" => true];
        goto sqmqymmecmqykiqs;
        gmycyuqoscismuig:
        $yiasugywggckywoa["\x70\x6f\163\164\137\163\x74\x61\164\x75\163"] = "\x61\164\x74\141\143\x68\155\x65\x6e\x74" === $yiasugywggckywoa["\x70\x6f\163\164\x5f\x74\x79\x70\145"] ? "\x69\x6e\x68\x65\x72\151\x74" : "\x70\x75\142\154\x69\163\x68";
        goto qqmeumqiyqkoycww;
        eqwmoigeokkskwuy:
        $yiasugywggckywoa["\x69\x67\x6e\x6f\x72\145\x5f\163\x74\151\x63\x6b\171\x5f\x70\x6f\x73\x74\x73"] = true;
        goto kyicaqywsmawwwuo;
        qqmeumqiyqkoycww:
        eycmewmysuymswuk:
        goto eewcoeiokouymaic;
        iecocimeqmmockam:
        wcykiuessuoeagki:
        goto ceogiuqcsqkmysga;
        youwoggqmcuggmyy:
        if (!empty($yiasugywggckywoa["\x70\157\x73\164\137\x73\x74\x61\x74\x75\x73"])) {
            goto eycmewmysuymswuk;
        }
        goto gmycyuqoscismuig;
        ukaocimwskuqgqso:
        $yiasugywggckywoa["\x70\x6f\163\164\137\x5f\156\157\x74\137\151\x6e"] = wp_parse_id_list($yiasugywggckywoa["\x65\x78\143\x6c\x75\x64\145"]);
        goto quwqksyoiigamkys;
        ekayucummqeqmwgc:
        sccqosiycoaosikm:
        goto suicyusecackqaii;
        gqkuecyoaomqacgk:
        goto xeeuigemugoamqao;
        goto asgkgomkmykaqeac;
        sqmqymmecmqykiqs:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto youwoggqmcuggmyy;
        asgkgomkmykaqeac:
        uwmckciqcuwoyemm:
        goto ukaocimwskuqgqso;
        kusoiyymwykqsgue:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\x69\x6e\143\154\165\144\145"]);
        goto agksaoiusscawcwc;
        syuoooyaackuoues:
        ameoiemwymmeomqq:
        goto kusoiyymwykqsgue;
        agksaoiusscawcwc:
        $yiasugywggckywoa["\160\x6f\x73\x74\x73\x5f\x70\x65\162\137\x70\x61\x67\x65"] = count($egekuwigiusmwiek);
        goto oayuucaeciioiwqw;
        uqowsoiyaummsyoy:
        goto xeeuigemugoamqao;
        goto syuoooyaackuoues;
        ceogiuqcsqkmysga:
        if (!empty($yiasugywggckywoa["\151\156\x63\154\165\144\x65"])) {
            goto ameoiemwymmeomqq;
        }
        goto iaqwyagqyokkmeoo;
        eewcoeiokouymaic:
        if (!(!empty($yiasugywggckywoa["\156\165\155\142\x65\162\x70\157\163\x74\163"]) && empty($yiasugywggckywoa["\x70\x6f\x73\164\x73\x5f\160\145\162\137\160\141\147\145"]))) {
            goto sccqosiycoaosikm;
        }
        goto ocuocqiyuecksmsi;
        mioiyawikawqyaay:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto qycekaqowowqaosm;
        gwimqwmmuacwkmou:
        return $uyuaosigqymaqsaa;
        goto kswkocesygkuqiiy;
        qycekaqowowqaosm:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto iuaikkckoskwuwyw;
        kwugcgwmcsoswees:
        wwcimuywiwqwagoq:
        goto gwimqwmmuacwkmou;
        iuaikkckoskwuwyw:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto wwcimuywiwqwagoq;
        }
        goto oksiwycekgweuyoc;
        oksiwycekgweuyoc:
        $uyuaosigqymaqsaa = [];
        goto kwugcgwmcsoswees;
        kswkocesygkuqiiy:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto wakcuqwemksmyeos;
        uwgksqcakaieyscy:
        kwiuwccmuwwwwcak:
        goto oqcgimyqwmqgyygw;
        aoycieuggikeomis:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto uwgksqcakaieyscy;
        oqcgimyqwmqgyygw:
        return $qscaoekmoooeuyqg;
        goto oeegykgsgkscwcio;
        uwscoaaycokmqegk:
        $wwgucssaecqekuek["\150\162\145\x66"] = $qscaoekmoooeuyqg;
        goto swqycaokmkkykkea;
        swqycaokmkkykkea:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\x64\x69\163\160\x6c\x61\171\x5f\156\x61\x6d\x65", self::mguqscccckuywsya($post));
        goto aoycieuggikeomis;
        wakcuqwemksmyeos:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto eqyykccckaqyikas;
        eqyykccckaqyikas:
        if (!$qscaoekmoooeuyqg) {
            goto kwiuwccmuwwwwcak;
        }
        goto uwscoaaycokmqegk;
        oeegykgsgkscwcio:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto cauamyimeqmgwick;
        wimqsusyesasaism:
        return $useksmwkuswkwcqg;
        goto uockmkmeymgyqsqi;
        ymiiukyiasogueiq:
        if (!is_numeric($post)) {
            goto qmgqguiisgckwocw;
        }
        goto qsweawwuowkoeemg;
        qsweawwuowkoeemg:
        $post = self::get($post);
        goto wawiggqugqwwacgq;
        ygygqysoqeimimgm:
        imsqyecesygwiwkk:
        goto wgyqskiikcoamceq;
        mmgsqoiukqkyiayw:
        if (!$awqscowmskeuymeu) {
            goto coaiaawqcaggmemg;
        }
        goto qeyuquwgysuucygo;
        qeyuquwgysuucygo:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto kmocumwwsgkgeqay;
        yoceycuiiwwmscci:
        $useksmwkuswkwcqg = ManipulateServer::get("\x70\157\163\x74\137\x74\x79\160\145");
        goto xeyusieocqgkowca;
        wawiggqugqwwacgq:
        qmgqguiisgckwocw:
        goto qwkwyciyyigugcms;
        xeyusieocqgkowca:
        yysqgqeoyckgmcsa:
        goto mmgsqoiukqkyiayw;
        kmocumwwsgkgeqay:
        coaiaawqcaggmemg:
        goto wimqsusyesasaism;
        ceqcqskmksiuosuy:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\x6f\163\164\x5f\164\171\x70\x65");
        goto ygygqysoqeimimgm;
        wgyqskiikcoamceq:
        if ($useksmwkuswkwcqg) {
            goto yysqgqeoyckgmcsa;
        }
        goto yoceycuiiwwmscci;
        qwkwyciyyigugcms:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto imsqyecesygwiwkk;
        }
        goto ceqcqskmksiuosuy;
        cauamyimeqmgwick:
        $useksmwkuswkwcqg = get_post_type();
        goto ymiiukyiasogueiq;
        uockmkmeymgyqsqi:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\x6c\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\x70\165\x62\154\x69\163\150", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto siiyycmowckwsemw;
        ckqgkowqkggscuoi:
        DecoratorHook::ggmgmqswqkgecosg("\160\157\163\x74\x73\x5f\x73\x65\x61\x72\143\x68", [__CLASS__, "\163\x65\x61\x72\x63\150\x42\x79\x54\151\x74\x6c\145"], 10);
        goto qowqokqkiweosuwa;
        ikwwiueqmmkayyce:
        sigisgiqiuiuqemc:
        goto iwcwuugoguscgqye;
        siiyycmowckwsemw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\157\162\144\x65\162" => "\101\123\x43", "\160\x6f\163\164\x73\x5f\x70\x65\162\137\160\x61\147\145" => 10]);
        goto aecweaquqmiiimsc;
        aecweaquqmiiimsc:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto sigisgiqiuiuqemc;
        }
        goto wkkwgyuaqwiygawe;
        qowqokqkiweosuwa:
        return $wyoiwuqokyeeuguk;
        goto qucmewyuwkkwsseo;
        iwcwuugoguscgqye:
        DecoratorHook::cecaguuoecmccuse("\160\x6f\x73\x74\163\137\x73\x65\x61\162\x63\150", [__CLASS__, "\x73\x65\x61\162\143\x68\x42\171\124\151\164\x6c\145"], 10, 2);
        goto kymkyymiquekuscq;
        uaeyogsicwkuwcak:
        $ywmkwiwkosakssii["\163\165\160\x70\x72\145\163\163\x5f\x66\x69\x6c\x74\x65\162\x73"] = false;
        goto ikwwiueqmmkayyce;
        kymkyymiquekuscq:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto ckqgkowqkggscuoi;
        wkkwgyuaqwiygawe:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto uaeyogsicwkuwcak;
        qucmewyuwkkwsseo:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto zkuyggayyoqeeqek;
        sgguaokgyweasccc:
        return $uyuaosigqymaqsaa;
        goto gyuioyyowaiqcywy;
        zkuyggayyoqeeqek:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto omcseuaowsucussk;
        iimqqykwwmqeukai:
        $uyuaosigqymaqsaa = null;
        goto qsaagygqqsmgiesk;
        qymkekiqwouwaoos:
        osgkqqqqimmwsmsi:
        goto eceowukgiumqosom;
        okeewwyoqawamsoa:
        megauiwcsiuuiquk:
        goto sgguaokgyweasccc;
        qsaagygqqsmgiesk:
        goto megauiwcsiuuiquk;
        goto qymkekiqwouwaoos;
        wywyyuawikmwceym:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto eomwsawiqyuyiiiw;
        eomwsawiqyuyiiiw:
        kocoameeyqygkwok:
        goto okeewwyoqawamsoa;
        eceowukgiumqosom:
        if (!$qqgsimqiqyaugceg) {
            goto kocoameeyqygkwok;
        }
        goto wywyyuawikmwceym;
        omcseuaowsucussk:
        if (is_array($uyuaosigqymaqsaa)) {
            goto osgkqqqqimmwsmsi;
        }
        goto iimqqykwwmqeukai;
        gyuioyyowaiqcywy:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto cyamaucweckqmscc;
        cyamaucweckqmscc:
        $post = self::get($post);
        goto ssiwoquqiiuysuma;
        usyyyguieaqqyswa:
        return $iayakwckycsumkqa;
        goto ousiqsmccumayaes;
        ssiwoquqiiuysuma:
        $iayakwckycsumkqa = null;
        goto iiukckigywisaego;
        iiukckigywisaego:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto gcaaimgqweguwksg;
        }
        goto yucmskwuguqgqimc;
        yucmskwuguqgqimc:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto eeieegmqysegumei;
        eeieegmqysegumei:
        gcaaimgqweguwksg:
        goto usyyyguieaqqyswa;
        ousiqsmccumayaes:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto mqkwmkuieegmucmg;
        cyomqwmieugiasem:
        mgywqmgswkeyucaq:
        goto yuycmoyawueickya;
        agauowggkqsoyqiq:
        if (!($pagenow == "\x65\144\151\164\56\160\x68\160" && is_admin())) {
            goto mgywqmgswkeyucaq;
        }
        goto okyuswywywsaeias;
        cccgemwsykwgemeg:
        smsymmwykgkakeqk:
        goto cyomqwmieugiasem;
        aeaqgqqqowqykgcc:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto smsymmwykgkakeqk;
        }
        goto iycimwiaauksigiw;
        mqkwmkuieegmucmg:
        global $pagenow;
        goto ugaowwakggeccsic;
        okyuswywywsaeias:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto aeaqgqqqowqykgcc;
        ugaowwakggeccsic:
        $sogksuscggsicmac = false;
        goto agauowggkqsoyqiq;
        iycimwiaauksigiw:
        $sogksuscggsicmac = true;
        goto cccgemwsykwgemeg;
        yuycmoyawueickya:
        return $sogksuscggsicmac;
        goto oieoyiowucgkouoq;
        oieoyiowucgkouoq:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\141\160\x70\x72\x6f\166\x65\x64")
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
        goto wcuuyecsiamsaqqy;
        ciqqeouuygcaiiiq:
        if ($post) {
            goto asckqiuugiguuiwe;
        }
        goto qgyqamakooyqciyo;
        qgyqamakooyqciyo:
        goto aiaiswgwmcguoues;
        goto wioicqyeyqmsckwg;
        iiysucwqgweammss:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto gaqccucuqyssqkmy;
        wioicqyeyqmsckwg:
        mwuisiuasugcaywu:
        goto iiysucwqgweammss;
        seggcuqcuiaegeya:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\160\157\x73\164\x5f\143\157\156\x74\145\156\164");
        goto ucouymumcuosygii;
        ucouymumcuosygii:
        aiaiswgwmcguoues:
        goto woquimckgiecokuo;
        iimwiesgggauwcqk:
        $ewgwqamkygiqaawc = '';
        goto gomiiockquaqsyuo;
        wcuuyecsiamsaqqy:
        $post = self::get($post);
        goto iimwiesgggauwcqk;
        woquimckgiecokuo:
        return $ewgwqamkygiqaawc;
        goto gggayasokuomgeus;
        gomiiockquaqsyuo:
        if ($egkeamycaysqsoma) {
            goto mwuisiuasugcaywu;
        }
        goto ciqqeouuygcaiiiq;
        gioogyikawiiiyqq:
        asckqiuugiguuiwe:
        goto seggcuqcuiaegeya;
        gaqccucuqyssqkmy:
        goto aiaiswgwmcguoues;
        goto gioogyikawiiiyqq;
        gggayasokuomgeus:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\x6f\x73\x74\x5f\x70\141\162\x65\x6e\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto guoyescsqcuuymku;
        guoyescsqcuuymku:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto emkqygwcsiyiykiw;
        euuaeuyegkksasge:
        return $eyagosskwwmgwmog;
        goto akuskaiiaswmksko;
        yeuqcwawkauowkgu:
        cqmkeyweesgwycgy:
        goto euuaeuyegkksasge;
        emkqygwcsiyiykiw:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            gsoskqieucsesaks:
        }
        goto yeuqcwawkauowkgu;
        akuskaiiaswmksko:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto iwmassqyauymkwaa;
        kwgwkkkaagkkesik:
        hwiqmsqyyiscmeiu:
        goto weyumyqgceqsimmq;
        yaswwoqemsqmawse:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto keygywkiwuoagqsw;
        }
        goto icwuocgiukckmyyu;
        icwuocgiukckmyyu:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto cioomiusgwycykag;
        iccqsmwsmisaayam:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto sqecccyugmaiuwsq;
        sqecccyugmaiuwsq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto xocaameouysockim;
        iwmassqyauymkwaa:
        $sogksuscggsicmac = [];
        goto iccqsmwsmisaayam;
        aeesuccguagwomqw:
        keygywkiwuoagqsw:
        goto ogisaykaiaeuiika;
        xocaameouysockim:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\147\145\x74\x5f\160\x6f\x73\164\163\x5f\141\x72\x67\x73", $ywmkwiwkosakssii);
        goto sycecywsiomgcuiq;
        ogisaykaiaeuiika:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto qwkoeagysgskmuyq;
            mekmscssquqsgquc:
            if (!$meqocwsecsywiiqs) {
                goto cigaaqeauwccoiqa;
            }
            goto seqwmeeoiicciigo;
            qwkoeagysgskmuyq:
            $meqocwsecsywiiqs = get_the_title($post);
            goto mekmscssquqsgquc;
            seqwmeeoiicciigo:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto gacasmwcscckymwc;
            gacasmwcscckymwc:
            cigaaqeauwccoiqa:
            goto koiimcuoyakqsuam;
            koiimcuoyakqsuam:
            equokkeomguewmua:
            goto eskmkqowoyogaoko;
            eskmkqowoyogaoko:
        }
        goto vseyiyomcwkayoio;
        weyumyqgceqsimmq:
        return $sogksuscggsicmac;
        goto mkiyekcyyukamwck;
        sycecywsiomgcuiq:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto yaswwoqemsqmawse;
        cioomiusgwycykag:
        goto hwiqmsqyyiscmeiu;
        goto aeesuccguagwomqw;
        vseyiyomcwkayoio:
        wmsigkymceakwywo:
        goto kwgwkkkaagkkesik;
        mkiyekcyyukamwck:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\160\157\163\164\55\164\x68\x75\155\142\x6e\141\x69\x6c", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\160\x6f\163\164\137\x74\150\165\x6d\142\x6e\141\x69\154\x5f\165\x72\x6c", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\160\x6f\x73\164\137\x73\x74\x61\164\x75\x73" => "\160\x75\x62\154\151\163\150"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto seousiqwmmcaygac;
        ueeowwusmsueouao:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto uuauuoykcoseecuu;
        uuauuoykcoseecuu:
        guwikcacqsmwkyya:
        goto okwgeicyaawqyoye;
        ukqomyqaykkiygwu:
        $ocogsiouoiuuguym = null;
        goto cqoeiqeeukaiioia;
        bgsaeeicmsikiwgm:
        ueiqomqieicasmsi:
        goto wmwkgawmkmciaeoi;
        wgcewuoaksusicyi:
        if (!$egkeamycaysqsoma) {
            goto ueiqomqieicasmsi;
        }
        goto oeqsgusqqgoioqwu;
        okwgeicyaawqyoye:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto wgcewuoaksusicyi;
        ssqieyoogiwsyksk:
        return $ocogsiouoiuuguym;
        goto siceqsgwyswyguog;
        oeqsgusqqgoioqwu:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\x74\x68\x65\137\x64\x61\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto bgsaeeicmsikiwgm;
        wmwkgawmkmciaeoi:
        domskgkmquiwwqcg:
        goto ssqieyoogiwsyksk;
        seousiqwmmcaygac:
        $post = self::get($post);
        goto ukqomyqaykkiygwu;
        cqoeiqeeukaiioia:
        if (!$post) {
            goto domskgkmquiwwqcg;
        }
        goto qqecycksisecgwiw;
        qqecycksisecgwiw:
        if ($saqmwwmqiwmkiwaa) {
            goto guwikcacqsmwkyya;
        }
        goto ueeowwusmsueouao;
        siceqsgwyswyguog:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto igegouiwyasqgwwc;
        igegouiwyasqgwwc:
        if ($post instanceof WP_Post) {
            goto kgkweawaqmqomkuc;
        }
        goto mamieseosscguoye;
        iswuimkowigsiwmi:
        kgkweawaqmqomkuc:
        goto yysqwceyageaeieo;
        ygiwsaegqoeaocqi:
        $post = null;
        goto wwkeoqicoeqmsuui;
        gqcsicosskykmgiu:
        if ($post) {
            goto qmsmcsoqgumsigme;
        }
        goto yagoqwkegiyqceoe;
        yysqwceyageaeieo:
        return $post;
        goto umuwmuiugqisoyek;
        wwkeoqicoeqmsuui:
        kaaweieegskiqqgm:
        goto iswuimkowigsiwmi;
        ieywgqsawwkgiamc:
        uucqywaoqssqggug:
        goto ygiwsaegqoeaocqi;
        mamieseosscguoye:
        if (!$post && $cwwowqyuwccuykom) {
            goto uucqywaoqssqggug;
        }
        goto gqcsicosskykmgiu;
        yagoqwkegiyqceoe:
        $post = ManipulateServer::get(self::POST);
        goto oywouymwcigkauye;
        oywouymwcigkauye:
        qmsmcsoqgumsigme:
        goto iaekkeskykqsyiim;
        skuwwwayeyemggoe:
        goto kaaweieegskiqqgm;
        goto ieywgqsawwkgiamc;
        iaekkeskykqsyiim:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto skuwwwayeyemggoe;
        umuwmuiugqisoyek:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ymgyewqwqmcukmyu;
        iocmmwiqausgmkcu:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto usuwmkwcsukckuee;
        ymgyewqwqmcukmyu:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto wmgqacaeeuokysey;
        usuwmkwcsukckuee:
        goto eyimaakssauckmgk;
        goto ewmmuusmqgceimky;
        ukmmkgmcooowqksi:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto ygeaissawcacmmyu;
        }
        goto sisumqgocskwyago;
        ewmmuusmqgceimky:
        ygeaissawcacmmyu:
        goto eoiysyeyuwwugsee;
        sisumqgocskwyago:
        goto eyimaakssauckmgk;
        goto miyyiuaokyesyygy;
        qaewuekauiwkuwoa:
        return trailingslashit($migiiksoiymissge);
        goto qgumkmmmeaoskamq;
        eoiysyeyuwwugsee:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto eoqgquwgcgkugouq;
        wecuakwyikeqwyac:
        if ($post) {
            goto ceoicyukguaouuwa;
        }
        goto ukmmkgmcooowqksi;
        eoqgquwgcgkugouq:
        eyimaakssauckmgk:
        goto qaewuekauiwkuwoa;
        miyyiuaokyesyygy:
        ceoicyukguaouuwa:
        goto iocmmwiqausgmkcu;
        wmgqacaeeuokysey:
        $migiiksoiymissge = '';
        goto wecuakwyikeqwyac;
        qgumkmmmeaoskamq:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\x73\164\x5f\160\x61\x72\x65\x6e\164"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto wayoumqqasqeowsk;
        suqyiooacuiiqcuk:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto iygakaaakekgyeqy;
        giuwumskimssakwo:
        return $ocogsiouoiuuguym;
        goto mumcqcssasmyqmca;
        iqkgeamgsuwqkckg:
        if ($saqmwwmqiwmkiwaa) {
            goto makigymuacqucieo;
        }
        goto wgiakoeckyswemak;
        uiyuycigkskokcco:
        makigymuacqucieo:
        goto suqyiooacuiiqcuk;
        syauycikyosiscgs:
        $ocogsiouoiuuguym = null;
        goto iqiwskswayisages;
        wgiakoeckyswemak:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto uiyuycigkskokcco;
        ewqwyuuyegqukcmw:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\164\137\164\150\145\x5f\155\x6f\144\x69\x66\151\145\x64\137\144\141\164\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto suuocycsksmcsqsm;
        wayoumqqasqeowsk:
        $post = self::get($post);
        goto syauycikyosiscgs;
        suuocycsksmcsqsm:
        yygauekecaiessss:
        goto yaioeuewuagwmaym;
        iygakaaakekgyeqy:
        if (!$egkeamycaysqsoma) {
            goto yygauekecaiessss;
        }
        goto ewqwyuuyegqukcmw;
        iqiwskswayisages:
        if (!$post) {
            goto faiesskquaeiqqom;
        }
        goto iqkgeamgsuwqkckg;
        yaioeuewuagwmaym:
        faiesskquaeiqqom:
        goto giuwumskimssakwo;
        mumcqcssasmyqmca:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\x62\x6f\164\x68")
    {
        goto aikomgoeseyekwqa;
        csmwsuakqgukaqkm:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto sckagcuweuycciog;
        mkmcaqquqsycicwk:
        wycsycuaymkqqgce:
        goto iyeukmoycqcoeoww;
        yimcyeuemqyssysu:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto ioecigquiawyecis;
        }
        goto towiyceuykgmeooc;
        aocacgkcisiuosug:
        if ($sciomagaqmgggsiu) {
            goto iiugkqmswuikwcuo;
        }
        goto csmwsuakqgukaqkm;
        iyeukmoycqcoeoww:
        sweyywawiwkgsqkw:
        goto cgmkwykqsuikugio;
        kqgkgyyskmmomkuy:
        switch ($ccamueccusigaaio) {
            case "\x65\144\x69\164":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\164\56\x70\x68\x70"]);
                goto sweyywawiwkgsqkw;
            case "\x6e\145\x77":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\163\x74\x2d\x6e\x65\167\x2e\160\x68\x70"]);
                goto sweyywawiwkgsqkw;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\x70\157\163\164\56\x70\x68\x70", "\x70\x6f\163\164\x2d\156\145\x77\56\x70\150\x70"]);
        }
        goto mkmcaqquqsycicwk;
        ciusceaiyqsgwesy:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto agmoeimoggkkmamk;
        quwawmyimwumqiik:
        ioecigquiawyecis:
        goto aoasseeyymigiuqg;
        aikomgoeseyekwqa:
        $sogksuscggsicmac = false;
        goto aocacgkcisiuosug;
        cgmkwykqsuikugio:
        ggwgiusgggqqckqw:
        goto quwawmyimwumqiik;
        agmoeimoggkkmamk:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto ggwgiusgggqqckqw;
        }
        goto kqgkgyyskmmomkuy;
        towiyceuykgmeooc:
        global $pagenow;
        goto ciusceaiyqsgwesy;
        aoasseeyymigiuqg:
        return $sogksuscggsicmac;
        goto gasqiqwuuokswuak;
        sckagcuweuycciog:
        iiugkqmswuikwcuo:
        goto yimcyeuemqyssysu;
        gasqiqwuuokswuak:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\145\164\x61\x5f\153\145\x79" => $gwiwsycaaqgwmewg, "\155\x65\x74\141\137\x76\141\154\165\145" => $aucgaecqisksougg, "\x70\157\163\164\x5f\x73\x74\x61\164\x75\x73" => "\141\x6e\171"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
