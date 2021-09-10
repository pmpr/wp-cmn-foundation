<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\FormMaker\Front\MultiStepForm;
use Pmpr\Common\Foundation\FormMaker\Front\Step;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use WC_Product;
use WC_Product_Simple;
use WC_Product_Variable;

abstract class MultiStepSingleProduct extends Common
{
    const NEXT_STEP_BUTTON = "\x6e\x65\x78\x74\x5f\163\x74\145\x70\x5f\x62\165\164\x74\x6f\156";
    const PRODUCT_SINGLE_STEPS = "\x70\162\x6f\144\x75\143\164\137\x73\x69\x6e\147\154\145\137\163\x74\145\x70\163";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\167\x70", [$this, "\145\x6b\147\145\145\x63\157\x61\143\167\155\163\x75\x63\x69\x65"])->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\x6d\x65\x72\x63\x65\137\163\x69\x6e\147\x6c\x65\x5f\160\x72\157\x64\165\x63\x74\x5f\163\x75\x6d\155\x61\162\171", [$this, "\x69\151\x77\151\x69\171\153\163\145\x61\x75\x71\x71\x63\x79\x71"], 9)->qcsmikeggeemccuu("\x77\x6f\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\x5f\x73\151\156\x67\x6c\145\x5f\160\162\x6f\144\165\x63\x74\137\163\x75\155\155\141\162\x79", [$this, "\151\x73\163\x71\145\x77\x65\163\x67\145\x63\x65\161\x67\x71\x6b"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto oykmqmogcwumacqq;
        myyuyqequamqekoc:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto aiqskweckwoegquq;
        }
        goto swcqqiyagauaogiy;
        swcqqiyagauaogiy:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto eyiigmyweugmgckw;
            mgkgeuqasqcaimou:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto syycscyugcgsquwm;
            syycscyugcgsquwm:
            qguqeweisuimgyqk:
            goto wcsicmaoskwcaqou;
            wcsicmaoskwcaqou:
            qakcamuiqmiscugu:
            goto qmgwqgkuucwysswc;
            eyiigmyweugmgckw:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto qguqeweisuimgyqk;
            }
            goto mgkgeuqasqcaimou;
            qmgwqgkuucwysswc:
        }
        goto psqooaaoocusoyag;
        icmgwewmusucsooy:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto myyuyqequamqekoc;
        oykmqmogcwumacqq:
        if (!$this->cyeywmmccyoumgku()) {
            goto acyuamggaiuqmsoa;
        }
        goto icmgwewmusucsooy;
        aaoueeomccwsoycq:
        acyuamggaiuqmsoa:
        goto wggkwquawceyksmk;
        mseiksmausoaqecy:
        $this->enqueue();
        goto mmyckscscsmqsqwo;
        psqooaaoocusoyag:
        faeciyigcmyieesm:
        goto mseiksmausoaqecy;
        mmyckscscsmqsqwo:
        aiqskweckwoegquq:
        goto aaoueeomccwsoycq;
        wggkwquawceyksmk:
    }
    public function init()
    {
        goto gciymsqoaosekywi;
        caawoosasoogaiwa:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\137\146\x6f\x72\155", __("\101\144\144\x20\x54\157\x20\x43\x61\162\x74\40\x53\x74\x65\160\x73", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto ikqqueokumaakwmk;
        gciymsqoaosekywi:
        if (!$this->oiomuqiuyskqewke()) {
            goto ggscugaoyeccwaoq;
        }
        goto caawoosasoogaiwa;
        ikqqueokumaakwmk:
        ggscugaoyeccwaoq:
        goto ikuyuccwmwasokmy;
        ikuyuccwmwasokmy:
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        goto aiegomwmomwugkaa;
        yqysoqweammswcea:
        return $this->form;
        goto oesieyemekcikmuo;
        ywskqocaomieoeuo:
        gmwcswqmcyogosia:
        goto yqysoqweammswcea;
        gikmiimsmmugmewi:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto ycwkcyukyieusyce;
        oysgkcoiouaikyys:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gikmiimsmmugmewi;
        aiegomwmomwugkaa:
        if ($this->form) {
            goto gmwcswqmcyogosia;
        }
        goto oysgkcoiouaikyys;
        ycwkcyukyieusyce:
        $this->form = $eaoumsseceiowgsk;
        goto ywskqocaomieoeuo;
        oesieyemekcikmuo:
    }
    
    public function aqasygcsqysmmyke() : ?int
    {
        return $this->product;
    }
    
    public function yiagkoqoiemmqssu() : ?WC_Product
    {
        return ManipulateWoocommerce::aqasygcsqysmmyke($this->aqasygcsqysmmyke());
    }
    public function iiwiiykseauqqcyq()
    {
        goto ymygyumokgcugqco;
        cumkyeqakeicycqy:
        okcicyakakceigwe:
        goto smecgcsaskaiyqwg;
        cukkwcqimawsesga:
        ob_start();
        goto cumkyeqakeicycqy;
        ymygyumokgcugqco:
        if (!$this->cyeywmmccyoumgku()) {
            goto okcicyakakceigwe;
        }
        goto cukkwcqimawsesga;
        smecgcsaskaiyqwg:
    }
    public function issqewesgeceqgqk()
    {
        goto yeyuwakqagwqqmuc;
        ouakugqyqismmmwq:
        ob_clean();
        goto eseyuoaaskemwycm;
        eyimcucoicmimiao:
        kwqqookuogugoeoc:
        goto eaeowkksqokeigsq;
        akccmuykyisokmqm:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto kwqqookuogugoeoc;
        }
        goto qmeuekyqssiomcyy;
        qmeuekyqssiomcyy:
        $this->yyoqecggyacaseko()->render(["\145\143\x68\157" => true]);
        goto eyimcucoicmimiao;
        eaeowkksqokeigsq:
        iwcqqisaagoyaoyq:
        goto qcmiieemioisoyyi;
        yeyuwakqagwqqmuc:
        if (!$this->cyeywmmccyoumgku()) {
            goto iwcqqisaagoyaoyq;
        }
        goto ouakugqyqismmmwq;
        eseyuoaaskemwycm:
        $this->esoeigiuggwycwiq();
        goto akccmuykyisokmqm;
        qcmiieemioisoyyi:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\141\x63\x74\x69\157\x6e") == "\x65\x64\x69\x74" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\141\x63\164\151\157\x6e") == "\145\x64\x69\x74\160\157\163\x74");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\x74\x65\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\105\x6e\141\142\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\x54\151\164\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\x44\145\163\x63\x72\x69\x70\164\151\x6f\156", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\x54\x65\155\x70\x6c\141\x74\x65", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\145\x78\x74\x20\x53\x74\x65\x70\40\x42\x75\x74\164\x6f\156\40\124\x69\x74\154\x65", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\116\145\170\x74\x20\x53\x74\145\x70", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto swuomeuwkcgwekss;
        kqueakeekumokwoe:
        return $ksaameoqigiaoigg;
        goto okgweyikqgcceggq;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = false;
        goto ccwwqiosmasqqqwu;
        owqiausosmeaugay:
        mkskmcusskkouyyi:
        goto kqueakeekumokwoe;
        ccwwqiosmasqqqwu:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto mkskmcusskkouyyi;
        }
        goto scmkeeaewmeqguac;
        scmkeeaewmeqguac:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto qqeiuucaguymmsws;
        qqeiuucaguymmsws:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto owqiausosmeaugay;
        okgweyikqgcceggq:
    }
    
    public function qegwqkeqkmgeyouk() : array
    {
        return [$this->syguimaaeugakesm()];
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->guiyusikssumecwk());
    }
    
    public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self
    {
        $this->steps[] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto kquqieqqiieakmoa;
        kquqieqqiieakmoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ycucsikocgkiesgi:
        }
        goto usakoyequcyysywo;
        kwmgoowcwggsyokw:
        return $this;
        goto okamgiuocakyggwo;
        usakoyequcyysywo:
        csisksagguuywuia:
        goto kwmgoowcwggsyokw;
        okamgiuocakyggwo:
    }
    public function esoeigiuggwycwiq()
    {
        goto mweoqymwyuimuakm;
        imqeimsscmwgasys:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto kyaiywcwwmeqwyaw;
            kyaiywcwwmeqwyaw:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto maswyugssquqqggq;
            sskkiisoqmmsocic:
            if (!$mkemseqwyqgsgsek) {
                goto gmoykcyssieuqueu;
            }
            goto siuuokwymeygcosy;
            aqamaqggiseeioqq:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto sskkiisoqmmsocic;
            maswyugssquqqggq:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto egcycueumoemiuai;
            mcyamakgwewogwqi:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto aqamaqggiseeioqq;
            ceyygoicaeoqwwio:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto eyaesumwwwgisaym;
            swuquosuguoomaeq:
            cmcwskwgaiauugws:
            goto occaiwsgmaykoqey;
            siuuokwymeygcosy:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto icksskeigsiugace;
            egcycueumoemiuai:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto iywiyewymemgqacq;
            }
            goto miyggyguyamiggcm;
            eyaesumwwwgisaym:
            iywiyewymemgqacq:
            goto swuquosuguoomaeq;
            icksskeigsiugace:
            gmoykcyssieuqueu:
            goto ceyygoicaeoqwwio;
            gwucakcwqkiiqyyg:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\160", ["\143\x6c\141\163\163" => "\146\157\x6e\x74\55\167\145\x69\147\x68\164\x2d\142\x6f\x6c\144\x20\146\157\156\x74\x2d\61\x37\x20\x74\145\x78\x74\x2d\x6d\165\x74\x65\144"], $mkqqqewsokcswckc);
            goto mcyamakgwewogwqi;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto gwucakcwqkiiqyyg;
            occaiwsgmaykoqey:
        }
        goto kuwecmygikeyisuq;
        swwmkisacmieqiae:
        if (!$asuggasaseaacmqu) {
            goto iuikeaqqcukamyqm;
        }
        goto imqeimsscmwgasys;
        kuwecmygikeyisuq:
        gcywqkqkwkcmoawo:
        goto augwgqgcukgkywiw;
        mweoqymwyuimuakm:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto swwmkisacmieqiae;
        augwgqgcukgkywiw:
        iuikeaqqcukamyqm:
        goto kmkoiwuimosekikq;
        kmkoiwuimosekikq:
    }
    public function enqueue()
    {
        $this->yyoqecggyacaseko()->enqueue();
    }
    
    public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array
    {
        return [];
    }
    
    public abstract function swocoigyikkommyq() : array;
}
