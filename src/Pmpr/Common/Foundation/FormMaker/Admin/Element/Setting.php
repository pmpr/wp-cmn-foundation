<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto woociiywkukyomca;
        ggumyqmosmckemum:
        yqciowyyaucoysgy:
        goto tgousgyiiaiaeack;
        oigimmkyumckwick:
        if ($this->cgugaaoykcyiomuk()) {
            goto yqciowyyaucoysgy;
        }
        goto imqgamcocykmuweu;
        woociiywkukyomca:
        $this->type = "\x73\x65\164\164\x69\x6e\147\163";
        goto oigimmkyumckwick;
        imqgamcocykmuweu:
        $this->parentMenu = "\x6f\x70\x74\x69\x6f\156\163\55\x67\x65\x6e\x65\162\141\154\56\x70\x68\x70";
        goto ggumyqmosmckemum;
        tgousgyiiaiaeack:
        parent::__construct();
        goto kuiqawwoeaeuemcy;
        kuiqawwoeaeuemcy:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\x53\141\166\145\x20\103\150\x61\156\147\x65\163", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto wcsiocqmcgkyueoc;
        wcsiocqmcgkyueoc:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto qoueskwwsaywasai;
        yuuokwoimsawcwwq:
        uoiawymwqmyiiosk:
        goto euamqcukmwkycmcs;
        msmmwgagckyuccii:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto yuuokwoimsawcwwq;
        qoueskwwsaywasai:
        if ($aokagokqyuysuksm) {
            goto uoiawymwqmyiiosk;
        }
        goto msmmwgagckyuccii;
        euamqcukmwkycmcs:
        return $aokagokqyuysuksm;
        goto ssqmoeeuysgacwme;
        ssqmoeeuysgacwme:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\165\160\x64\141\164\x65\x5f\157\160\164\x69\x6f\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x63\161\x61\x71\x73\x77\157\145\x79\x73\x63\x75\x6f\141\157"])->qcsmikeggeemccuu("\165\160\144\x61\x74\x65\137\157\160\x74\x69\157\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x73\x63\155\155\x79\155\x71\x6b\x6f\x79\x63\153\x67\x6b\141\155"], 10, 2)->qcsmikeggeemccuu("\x75\x70\144\x61\164\145\x5f\163\145\164\164\x69\156\x67\x5f{$this->cisyiemkeykgkomc()}", [$this, "\145\x69\141\141\143\x65\147\x6b\x69\147\x71\151\x77\x61\167\147"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}", [$this, "\155\x79\x77\x77\x79\145\x67\x6b\x75\x79\155\157\x6f\153\145\147"], 10, 2)->cecaguuoecmccuse("\147\145\x74\137{$this->aakmagwggmkoiiyu()}\137\163\145\x74\x74\x69\156\147", [$this, "\x65\x69\167\x63\165\161\151\147\x61\x79\151\147\151\155\x61\153"], 10, 2)->cecaguuoecmccuse("\x70\x72\145\137\165\x70\x64\x61\x74\x65\x5f\157\x70\x74\x69\157\156\x5f{$this->cisyiemkeykgkomc()}", [$this, "\143\x69\x61\147\143\x6f\x69\x79\x65\x69\157\x61\147\147\x73\x6f"], 50, 3)->cecaguuoecmccuse("\x63\155\x62\62\x5f\157\166\145\x72\162\151\x64\145\x5f\x6f\x70\164\x69\157\x6e\x5f\147\145\x74\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6d\155\145\x71\x73\165\141\161\x61\x63\x77\165\x6f\147\x79\141"], 2, 1);
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
        goto ygcicamkgawkwygs;
        qsgikaecsueeawcg:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto wgqaaiuiaegacqug;
        ywmqqmgacioekiim:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto aokwwkysaawymggq;
        }
        goto uqscqwswiqsgsygk;
        ygcicamkgawkwygs:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto ywmqqmgacioekiim;
        wgqaaiuiaegacqug:
        yckwoyawyoyskqea:
        goto kiuemcsmyusiamwy;
        qkouugqimqywiiag:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto yckwoyawyoyskqea;
        }
        goto qsgikaecsueeawcg;
        uqscqwswiqsgsygk:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto smusacowuccegeqc;
        kiuemcsmyusiamwy:
        aokwwkysaawymggq:
        goto kummicswwkwwkyys;
        smusacowuccegeqc:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\x65\x66\141\165\x6c\164\137\163\x65\164\164\151\156\x67\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto qkouugqimqywiiag;
        kummicswwkwwkyys:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto aoeqqmeqcaeksamm;
        koeamciygeeqewcy:
        return $eqgoocgaqwqcimie;
        goto mukioeqsayqwycgu;
        akgccuiekaowwmeq:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\x65\x66\x6f\162\145\x5f\165\x70\144\141\164\x65\x5f{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto ywamicmegakyokoq;
        ywamicmegakyokoq:
        wwkqmuawuugoiwey:
        goto koeamciygeeqewcy;
        aoeqqmeqcaeksamm:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto wwkqmuawuugoiwey;
        }
        goto qougaquyiyoekgme;
        qougaquyiyoekgme:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto akgccuiekaowwmeq;
        mukioeqsayqwycgu:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\163\x61\x76\x65\144", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto cyiukscucygcyiow;
        cyiukscucygcyiow:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\x66\157\x72\145\137\162\145\155\157\x76\145\137\143\141\x63\x68\145\x5f\160\x61\164\x68"));
        goto keguueuuiqyowgge;
        emqaiyugeiukyqiw:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x66\164\x65\x72\x5f\162\145\155\157\x76\145\x5f\143\141\x63\150\145\x5f\160\x61\164\150"));
        goto gkqycsqguoaycowm;
        keguueuuiqyowgge:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto wiuiqmkuuuscscoi;
        }
        goto iggmoakswausicmq;
        gkqycsqguoaycowm:
        wiuiqmkuuuscscoi:
        goto myigiaaggwcoyqmo;
        iggmoakswausicmq:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto emqaiyugeiukyqiw;
        myigiaaggwcoyqmo:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto oakqwukqiowuwgse;
        scywagkqaaqkqyuq:
        return $ksaameoqigiaoigg;
        goto aeoskcqgogoeieqq;
        kcgsqowasqeuaoyo:
        kaaosukiekmqcuas:
        goto scywagkqaaqkqyuq;
        kkwciycuekqewqak:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto ywqgaoiyisukooog;
        ywqgaoiyisukooog:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto uicakiyqmsqkkeiq;
        wciqgiyuqauosqsm:
        if ($usymaaaeawgmyqig !== false) {
            goto ciaocyoemcwmgays;
        }
        goto kkwciycuekqewqak;
        makqoouaaoyeckwu:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto wciqgiyuqauosqsm;
        oakqwukqiowuwgse:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto makqoouaaoyeckwu;
        yuakcmiumkmoseoy:
        ciaocyoemcwmgays:
        goto amicgsowmwecywga;
        uicakiyqmsqkkeiq:
        goto kaaosukiekmqcuas;
        goto yuakcmiumkmoseoy;
        amicgsowmwecywga:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto kcgsqowasqeuaoyo;
        aeoskcqgogoeieqq:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto oumgmywcokuyaaky;
        tiqqwmquwowcwsko:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto oyiakwoikeckycqe;
        uyomoigikmsymiku:
        return $eqgoocgaqwqcimie;
        goto ykcsckmiswouwaim;
        oumgmywcokuyaaky:
        if ($qeqooyuoiasweuck) {
            goto mqomgaeswiquiasi;
        }
        goto macwgscmecoymagu;
        macwgscmecoymagu:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto uuowysiecmaqiskc;
        uuowysiecmaqiskc:
        mqomgaeswiquiasi:
        goto tiqqwmquwowcwsko;
        oyiakwoikeckycqe:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto uyomoigikmsymiku;
        ykcsckmiswouwaim:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto umsiwskkkuuqygqe;
        qowqygggoieokiiw:
        wp_cache_delete($uusmaiomayssaecw);
        goto qsyssqesmcoyuewk;
        ycgoekuqouciwkom:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qowqygggoieokiiw;
        umsiwskkkuuqygqe:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto ycgoekuqouciwkom;
        qsyssqesmcoyuewk:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto aauewmowygwgwusw;
        camycossgaakcsiw:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto uaikkeuicmuuwccc;
        cgkoamymiwyauswk:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto awsgaesauouewgmi;
        quimoymcisyaqaug:
        if ($qeqooyuoiasweuck) {
            goto yqewkyqauqqcyoyy;
        }
        goto qgqgsigokaomqkqe;
        kkkoguowckoiqywi:
        myyyikoweqcgoucw:
        goto quimoymcisyaqaug;
        cewyikqkeycuswys:
        yqewkyqauqqcyoyy:
        goto qmkooikkcycouowk;
        qmkooikkcycouowk:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto camycossgaakcsiw;
        uaikkeuicmuuwccc:
        wp_cache_delete($uusmaiomayssaecw);
        goto cgkoamymiwyauswk;
        qgqgsigokaomqkqe:
        $qeqooyuoiasweuck = [];
        goto cewyikqkeycuswys;
        aauewmowygwgwusw:
        if ($qeqooyuoiasweuck) {
            goto myyyikoweqcgoucw;
        }
        goto qmyeykyyqksyekuo;
        qmyeykyyqksyekuo:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto kkkoguowckoiqywi;
        awsgaesauouewgmi:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto omcwcawuuiowsyiy;
        nsqquyqqqiceasgu:
        return $amakmumgguksgmum;
        goto eooqoiuqayocqmqi;
        uyiqkeoaoeesewkm:
        if ($amakmumgguksgmum) {
            goto owooskgowayymosm;
        }
        goto qekoeuskqquikiqa;
        sewqywuuoqaqgake:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto oucegyaesucoaqcs;
        oucegyaesucoaqcs:
        owooskgowayymosm:
        goto nsqquyqqqiceasgu;
        qekoeuskqquikiqa:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto sewqywuuoqaqgake;
        omcwcawuuiowsyiy:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto uyiqkeoaoeesewkm;
        eooqoiuqayocqmqi:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto gqsemgkumwsooguq;
        soqckwiemegiyosg:
        return $eqgoocgaqwqcimie;
        goto ugyyuyequeekycsm;
        wuaysaycmsuciagi:
        if (is_string($uusmaiomayssaecw)) {
            goto auuoqiusumqggosg;
        }
        goto ugyeckwkgkiyiwqm;
        qqiomqmmgsgygyes:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto kywsgoqgqmmmmucg;
        }
        goto goicgikimugciika;
        smisquuawsuaggqc:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto aymokcegeqgeuqai;
        ssammmsycciagimy:
        yimkweiuueksywey:
        goto soqckwiemegiyosg;
        osskoqmmegqyksau:
        gqmaowmomwymiiec:
        goto wuaysaycmsuciagi;
        ewyywyaciesugmeu:
        auuoqiusumqggosg:
        goto qqiomqmmgsgygyes;
        caqyccimywimqwgw:
        oekmmkgkgsuawkis:
        goto ssammmsycciagimy;
        ugyeckwkgkiyiwqm:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto oykemeioosgeaqek;
        qcyamgiikmwuwsyu:
        goto oekmmkgkgsuawkis;
        goto wsgseaeaeuemmick;
        goicgikimugciika:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qcyamgiikmwuwsyu;
        wsgseaeaeuemmick:
        kywsgoqgqmmmmucg:
        goto smisquuawsuaggqc;
        oykemeioosgeaqek:
        goto yimkweiuueksywey;
        goto ewyywyaciesugmeu;
        gqsemgkumwsooguq:
        if ($qeqooyuoiasweuck) {
            goto gqmaowmomwymiiec;
        }
        goto ocuoiqskoseeoski;
        aymokcegeqgeuqai:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e" ? true : $eqgoocgaqwqcimie;
        goto caqyccimywimqwgw;
        ocuoiqskoseeoski:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto osskoqmmegqyksau;
        ugyyuyequeekycsm:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto gkmimeqyqisqsosw;
        oeuquoqswksgymuw:
        ogooawuumwuweeos:
        goto iyekaawoaqcqsssa;
        ackussqqoyomekeg:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto ogooawuumwuweeos;
        }
        goto cmmckyaaioecwuse;
        gkmimeqyqisqsosw:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto ackussqqoyomekeg;
        iyekaawoaqcqsssa:
        return $qiouiwasaauyaaue;
        goto wywkeewykggksckc;
        cmmckyaaioecwuse:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto iucqiqsagamegsmc;
            umcgmioomggsuigo:
            qiockgemuekykiuy:
            goto secykwwqaoeuywim;
            secykwwqaoeuywim:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto emoiiiemgaasikyg;
            esyaossmykieskyg:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto cwcsikiqeagwcocm;
            emoiiiemgaasikyg:
            if ($uusmaiomayssaecw) {
                goto qwacmyuwycyqmwkq;
            }
            goto kqkmsuoqweqqoiiq;
            uqgkoksouqicqiiy:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto qiockgemuekykiuy;
            }
            goto esyaossmykieskyg;
            uimggymiocacgyky:
            qwacmyuwycyqmwkq:
            goto yguaqcewwsageswq;
            cwcsikiqeagwcocm:
            goto sweymqcmesceysqo;
            goto umcgmioomggsuigo;
            kqkmsuoqweqqoiiq:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto uimggymiocacgyky;
            igwsysyakwoosysi:
            amaeeaeauswgoqic:
            goto eeimuiikicqykmwa;
            yguaqcewwsageswq:
            sweymqcmesceysqo:
            goto igwsysyakwoosysi;
            iucqiqsagamegsmc:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto uqgkoksouqicqiiy;
            eeimuiikicqykmwa:
        }
        goto ayqcwceyiiosgcka;
        ayqcwceyiiosgcka:
        cgwqkgmqqyaqaeos:
        goto oeuquoqswksgymuw;
        wywkeewykggksckc:
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
        goto wekseqwmumkkcsoc;
        gaagiucqcsoauoye:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\141\x67\145");
        goto cmcmwummuiemewaw;
        gykiuseauawoywsy:
        yiksaemwukcmqoks:
        goto gaagiucqcsoauoye;
        cscoykmeocmcwkkc:
        if (!$uqcooyiiyysckskk) {
            goto yiksaemwukcmqoks;
        }
        goto cwigquaouceygaas;
        cwigquaouceygaas:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto gykiuseauawoywsy;
        wekseqwmumkkcsoc:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto cscoykmeocmcwkkc;
        cmcmwummuiemewaw:
    }
}
