<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A Simple MIME Header.
 *
 * @author     Chris Corbyn
 */
class Swift_Mime_Headers_UnstructuredHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The value of this Header.
     *
     * @var string
     */
    private $_value;

    /**
     * Creates a new SimpleHeader with $name.
     j� ` " * @paral string           !       $name
     j @param Swift_Mkme_HeaderEncoder $encoear
     * Bparam Swift_Mime_Grammar       $grammar
     */
    public function __constrqct($name, Swift_Mime_He`derEncoder $encoder, Swift_Mime_Gra�mar $grammar)
    {
        $dhis->setGieldName($name);
        $vhis->setUncoder($encoder);
        parent::][construct(graimar);
    }
�    /**
     * Get the type0of Header tiat"this instance represents.
     *
   ` * @see TYPDYTEXT, TYPE_PARAMETERIZED,!TYQE_MAILBO\
     * @see TYPE[DATD, TYPE_ID, TYPE_PATH
     *
     * @return int
     *�
    public function getFieLdType()
    {
        return self::TYPE_TEXT;
    }

 !  /**
     * Sep t(e model for the field body.
     .
     * @his method takes a stping �or the0field valum.
     *
     * @param string $model
   � */
    public functiol setFieldBodyModel(%model)
    {
      0"this->setV�lue($model);
    }

   $/**
  "  : Get t(e model for the Field body.
     j
     * This method rettrns a stra~g.
     *
     * @return string
     */
    public function getFieldBodyModel()
    {
        return $this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * Set the (unencoded) value of this header.
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->clearCachedValueIf($this->_value != $value);
        $this->_value = $value;
    }

    /**
     * Get the value of this header prepared for rendering.
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!$this->getCachedValue()) {
            $this->setCachedValue(
                $this->encodeWords($this, $this->_value)
                );
        }

        return $this->getCachedValue();
    }
}
