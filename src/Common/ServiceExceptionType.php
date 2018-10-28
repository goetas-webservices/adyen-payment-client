<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing ServiceExceptionType
 *
 *
 * XSD Type: ServiceException
 */
class ServiceExceptionType
{

    /**
     * @property string $error
     */
    private $error = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as error
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string $error
     * @return self
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

