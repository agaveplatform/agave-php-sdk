<?php
/**
 * TokenTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client\Model
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 */


namespace Agave\Client;
use Agave\Client\Model\Token;

/**
 * TokenTest Class Doc Comment
 *
 * @category    Class
 * @description Token
 * @package     Agave\Client\Model
 */
class TokenTest extends \PHPUnit_Framework_TestCase
{

    const DEFAULT_TOKEN_ACCESS_TOKEN_VALUE = "accessTokenValue";
    const DEFAULT_TOKEN_REFRESH_TOKEN_VALUE = "refreshTokenValue";
    const DEFAULT_TOKEN_TOKEN_TYPE_VALUE = "tokenTypeValue";

    /**
     * Data provider for token accessToken tests
     * @return array
     */
    public function testPropertyAccessTokenDataProvider()
    {
        $testData = [];

        $testModelKeys = ['accessToken', 'access_token','AGAVE_ACCESS_TOKEN', ];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_TOKEN_ACCESS_TOKEN_VALUE . $testModelKey];
            $testData[] = [$testModelKey, null];
        }

        return $testData;
    }

    /**
     * Test attribute "accessToken"
     *
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyAccessTokenDataProvider
     */
    public function testPropertyAccessToken($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('accessToken', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for token refreshToken tests
     * @return array
     */
    public function testPropertyRefreshTokenDataProvider()
    {
        $testData = [];

        $testModelKeys = ['refreshToken', 'refresh_token','AGAVE_REFRESH_TOKEN', ];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_TOKEN_REFRESH_TOKEN_VALUE . $testModelKey];
            $testData[] = [$testModelKey, null];
        }

        return $testData;
    }

    /**
     * Test attribute "refreshToken"
     *
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyRefreshTokenDataProvider
     */
    public function testPropertyRefreshToken($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('refreshToken', $propertyName, $expectedValue, $expectedValue);
    }

    /**
     * Data provider for token expiresIn tests
     * @return array
     */
    public function testPropertyExpiresInDataProvider()
    {
        $testData = [];

        $testModelKeys = ['expiresIn', 'expiresIn', ];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, 14400, 14400];
            $testData[] = [$testModelKey, 500, 500];
            $testData[] = [$testModelKey, null, 0];
        }

        return $testData;
    }

    /**
     * Test attribute "expiresIn"
     * @dataProvider testPropertyExpiresInDataProvider
     */
    public function testPropertyExpiresIn($propertyName, $testValue, $expectedValue)
    {
        $this->_doPropertyTest('expiresIn', $propertyName, $testValue, $expectedValue);
    }

    /**
     * Data provider for token tokenType tests
     * @return array
     */
    public function testPropertyTokenTypeDataProvider()
    {
        $testData = [];

        $testModelKeys = ['tokenType', 'token_type', ];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, "basic" . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "callback_url"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyTokenTypeDataProvider
     */
    public function testPropertyTokenType($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('tokenType', $propertyName, $expectedValue, $expectedValue);
    }

    /**
     * Data provider for token scope tests
     * @return array
     */
    public function testPropertyScopeDataProvider()
    {
        $testData = [];

        $testModelKeys = ['scope',];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, "some_scope" . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "scope"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyScopeDataProvider
     */
    public function testPropertyDescription($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('scope', $propertyName, $expectedValue, $expectedValue);
    }

    /**
     * Data provider for token createdAt tests
     * @return array
     */
    public function testPropertyCreatedAtDataProvider()
    {
        $testData = [];

        $now = strtotime('now');

        $testModelKeys = ['createdAt','created_at',];

//        foreach ($testModelKeys as $testModelKey) {
//            $testData[] = [$testModelKey, 14400, date('Y-m-d H:i:s', $now), date('Y-m-d H:i:s', $now), false];
//            $testData[] = [$testModelKey, 0, date('Y-m-d H:i:s', $now - 14400), date('Y-m-d H:i:s', $now - 14400), false];
//            $testData[] = [$testModelKey, null, nuxll, date('Y-m-d H:i:s', $now-), date('Y-m-d H:i:s', $now), false];
//            $testData[] = [$testModelKey, 500, 500];
//            $testData[] = [$testModelKey, 0, null];
//        }

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, 14400, date('Y-m-d H:i:s', $now), date('Y-m-d H:i:s', $now), false];
            $testData[] = [$testModelKey, 0, date('Y-m-d H:i:s', $now - 14400), date('Y-m-d H:i:s', $now - 14400), false];
            $testData[] = [$testModelKey, null, date('Y-m-d H:i:s', $now - 28800), date('Y-m-d H:i:s', $now - 28800), false];
            $testData[] = [$testModelKey, 500, date('Y-m-d H:i:s', $now + 500), date('Y-m-d H:i:s', $now + 500), false];
            $testData[] = [$testModelKey, 0, null, null, false];
        }

        return $testData;
    }

    /**
     * Test attribute "createdAt"
     * @param $propertyName
     * @param $expectedValue
     * @throws ApiException
     * @dataProvider testPropertyCreatedAtDataProvider
     */
    public function testPropertyCreatedAt($propertyName, $expiresIn, $testValue, $expectedValue, $shouldThrowException)
    {
        $this->_doTemporalPropertyTest('createdAt', $propertyName, $expiresIn, $testValue, $expectedValue, $shouldThrowException);
    }

    /**
     * Populates an array with default values for a Token object initialization
     * @return array
     */
    private function _getDefaultModelData()
    {
        $now = strtotime('now');

        return [
            'scope' => 'default',
            'accessToken' => self::DEFAULT_TOKEN_ACCESS_TOKEN_VALUE,
            'refreshToken' => self::DEFAULT_TOKEN_REFRESH_TOKEN_VALUE,
            'expiresIn' => 14400,
            'expiresAt' => date('Y-m-d H:i:s', $now + 14400),
            'createdAt' => date('Y-m-d H:i:s', $now),
            'tokenType' => 'bearer',
        ];
    }

    /**
     * Generic test executor for property assignment tests in the constructor.
     *
     * @param string $propertyToBeTested the original namee of the property to be testfed
     * @param string $propertyName the alternate property name to test assignment
     * @param string $testValue the value to assign to the $propertyName key
     * @param string $expectedValue the expected value of $propertyTOBeTested after assignment
     */
    private function _doPropertyTest($propertyToBeTested, $propertyName, $testValue, $expectedValue)
    {
        $testTokenData = $this->_getDefaultModelData();
        unset($testTokenData[$propertyToBeTested]);
        $testTokenData[$propertyName] = $testValue;

        /** @var Token $model */
        $model = new Token($testTokenData);

        $getterName = $model::getters()[$propertyToBeTested];

        $this->assertEquals($expectedValue, $model->$getterName(),
            "Token {$propertyToBeTested} should be set when using the {$propertyName} key in the constructor.");

         $seralizedModel = $model->__toString();

        if ($propertyName !== $model::attributeMap()[$propertyToBeTested] && $propertyName !== $propertyToBeTested) {
            $this->assertArrayNotHasKey($propertyName, json_decode($seralizedModel, true),
                "Serialized token should not have {$propertyName} as a field.");
        }

        // adjust for camel casing used in oauth protocol
        $expectedModelData = [];
        foreach ($this->_getDefaultModelData() as $key => $value) {
            if ($key == $propertyToBeTested) {
                $expectedModelData[$model::attributeMap()[$key]] = $expectedValue;
            }
            else {
                $expectedModelData[$model::attributeMap()[$key]] = $value;
            }
        }

        $this->assertArraySubset($expectedModelData,
            json_decode($seralizedModel, true),
            false,
            "Serialized token data should maintain the same values as the client getters \n" .
            print_r($expectedModelData, true) .
            "\n vs. \n" .
            $seralizedModel);
    }

    /**
     * Generic test executor for temporal property assignment tests in the constructor.
     *
     * @param string $propertyToBeTested the original namee of the property to be testfed
     * @param string $propertyName the alternate property name to test assignment
     * @param integer $expiresIn seconds until the token expires
     * @param string|int|null $testValue the value to assign to the $propertyName key
     * @param int|null $expectedValue the expected value of $propertyTOBeTested after assignment
     * @param boolean $shouldThrowException true if the assignment should throw an exception
     * @throws ApiException
     */
    private function _doTemporalPropertyTest($propertyToBeTested, $propertyName, $expiresIn, $testValue, $expectedValue, $shouldThrowException)
    {
        $testModelData = $this->_getDefaultModelData();
        unset($testModelData[$propertyToBeTested]);
        $testModelData['expiresIn'] = $expiresIn;
        $testModelData[$propertyName] = $testValue;

        try {
            /** @var \Agave\Client\Model\Token $model */
            $model = new Token($testModelData);

            if ($shouldThrowException) {
                $this->fail("Exception should be thrown");
            }

            $getterName = $model::getters()[$propertyToBeTested];

            $this->assertEquals($expectedValue, $model->$getterName(),
                "Token {$propertyToBeTested} should be set when using the {$propertyName} key in the constructor.");

            $seralizedModel = $model->__toString();

            if ($propertyName !== $model::attributeMap()[$propertyToBeTested] && $propertyName !== $propertyToBeTested) {
                $this->assertArrayNotHasKey($propertyName, json_decode($seralizedModel, true),
                    "Serialized token should not have {$propertyName} as a field.");
            }

            // adjust for camel casing used in oauth protocol
            $expectedModelData = [];
            foreach ($this->_getDefaultModelData() as $key => $value) {
                if ($key == $propertyToBeTested) {
                    $expectedModelData[$model::attributeMap()[$key]] = $expectedValue;
                }
                else {
                    $expectedModelData[$model::attributeMap()[$key]] = $value;
                }
            }
            $expectedModelData['expires_in'] = $expiresIn;

            $this->assertArraySubset($expectedModelData,
                json_decode($seralizedModel, true),
                false,
                "Serialized token data should maintain the same values as the client getters \n" .
                print_r($expectedModelData, true) .
                "\n vs. \n" .
                $seralizedModel);
        }
        catch (ApiException $e) {
            if (!$shouldThrowException){
                throw $e;
            }
        }
    }

}
