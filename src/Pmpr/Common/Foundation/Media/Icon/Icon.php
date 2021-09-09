<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const IS_ICON = "\x69\x73\x5f\151\143\x6f\x6e";
    const ICONS_PATH = "\x69\155\147\x2f\x73\166\147\x2f\x69\143\157\156";
    
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
        $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x75\143\161\143\x79\171\151\x75\x69\x77\x65\x77\x73\x75\147\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x69\x63\157\x6e\x5f\150\164\x6d\x6c\137\162\x65\156\x64\145\x72"), [$this, "\x72\x65\x6e\144\x65\x72"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\144\151\164\137\x61\x74\164\141\143\x68\155\x65\156\x74", [$this, "\143\x71\157\x77\165\x69\147\x6d\167\143\161\x71\x63\x63\x75\x73"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x63\x6f\156\x5f\x73\x76\147\x32\x62\141\163\145\x36\x34"), [$this, "\157\x61\165\145\163\x61\x69\157\x61\x79\x63\167\171\171\x67\x79"])->cecaguuoecmccuse("\145\163\x63\x61\x70\145\x64\137\151\x63\157\x6e\x73\137\x64\x72\x6f\160\144\x6f\x77\x6e", [$this, "\167\x63\163\x79\x63\x6f\163\157\x6f\x73\141\167\x63\x6d\x63\165"], 10, 2)->cecaguuoecmccuse("\x61\164\164\x61\x63\x68\x6d\x65\x6e\x74\x5f\146\x69\145\x6c\144\x73\137\164\x6f\137\x65\x64\x69\x74", [$this, "\167\165\x77\157\x63\x61\x6f\151\151\145\x69\167\145\x79\171\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x63\x6f\x6e\x5f\x68\x74\155\154\137\x66\x69\154\164\x65\162"), [$this, "\167\x63\x73\151\x77\x6b\x63\171\145\x6f\x6b\x61\155\151\153\145"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\141\164\x74\141\143\x68\x6d\x65\x6e\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\x74\x74\x61\143\x68\x6d\x65\x6e\x74\x5f\x69\163\137\163\166\x67"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto gqsciemssskoqamq;
        kgqyyosqeaqigeuo:
        ycyoioowuumgwkuk:
        goto qsamicayummauigq;
        qsamicayummauigq:
        return $ykiyyumywksqcisg;
        goto sgosioakiaeqmyyy;
        gqsciemssskoqamq:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto gyaiswaqomsiwcwu;
        gyaiswaqomsiwcwu:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto wkemscqmqyimmqme;
            wkemscqmqyimmqme:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto ccwsuiigukoykcew;
            }
            goto maiaiacekmmwswqe;
            mwagkoucauykimsu:
            ccwsuiigukoykcew:
            goto weqkaeeoycmmmkcc;
            ueaiaeaaaiiuskyi:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto mwagkoucauykimsu;
            cymmwkiaogwsmcsu:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\x74\x77\151\x74\x74\x65\162", ["\x63\x6c\x61\163\163" => "\x70\162\55\x69\143\x6f\x6e\40\151\x63\x6f\x6e\55\x78\163"], true);
            goto ueaiaeaaaiiuskyi;
            maiaiacekmmwswqe:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto cymmwkiaogwsmcsu;
            weqkaeeoycmmmkcc:
            wqaiocgoqsqogmcm:
            goto gmqmkgkikksymkik;
            gmqmkgkikksymkik:
        }
        goto kgqyyosqeaqigeuo;
        sgosioakiaeqmyyy:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qywgeimouqcummco;
        sgkcewwkiomywgky:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto syskuqogeeoicwgw;
        kommicqseqmaiuss:
        ocmywgkaoogmcsau:
        goto yyeowwwqogwoeoyc;
        yyeowwwqogwoeoyc:
        return $ikgwqyuyckaewsow;
        goto ywagwigaamkacqsm;
        qywgeimouqcummco:
        if (!$this->umqsskakomkwuamy($post)) {
            goto ocmywgkaoogmcsau;
        }
        goto sgkcewwkiomywgky;
        syskuqogeeoicwgw:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\141\x62\145\154" => __("\125\x73\x65\40\x46\157\x72\x20\111\143\x6f\156", PR__THM__FOUNDATION), "\x69\156\x70\165\x74" => "\150\x74\x6d\154", "\x68\164\x6d\x6c" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\157\146\146")->render(), "\150\145\x6c\160\163" => __("\103\x68\x65\x63\x6b\40\x69\146\x20\171\157\165\x20\x77\x61\156\x74\x20\163\x68\x6f\167\x20\164\150\x69\163\40\141\164\x74\x61\x63\x68\x6d\x65\x6e\164\x20\151\x6e\x20\151\143\x6f\x6e\40\x6c\x69\x73\x74\x2e", PR__CMN__FOUNDATION)];
        goto kommicqseqmaiuss;
        ywagwigaamkacqsm:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\150\x75\x6d\142\x6e\141\151\x6c")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto ukiagcaimyycouuq;
        saimmkcsakcakqww:
        goto wigumuwcsuiaauyw;
        goto cmqyiscgeswqsoog;
        ukiagcaimyycouuq:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto ygqwuggqqouywgoq;
        qeaiigkoomwsgoem:
        wigumuwcsuiaauyw:
        goto gsageymuesseosmy;
        gsageymuesseosmy:
        isoisgaoqmiqeiak:
        goto skwiuqgoiaiskqmm;
        cmqyiscgeswqsoog:
        eouoyysyekegaigi:
        goto iqyicsuysksymwuw;
        yseimcmuaycskkak:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gowsaeyyqagsmkce;
        wskkqgweqwsaygqi:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto saimmkcsakcakqww;
        iqyicsuysksymwuw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto qeaiigkoomwsgoem;
        gowsaeyyqagsmkce:
        if ($amwuugigousqwmey === "\157\x6e") {
            goto eouoyysyekegaigi;
        }
        goto wskkqgweqwsaygqi;
        skwiuqgoiaiskqmm:
        return $post;
        goto ikosmomwmyimqaew;
        ygqwuggqqouywgoq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto isoisgaoqmiqeiak;
        }
        goto yseimcmuaycskkak;
        ikosmomwmyimqaew:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\x75\155\142\x6e\x61\x69\154") : string
    {
        goto yeemeukcggweaowa;
        qwsioymycmywyqiw:
        goto mewsemcoqiuuwwme;
        goto qiaayoymqmmemiiy;
        yeemeukcggweaowa:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto wyucqqggakoceowc;
        ywumciccwiakyeus:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto qwsioymycmywyqiw;
        oummiciwcqkwymss:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto omkkomymwsowywwa;
        weaqamgsuuwuouks:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\160\x5f\x67\145\164\x5f\x61\x74\x74\141\x63\x68\x6d\x65\x6e\x74\137\x69\x6d\x61\x67\x65\137\x61\164\164\162\x69\142\165\164\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ywumciccwiakyeus;
        wyucqqggakoceowc:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\163\163", "\x70\162\x2d\x69\x63\157\x6e\x20\151\143\157\156\x2d{$oiegiwogmwmawkeo}");
        goto iuiyqyiwisggcywk;
        omkkomymwsowywwa:
        mewsemcoqiuuwwme:
        goto qmwomemuqyaimiso;
        qmwomemuqyaimiso:
        return $nsmgceoqaqogqmuw;
        goto awggeauumiqymcoi;
        qiaayoymqmmemiiy:
        yqocsiwyueakoqoe:
        goto oummiciwcqkwymss;
        iuiyqyiwisggcywk:
        if ($post) {
            goto yqocsiwyueakoqoe;
        }
        goto weaqamgsuuwuouks;
        awggeauumiqymcoi:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eiqawcsoocuowioo;
        mwucaqouymaweuck:
        $waoisqguweoociwe = preg_replace("\57\134\163\x5c\163\x2b\x2f", "\40", $waoisqguweoociwe);
        goto eyaciqqycmmgoski;
        eiqawcsoocuowioo:
        $waoisqguweoociwe = preg_replace("\57\74\41\55\55\56\x2a\x2d\55\x3e\x2f", '', $waoisqguweoociwe);
        goto kkeiscyscckuuqci;
        egamwswskucyocos:
        return $waoisqguweoociwe;
        goto yaecoyqgimisqywa;
        oqgomigmmsikougi:
        $waoisqguweoociwe = str_replace("\73\x22", "\x22", $waoisqguweoociwe);
        goto egamwswskucyocos;
        eyaciqqycmmgoski:
        $waoisqguweoociwe = str_replace("\76\40\74", "\76\74", $waoisqguweoociwe);
        goto oqgomigmmsikougi;
        kkeiscyscckuuqci:
        $waoisqguweoociwe = preg_replace("\57\74\147\x3e\133\x5c\x6e\x5c\x72\x5c\x73\x5d\52\74\134\x2f\x67\x3e\57", '', $waoisqguweoociwe);
        goto myaeiwowqwegogmq;
        yauqmqauoqwymcsu:
        $waoisqguweoociwe = preg_replace("\x2f\134\164\57", "\x20", $waoisqguweoociwe);
        goto mwucaqouymaweuck;
        myaeiwowqwegogmq:
        $waoisqguweoociwe = preg_replace("\x2f\134\x6e\x2f", "\x20", $waoisqguweoociwe);
        goto yauqmqauoqwymcsu;
        yaecoyqgimisqywa:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto awmikoyyagysmgom;
        kmmyeqikyciayaoc:
        wikicmsosmwiwaii:
        goto mogkgqmmcowsmsoc;
        uscugymouummumyy:
        $ciyackuwsqkoqese += 5;
        goto aqwccmsqgqgumymq;
        oeyikqyiqqqsiaog:
        ciwmqysoooiiywgc:
        goto xiyuyqywsaaaeuuk;
        eieqmiiuoigqcqko:
        return $wayeqowwwmqyscea;
        goto gaewyowqcmmuwwyw;
        bgkoceiksggsqacw:
        ksskmimgggcuwcmm:
        goto asugqqyocowiuecu;
        syucweceooaayiqm:
        goto ksskmimgggcuwcmm;
        goto oeyikqyiqqqsiaog;
        soeawcescakswowc:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto qmiseemyqgoaemmo;
        mogkgqmmcowsmsoc:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto bgoqumcuqmceeigi;
        uusuygmocoeagwki:
        euaeayqimygmoeew:
        goto ecsaymiksecmoomi;
        wyeoumiuesqiuuaa:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto wikicmsosmwiwaii;
        }
        goto lwwuwssgsqccisgk;
        asugqqyocowiuecu:
        ckcaeoyyakgmmcsa:
        goto kcwygygoyasciaia;
        kcwygygoyasciaia:
        $ciyackuwsqkoqese++;
        goto cswuqoaewiyacqse;
        sgeemcsaaywgusaq:
        emouoksmeamyiikc:
        goto eieqmiiuoigqcqko;
        qmiseemyqgoaemmo:
        $ciyackuwsqkoqese += 2;
        goto bgkoceiksggsqacw;
        yumawusgeuasmweo:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wqmokemugmgoomik;
        aisygkoacuuqeymm:
        aiygssuwacsgcqiu:
        goto qwaaukoseakigsgy;
        awmikoyyagysmgom:
        $wayeqowwwmqyscea = '';
        goto mycsqckiwmeoumcy;
        yqcsakyqkiowyigs:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") {
            goto iycqkwmseowumwks;
        }
        goto qcgowmuiwyiesuqq;
        bgoqumcuqmceeigi:
        goto ekuossgmcqykyucs;
        goto aisygkoacuuqeymm;
        lwwuwssgsqccisgk:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto aiygssuwacsgcqiu;
        }
        goto yumawusgeuasmweo;
        wqmokemugmgoomik:
        goto ekuossgmcqykyucs;
        goto kmmyeqikyciayaoc;
        xiyuyqywsaaaeuuk:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto wyeoumiuesqiuuaa;
        imeaooemieqcmgag:
        iycqkwmseowumwks:
        goto soeawcescakswowc;
        skeyuaqouqqimqsu:
        $ciyackuwsqkoqese = 0;
        goto uusuygmocoeagwki;
        eywccamccqiwmygw:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto ciwmqysoooiiywgc;
        }
        goto yqcsakyqkiowyigs;
        cswuqoaewiyacqse:
        goto euaeayqimygmoeew;
        goto sgeemcsaaywgusaq;
        qwaaukoseakigsgy:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto qgiokeecugwacuka;
        qgiokeecugwacuka:
        ekuossgmcqykyucs:
        goto uscugymouummumyy;
        mycsqckiwmeoumcy:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto skeyuaqouqqimqsu;
        aqwccmsqgqgumymq:
        goto ksskmimgggcuwcmm;
        goto imeaooemieqcmgag;
        ecsaymiksecmoomi:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto emouoksmeamyiikc;
        }
        goto eywccamccqiwmygw;
        qcgowmuiwyiesuqq:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto syucweceooaayiqm;
        gaewyowqcmmuwwyw:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto yimwwgqgoykeoyss;
        uecykquakwkkwwqe:
        return "\144\141\164\141\72\151\x6d\x61\147\x65\x2f\163\166\147\53\x78\155\154\x3b\x62\141\x73\145\66\64\x2c{$owyiccmocukoumyy}";
        goto wuqecuowsgggioiw;
        yimwwgqgoykeoyss:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto ykuwegiykkscuwsy;
        ykuwegiykkscuwsy:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto uecykquakwkkwwqe;
        wuqecuowsgggioiw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto wswskaaocwgkamyc;
        eowegcwycwiwkukk:
        uqcuiuamymcyqiis:
        goto euysiqmgeyskkooq;
        oeoagqkakyekmycs:
        eakcouagumsyocki:
        goto eowegcwycwiwkukk;
        eewqaciiuesekwgg:
        umgswqiiqagckcoa:
        goto oeoagqkakyekmycs;
        eckcaeocwsesemcu:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\57\141\163\163\145\164\x2f" . self::ICONS_PATH;
        goto giocswyqqaimkoki;
        ouomswygcqoswiou:
        scuugaikcycgagqs:
        goto eewqaciiuesekwgg;
        iegwsoeawuoiooiw:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto eakcouagumsyocki;
        }
        goto gigyoewaqgumsusc;
        wskswcqwsiamcmgk:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto skmcgcigmsyaguwq;
            kuysqaocycusiooc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto kimegcsekgymucck;
            omeckagooayaagig:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\151\x6e\x74\145\162\x66\x61\x63\x65\x2e\160\150\x70", ["\x6e\x61\155\145\x73\x70\141\143\x65" => $aiieyweysaukqemc, "\x69\x6e\164\145\162\x66\141\x63\145" => $oouysqigwayiqgkk, "\151\143\157\156\x73" => $ykiyyumywksqcisg]);
            goto sucmuewciigceyei;
            wkgikmeuqucgkywg:
            oysiqukyogokmmmm:
            goto aowqwmeaismiiwca;
            sucmuewciigceyei:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\x70\x68\x70", $ewgwqamkygiqaawc);
            goto ceowmegksgcgwuug;
            kimegcsekgymucck:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\x5c", '', $egkyssmuqcwaciya) . "\134\x49\156\164\x65\162\146\141\x63\x65\x73";
            goto omeckagooayaagig;
            skmcgcigmsyaguwq:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto xkqkamoamikwyksk;
            }
            goto rogsumkasqmoigce;
            ceowmegksgcgwuug:
            xkqkamoamikwyksk:
            goto wkgikmeuqucgkywg;
            emscmyekmeyuwqwm:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto kuysqaocycusiooc;
            rogsumkasqmoigce:
            $oouysqigwayiqgkk = "\x49\x63\157\x6e" . ucfirst($ymqmyyeuycgmigyo) . "\111\x6e\164\145\x72\146\x61\x63\145";
            goto emscmyekmeyuwqwm;
            aowqwmeaismiiwca:
        }
        goto ouomswygcqoswiou;
        gaemigskmucygamw:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto iegwsoeawuoiooiw;
        giocswyqqaimkoki:
        $gwgkqsyaesmocmsk = __DIR__ . "\x2f\x49\x6e\x74\x65\x72\146\x61\143\145\x73";
        goto gaemigskmucygamw;
        iwqmyeyaqsuqmsoe:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto umgswqiiqagckcoa;
        }
        goto wskswcqwsiamcmgk;
        gigyoewaqgumsusc:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto iwqmyeyaqsuqmsoe;
        wswskaaocwgkamyc:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto uqcuiuamymcyqiis;
        }
        goto eckcaeocwsesemcu;
        euysiqmgeyskkooq:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null)
    {
        goto woumcuokuoeqyaaq;
        wwqkoggocqusyqum:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto uikgsuwekyomyqea;
            cyqkscsqmaaisquy:
            owmywoiysicswqys:
            goto uwuawieeaomscowi;
            wmmyckaiiwyokuuq:
            wqsmcycoysssooew:
            goto msekqmawsimogskg;
            wuysmaasqoqeeauk:
            $ymqmyyeuycgmigyo = $qogsmwakwacwqogk->mawoacksgosuccme();
            goto kyqcykkugmceeoeo;
            kyqcykkugmceeoeo:
            if ($qogsmwakwacwqogk->oagwcgcemwwykokc()) {
                goto wqsmcycoysssooew;
            }
            goto ecuicaaoiwckckqu;
            csquacyaqsgwkoui:
            uuaiuucquuomguyi:
            goto cyqkscsqmaaisquy;
            essygikwcggsgcec:
            goto iwoauisiuicommck;
            goto wmmyckaiiwyokuuq;
            ieoosusioiaaicgo:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\57{$ymqmyyeuycgmigyo}";
            goto essygikwcggsgcec;
            ugmqyekuwwuaoeya:
            iwoauisiuicommck:
            goto csquacyaqsgwkoui;
            msekqmawsimogskg:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto ugmqyekuwwuaoeya;
            uikgsuwekyomyqea:
            if ($qogsmwakwacwqogk->qkuqsuugayciskek()) {
                goto uuaiuucquuomguyi;
            }
            goto yyqckcwiwgegocsu;
            ecuicaaoiwckckqu:
            
            $ymqmyyeuycgmigyo = preg_replace("\57\x5c\x2e\133\x5e\56\x5c\x73\135\173\63\54\x34\175\44\x2f", '', $ymqmyyeuycgmigyo);
            goto ieoosusioiaaicgo;
            yyqckcwiwgegocsu:
            $mkomwsiykqigmqca = $qogsmwakwacwqogk->scikcaaaiwcsqowm();
            goto wuysmaasqoqeeauk;
            uwuawieeaomscowi:
        }
        goto oiekiiuowauqmceu;
        woumcuokuoeqyaaq:
        $ykiyyumywksqcisg = [];
        goto gcoyyuwaycukiaey;
        joukoqeseemqaiww:
        return $ykiyyumywksqcisg;
        goto meqcckcokmqigmcs;
        gcoyyuwaycukiaey:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto wwqkoggocqusyqum;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        meqcckcokmqigmcs:
    }
}
