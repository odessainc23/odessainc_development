<?php

namespace ProfilePressVendor\Sabberworm\CSS\Value;

use ProfilePressVendor\Sabberworm\CSS\OutputFormat;
use ProfilePressVendor\Sabberworm\CSS\Parsing\ParserState;
use ProfilePressVendor\Sabberworm\CSS\Parsing\SourceException;
use ProfilePressVendor\Sabberworm\CSS\Parsing\UnexpectedEOFException;
use ProfilePressVendor\Sabberworm\CSS\Parsing\UnexpectedTokenException;
/**
 * This class represents URLs in CSS. `URL`s always output in `URL("")` notation.
 * @internal
 */
class URL extends PrimitiveValue
{
    /**
     * @var CSSString
     */
    private $oURL;
    /**
     * @param int $iLineNo
     */
    public function __construct(CSSString $oURL, $iLineNo = 0)
    {
        parent::__construct($iLineNo);
        $this->oURL = $oURL;
    }
    /**
     * @return URL
     *
     * @throws SourceException
     * @throws UnexpectedEOFException
     * @throws UnexpectedTokenException
     */
    public static function parse(ParserState $oParserState)
    {
        $oAnchor = $oParserState->anchor();
        $sIdentifier = '';
        for ($i = 0; $i < 3; $i++) {
            $sChar = $oParserState->parseCharacter(\true);
            if ($sChar === null) {
                break;
            }
            $sIdentifier .= $sChar;
        }
        $bUseUrl = $oParserState->streql($sIdentifier, 'url');
        if ($bUseUrl) {
            $oParserState->consumeWhiteSpace();
            $oParserState->consume('(');
        } else {
            $oAnchor->backtrack();
        }
        $oParserState->consumeWhiteSpace();
        $oResult = new URL(CSSString::parse($oParserState), $oParserState->currentLine());
        if ($bUseUrl) {
            $oParserState->consumeWhiteSpace();
            $oParserState->consume(')');
        }
        return $oResult;
    }
    /**
     * @return void
     */
    public function setURL(CSSString $oURL)
    {
        $this->oURL = $oURL;
    }
    /**
     * @return CSSString
     */
    public function getURL()
    {
        return $this->oURL;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render(new OutputFormat());
    }
    /**
     * @return string
     */
    public function render(OutputFormat $oOutputFormat)
    {
        return "url({$this->oURL->render($oOutputFormat)})";
    }
}
