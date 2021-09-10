<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Closure;
use Exception;
use Generator;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\QueryException;

class Database extends Common implements ConnectionInterface
{
    use FieldTrait;
    
    protected $db = null;
    
    protected array $configs = [];
    
    protected ?Manager $manager = null;
    
    protected ?int $transactionCount = 0;
    
    public function __construct()
    {
        goto uckusgwkoycmkeam;
        uckusgwkoycmkeam:
        global $wpdb;
        goto gscyiqmmegqmqcoe;
        gscyiqmmegqmqcoe:
        $this->db = $wpdb;
        goto mieoguuqiwqioeqa;
        mieoguuqiwqioeqa:
        parent::__construct();
        goto qosswumywsaeyqus;
        qosswumywsaeyqus:
    }
    
    public function wwiwswsasquukoqs()
    {
        return $this->db;
    }
    
    public function amosaeggmeksgwea() : ?Manager
    {
        return $this->manager;
    }
    public function cymcyywycwkawmsi()
    {
        goto swicauyqusmgeccu;
        icoiqskygugkgmkm:
        $uiewakwqscemywuo = ["\144\162\x69\166\145\x72" => "\155\x79\x73\161\154", "\x68\x6f\x73\x74" => $ooggeikkseeqyyek->__get("\144\x62\150\x6f\163\164"), "\144\141\164\141\x62\x61\163\x65" => $ooggeikkseeqyyek->__get("\144\x62\156\141\155\x65"), "\165\163\145\162\x6e\x61\155\145" => $ooggeikkseeqyyek->__get("\144\x62\165\x73\145\x72"), "\x70\141\163\163\x77\157\x72\x64" => $ooggeikkseeqyyek->__get("\x64\x62\160\141\163\163\x77\x6f\x72\144"), "\160\157\162\164" => $ooggeikkseeqyyek->options, "\143\150\141\x72\x73\145\164" => $ooggeikkseeqyyek->charset, "\x63\157\x6c\154\x61\164\x69\157\x6e" => $ooggeikkseeqyyek->collate, "\160\162\145\x66\x69\x78" => $ooggeikkseeqyyek->prefix];
        goto kocaieyauyiqmyiy;
        eekkcooqswqouoei:
        
        $eygsasmqycagyayw->setAsGlobal();
        goto cuayqmasemsqsume;
        kocaieyauyiqmyiy:
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        goto gcqssckowmywoesw;
        cuayqmasemsqsume:
        $this->manager = $eygsasmqycagyayw;
        goto igmawmwssyskqqag;
        swicauyqusmgeccu:
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        goto maguoggkqamaiuag;
        maguoggkqamaiuag:
        $eygsasmqycagyayw = new Manager();
        goto icoiqskygugkgmkm;
        gcqssckowmywoesw:
        
        $eygsasmqycagyayw->bootEloquent();
        goto eekkcooqswqouoei;
        igmawmwssyskqqag:
    }
    
    public function query() : Builder
    {
        goto iomwkkieqcswkkaw;
        iomwkkieqcswkkaw:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto eussqkkimciywios;
        eussqkkimciywios:
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        goto ewsigoeswimiueqe;
        ewsigoeswimiueqe:
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
        goto gaskcgoeywuyukke;
        gaskcgoeywuyukke:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge("\156\x61\x6d\x65");
    }
    
    public function aqoymmcygkssqmmy() : Grammar
    {
        return new Grammar();
    }
    
    public function yokcoiaqqaquwecc() : Processor
    {
        return new Processor();
    }
    
    public function xoiwkmeymocuuwcq($ywmkwiwkosakssii)
    {
        return $this->wwiwswsasquukoqs()->insert_id;
    }
    
    public function tkgawykgecmsaeis() : ?array
    {
        return $this->configs;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq = null)
    {
        return ManipulateArray::get($this->tkgawykgecmsaeis(), $omkysikckkcieckq);
    }
    
    public function uawwgkimmooamyay() : ?int
    {
        return $this->transactionCount;
    }
    
    public function iqekeywwkoksagke($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : array
    {
        goto gqaqamewqeaqwcia;
        ksiwgckusukisueg:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto sgkqgucguyccaaki;
        sgkqgucguyccaaki:
        return (array) $sogksuscggsicmac;
        goto omuemegmkesqgwys;
        okuqsqaiwwiigmyu:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto ksiwgckusukisueg;
        gqaqamewqeaqwcia:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto okuqsqaiwwiigmyu;
        omuemegmkesqgwys:
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        goto cmsiuimsiycomyay;
        ccgsycueagwegqeu:
        geyiosucqswaeasw:
        goto gmeiuoeewucukque;
        qmqmskywcgiqgygm:
        throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        goto ccgsycueagwegqeu;
        cmsiuimsiycomyay:
        if (!($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error)) {
            goto geyiosucqswaeasw;
        }
        goto qmqmskywcgiqgygm;
        gmeiuoeewucukque:
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        goto yqqseqskcqeqkacm;
        asoecuscmsyusmkg:
        qywkykqkeeuccoui:
        goto kwasqmcyiswoaiuu;
        kwasqmcyiswoaiuu:
        return $gqgemcmoicmgaqie;
        goto kiskwawumeiiieuk;
        syisomgawcsqeemk:
        $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto asoecuscmsyusmkg;
        sockocsycmkaeosg:
        $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
            goto ceaamccscgcmqgka;
            gaouaiemokqqgssw:
            ycecaauekkiqacuu:
            goto wqwmuuicoqigqwyc;
            igyesgemqesackws:
            $moyaaaascoeowegu = "\x6e\x75\154\154";
            goto wiaymoucakyaikii;
            wiaymoucakyaikii:
            sayqggaieocmskko:
            goto ociesuicgmkekcue;
            ceaamccscgcmqgka:
            if (is_string($moyaaaascoeowegu)) {
                goto qmguoqeawegcoeoa;
            }
            goto omumkeywqqogwwue;
            wqwmuuicoqigqwyc:
            return $moyaaaascoeowegu;
            goto oqgymyiwckkwueuw;
            ociesuicgmkekcue:
            goto ycecaauekkiqacuu;
            goto ymucaguacemwsgsi;
            omumkeywqqogwwue:
            if (!($moyaaaascoeowegu === null)) {
                goto sayqggaieocmskko;
            }
            goto igyesgemqesackws;
            ymucaguacemwsgsi:
            qmguoqeawegcoeoa:
            goto qiikwossequwiuom;
            qiikwossequwiuom:
            $moyaaaascoeowegu = "\x27" . esc_sql($moyaaaascoeowegu) . "\x27";
            goto gaouaiemokqqgssw;
            oqgymyiwckkwueuw:
        }, $iykmscciaowcagqu);
        goto ugkwqaywmwqucoeo;
        yqqseqskcqeqkacm:
        $gqgemcmoicmgaqie = str_replace("\42", "\x60", $gqgemcmoicmgaqie);
        goto ywokggauuiosegog;
        uoewiggumomegksg:
        if (!$iykmscciaowcagqu) {
            goto qywkykqkeeuccoui;
        }
        goto sockocsycmkaeosg;
        ugkwqaywmwqucoeo:
        $gqgemcmoicmgaqie = str_replace(["\x25", "\77"], ["\45\x25", "\x25\x73"], $gqgemcmoicmgaqie);
        goto syisomgawcsqeemk;
        ywokggauuiosegog:
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        goto uoewiggumomegksg;
        kiskwawumeiiieuk:
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        goto awuwuuuagqysukku;
        csaksaisgawusswg:
        kkmuuoscccmokkiw:
        goto ecgwgamiseokmise;
        maggecymmmesqmqs:
        $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        goto csaksaisgawusswg;
        mcqwuawosciucemq:
        $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
        goto emeeocqaisksyioq;
        awuwuuuagqysukku:
        $syeseoiyagmgumcy = '';
        goto miugmimciywcgswm;
        emeeocqaisksyioq:
        oaqeoqsksuyyggmg:
        goto maggecymmmesqmqs;
        miugmimciywcgswm:
        if (!$aasascamegmwqmqk) {
            goto kkmuuoscccmokkiw;
        }
        goto aqekkeqmmewoyawu;
        aqekkeqmmewoyawu:
        if (!$yuwymayicwwqiske) {
            goto oaqeoqsksuyyggmg;
        }
        goto mcqwuawosciucemq;
        ecgwgamiseokmise:
        return $syeseoiyagmgumcy;
        goto qkiyyywwuiuackao;
        qkiyyywwuiuackao:
    }
    
    public function getPdo() : self
    {
        return $this;
    }
    
    public function raw($eqgoocgaqwqcimie) : Expression
    {
        return new Expression($eqgoocgaqwqcimie);
    }
    
    public function table($aasascamegmwqmqk, $aikcyecgesuiaacw = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return $this->query()->from($aasascamegmwqmqk);
    }
    
    public function insert($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        
        return $this->statement($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function update($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function delete($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function statement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        return $this->unprepared($gmyoogwqukkgwiwk);
    }
    
    public function affectingStatement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        goto gyskcwykkyakeims;
        ossakckwskyqusmm:
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto mcagemacuqyskogs;
        mcagemacuqyskogs:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto aamgqoqyyooimqkm;
        aamgqoqyyooimqkm:
        return intval($sogksuscggsicmac);
        goto cimascmiesomqgqs;
        gyskcwykkyakeims:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        goto ossakckwskyqusmm;
        cimascmiesomqgqs:
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        goto easuiqiooiwgswmm;
        saiuoomgskwgyeya:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        goto kuuawiosmkgqsscy;
        easuiqiooiwgswmm:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto saiuoomgskwgyeya;
        kwocaqggwcksesce:
        return $sogksuscggsicmac;
        goto momuweiasiwskekw;
        kuuawiosmkgqsscy:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto kwocaqggwcksesce;
        momuweiasiwskekw:
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        goto qaewauyekqucciyc;
        bgakaasgwwygosyi:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        goto aucwccaiqwsmyuaq;
        agyooskogigyayws:
        return $sogksuscggsicmac;
        goto iiiwsgameuomumgw;
        qaewauyekqucciyc:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto bgakaasgwwygosyi;
        aucwccaiqwsmyuaq:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto agyooskogigyayws;
        iiiwsgameuomumgw:
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        goto mmcikqikqecaeswu;
        mmcikqikqecaeswu:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto ywsywoumuaykkeaa;
        ywsywoumuaykkeaa:
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mciumqyyossyiuyk;
            sqmqwqeoygcmqcim:
            uwusswwekqcsisus:
            goto syykqmkiyoekqsek;
            mciumqyyossyiuyk:
            
            if (is_bool($eqgoocgaqwqcimie)) {
                goto kssuqmsgmaaeqigw;
            }
            goto acaeigkmigikeuyu;
            uyksacasqywyessc:
            $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            goto sqmqwqeoygcmqcim;
            kqyeukywmgismyaq:
            if (!$eqgoocgaqwqcimie instanceof \DateTime) {
                goto okycquokqoamsquy;
            }
            goto mukwsuuuqcgesmwc;
            gsgyayuaekgyoumc:
            goto scockmiqikwwkqse;
            goto omemqagskckoeoog;
            syykqmkiyoekqsek:
            scockmiqikwwkqse:
            goto aiqekkyauwswayyq;
            aeuosggumiiwoesm:
            goto uwusswwekqcsisus;
            goto wyqmeyoaggwuioak;
            ugikgkwuwmgymgus:
            cgwokqwakqcmiieo:
            goto gsgyayuaekgyoumc;
            mukwsuuuqcgesmwc:
            
            
            
            
            $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
            goto cqeoguiqiymkyweo;
            wykuosegisygosiq:
            goto egwgyekaiqomyeaa;
            goto ugikgkwuwmgymgus;
            omgcsmsikaggaooc:
            okycquokqoamsquy:
            goto wykuosegisygosiq;
            omemqagskckoeoog:
            egwgyekaiqomyeaa:
            goto aeuosggumiiwoesm;
            acaeigkmigikeuyu:
            if (is_scalar($eqgoocgaqwqcimie)) {
                goto cgwokqwakqcmiieo;
            }
            goto kqyeukywmgismyaq;
            cqeoguiqiymkyweo:
            
            $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
            goto omgcsmsikaggaooc;
            wyqmeyoaggwuioak:
            kssuqmsgmaaeqigw:
            goto uyksacasqywyessc;
            aiqekkyauwswayyq:
        }
        goto wsqiqkiucakewgou;
        wsqiqkiucakewgou:
        mcukocaaoyuugoeu:
        goto yaumwqeommqigswq;
        yaumwqeommqigswq:
        return $iykmscciaowcagqu;
        goto wiiqigwgyuiuksia;
        wiiqigwgyuiuksia:
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            goto mqoygcuqwacgycek;
            agyycikucwgmysee:
            
            $this->commit();
            goto aiukiwqmikscoswm;
            mqoygcuqwacgycek:
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            goto agyycikucwgmysee;
            aiukiwqmikscoswm:
            return $icwicymcioeyeyek;
            goto mcmkqgkwyqoiikcq;
            mcmkqgkwyqoiikcq:
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        goto gskacikgkwcuauko;
        kwiuqqwamsimqgme:
        $this->transactionCount++;
        goto qmegcmqemmywoqas;
        qmegcmqemmywoqas:
        ssyukuseoymackeo:
        goto giooasyeqwaaocea;
        gskacikgkwcuauko:
        
        $ammuiskickemgqgc = $this->unprepared("\123\124\x41\x52\124\40\x54\122\101\116\x53\x41\x43\x54\111\x4f\116\73");
        goto yyieomeeqycmikqw;
        yyieomeeqycmikqw:
        if (!(false !== $ammuiskickemgqgc)) {
            goto ssyukuseoymackeo;
        }
        goto kwiuqqwamsimqgme;
        giooasyeqwaaocea:
    }
    
    public function commit()
    {
        goto qgyoesyiasqimcoe;
        kiemqsgcmouqscao:
        seieguyaaiqismgo:
        goto wssaaemscmmiomee;
        kkwqmewaksmokuqy:
        
        $ammuiskickemgqgc = $this->unprepared("\103\x4f\x4d\x4d\111\124\73");
        goto gsgkayokisiesciy;
        ascogkesqmuuaesq:
        $this->transactionCount--;
        goto askukaucmocewkgg;
        qgyoesyiasqimcoe:
        if (!($this->transactionCount >= 1)) {
            goto seieguyaaiqismgo;
        }
        goto kkwqmewaksmokuqy;
        askukaucmocewkgg:
        uueywyysiicuauem:
        goto kiemqsgcmouqscao;
        gsgkayokisiesciy:
        if (!(false !== $ammuiskickemgqgc)) {
            goto uueywyysiicuauem;
        }
        goto ascogkesqmuuaesq;
        wssaaemscmmiomee:
    }
    
    public function rollBack()
    {
        goto iusaeoimukymskgs;
        meoweqcaaosoomeu:
        $this->transactionCount--;
        goto ywmoieqkigsykequ;
        ywmoieqkigsykequ:
        meqmcgmksqiqcoyq:
        goto iaousaauoawkqkkg;
        iusaeoimukymskgs:
        if (!($this->transactionCount >= 1)) {
            goto euskosgaksmimgug;
        }
        goto asciaakaoygususy;
        eaggoasiwogmquwc:
        if (!(false !== $ammuiskickemgqgc)) {
            goto meqmcgmksqiqcoyq;
        }
        goto meoweqcaaosoomeu;
        asciaakaoygususy:
        
        $ammuiskickemgqgc = $this->unprepared("\x52\x4f\114\114\102\x41\x43\113\x3b");
        goto eaggoasiwogmquwc;
        iaousaauoawkqkkg:
        euskosgaksmimgug:
        goto kkwucaoumyayagcq;
        kkwucaoumyayagcq:
    }
    
    public function transactionLevel() : ?int
    {
        return $this->transactionCount;
    }
    
    public function pretend(Closure $ekiuyucoiagmscgy) : array
    {
        return [];
    }
    
    public function getDatabaseName()
    {
        return $this->wwiwswsasquukoqs()->__get("\144\x62\156\141\x6d\x65");
    }
}
