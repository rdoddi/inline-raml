<?php

/**
 * @\raml\annotations\Title(title="Karmap Core API")
 * @\raml\annotations\Version(version="v1")
 * @\raml\annotations\BaseUri(baseUri="https://api.core.karmap.com/{version}")
 * @\raml\annotations\MediaType(mediaType="application/json")
 * @\raml\annotations\Protocol(protocol="HTTPS")
 * @\raml\annotations\SecurityScheme(name="basic", type="Basic Authentication")
 */

/**
 * @\raml\annotations\Title(title="B CLASS LEVEL")
 */
class AClassB {
    #region member
    /**
     * @\raml\annotations\Title(title="B MEMBER LEVEL 1")
     */
    private $aMember1;

    /**
     * @\raml\annotations\Title(title="B MEMBER LEVEL 2")
     */
    private $aMember2;
    #endregion

    #region constructor
    #endregion

    #region methods
    /**
     * @\raml\annotations\Title(title="B METHOD LEVEL 1")
     */
    public function aMethod1() {

    }

    /**
     * @\raml\annotations\Title(title="B METHOD LEVEL 2")
     */
    public function aMethod2() {

    }
    #endregion

    #region properties
    /**
     * @\raml\annotations\Title(title="B PROPERTY LEVEL 1 (getter)")
     */
    public function getAMember1() {
        return $this->aMember1;
    }

    /**
     * @\raml\annotations\Title(title="B PROPERTY LEVEL 1 (setter)")
     */
    public function setAMember1($value = '') {
        $this->aMember1 = $value;
    }

    /**
     * @\raml\annotations\Title(title="B PROPERTY LEVEL 2 (getter)")
     */
    public function getAMember2() {
        return $this->aMember2;
    }

    /**
     * @\raml\annotations\Title(title="B PROPERTY LEVEL 2 (setter)")
     */
    public function setAMember2($value = '') {
        $this->aMember2 = $value;
    }
    #endregion
}
