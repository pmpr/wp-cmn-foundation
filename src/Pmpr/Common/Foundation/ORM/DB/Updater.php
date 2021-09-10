<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\x69\156\x69\x74", [$this, "\x63\165\x63\x71\x67\167\155\157\x73\145\x71\141\x6b\147\157\145"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uecycmeaoqgqcomm;
        wkokasiqoeycyukq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto cgqmyikikqgmksgg;
        uecycmeaoqgqcomm:
        $mgcmmwqwguicsews = null;
        goto siiwoymcomqegmya;
        qioeuukaqkcsiiwk:
        return $mgcmmwqwguicsews;
        goto cycwiouaowuswkmk;
        siiwoymcomqegmya:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto gquyeowwseuycuoq;
        }
        goto wkokasiqoeycyukq;
        cgqmyikikqgmksgg:
        gquyeowwseuycuoq:
        goto qioeuukaqkcsiiwk;
        cycwiouaowuswkmk:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto sguosuigwgwkikgs;
        wgkamcmqescgqcyw:
        aoiwocgacociakoy:
        goto amkeeqecmwsmwqma;
        sguosuigwgwkikgs:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto aoiwocgacociakoy;
        }
        goto ycyueqmkqyycmaus;
        amkeeqecmwsmwqma:
        return $this->builder;
        goto vkmscascaoysaqoc;
        ycyueqmkqyycmaus:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto wgkamcmqescgqcyw;
        vkmscascaoysaqoc:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto ioqmgaeuiicymgky;
        gcgsyyiismkwoyck:
        soskeqqausokwugo:
        goto aswikmsouwkequca;
        aswikmsouwkequca:
        return $uiewakwqscemywuo;
        goto ycgsmkkioyqqawyk;
        ioqmgaeuiicymgky:
        $uiewakwqscemywuo = null;
        goto ywmcuouqguawueqm;
        ywmcuouqguawueqm:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto soskeqqausokwugo;
        }
        goto gkoaywyuyqemyiqw;
        gkoaywyuyqemyiqw:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto gcgsyyiismkwoyck;
        ycgsmkkioyqqawyk:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto qywueycgouwamkso;
            uggisigeswwyqmqi:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qaykqsyoyscaqsce;
            qywueycgouwamkso:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto wecgakiimqymkmiy;
            wecgakiimqymkmiy:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto uggisigeswwyqmqi;
            qaykqsyoyscaqsce:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto cuqwswgmwuwmgkwe;
            cuqwswgmwuwmgkwe:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto emyuskcwqyscewue;
        yiskaoskyyiswkki:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto akieywkiweasukyw;
        akieyasekuwqeugc:
        eugisyswkecacase:
        goto gqwcuusyiggisuok;
        oguigickaoqigcoi:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto qmugciukukckmeiu;
        akieywkiweasukyw:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\151\144"]);
        goto qoqgokiaagioccqg;
        oyciiqiqoqkgoqec:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto mcguyegywqyasmii;
        }
        goto qckqeqqcoawmwwqw;
        ookeyiumgkqqucia:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ioocowswsiqoyaai;
        wcmsamoqaogoouey:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto iceuoqgyqsmywqqq;
        }
        goto oyciiqiqoqkgoqec;
        oogmmeccymcuwwac:
        mcguyegywqyasmii:
        goto wygeysociiyqokyk;
        qoqgokiaagioccqg:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto mwmwmswiueocaeug;
            gcgwqksqskumiumq:
            ysykemiscamquoce:
            goto emiugswuagoacakq;
            mwmwmswiueocaeug:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto oaimckymswkqoysq;
            }
            goto ukugqakgsqqmgege;
            awcgiyqmoemqumeg:
            oaimckymswkqoysq:
            goto gcgwqksqskumiumq;
            ukugqakgsqqmgege:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto awcgiyqmoemqumeg;
            emiugswuagoacakq:
        }
        goto oeukmyymqaaakksa;
        qckqeqqcoawmwwqw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto kcesecosoiwocymi;
            kcesecosoiwocymi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto omagsowousaeaiou;
            }
            goto ckyamgmuoswcaiak;
            qauuogkoosmuggas:
            qkygewgkycsuawgm:
            goto wwcougcmsuqogqyc;
            umosyyqqcuqiscco:
            omagsowousaeaiou:
            goto qauuogkoosmuggas;
            ckyamgmuoswcaiak:
            $uwqmqcmssaeieiqa[] = ["\x61\143\x74\151\x6f\156" => "\104\122\117\120", "\143\x6f\154\165\155\156" => $qgoqiacsiccwoawi];
            goto umosyyqqcuqiscco;
            wwcougcmsuqogqyc:
        }
        goto yqywgkymmowyggqa;
        oeukmyymqaaakksa:
        twusqqkmqgswisei:
        goto ookeyiumgkqqucia;
        ccqagygkoaagksyw:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto oguigickaoqigcoi;
        yqywgkymmowyggqa:
        cywmgwogisiyymoi:
        goto oogmmeccymcuwwac;
        qyguqmkmyqeyqaac:
        qgoaooycwyiyycoa:
        goto igeoagaweewiscas;
        ioocowswsiqoyaai:
        sort($uwomkgseoiegeume);
        goto csuwemcoeyqemwks;
        wygeysociiyqokyk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto gcykaeaisuqiqyqi;
            yomuicigicmugscy:
            igosooeimygcmois:
            goto cyssqgqaoaasmogc;
            cyssqgqaoaasmogc:
            okacwwwygceucqsg:
            goto geqwascicmuguaom;
            gcykaeaisuqiqyqi:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto igosooeimygcmois;
            }
            goto swkeqqkqioecmgia;
            swkeqqkqioecmgia:
            
            $uwqmqcmssaeieiqa[] = ["\141\x63\x74\151\157\156" => "\101\x44\x44", "\x63\157\154\165\x6d\x6e" => $aokagokqyuysuksm];
            goto yomuicigicmugscy;
            geqwascicmuguaom:
        }
        goto qyguqmkmyqeyqaac;
        igeoagaweewiscas:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto emuckswusmmeuwma;
                sswmkkcyawawqwwg:
                switch ($aiamqeawckcsuaou) {
                    case "\101\x44\x44":
                    case "\115\x4f\104\x49\x46\131":
                        goto mumeawggkmqsowae;
                        kwcyggeukmgacqsy:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto isqokqgukyemmqcg;
                        gemuuqmegqkkgeua:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\x4d\117\x44\x49\x46\131");
                        goto yeiawaisoceoysau;
                        yeiawaisoceoysau:
                        eecyiiwsqomoggmq:
                        goto kyiewmuguyyccsca;
                        ecimugmwcawqmyaa:
                        goto okaiokeeaqccisaq;
                        goto msieagoikksumcwa;
                        mumeawggkmqsowae:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ckaggwgwsyowuuem;
                        }
                        goto kwcyggeukmgacqsy;
                        kyiewmuguyyccsca:
                        ckaggwgwsyowuuem:
                        goto ecimugmwcawqmyaa;
                        isqokqgukyemmqcg:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto eecyiiwsqomoggmq;
                        }
                        goto gemuuqmegqkkgeua;
                        msieagoikksumcwa:
                    case "\101\104\104\x20\x49\116\x44\x45\x58":
                    case "\104\122\x4f\x50\40\x49\116\x44\x45\x58":
                        goto imwcikaiagkakiic;
                        ymkoykouaqiusygo:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto eeoiyiuccooeigmk;
                        eeoiyiuccooeigmk:
                        ygywowuyoygiiqaq:
                        goto owkyiywsooiwewgw;
                        uooisauooikkciom:
                        if (!($aiamqeawckcsuaou == "\x41\x44\104\40\111\116\104\105\x58")) {
                            goto ygywowuyoygiiqaq;
                        }
                        goto ymkoykouaqiusygo;
                        owkyiywsooiwewgw:
                        goto okaiokeeaqccisaq;
                        goto wqyymgoekecmskmm;
                        imwcikaiagkakiic:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto uooisauooikkciom;
                        wqyymgoekecmskmm:
                    case "\x44\122\x4f\x50":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto okaiokeeaqccisaq;
                }
                goto kaocmesokyiikyci;
                agwsusimqmoesgck:
                yoeqaicysswwgkmm:
                goto kqiakyymyiosoeia;
                kaocmesokyiikyci:
                ugseakwywkuwgyug:
                goto yikyagqossasyqcu;
                cgyikucmysgcmweu:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\141\x63\x74\x69\x6f\x6e"];
                goto sswmkkcyawawqwwg;
                emuckswusmmeuwma:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\x63\157\x6c\165\155\x6e"];
                goto cgyikucmysgcmweu;
                yikyagqossasyqcu:
                okaiokeeaqccisaq:
                goto agwsusimqmoesgck;
                kqiakyymyiosoeia:
            }
            qgyeyyagaeyoequw:
        };
        goto ccqagygkoaagksyw;
        qmugciukukckmeiu:
        iceuoqgyqsmywqqq:
        goto akieyasekuwqeugc;
        csuwemcoeyqemwks:
        sort($wkkweuacukumqmya);
        goto wcmsamoqaogoouey;
        alomqucgmacieuoa:
        if (!$cgomysauusagiwqu) {
            goto eugisyswkecacase;
        }
        goto yiskaoskyyiswkki;
        emyuskcwqyscewue:
        $uwqmqcmssaeieiqa = [];
        goto alomqucgmacieuoa;
        gqwcuusyiggisuok:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qogyssukouuesqis;
            ogaqcigmoyoqcsws:
            ikoaokuwokyiigsu:
            goto egmauuemqqqqsgic;
            egmauuemqqqqsgic:
            if ($aasascamegmwqmqk->charset) {
                goto aouauysuwimgygie;
            }
            goto agwyiymkkwmywcsw;
            agwyiymkkwmywcsw:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\143\x68\141\162\x73\145\164");
            goto qkeyoeyiuqeyicqa;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\143\x6f\154\154\x61\164\151\157\x6e");
            goto ogaqcigmoyoqcsws;
            qkeyoeyiuqeyicqa:
            aouauysuwimgygie:
            goto mgkaweokcicgiegg;
            mgkaweokcicgiegg:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                kquqgyygaeiwkeko:
            }
            goto ukcoymqsgmcwokoq;
            qogyssukouuesqis:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto kkoukeoyauekomau;
            ukcoymqsgmcwokoq:
            sqkmkmcmocigewua:
            goto degewusuggmqqeso;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->collation) {
                goto ikoaokuwokyiigsu;
            }
            goto wgeqwaisweikegck;
            degewusuggmqqeso:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto quowmcomwmsmugqe;
        gammkicacakosigu:
        
        $keuuiqywyuiuegkq->unique();
        goto qkusmocauegwwqwy;
        gkaayykiiqqogeiw:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto qwsmwwskogygagea;
        quowmcomwmsmugqe:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ycqcgaauyqmkwskc;
        caccouegecmukqci:
        eosiakwgiemwwqwy:
        goto osouwwksqimikqqo;
        qwwmqqkoeuywmqys:
        ywyceqcyssuuyauc:
        goto soqakmcacqiqamku;
        caeiwemymyceqqei:
        qyeomiwmooookysu:
        goto ogwmeoaswuqwamim;
        imquocywcscomayo:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto ywyceqcyssuuyauc;
        }
        goto gammkicacakosigu;
        qkusmocauegwwqwy:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto qwwmqqkoeuywmqys;
        saoickmcegceesyw:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto quumuskukkcuuciu;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto gesaagokeamiwuws;
        }
        goto aqyweyyyygygswmy;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto oeyoiicmckkgoyqg;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kqkcowkuqsuemmmc;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unsigned();
        goto awwyuikkmaaomkqc;
        cegokyqcmuuwyoey:
        if (!$vkgsqsqqqgyaqkog) {
            goto osamucgweicwoiqy;
        }
        goto yayicayasmkmsemm;
        kiwacoqesuqmyiiu:
        mogweaaaqocouiug:
        goto aimwoikqsqkyicsu;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto ecoygmauwycmweyq;
        ecoygmauwycmweyq:
        gucokiskmccmsaac:
        goto meueuqeagkwkoiuk;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto kucymsiiugmiooyo;
        auakugikcequsiia:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto qyeomiwmooookysu;
        }
        goto igsweakykqomoqgi;
        awwyuikkmaaomkqc:
        gesaagokeamiwuws:
        goto imquocywcscomayo;
        osouwwksqimikqqo:
        return $aasascamegmwqmqk;
        goto icsukicuomwmqiyc;
        aimwoikqsqkyicsu:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto goemggymkikoquwi;
        }
        goto qiggceewmyagkisq;
        oeyoiicmckkgoyqg:
        uckqwisqmyeuegei:
        goto owkgksuymewqqiwu;
        soqakmcacqiqamku:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto gucokiskmccmsaac;
        }
        goto ciksycqiaaueqaaq;
        kimwcesmkuqqyamq:
        oeoyiakocyacqsys:
        goto cegokyqcmuuwyoey;
        kqkcowkuqsuemmmc:
        goto oeoyiakocyacqsys;
        goto caeiwemymyceqqei;
        qiggceewmyagkisq:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto qcgyuksgqucyquwi;
        }
        goto yaieemqskkgmcqou;
        qcgekwgksmkoamik:
        osamucgweicwoiqy:
        goto ekykiumoyeyamsew;
        cmqmcaowowcccgka:
        qcgyuksgqucyquwi:
        goto imcseqowgomyokwi;
        quumuskukkcuuciu:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto eosiakwgiemwwqwy;
        }
        goto iiwuqoagoqgmwwiq;
        ekykiumoyeyamsew:
        goemggymkikoquwi:
        goto caccouegecmukqci;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto cmqmcaowowcccgka;
        esewmcieucesaqcw:
        switch ($sqeykgyoooqysmca) {
            case "\x4a\123\117\x4e":
            case "\101\x52\122\101\x59":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
            case "\x46\x4f\x52\105\x49\x47\x4e":
                goto eseyciuwmwyauuio;
                aqakqumsuimkkkus:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto qkeogqcekgawsgwe;
                kcieymewycqwegis:
                wqiwmousomaigmgm:
                goto swqkecoseauacwio;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto oqiqyekweaomiwgy;
                gsiegqomuuccaoos:
                goaaoqkgsieiyuqm:
                goto kcieymewycqwegis;
                oaqqykskqqqqsqem:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto mmgqsmogqmouuskw;
                }
                goto yoeoiuuuqakicgam;
                swqkecoseauacwio:
                return $aasascamegmwqmqk;
                goto ksiuacaiaiauywae;
                yoeoiuuuqakicgam:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto yuyyeiiewiuogceo;
                skeqeeuuemswqgwu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto uikqgasygyaeqcac;
                ayeysmcoemkcsegm:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto wqiwmousomaigmgm;
                }
                goto cwccggguqewowygo;
                ammqgccmiuwcaeuq:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto skeqeeuuemswqgwu;
                mqcoyamukmaoqwmw:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto kygqagmyyqysywkm;
                wgicusccasmuiosy:
                qmawgkeuyyqwcmok:
                goto oaqqykskqqqqsqem;
                ksiuacaiaiauywae:
                uemgoaamkymwuiko:
                goto mqcoyamukmaoqwmw;
                qseiiaweiykcwacy:
                yqaqgsyaqomgoowq:
                goto kewsuqsoqkyikkis;
                kygqagmyyqysywkm:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto aqakqumsuimkkkus;
                eseyciuwmwyauuio:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto suycyuwkgakgikqw;
                }
                goto kkyumyewcymikswk;
                csoecqymkecmuueu:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto goaaoqkgsieiyuqm;
                }
                goto iyaawicgsuuoykiq;
                kkyumyewcymikswk:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto uemgoaamkymwuiko;
                }
                goto ayeysmcoemkcsegm;
                skeyqsaqsiwgiyog:
                goto mogweaaaqocouiug;
                goto awwgggeiaceyecco;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto wgicusccasmuiosy;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto qseiiaweiykcwacy;
                iyaawicgsuuoykiq:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto ammqgccmiuwcaeuq;
                yuyyeiiewiuogceo:
                mmgqsmogqmouuskw:
                goto ugomsuwwuqsskuqc;
                owssugkggmiascii:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto qmawgkeuyyqwcmok;
                }
                goto mqcgsiaawwkqmksi;
                kewsuqsoqkyikkis:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto cyomeoyuoqywoysa;
                }
                goto yeecswicmoyiqssi;
                uikqgasygyaeqcac:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\x5f{$wkwywcemusswkgwk}", false));
                goto gsiegqomuuccaoos;
                cwccggguqewowygo:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto csoecqymkecmuueu;
                ugomsuwwuqsskuqc:
                suycyuwkgakgikqw:
                goto skeyqsaqsiwgiyog;
                oqiqyekweaomiwgy:
                cyomeoyuoqywoysa:
                goto owssugkggmiascii;
                awwgggeiaceyecco:
            case "\x53\105\x54":
            case "\x45\116\125\115":
                goto oemkgkauqekgkumy;
                qiaaqckmooiayuae:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mswucuuigmosimuo;
                ygegasgiwgmswaog:
                ayeqwsqywosymiwu:
                goto qiaaqckmooiayuae;
                mswucuuigmosimuo:
                goto mogweaaaqocouiug;
                goto ayuwkwsuioumscca;
                iuoayeiykmokiiys:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ayeqwsqywosymiwu;
                }
                goto mmmgeukkswewyuoa;
                oemkgkauqekgkumy:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto iuoayeiykmokiiys;
                mmmgeukkswewyuoa:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto ygegasgiwgmswaog;
                ayuwkwsuioumscca:
            case "\106\x4c\117\101\x54":
            case "\x44\x4f\125\x42\114\105":
            case "\104\105\103\x49\115\101\114":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mogweaaaqocouiug;
            case "\x54\x49\x4d\x45":
            case "\x44\x41\x54\105\124\111\x4d\105":
            case "\124\x49\115\x45\123\x54\101\x4d\x50":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mogweaaaqocouiug;
            case "\x43\110\101\x52":
            case "\123\124\x52\x49\x4e\x47":
            case "\126\101\122\103\x48\x41\x52":
                goto agicooogqyeyoyqi;
                cecoqgqcckqoouwy:
                ecomecoqggyssmsk:
                goto wcuqgoiokweuwycq;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto wesooeakucoqmisw;
                wcuqgoiokweuwycq:
                goto mogweaaaqocouiug;
                goto caskecmuwociuumq;
                ykgkuccgawoyquga:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto cecoqgqcckqoouwy;
                cmwaakkwwqameeec:
                gswoagoguesomwyc:
                goto ykgkuccgawoyquga;
                agicooogqyeyoyqi:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto gswoagoguesomwyc;
                }
                goto osoukeawsoyqmwgo;
                wesooeakucoqmisw:
                goto ecomecoqggyssmsk;
                goto cmwaakkwwqameeec;
                caskecmuwociuumq:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
        }
        goto sgqackwokosksyua;
        qwsmwwskogygagea:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto saoickmcegceesyw;
        kucymsiiugmiooyo:
        uokwiwsewewgcocy:
        goto auakugikcequsiia;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kimwcesmkuqqyamq;
        iiwuqoagoqgmwwiq:
        $keuuiqywyuiuegkq = null;
        goto esewmcieucesaqcw;
        meueuqeagkwkoiuk:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto uokwiwsewewgcocy;
        }
        goto cseucimaukwaskwk;
        imcseqowgomyokwi:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto uckqwisqmyeuegei;
        }
        goto semwcosqeukmgoey;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto gkaayykiiqqogeiw;
        sgqackwokosksyua:
        aywsyyewoswacqqy:
        goto kiwacoqesuqmyiiu;
        yayicayasmkmsemm:
        
        $keuuiqywyuiuegkq->change();
        goto qcgekwgksmkoamik;
        icsukicuomwmqiyc:
    }
}
