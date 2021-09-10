<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Setting extends Page
{
    
    protected array $defaults = [];
    
    public function __construct()
    {
        goto oigimmkyumckwick;
        tgousgyiiaiaeack:
        woociiywkukyomca:
        goto kuiqawwoeaeuemcy;
        ggumyqmosmckemum:
        $this->parentMenu = "\157\160\164\151\157\156\x73\x2d\147\145\x6e\x65\162\141\154\56\160\150\160";
        goto tgousgyiiaiaeack;
        imqgamcocykmuweu:
        if ($this->cgugaaoykcyiomuk()) {
            goto woociiywkukyomca;
        }
        goto ggumyqmosmckemum;
        oigimmkyumckwick:
        $this->type = "\x73\x65\164\164\x69\156\147\163";
        goto imqgamcocykmuweu;
        kuiqawwoeaeuemcy:
        parent::__construct();
        goto uoiawymwqmyiiosk;
        uoiawymwqmyiiosk:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\123\141\x76\x65\40\x43\x68\141\156\x67\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto qoueskwwsaywasai;
        euamqcukmwkycmcs:
        wcsiocqmcgkyueoc:
        goto ssqmoeeuysgacwme;
        ssqmoeeuysgacwme:
        return $aokagokqyuysuksm;
        goto yckwoyawyoyskqea;
        msmmwgagckyuccii:
        if ($aokagokqyuysuksm) {
            goto wcsiocqmcgkyueoc;
        }
        goto yuuokwoimsawcwwq;
        yuuokwoimsawcwwq:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto euamqcukmwkycmcs;
        qoueskwwsaywasai:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto msmmwgagckyuccii;
        yckwoyawyoyskqea:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x75\160\144\x61\164\145\137\x6f\160\x74\x69\157\156\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6f\143\x71\141\x71\163\x77\157\145\x79\x73\143\165\x6f\141\x6f"])->qcsmikeggeemccuu("\165\160\144\x61\164\x65\x5f\x6f\160\164\x69\157\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\x73\143\155\x6d\x79\x6d\161\x6b\x6f\x79\x63\x6b\x67\153\141\155"], 10, 2)->qcsmikeggeemccuu("\x75\160\144\x61\x74\145\137\x73\x65\x74\x74\x69\x6e\x67\137{$this->cisyiemkeykgkomc()}", [$this, "\145\x69\141\x61\x63\145\147\x6b\x69\147\161\x69\x77\x61\x77\x67"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\x65\164\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6d\171\x77\167\x79\x65\x67\x6b\x75\171\155\157\x6f\x6b\145\x67"], 10, 2)->cecaguuoecmccuse("\147\145\164\137{$this->aakmagwggmkoiiyu()}\x5f\163\145\x74\164\x69\156\147", [$this, "\145\151\167\143\x75\161\x69\x67\x61\171\x69\x67\x69\155\141\153"], 10, 2)->cecaguuoecmccuse("\x70\x72\x65\137\165\160\144\x61\164\145\137\157\160\164\151\x6f\156\137{$this->cisyiemkeykgkomc()}", [$this, "\143\x69\141\147\143\157\151\x79\145\x69\157\141\x67\x67\x73\x6f"], 50, 3)->cecaguuoecmccuse("\x63\x6d\142\62\x5f\157\x76\x65\x72\x72\151\144\x65\x5f\157\x70\x74\151\x6f\x6e\x5f\147\x65\164\137{$this->cisyiemkeykgkomc()}", [$this, "\x6d\x6d\145\x71\x73\165\141\x71\141\143\x77\x75\x6f\x67\x79\141"], 2, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function gecwckciuqqukcko() : array
    {
        return $this->defaults;
    }
    
    public function syuyisqgcskmaymc($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->defaults[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $eqgoocgaqwqcimie;
    }
    private function wascmggskiyiaogs()
    {
        goto ywmqqmgacioekiim;
        qsgikaecsueeawcg:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto aokwwkysaawymggq;
        }
        goto wgqaaiuiaegacqug;
        kummicswwkwwkyys:
        ygcicamkgawkwygs:
        goto wwkqmuawuugoiwey;
        smusacowuccegeqc:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto qkouugqimqywiiag;
        uqscqwswiqsgsygk:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto ygcicamkgawkwygs;
        }
        goto smusacowuccegeqc;
        wgqaaiuiaegacqug:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto kiuemcsmyusiamwy;
        ywmqqmgacioekiim:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto uqscqwswiqsgsygk;
        qkouugqimqywiiag:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x65\x66\x61\x75\154\x74\x5f\x73\145\x74\x74\x69\156\147\163", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto qsgikaecsueeawcg;
        kiuemcsmyusiamwy:
        aokwwkysaawymggq:
        goto kummicswwkwwkyys;
        wwkqmuawuugoiwey:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto qougaquyiyoekgme;
        mukioeqsayqwycgu:
        return $eqgoocgaqwqcimie;
        goto wiuiqmkuuuscscoi;
        ywamicmegakyokoq:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\x65\x66\x6f\x72\x65\x5f\165\x70\144\141\x74\x65\137{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto koeamciygeeqewcy;
        koeamciygeeqewcy:
        aoeqqmeqcaeksamm:
        goto mukioeqsayqwycgu;
        qougaquyiyoekgme:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto aoeqqmeqcaeksamm;
        }
        goto akgccuiekaowwmeq;
        akgccuiekaowwmeq:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto ywamicmegakyokoq;
        wiuiqmkuuuscscoi:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\163\141\166\x65\144", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto keguueuuiqyowgge;
        iggmoakswausicmq:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto cyiukscucygcyiow;
        }
        goto emqaiyugeiukyqiw;
        emqaiyugeiukyqiw:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto gkqycsqguoaycowm;
        keguueuuiqyowgge:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\x66\x6f\x72\x65\x5f\x72\145\155\157\x76\145\x5f\143\x61\143\x68\x65\x5f\x70\x61\164\150"));
        goto iggmoakswausicmq;
        myigiaaggwcoyqmo:
        cyiukscucygcyiow:
        goto ciaocyoemcwmgays;
        gkqycsqguoaycowm:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\x65\x72\137\x72\x65\155\157\x76\x65\137\x63\141\x63\150\145\137\160\141\164\150"));
        goto myigiaaggwcoyqmo;
        ciaocyoemcwmgays:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto makqoouaaoyeckwu;
        aeoskcqgogoeieqq:
        return $ksaameoqigiaoigg;
        goto mqomgaeswiquiasi;
        wciqgiyuqauosqsm:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto kkwciycuekqewqak;
        kkwciycuekqewqak:
        if ($usymaaaeawgmyqig !== false) {
            goto kaaosukiekmqcuas;
        }
        goto ywqgaoiyisukooog;
        yuakcmiumkmoseoy:
        goto oakqwukqiowuwgse;
        goto amicgsowmwecywga;
        amicgsowmwecywga:
        kaaosukiekmqcuas:
        goto kcgsqowasqeuaoyo;
        makqoouaaoyeckwu:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto wciqgiyuqauosqsm;
        uicakiyqmsqkkeiq:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto yuakcmiumkmoseoy;
        ywqgaoiyisukooog:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto uicakiyqmsqkkeiq;
        kcgsqowasqeuaoyo:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto scywagkqaaqkqyuq;
        scywagkqaaqkqyuq:
        oakqwukqiowuwgse:
        goto aeoskcqgogoeieqq;
        mqomgaeswiquiasi:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto macwgscmecoymagu;
        uyomoigikmsymiku:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto ykcsckmiswouwaim;
        macwgscmecoymagu:
        if ($qeqooyuoiasweuck) {
            goto oumgmywcokuyaaky;
        }
        goto uuowysiecmaqiskc;
        ykcsckmiswouwaim:
        return $eqgoocgaqwqcimie;
        goto umsiwskkkuuqygqe;
        uuowysiecmaqiskc:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto tiqqwmquwowcwsko;
        oyiakwoikeckycqe:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uyomoigikmsymiku;
        tiqqwmquwowcwsko:
        oumgmywcokuyaaky:
        goto oyiakwoikeckycqe;
        umsiwskkkuuqygqe:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto ycgoekuqouciwkom;
        qsyssqesmcoyuewk:
        wp_cache_delete($uusmaiomayssaecw);
        goto myyyikoweqcgoucw;
        ycgoekuqouciwkom:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto qowqygggoieokiiw;
        qowqygggoieokiiw:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qsyssqesmcoyuewk;
        myyyikoweqcgoucw:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto qmyeykyyqksyekuo;
        uaikkeuicmuuwccc:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto cgkoamymiwyauswk;
        camycossgaakcsiw:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto uaikkeuicmuuwccc;
        awsgaesauouewgmi:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto owooskgowayymosm;
        kkkoguowckoiqywi:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto quimoymcisyaqaug;
        qmyeykyyqksyekuo:
        if ($qeqooyuoiasweuck) {
            goto yqewkyqauqqcyoyy;
        }
        goto kkkoguowckoiqywi;
        quimoymcisyaqaug:
        yqewkyqauqqcyoyy:
        goto qgqgsigokaomqkqe;
        cgkoamymiwyauswk:
        wp_cache_delete($uusmaiomayssaecw);
        goto awsgaesauouewgmi;
        qgqgsigokaomqkqe:
        if ($qeqooyuoiasweuck) {
            goto aauewmowygwgwusw;
        }
        goto cewyikqkeycuswys;
        cewyikqkeycuswys:
        $qeqooyuoiasweuck = [];
        goto qmkooikkcycouowk;
        qmkooikkcycouowk:
        aauewmowygwgwusw:
        goto camycossgaakcsiw;
        owooskgowayymosm:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto uyiqkeoaoeesewkm;
        nsqquyqqqiceasgu:
        omcwcawuuiowsyiy:
        goto eooqoiuqayocqmqi;
        qekoeuskqquikiqa:
        if ($amakmumgguksgmum) {
            goto omcwcawuuiowsyiy;
        }
        goto sewqywuuoqaqgake;
        sewqywuuoqaqgake:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto oucegyaesucoaqcs;
        oucegyaesucoaqcs:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto nsqquyqqqiceasgu;
        uyiqkeoaoeesewkm:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto qekoeuskqquikiqa;
        eooqoiuqayocqmqi:
        return $amakmumgguksgmum;
        goto gqmaowmomwymiiec;
        gqmaowmomwymiiec:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto ocuoiqskoseeoski;
        smisquuawsuaggqc:
        oekmmkgkgsuawkis:
        goto aymokcegeqgeuqai;
        qcyamgiikmwuwsyu:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto wsgseaeaeuemmick;
        caqyccimywimqwgw:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\156" ? true : $eqgoocgaqwqcimie;
        goto ssammmsycciagimy;
        qqiomqmmgsgygyes:
        yimkweiuueksywey:
        goto goicgikimugciika;
        wsgseaeaeuemmick:
        goto auuoqiusumqggosg;
        goto smisquuawsuaggqc;
        ewyywyaciesugmeu:
        goto gqsemgkumwsooguq;
        goto qqiomqmmgsgygyes;
        ssammmsycciagimy:
        auuoqiusumqggosg:
        goto soqckwiemegiyosg;
        osskoqmmegqyksau:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto wuaysaycmsuciagi;
        soqckwiemegiyosg:
        gqsemgkumwsooguq:
        goto ugyyuyequeekycsm;
        oykemeioosgeaqek:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto ewyywyaciesugmeu;
        aymokcegeqgeuqai:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto caqyccimywimqwgw;
        ugyeckwkgkiyiwqm:
        if (is_string($uusmaiomayssaecw)) {
            goto yimkweiuueksywey;
        }
        goto oykemeioosgeaqek;
        goicgikimugciika:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto oekmmkgkgsuawkis;
        }
        goto qcyamgiikmwuwsyu;
        ugyyuyequeekycsm:
        return $eqgoocgaqwqcimie;
        goto cgwqkgmqqyaqaeos;
        ocuoiqskoseeoski:
        if ($qeqooyuoiasweuck) {
            goto kywsgoqgqmmmmucg;
        }
        goto osskoqmmegqyksau;
        wuaysaycmsuciagi:
        kywsgoqgqmmmmucg:
        goto ugyeckwkgkiyiwqm;
        cgwqkgmqqyaqaeos:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto ackussqqoyomekeg;
        oeuquoqswksgymuw:
        amaeeaeauswgoqic:
        goto iyekaawoaqcqsssa;
        cmmckyaaioecwuse:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto gkmimeqyqisqsosw;
        }
        goto ayqcwceyiiosgcka;
        wywkeewykggksckc:
        return $qiouiwasaauyaaue;
        goto yiksaemwukcmqoks;
        iyekaawoaqcqsssa:
        gkmimeqyqisqsosw:
        goto wywkeewykggksckc;
        ayqcwceyiiosgcka:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto uqgkoksouqicqiiy;
            uqgkoksouqicqiiy:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto esyaossmykieskyg;
            kqkmsuoqweqqoiiq:
            if ($uusmaiomayssaecw) {
                goto qiockgemuekykiuy;
            }
            goto uimggymiocacgyky;
            emoiiiemgaasikyg:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto kqkmsuoqweqqoiiq;
            eeimuiikicqykmwa:
            qwacmyuwycyqmwkq:
            goto ogooawuumwuweeos;
            yguaqcewwsageswq:
            qiockgemuekykiuy:
            goto igwsysyakwoosysi;
            umcgmioomggsuigo:
            goto iucqiqsagamegsmc;
            goto secykwwqaoeuywim;
            secykwwqaoeuywim:
            sweymqcmesceysqo:
            goto emoiiiemgaasikyg;
            uimggymiocacgyky:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto yguaqcewwsageswq;
            igwsysyakwoosysi:
            iucqiqsagamegsmc:
            goto eeimuiikicqykmwa;
            esyaossmykieskyg:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto sweymqcmesceysqo;
            }
            goto cwcsikiqeagwcocm;
            cwcsikiqeagwcocm:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto umcgmioomggsuigo;
            ogooawuumwuweeos:
        }
        goto oeuquoqswksgymuw;
        ackussqqoyomekeg:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto cmmckyaaioecwuse;
        yiksaemwukcmqoks:
    }
    
    public function mmeqsuaqacwuogya($gcaqwmmqioouwccc)
    {
        return $gcaqwmmqioouwccc;
    }
    
    public function gcmaamyeggyiugae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        return $uqcooyiiyysckskk && $uqcooyiiyysckskk->imyagkswqcsocsoi();
    }
    
    public function eaiyegoagkgeowae() : bool
    {
        goto cscoykmeocmcwkkc;
        cscoykmeocmcwkkc:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto cwigquaouceygaas;
        gaagiucqcsoauoye:
        wekseqwmumkkcsoc:
        goto cmcmwummuiemewaw;
        cmcmwummuiemewaw:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\x61\147\145");
        goto meqocakwgoyugmso;
        gykiuseauawoywsy:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto gaagiucqcsoauoye;
        cwigquaouceygaas:
        if (!$uqcooyiiyysckskk) {
            goto wekseqwmumkkcsoc;
        }
        goto gykiuseauawoywsy;
        meqocakwgoyugmso:
    }
}
