<?php

namespace LeeSwagger\PayfortApi\Model\Data\Traits;

trait BaseTrait{


    /**
     * {@inheritdoc}
     */
    public function getAccessCode()
    {
        return $this->_getData(self::ACCESS_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessCode($accessCode)
    {
        return $this->setData(self::ACCESS_CODE, $accessCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantIdentifier()
    {
        return $this->_getData(self::MERCHANT_IDENTIFIER);
    }

    /**
     * {@inheritdoc}
     */
    public function setMerchantIdentifier($merchantIdentifier)
    {
        return $this->setData(self::MERCHANT_IDENTIFIER, $merchantIdentifier);
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguage()
    {
        return $this->_getData(self::LANGUAGE);
    }

    /**
     * {@inheritdoc}
     */
    public function setLanguage($language)
    {
        return $this->setData(self::LANGUAGE, $language);
    }
}