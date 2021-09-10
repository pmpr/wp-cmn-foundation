<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

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
    const IS_ICON = "\151\163\137\151\x63\157\x6e";
    const ICONS_PATH = "\x69\x6d\x67\x2f\163\x76\147\57\151\143\157\x6e";
    
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
        $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x75\143\x71\143\171\x79\151\165\151\167\x65\167\163\165\147\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x69\x63\x6f\156\x5f\x68\164\155\154\x5f\162\145\x6e\144\x65\x72"), [$this, "\162\x65\156\144\x65\162"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\x64\x69\x74\x5f\x61\x74\x74\x61\x63\x68\155\145\x6e\164", [$this, "\143\161\x6f\167\165\x69\x67\155\x77\143\x71\161\143\143\165\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\143\x6f\x6e\x5f\x73\x76\x67\x32\x62\x61\163\145\66\64"), [$this, "\157\x61\x75\145\163\x61\x69\x6f\141\x79\x63\x77\x79\171\x67\171"])->cecaguuoecmccuse("\x65\x73\143\141\x70\x65\144\137\151\x63\157\x6e\163\x5f\x64\162\x6f\x70\x64\x6f\167\x6e", [$this, "\167\x63\163\x79\143\x6f\163\157\x6f\x73\x61\x77\143\155\x63\165"], 10, 2)->cecaguuoecmccuse("\x61\x74\x74\x61\x63\x68\x6d\145\x6e\164\x5f\146\151\x65\154\144\163\137\x74\157\x5f\145\x64\x69\x74", [$this, "\x77\x75\167\x6f\143\141\x6f\x69\151\x65\151\x77\x65\x79\x79\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\143\x6f\x6e\x5f\x68\x74\155\154\x5f\x66\x69\154\164\x65\162"), [$this, "\x77\143\163\151\x77\x6b\x63\x79\x65\157\153\141\x6d\x69\x6b\145"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\x61\x74\164\141\143\x68\155\145\x6e\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\164\164\141\143\x68\x6d\x65\x6e\164\137\151\163\x5f\x73\166\x67"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\x74\167\x69\x74\164\x65\x72", ["\x63\x6c\x61\x73\163" => "\x70\x72\x2d\x69\x63\157\x6e\40\x69\143\x6f\156\x2d\x78\163"], true);
            goto xiyuyqywsaaaeuuk;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\x61\x62\145\x6c" => __("\125\163\x65\40\106\157\162\x20\111\143\157\x6e", PR__THM__FOUNDATION), "\x69\156\x70\x75\164" => "\x68\164\155\x6c", "\150\x74\155\154" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\x6f\146\146")->render(), "\x68\145\154\x70\163" => __("\x43\150\x65\x63\x6b\x20\151\146\x20\x79\157\x75\40\167\x61\x6e\x74\40\163\x68\x6f\167\x20\164\x68\x69\x73\x20\141\164\164\x61\143\150\x6d\x65\x6e\164\40\151\156\x20\151\143\157\156\40\x6c\151\x73\x74\x2e", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\165\x6d\x62\156\141\151\154")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\x6f\x6e") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\165\155\x62\x6e\141\151\154") : string
    {
        goto kuysqaocycusiooc;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\x70\137\147\145\164\137\x61\164\164\141\x63\150\x6d\x65\x6e\x74\x5f\151\155\x61\147\x65\x5f\141\x74\x74\x72\x69\x62\165\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\163\x73", "\x70\162\55\151\143\157\x6e\x20\151\143\157\156\x2d{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\57\x5c\x73\x5c\x73\53\x2f", "\40", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\x3e\x20\74", "\x3e\x3c", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\73\42", "\x22", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\x2f\x3c\147\x3e\133\134\156\x5c\x72\x5c\x73\x5d\x2a\74\x5c\x2f\147\76\x2f", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\57\74\x21\x2d\x2d\56\52\55\x2d\76\x2f", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\57\x5c\x74\x2f", "\40", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\57\x5c\156\57", "\x20", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
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
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        kygiwieeewgocwgs:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto uawqiywkcgeowkye;
        yimsysqkmmuaskge:
        return "\x64\x61\164\x61\x3a\151\155\x61\147\145\x2f\163\166\147\53\170\x6d\154\x3b\x62\x61\x73\145\x36\x34\54{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        uawqiywkcgeowkye:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto igesyssomuuqqoky;
        igesyssomuuqqoky:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto yimsysqkmmuaskge;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\x2f\x61\163\163\x65\164\x2f" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\x2f\111\x6e\164\x65\x72\146\x61\x63\x65\x73";
        goto mwmkykmeugewswss;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\134", '', $egkyssmuqcwaciya) . "\x5c\111\x6e\164\145\x72\x66\x61\x63\x65\163";
            goto ocmckmgisuwsyuwc;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\x2e\x70\150\160", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x69\156\x74\x65\162\146\x61\143\145\x2e\x70\150\160", ["\x6e\x61\x6d\145\x73\x70\141\143\145" => $aiieyweysaukqemc, "\151\x6e\x74\x65\x72\146\x61\143\145" => $oouysqigwayiqgkk, "\151\143\x6f\156\163" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\x49\143\157\x6e" . ucfirst($ymqmyyeuycgmigyo) . "\x49\x6e\x74\x65\x72\146\141\x63\145";
            goto wkemaqyiomkkescs;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null)
    {
        goto cgkemewmecusmuqy;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\x2f{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            mkaquyqyuwcaeeqe:
            if ($qogsmwakwacwqogk->oagwcgcemwwykokc()) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\x5c\56\133\136\x2e\x5c\x73\135\x7b\63\54\x34\x7d\x24\57", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = $qogsmwakwacwqogk->scikcaaaiwcsqowm();
            goto wmqgsukikoasweka;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            bsicsscqymyycqcs:
            if ($qogsmwakwacwqogk->qkuqsuugayciskek()) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = $qogsmwakwacwqogk->mawoacksgosuccme();
            goto mkaquyqyuwcaeeqe;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        oeisoogqeyacokug:
    }
}
