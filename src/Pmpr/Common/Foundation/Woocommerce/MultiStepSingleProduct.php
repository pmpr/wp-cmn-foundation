<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const NEXT_STEP_BUTTON = "\x6e\x65\170\x74\137\163\164\x65\160\137\142\165\x74\164\x6f\156";
    const PRODUCT_SINGLE_STEPS = "\160\x72\157\144\165\x63\164\x5f\163\151\156\x67\154\145\x5f\x73\x74\x65\x70\x73";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\167\160", [$this, "\x65\x6b\x67\x65\145\x63\157\141\143\x77\x6d\x73\x75\143\x69\145"])->qcsmikeggeemccuu("\167\x6f\157\143\157\155\x6d\145\162\143\x65\x5f\x73\x69\156\147\x6c\x65\x5f\x70\162\157\144\x75\143\x74\x5f\163\x75\x6d\x6d\141\162\171", [$this, "\151\151\167\151\x69\171\153\163\145\141\x75\161\161\143\x79\x71"], 9)->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\x6d\x6d\145\x72\x63\x65\137\x73\x69\156\147\x6c\x65\x5f\x70\162\157\144\165\x63\164\x5f\163\x75\x6d\155\x61\162\x79", [$this, "\x69\163\x73\161\x65\x77\x65\x73\147\x65\143\x65\161\x67\x71\x6b"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto oykmqmogcwumacqq;
        aaoueeomccwsoycq:
        acyuamggaiuqmsoa:
        goto wggkwquawceyksmk;
        myyuyqequamqekoc:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto aiqskweckwoegquq;
        }
        goto swcqqiyagauaogiy;
        mmyckscscsmqsqwo:
        aiqskweckwoegquq:
        goto aaoueeomccwsoycq;
        psqooaaoocusoyag:
        faeciyigcmyieesm:
        goto mseiksmausoaqecy;
        icmgwewmusucsooy:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto myyuyqequamqekoc;
        oykmqmogcwumacqq:
        if (!$this->cyeywmmccyoumgku()) {
            goto acyuamggaiuqmsoa;
        }
        goto icmgwewmusucsooy;
        swcqqiyagauaogiy:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto eyiigmyweugmgckw;
            syycscyugcgsquwm:
            qguqeweisuimgyqk:
            goto wcsicmaoskwcaqou;
            eyiigmyweugmgckw:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto qguqeweisuimgyqk;
            }
            goto mgkgeuqasqcaimou;
            mgkgeuqasqcaimou:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto syycscyugcgsquwm;
            wcsicmaoskwcaqou:
            qakcamuiqmiscugu:
            goto qmgwqgkuucwysswc;
            qmgwqgkuucwysswc:
        }
        goto psqooaaoocusoyag;
        mseiksmausoaqecy:
        $this->enqueue();
        goto mmyckscscsmqsqwo;
        wggkwquawceyksmk:
    }
    public function init()
    {
        goto gciymsqoaosekywi;
        caawoosasoogaiwa:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\137\146\x6f\162\x6d", __("\x41\144\144\40\x54\x6f\x20\x43\x61\x72\x74\x20\x53\164\145\x70\163", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
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
        gikmiimsmmugmewi:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto ycwkcyukyieusyce;
        ywskqocaomieoeuo:
        gmwcswqmcyogosia:
        goto yqysoqweammswcea;
        oysgkcoiouaikyys:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gikmiimsmmugmewi;
        ycwkcyukyieusyce:
        $this->form = $eaoumsseceiowgsk;
        goto ywskqocaomieoeuo;
        yqysoqweammswcea:
        return $this->form;
        goto oesieyemekcikmuo;
        aiegomwmomwugkaa:
        if ($this->form) {
            goto gmwcswqmcyogosia;
        }
        goto oysgkcoiouaikyys;
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
        cukkwcqimawsesga:
        ob_start();
        goto cumkyeqakeicycqy;
        cumkyeqakeicycqy:
        okcicyakakceigwe:
        goto smecgcsaskaiyqwg;
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
        eaeowkksqokeigsq:
        iwcqqisaagoyaoyq:
        goto qcmiieemioisoyyi;
        eseyuoaaskemwycm:
        $this->esoeigiuggwycwiq();
        goto akccmuykyisokmqm;
        akccmuykyisokmqm:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto kwqqookuogugoeoc;
        }
        goto qmeuekyqssiomcyy;
        yeyuwakqagwqqmuc:
        if (!$this->cyeywmmccyoumgku()) {
            goto iwcqqisaagoyaoyq;
        }
        goto ouakugqyqismmmwq;
        eyimcucoicmimiao:
        kwqqookuogugoeoc:
        goto eaeowkksqokeigsq;
        qmeuekyqssiomcyy:
        $this->yyoqecggyacaseko()->render(["\x65\143\x68\x6f" => true]);
        goto eyimcucoicmimiao;
        qcmiieemioisoyyi:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\141\143\164\151\157\156") == "\x65\x64\x69\164" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\x61\x63\x74\x69\157\156") == "\x65\x64\x69\x74\x70\x6f\163\x74");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\164\x65\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\105\x6e\141\142\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\x54\151\x74\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\104\x65\x73\143\x72\x69\x70\164\x69\157\156", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\x54\145\x6d\160\154\x61\164\x65", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\x65\x78\x74\40\x53\x74\x65\160\40\x42\165\164\164\157\156\x20\124\x69\164\154\145", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\116\x65\x78\164\x20\123\x74\145\160", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto swuomeuwkcgwekss;
        qqeiuucaguymmsws:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto owqiausosmeaugay;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = false;
        goto ccwwqiosmasqqqwu;
        owqiausosmeaugay:
        mkskmcusskkouyyi:
        goto kqueakeekumokwoe;
        scmkeeaewmeqguac:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto qqeiuucaguymmsws;
        kqueakeekumokwoe:
        return $ksaameoqigiaoigg;
        goto okgweyikqgcceggq;
        ccwwqiosmasqqqwu:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto mkskmcusskkouyyi;
        }
        goto scmkeeaewmeqguac;
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
        kwmgoowcwggsyokw:
        return $this;
        goto okamgiuocakyggwo;
        kquqieqqiieakmoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ycucsikocgkiesgi:
        }
        goto usakoyequcyysywo;
        usakoyequcyysywo:
        csisksagguuywuia:
        goto kwmgoowcwggsyokw;
        okamgiuocakyggwo:
    }
    public function esoeigiuggwycwiq()
    {
        goto mweoqymwyuimuakm;
        mweoqymwyuimuakm:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto swwmkisacmieqiae;
        augwgqgcukgkywiw:
        iuikeaqqcukamyqm:
        goto kmkoiwuimosekikq;
        swwmkisacmieqiae:
        if (!$asuggasaseaacmqu) {
            goto iuikeaqqcukamyqm;
        }
        goto imqeimsscmwgasys;
        imqeimsscmwgasys:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto kyaiywcwwmeqwyaw;
            sskkiisoqmmsocic:
            if (!$mkemseqwyqgsgsek) {
                goto gmoykcyssieuqueu;
            }
            goto siuuokwymeygcosy;
            gwucakcwqkiiqyyg:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\160", ["\143\154\x61\163\163" => "\146\x6f\156\164\55\x77\145\151\147\x68\164\x2d\x62\157\x6c\144\x20\146\x6f\x6e\x74\x2d\x31\67\x20\x74\x65\170\164\55\x6d\165\x74\x65\x64"], $mkqqqewsokcswckc);
            goto mcyamakgwewogwqi;
            mcyamakgwewogwqi:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto aqamaqggiseeioqq;
            kyaiywcwwmeqwyaw:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto maswyugssquqqggq;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto gwucakcwqkiiqyyg;
            maswyugssquqqggq:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto egcycueumoemiuai;
            aqamaqggiseeioqq:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto sskkiisoqmmsocic;
            siuuokwymeygcosy:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto icksskeigsiugace;
            icksskeigsiugace:
            gmoykcyssieuqueu:
            goto ceyygoicaeoqwwio;
            eyaesumwwwgisaym:
            iywiyewymemgqacq:
            goto swuquosuguoomaeq;
            swuquosuguoomaeq:
            cmcwskwgaiauugws:
            goto occaiwsgmaykoqey;
            egcycueumoemiuai:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto iywiyewymemgqacq;
            }
            goto miyggyguyamiggcm;
            ceyygoicaeoqwwio:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto eyaesumwwwgisaym;
            occaiwsgmaykoqey:
        }
        goto kuwecmygikeyisuq;
        kuwecmygikeyisuq:
        gcywqkqkwkcmoawo:
        goto augwgqgcukgkywiw;
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
