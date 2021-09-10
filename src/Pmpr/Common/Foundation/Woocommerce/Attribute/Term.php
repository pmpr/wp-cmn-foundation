<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Term extends Common
{
    const SHOW_ON_LIST = "\x73\150\x6f\167\x2d\x6f\156\55\x6c\x69\163\164";
    
    protected array $fields = [];
    
    protected $taxonomy = null;
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function yyoeeseewqmmyaee()
    {
        return $this->taxonomy;
    }
    
    public function __construct($kesssewsiegssiya)
    {
        goto qcmugwqioeggciuq;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\144\x61\164\145\137\164\x79\160\x65", __("\x44\141\x74\145\x20\x54\x79\x70\145", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\x65\143\157\156\144\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\x4d\x69\x6e\165\x74\x65\x73", PR__CMN__FOUNDATION), self::HOUR => __("\115\x69\x6e\x75\164\145\x73", PR__CMN__FOUNDATION), self::DAY => __("\104\x61\171\x73", PR__CMN__FOUNDATION), self::WEEK => __("\x57\145\x65\153\163", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\x6f\x6e\x74\x68\163", PR__CMN__FOUNDATION), self::YEAR => __("\x59\x65\x61\x72\x73", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\126\x61\x6c\165\145", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\x20\x61\x74\x74\162\151\142\165\x74\x65\x20\x69\x73\40\x61\x20\x6e\x75\x6d\x62\145\x72\40\146\x69\x65\154\144\54\40\146\x69\154\x6c\40\x74\150\151\x73\x20\x66\151\145\x6c\x64\40\164\157\157\x2e", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\157\143\157\x6d\155\145\x72\143\145\137\x70\162\x6f\x64\x75\x63\164\x5f\164\141\x78\157\x6e\x6f\x6d\x79\x5f{$this->kuaoscooeuayycye()}\x5f\x63\x75\x73\164\157\x6d\x5f\146\151\x65\x6c\x64\x73"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\157\x63\157\x6d\x6d\145\162\x63\x65\137\160\162\157\144\165\x63\164\137\164\x61\x78\157\x6e\157\x6d\x79\x5f\x63\165\163\164\x6f\155\137\146\151\x65\x6c\144\x73"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        iimgquoiiseikqug:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\166\141\x6c\165\145\x5f\164\171\x70\x65") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\145\144\151\x74\x5f\164\x65\x72\155", [$this, "\x6f\x65\x77\171\167\141\x6d\157\x71\145\151\151\x67\141\147\x73"], 10, 3)->qcsmikeggeemccuu("\143\x72\145\141\x74\x65\144\137\164\x65\x72\155", [$this, "\x6f\145\x77\x79\x77\x61\x6d\x6f\x71\145\151\151\x67\141\147\163"], 10, 3)->qcsmikeggeemccuu("\x64\145\x6c\145\x74\x65\x5f\164\x65\162\x6d", [$this, "\163\x6d\147\171\143\141\x73\141\x71\155\147\x63\141\145\x6b\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\144\x64\x5f\x66\x6f\162\x6d\x5f\146\x69\x65\x6c\144\x73", [$this, "\141\x64\x64"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x65\x64\151\164\137\146\157\x72\x6d\x5f\146\151\145\154\x64\163", [$this, "\167\167\147\x65\x61\145\161\x67\x61\143\147\x77\x6f\x6f\x71\151"])->qcsmikeggeemccuu("\155\x61\x6e\x61\x67\145\x5f{$ymqmyyeuycgmigyo}\137\143\165\163\x74\x6f\155\137\143\157\x6c\165\x6d\x6e", [$this, "\x75\x6f\141\157\165\145\x73\x77\x77\x77\x6d\x69\167\x77\x71\x73"], 10, 3);
        goto cagiyomyssauaquc;
        cagiyomyssauaquc:
        parent::wigskegsqequoeks();
        goto ayqwqcgquogagmsc;
        kqwoqegwcaycwyou:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto guuosmqayokicema;
        ayqwqcgquogagmsc:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x6d\141\156\141\x67\x65\x5f\x65\144\x69\164\55{$this->kuaoscooeuayycye()}\137\x63\x6f\154\x75\x6d\156\x73", [$this, "\x65\x67\x67\145\x63\165\x75\167\x79\153\x61\x61\x77\157\161\167"]);
        parent::kgquecmsgcouyaya();
    }
    public function add()
    {
        $this->iuaucuookgoqiiio();
    }
    
    public function wwgeaeqgacgwooqi($iwewcwusemqaiggk)
    {
        $this->iuaucuookgoqiiio($iwewcwusemqaiggk);
    }
    
    public function kuaoscooeuayycye() : string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\x61\x74\x74\x72\151\142\x75\x74\145\x5f\x6e\141\155\145"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto ikaweoguqucoaegy;
        ikaweoguqucoaegy:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto syaimiaogoukoqaa;
            syaimiaogoukoqaa:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto ikiwqgmciageamia;
            }
            goto ukkkayewayqiekce;
            micgaswksmmkmgkq:
            umgmikwiqagosokm:
            goto gqqeucaekwcskwqm;
            ukkkayewayqiekce:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto smuqqgosmeymscwo;
            smuqqgosmeymscwo:
            ikiwqgmciageamia:
            goto micgaswksmmkmgkq;
            gqqeucaekwcskwqm:
        }
        goto uegaqgayeaugeoim;
        gyyuyqcmmcsoemkc:
        return $wkkweuacukumqmya;
        goto ukgemiyqimumoyoa;
        uegaqgayeaugeoim:
        cwcoqyuoyckuuios:
        goto gyyuyqcmmcsoemkc;
        ukgemiyqimumoyoa:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto wgawqekaeousiwwe;
        cuwwggakcukcesmy:
        miocgmmkkkksmisy:
        goto yukceuoyyusqyiak;
        wgawqekaeousiwwe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oewsmwkmgiiugcie;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto igkameomykgywamu;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            oaoggiyikquikqmg:
            zsscgecwckmocwqa:
            goto awcqsekwccegiugq;
            igkameomykgywamu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eggowcqiawiuwski;
            }
            goto awgyiumgyeockqoa;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            awgyiumgyeockqoa:
            if (!$iwewcwusemqaiggk) {
                goto weyuusiimkuykwca;
            }
            goto ouqgocoygmaiamou;
            awcqsekwccegiugq:
        }
        goto cuwwggakcukcesmy;
        yukceuoyyusqyiak:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto qwuuagecegiqouig;
        qwuuagecegiqouig:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto okgaykwweumwcsyq;
        }
        goto mmiukekqescmgkie;
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            kaacyyeegamkqkak:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msqawsuquouuugkc;
            }
            goto uaqeuukkceomqisi;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            imqikuakumuqamky:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto eeimccqyqieauwuk;
            }
            goto myuwuwgiccywkiog;
            eckksscswgomeoqs:
            msqawsuquouuugkc:
            goto ewgmqmguwukoekoc;
            ackiyyoociyuiaio:
            eeimccqyqieauwuk:
            goto eckksscswgomeoqs;
            ewgmqmguwukoekoc:
            gesseuyackqsekiy:
            goto wakwsokmekawssyi;
            wakwsokmekawssyi:
        }
        goto agmcywmicucyeiig;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        ayuwgkkummcqqesk:
        lwkkgmcgkowgygcs:
        goto eqgkqikoqkaiuocm;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\x74\145\x72\155\x5f\151\144" => $mceokigoiqekskwe], ["\x25\x64"]);
        goto ayuwgkkummcqqesk;
        mouaeysyaawwqsmq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}
