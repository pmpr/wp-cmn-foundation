<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

use DirectoryIterator;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Common;
use WP_Post;

class Icon extends Common
{
    const IS_ICON = "\x69\163\137\x69\143\x6f\x6e";
    const ICONS_PATH = "\151\155\147\x2f\163\x76\147\x2f\151\x63\157\156";
    
    protected ?string $root = null;
    
    public function ikeqsmumgwwuqmkw() : ?string
    {
        return $this->root;
    }
    
    public function __construct()
    {
        $this->root = self::cmewgsgomuwkkoou();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x75\143\x71\143\171\171\x69\x75\x69\x77\x65\x77\163\x75\147\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x69\143\157\156\137\150\164\x6d\154\137\x72\145\156\x64\x65\x72"), [$this, "\162\x65\x6e\144\x65\x72"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\x64\x69\x74\x5f\x61\164\164\x61\x63\x68\x6d\x65\x6e\164", [$this, "\143\161\157\x77\x75\151\x67\x6d\167\143\161\x71\143\x63\x75\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\143\157\x6e\x5f\x73\x76\147\x32\142\x61\x73\x65\66\64"), [$this, "\157\141\x75\145\163\x61\151\157\141\x79\x63\167\x79\x79\147\x79"])->cecaguuoecmccuse("\x65\x73\143\x61\160\x65\144\137\x69\x63\157\x6e\163\137\x64\x72\157\x70\144\157\167\156", [$this, "\x77\143\163\x79\x63\157\x73\x6f\157\163\x61\x77\x63\155\x63\165"], 10, 2)->cecaguuoecmccuse("\x61\x74\x74\x61\143\150\x6d\x65\156\x74\x5f\146\x69\x65\x6c\144\163\137\x74\157\137\x65\144\x69\x74", [$this, "\167\x75\x77\157\x63\141\157\x69\x69\145\x69\x77\x65\x79\171\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x63\157\156\x5f\x68\164\x6d\154\137\146\151\x6c\x74\x65\x72"), [$this, "\167\x63\x73\x69\x77\153\143\x79\145\157\153\141\155\x69\153\x65"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\x61\164\x74\x61\x63\150\x6d\x65\x6e\164", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x61\164\164\x61\x63\x68\x6d\145\156\164\137\151\x73\137\163\166\x67"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\164\x77\151\164\x74\x65\162", ["\x63\154\141\x73\163" => "\x70\x72\55\151\143\x6f\x6e\x20\151\x63\157\x6e\x2d\x78\163"], true);
            goto xiyuyqywsaaaeuuk;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\154\141\x62\x65\x6c" => __("\125\163\145\x20\x46\x6f\162\x20\x49\x63\157\x6e", PR__THM__FOUNDATION), "\x69\156\x70\x75\164" => "\150\x74\155\154", "\150\164\x6d\x6c" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\157\146\x66")->render(), "\x68\145\x6c\x70\163" => __("\x43\150\x65\143\x6b\40\151\146\40\171\157\x75\40\167\141\x6e\x74\x20\163\150\157\x77\40\x74\150\151\163\40\141\x74\x74\141\x63\150\x6d\x65\156\164\40\x69\x6e\x20\151\x63\157\156\x20\x6c\151\163\164\x2e", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\x68\165\155\x62\x6e\141\151\154")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\157\156") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\165\155\x62\x6e\x61\x69\x6c") : string
    {
        goto kuysqaocycusiooc;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\x70\x5f\147\x65\x74\x5f\141\x74\x74\x61\x63\x68\x6d\x65\156\x74\137\x69\x6d\x61\147\145\x5f\x61\164\x74\162\151\x62\165\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", "\x70\x72\55\x69\x63\157\x6e\x20\x69\x63\157\x6e\55{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\156\x2f", "\40", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\57\74\x67\x3e\133\x5c\x6e\134\x72\x5c\x73\x5d\x2a\74\x5c\x2f\147\x3e\57", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\57\x5c\x74\57", "\40", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\x73\x5c\163\x2b\x2f", "\40", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\73\x22", "\x22", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\76\x20\74", "\76\74", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\74\x21\55\x2d\56\x2a\x2d\55\76\57", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        owigmucmmkisusqa:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto owkicamwkyumewim;
        cksesgscmiccmigi:
        oeoagqkakyekmycs:
        goto guwcsuucwigkukmu;
        wmmyckaiiwyokuuq:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") {
            goto uuaiuucquuomguyi;
        }
        goto msekqmawsimogskg;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        kygiwieeewgocwgs:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto uawqiywkcgeowkye;
        igesyssomuuqqoky:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto yimsysqkmmuaskge;
        yimsysqkmmuaskge:
        return "\x64\x61\164\x61\72\x69\155\141\x67\145\x2f\163\x76\147\x2b\x78\x6d\154\73\x62\x61\x73\145\66\64\54{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        uawqiywkcgeowkye:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto igesyssomuuqqoky;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\x2f\111\x6e\164\x65\x72\x66\x61\143\145\163";
        goto mwmkykmeugewswss;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\134", '', $egkyssmuqcwaciya) . "\x5c\111\156\x74\145\162\x66\x61\x63\145\163";
            goto ocmckmgisuwsyuwc;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x69\156\x74\x65\162\146\141\143\x65\x2e\x70\x68\x70", ["\156\x61\155\x65\x73\x70\141\x63\x65" => $aiieyweysaukqemc, "\x69\x6e\x74\x65\162\146\x61\x63\145" => $oouysqigwayiqgkk, "\x69\143\157\156\x73" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\x70\x68\x70", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\x49\143\x6f\x6e" . ucfirst($ymqmyyeuycgmigyo) . "\111\156\164\145\x72\x66\x61\143\145";
            goto wkemaqyiomkkescs;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\57\x61\x73\163\x65\164\x2f" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null) : array
    {
        goto cgkemewmecusmuqy;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = ManipulateFile::scikcaaaiwcsqowm($qogsmwakwacwqogk);
            goto wmqgsukikoasweka;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\134\x2e\133\136\56\x5c\163\135\173\x33\x2c\x34\x7d\44\57", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            bsicsscqymyycqcs:
            if (!($qogsmwakwacwqogk instanceof DirectoryIterator && !ManipulateFile::qkuqsuugayciskek($qogsmwakwacwqogk))) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\57{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = ManipulateFile::mawoacksgosuccme($qogsmwakwacwqogk);
            goto mkaquyqyuwcaeeqe;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            mkaquyqyuwcaeeqe:
            if (ManipulateFile::oagwcgcemwwykokc($qogsmwakwacwqogk)) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        oeisoogqeyacokug:
    }
}
