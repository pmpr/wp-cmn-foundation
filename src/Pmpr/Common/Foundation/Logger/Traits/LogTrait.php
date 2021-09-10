<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger\Traits;

use Pmpr\Common\Foundation\Logger\Engine;
use Pmpr\Common\Foundation\Logger\Logger;

trait LogTrait
{
    
    protected ?string $logChannel = null;
    
    public function cycuaskkikweaoym() : ?string
    {
        return $this->logChannel;
    }
    
    public function ygaescewwyaseaoy() : Engine
    {
        return Engine::symcgieuakksimmu();
    }
    
    public function saqqeqmcyyoeqici(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::ERROR_CODE);
        
    }
    
    public function uiagwusgwcassqua(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::INFO_CODE);
    }
    
    public function oaumimwssciwumys(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek);
    }
    
    public function ciyuwccsawgygkie(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::WARNING_CODE);
    }
    
    private function giaekemmcwcgswce($uamcoiueqaamsqma, $mgkceomocowocqyo = [], $iqaosyayeiuaisqi = Engine::DEBUG_CODE)
    {
        goto eocusimsawyoyaas;
        seasiecgqussuqkw:
        if ($iwcsiuuqeaaaeees) {
            goto usosooekkcgwmgkq;
        }
        goto geacgaisikkgqosu;
        sacawqskusgwkkyg:
        $this->ygaescewwyaseaoy()->uimukyawykswgwsm($iwcsiuuqeaaaeees, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto uckyuqsuyqwgswaa;
        aqykwekaooeoqgoa:
        usosooekkcgwmgkq:
        goto sacawqskusgwkkyg;
        eocusimsawyoyaas:
        $iwcsiuuqeaaaeees = $this->cycuaskkikweaoym();
        goto seasiecgqussuqkw;
        geacgaisikkgqosu:
        $iwcsiuuqeaaaeees = Logger::DEFAULT_CHANNEL;
        goto aqykwekaooeoqgoa;
        uckyuqsuyqwgswaa:
    }
}
