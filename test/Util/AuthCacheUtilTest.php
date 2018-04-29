<?php
/**
 * Created by PhpStorm.
 * User: dooley
 * Date: 4/26/18
 * Time: 5:55 PM
 */

namespace Agave\Client\Util;


use Agave\Client\ApiException;
use Agave\Client\Exceptions\ConfigurationException;

class AuthCacheUtilTest extends \PHPUnit_Framework_TestCase
{

    const DEFAULT_CLIENT_KEY_VALUE = "clientKeyValue";
    const DEFAULT_CLIENT_SECRET_VALUE = "clientSecretValue";
    const DEFAULT_CLIENT_NAME_VALUE = "clientNameValue";
    const DEFAULT_DEV_URL_VALUE = "http://dev.staging.example.com";
    const DEFAULT_BASE_URL_VALUE = "http://api.staging.example.com";

    const DEFAULT_TENANT_ID_VALUE = "dev.staging";
    const DEFAULT_USERNAME_VALUE = "testuser";

    const DEFAULT_TOKEN_ACCESS_TOKEN_VALUE = "accessTokenValue";
    const DEFAULT_TOKEN_REFRESH_TOKEN_VALUE = "refreshTokenValue";
    const DEFAULT_TOKEN_EXPIRES_IN_VALUE = 14400;


    /**
     * Populates an array with default values for a Client object initialization
     * @return array
     */
    public function _getDefaultModelTestData()
    {
        /** @var integer $ts */
        $ts = strtotime('now');

        return [
            'apiKey' => self::DEFAULT_CLIENT_KEY_VALUE,
            'apiSecret' => self::DEFAULT_CLIENT_SECRET_VALUE,
            'clientName' => self::DEFAULT_CLIENT_NAME_VALUE,
            'expiresIn' => self::DEFAULT_TOKEN_EXPIRES_IN_VALUE,
            'expiresAt' => date('Y-m-d H:i:s', $ts + self::DEFAULT_TOKEN_EXPIRES_IN_VALUE),
            'createdAt' => date('Y-m-d H:i:s', $ts),
            'accessToken' => self::DEFAULT_TOKEN_ACCESS_TOKEN_VALUE,
            'refreshToken' => self::DEFAULT_TOKEN_REFRESH_TOKEN_VALUE,
            'username' => self::DEFAULT_USERNAME_VALUE,
            "tenantId" => self::DEFAULT_TENANT_ID_VALUE,
            "baseUrl" => self::DEFAULT_BASE_URL_VALUE,
            "devUrl" => self::DEFAULT_DEV_URL_VALUE,
        ];
    }


    /**
     * Data provider for AuthCacheUtil apiKey tests
     * @return array
     */
    public function testPropertyApiKeyDataProvider()
    {
        $testData = [];

        $testModelKeys = ['apiKey', 'api_key', 'apikey','key','consumerKey','consumer_key','AGAVE_CLIENT_KEY',];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_CLIENT_KEY_VALUE. $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "apiKey"
     *
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyApiKeyDataProvider
     */
    public function testPropertyKey($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('apiKey', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil apiSecret tests
     * @return array
     */
    public function testPropertyApiSecretDataProvider()
    {
        $testData = [];

        $testModelKeys = ['secret', 'consumerSecret', 'apisecret', 'apiSecret','AGAVE_CLIENT_SECRET',];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_CLIENT_SECRET_VALUE . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "apiSecret"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyApiSecretDataProvider
     */
    public function testPropertyApiSecret($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('apiSecret', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil accessToken tests
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
     * Data provider for AuthCacheUtil refreshToken tests
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
     * Data provider for AuthCacheUtil expiresIn tests
     * @return array
     */
    public function testPropertyExpiresInDataProvider()
    {
        $testData = [];

        $testModelKeys = ['expiresIn', 'expiresIn', ];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_TOKEN_EXPIRES_IN_VALUE, self::DEFAULT_TOKEN_EXPIRES_IN_VALUE];
            $testData[] = [$testModelKey, 500, 500];
            $testData[] = [$testModelKey, null, 0];
        }

        return $testData;
    }

    /**
     * Test attribute "expiresIn"
     * @dataProvider testPropertyExpiresInDataProvider
     * @param $propertyName
     * @param $testValue
     * @param $expectedValue
     */
    public function testPropertyExpiresIn($propertyName, $testValue, $expectedValue)
    {
        $this->_doPropertyTest('expiresIn', $propertyName, $testValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil createdAt tests
     * @return array
     */
    public function testPropertyCreatedAtDataProvider()
    {
        $testData = [];

        $now = strtotime('now');

        $testModelKeys = ['createdAt','created_at',];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_TOKEN_EXPIRES_IN_VALUE, date('Y-m-d H:i:s', $now), date('Y-m-d H:i:s', $now), false];
            $testData[] = [$testModelKey, 0, date('Y-m-d H:i:s', $now - self::DEFAULT_TOKEN_EXPIRES_IN_VALUE), date('Y-m-d H:i:s', $now - 14400), false];
            $testData[] = [$testModelKey, null, date('Y-m-d H:i:s', $now - 2*self::DEFAULT_TOKEN_EXPIRES_IN_VALUE), date('Y-m-d H:i:s', $now - 2*self::DEFAULT_TOKEN_EXPIRES_IN_VALUE), false];
            $testData[] = [$testModelKey, 500, date('Y-m-d H:i:s', $now + 500), date('Y-m-d H:i:s', $now + 500), false];
            $testData[] = [$testModelKey, 0, null, null, false];
        }

        return $testData;
    }

    /**
     * Test attribute "createdAt"
     * @param $propertyName
     * @param $expiresIn
     * @param $testValue
     * @param $expectedValue
     * @param $shouldThrowException
     * @throws ApiException
     * @dataProvider testPropertyCreatedAtDataProvider
     */
    public function testPropertyCreatedAt($propertyName, $expiresIn, $testValue, $expectedValue, $shouldThrowException)
    {
        $this->_doTemporalPropertyTest('createdAt', $propertyName, $expiresIn, $testValue, $expectedValue, $shouldThrowException);
    }


    /**
     * Data provider for AuthCacheUtil clientName tests
     * @return array
     */
    public function testPropertyClientNameDataProvider()
    {
        $testData = [];

        $testModelKeys = ['name','clientName','client_name','clientname','AGAVE_CLIENT_NAME'];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_CLIENT_NAME_VALUE . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "clientName"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyClientNameDataProvider
     */
    public function testPropertyClientName($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('clientName', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil username tests
     * @return array
     */
    public function testPropertyUsernameDataProvider()
    {
        $testData = [];

        $testModelKeys = ['username','AGAVE_USERNAME'];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_CLIENT_NAME_VALUE . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "username"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyUsernameDataProvider
     */
    public function testPropertyUsername($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('username', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil tenantId tests
     * @return array
     */
    public function testPropertyTenantIdDataProvider()
    {
        $testData = [];

        $testModelKeys = ['tenantId','tenantid','tenantCode','AGAVE_TENANT'];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_TENANT_ID_VALUE . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "tenantId"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyTenantIdDataProvider
     */
    public function testPropertyTenantId($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('tenantId', $propertyName, $expectedValue, $expectedValue);
    }


    /**
     * Data provider for AuthCacheUtil name tests
     * @return array
     */
    public function testPropertyBaseUrlDataProvider()
    {
        $testData = [];

        $testModelKeys = ['baseUrl','baseurl','base_url','AGAVE_BASE_URL'];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_BASE_URL_VALUE . $testModelKey];
        }

        return $testData;
    }

    /**
     * Test attribute "baseUrl"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyBaseUrlDataProvider
     */
    public function testPropertyBaseUrl($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('baseUrl', $propertyName, $expectedValue, $expectedValue);
    }

    
    /**
     * Data provider for AuthCacheUtil devUrl tests
     * @return array
     */
    public function testPropertyDevUrlDataProvider()
    {
        $testData = [];

        $testModelKeys = ['devUrl','devurl','dev_url','AGAVE_DEV_URL'];

        foreach ($testModelKeys as $testModelKey) {
            $testData[] = [$testModelKey, self::DEFAULT_DEV_URL_VALUE . $testModelKey];
            $testData[] = [$testModelKey, null];
        }

        return $testData;
    }

    /**
     * Test attribute "devUrl"
     * @param $propertyName
     * @param $expectedValue
     *
     * @dataProvider testPropertyDevUrlDataProvider
     */
    public function testPropertyDevUrl($propertyName, $expectedValue)
    {
        $this->_doPropertyTest('devUrl', $propertyName, $expectedValue, $expectedValue);
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
        $testModelData = $this->_getDefaultModelTestData();
        unset($testModelData[$propertyToBeTested]);
        $testModelData[$propertyName] = $testValue;

        /** @var AuthCacheUtil $model */
        $model = new AuthCacheUtil($testModelData);

        $getterName = $model::getters()[$propertyToBeTested];

        $this->assertEquals($expectedValue, $model->$getterName(),
            "AuthCacheUtil {$propertyToBeTested} should be set when using the {$propertyName} key in the constructor.");

        $seralizedModel = $model->__toString();

        if ($propertyName !== $model::attributeMap()[$propertyToBeTested] && $propertyName !== $propertyToBeTested) {
            $this->assertArrayNotHasKey($propertyName, json_decode($seralizedModel, true),
                "Serialized AuthCacheUtil should not have {$propertyName} as a field.");
        }

        // adjust for camel casing used in oauth protocol
        $expectedModelData = [];
        foreach ($this->_getDefaultModelTestData() as $key => $value) {
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
            "Serialized AuthCacheUtil data should maintain the same values as the client getters \n" .
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
        $testModelData = $this->_getDefaultModelTestData();
        unset($testModelData[$propertyToBeTested]);
        $testModelData['expiresIn'] = $expiresIn;
        $testModelData[$propertyName] = $testValue;

//        try {
            /** @var \Agave\Client\Util\AuthCacheUtil $model */
            $model = new AuthCacheUtil($testModelData);

            if ($shouldThrowException) {
                $this->fail("Exception should be thrown");
            }

            $getterName = $model::getters()[$propertyToBeTested];

            $this->assertEquals($expectedValue, $model->$getterName(),
                "AuthCacheUtil {$propertyToBeTested} should be set when using the {$propertyName} key in the constructor.");

            $seralizedModel = $model->__toString();

            if ($propertyName !== $model::attributeMap()[$propertyToBeTested] && $propertyName !== $propertyToBeTested) {
                $this->assertArrayNotHasKey($propertyName, json_decode($seralizedModel, true),
                    "Serialized AuthCacheUtil should not have {$propertyName} as a field.");
            }

            // adjust for camel casing used in oauth protocol
            $expectedModelData = [];
            foreach ($this->_getDefaultModelTestData() as $key => $value) {
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
                "Serialized AuthCacheUtil data should maintain the same values as the client getters \n" .
                print_r($expectedModelData, true) .
                "\n vs. \n" .
                $seralizedModel);
//        }
//        catch (ApiException $e) {
//            if (!$shouldThrowException){
//                throw $e;
//            }
//        }
    }


    public function testGetDefaultAuthCacheDirectoryDataProvider()
    {
        $tempdir = sys_get_temp_dir() . "/" . uniqid();
        return [
            [ null, getenv("HOME") . '/.agave/' ],
            [ "", getenv("HOME") . '/.agave/' ],
            [$tempdir, $tempdir . "/"  ],
            [ $tempdir . "/" , $tempdir . "/" ],
        ];
    }

    /**
     * Tests resolution of default auth cache directory on system and environment
     * @param $environmentVariableValue
     * @param $expectedValue
     * @dataProvider testGetDefaultAuthCacheDirectoryDataProvider
     */
    public function testGetDefaultAuthCacheDirectory($environmentVariableValue, $expectedValue) {

        $backupEnv = getenv("AGAVE_CACHE_DIR");
        try {

            // clear the environment in case it is set
            putenv("AGAVE_CACHE_DIR={$environmentVariableValue}");

            if ($environmentVariableValue) {
                $this->assertEquals($expectedValue, AuthCacheUtil::getDefaultAuthCacheDirectory(),
                    "Value of auth cache should default to the value of AGAVE_CACHE_DIR " .
                    "when present in the environment");
            }
            else {
                $this->assertEquals($expectedValue, AuthCacheUtil::getDefaultAuthCacheDirectory(),
                    "Value of auth cache should default to \$HOME/.agave when not present in environment.");
            }
        }
        finally {
            // restore the enviornment if present
            if (isset($backupEnv)) {
                putenv("AGAVE_CACHE_DIR={$backupEnv}");
            }
            else {
                putenv("AGAVE_CACHE_DIR");
            }
        }
    }

    /**
     * Verifies that a the cache file is written to $HOME/.agave/current if not specified
     * to the AuthCacheUtil or put in the environment.
     */
    public function testWriteUsesDefaultCacheDirIfAuthCachDirAndEnvironmentAreNull()
    {
        $tempDirPath = getenv("HOME") . "/.agave";
        $tempCacheFilePath = $tempDirPath . "/current";
        $backupFilePath = $tempCacheFilePath . ".bak-" . strtotime('now');
        $backupEnv = getenv("AGAVE_CACHE_DIR");
        try {
            // move the existing file if present
            if (file_exists($tempCacheFilePath)) {
                rename($tempCacheFilePath, $backupFilePath);
            }

            // clear the environment in case it is set
            putenv("AGAVE_CACHE_DIR");

            $model = new AuthCacheUtil($this->_getDefaultModelTestData());

            $model->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the default cache file path after writing.");

            $this->assertJsonStringEqualsJsonFile($tempCacheFilePath, $model->__toString(),
                "Cache file should serialize data to the same value as was written to disk.");
        }
        finally {
            // restore the enviornment if present
            if (isset($backupEnv)) {
                putenv("AGAVE_CACHE_DIR={$backupEnv}");
            }

            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }

            // restore the old cache file
            if (file_exists($backupFilePath)) {
                rename($backupFilePath, $tempCacheFilePath);
            }
        }
    }

    /**
     * Verifies that a directory is created if missing when writing the cache file
     */
    public function testWriteUsesEnvironmentVariablesIfAuthCachDirIsNull()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
        $tempCacheFilePath = $tempDirPath . "/current";
        $backupEnv = getenv("AGAVE_CACHE_DIR");
        try {
            putenv("AGAVE_CACHE_DIR=".$tempDirPath);

            $model = new AuthCacheUtil($this->_getDefaultModelTestData());

            $model->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            $this->assertJsonStringEqualsJsonFile($tempCacheFilePath, $model->__toString(),
                "Cache file should serialize data to the same value as was written to disk.");
        }
        finally {
            // restore the enviornment if present
            if (isset($backupEnv)) {
                putenv("AGAVE_CACHE_DIR={$backupEnv}");
            }
            // or delete to cleanup
            else {
                putenv("AGAVE_CACHE_DIR");

            }

            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }
        }
    }

    /**
     * Verifies that pwd is used if the cache directory is empty, but not null
     */
    public function testWriteUsesPWDIfAuthCachDirIsEmpty()
    {
        $tempDirPath = "";
        $tempCacheFilePath = "current";

        try {
            $model = new AuthCacheUtil($this->_getDefaultModelTestData());
            $model->setAuthCacheDir($tempDirPath);

            $model->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            $this->assertJsonStringEqualsJsonFile($tempCacheFilePath, $model->__toString(),
                "Cache file should serialize data to the same value as was written to disk.");
        }
        finally {
            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink(getcwd()."/".$tempCacheFilePath);
            }
        }
    }

    /**
     * Verifies that a directory is created if missing when writing the cache file
     */
    public function testWriteCreatesIfAuthCachDirDoesNotExist()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
        $tempCacheFilePath = $tempDirPath . "/current";

        try {
            $model = new AuthCacheUtil($this->_getDefaultModelTestData());
            $model->setAuthCacheDir($tempDirPath);

            $model->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            $this->assertJsonStringEqualsJsonFile($tempCacheFilePath, $model->__toString(),
                "Cache file should serialize data to the same value as was written to disk.");
        }
        finally {
            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }

            rmdir($tempDirPath);
        }
    }

    /**
     * Data provider for AuthCacheUtil#testFromJSON()  tests
     * @return array
     */
    public function testReadFromJSONDataProvider()
    {
        $emptyModel = new AuthCacheUtil();

        $emptyModelData = $emptyModel->__toString();

        $testData = [
            [ "", $emptyModelData, "Empty string passed to AuthCacheUtil::fromJSON should return an empty model" ],
            [ null, $emptyModelData, "Null value passed to AuthCacheUtil::fromJSON should return an empty model" ],
            [ "This is text", $emptyModelData, "Non-json value passed to AuthCacheUtil::fromJSON should return an empty model" ],
            [ '{"boom":true, "bam": true, "pow": 1}', $emptyModelData, "Invalid json fields passed to AuthCacheUtil::fromJSON should be ignored" ],
        ];


        return $testData;
    }

    /**
     * Tests reading and deserialization of content from a JSON string.
     * @param $testContent
     * @param $expectedContent
     * @param $message
     * @dataProvider testReadFromJSONDataProvider
     */
    public function testReadFromJSON($testContent, $expectedContent, $message)
    {
        $model = AuthCacheUtil::readFromJSON($testContent);

        $this->assertJsonStringEqualsJsonString($expectedContent, $model->__toString(), $message);
    }

//    /**
//     * Tests reading and deserialization of content from disk.
//     */
//    public function testLoad()
//    {
//        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
//        $tempCacheFilePath = $tempDirPath . "/current";
//
//        try {
//            $model = new AuthCacheUtil($this->_getDefaultModelTestData());
//            $model->setAuthCacheDir($tempDirPath);
//
//            $model->write();
//
//            $emptyModel = new AuthCacheUtil();
//
//            $model = AuthCacheUtil::fromJSON($tempDirPath);
//        }
//        catch (ApiException $e) {
//            unlink($path);
//        }
//    }

    /**
     * Tests empty initialization when cache directory is not present
     * @throws ConfigurationException
     */
    public function testReadFromFileReturnsEmptyAuthCacheWhenCacheDirDoesNotExist()
    {
        $emptyModel = new AuthCacheUtil();
        $emptyModelData = $emptyModel->__toString();

        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();

        $testModel = AuthCacheUtil::readFromFile($tempDirPath);

        $this->assertJsonStringEqualsJsonString($emptyModelData, $testModel->__toString(),
            "Cache file should serialize empty auth config when cache directory does not exist.");

        $this->assertEquals($tempDirPath . "/", $testModel->getAuthCacheDir(),
            "Auth cache directory should be set to the loaded path regardless of success.");
    }

    /**
     * Tests empty initialization when cache directory is not present
     * @throws ConfigurationException
     */
    public function testReadFromFileSetDefaultAuthCacheDirWhenMissingPath()
    {
        $testModel = AuthCacheUtil::readFromFile();

        $this->assertEquals(AuthCacheUtil::getDefaultAuthCacheDirectory(), $testModel->getAuthCacheDir(),
            "Auth cache directory should be set to the default path when no cache dir provided.");
    }

    /**
     * Tests empty initialization when cache directory is not present
     * @throws ConfigurationException
     */
    public function testReadFromFileSetDefaultAuthCacheDirWhenNullPath()
    {
        $testModel = AuthCacheUtil::readFromFile(null);

        $this->assertEquals(AuthCacheUtil::getDefaultAuthCacheDirectory(), $testModel->getAuthCacheDir(),
            "Auth cache directory should be set to the default path when no cache dir provided.");
    }

    /**
     * Tests empty initialization when cache file is not present
     * @throws ConfigurationException
     */
    public function testReadFromFileReturnsEmptyAuthCacheWhenCacheFileDoesNotExist()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid() . "/";
        $tempCacheFilePath = $tempDirPath . "current";

        try {
            $emptyModel = new AuthCacheUtil();
            $emptyModelData = $emptyModel->__toString();

            mkdir($tempDirPath, 755, true);

            $testModel = AuthCacheUtil::readFromFile($tempCacheFilePath);

            $this->assertJsonStringEqualsJsonString($emptyModelData, $testModel->__toString(),
                "Cache file should serialize empty auth config when cache file does not exist.");

            $this->assertEquals($tempDirPath, $testModel->getAuthCacheDir(),
                "Auth cache directory should be set to the loaded path regardless of success.");
        }
        finally {
            // delete the cache dir
            rmdir($tempDirPath);
        }
    }

    /**
     * Tests empty initialization when user-supplied cache directory exists with a valid cache file
     * @throws ConfigurationException
     */
    public function testReadFromFileReturnsLoadsDataWhenConfigFileExistsInPath()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
        $tempCacheFilePath = $tempDirPath . "/current";

        try {
            $setModel = new AuthCacheUtil($this->_getDefaultModelTestData());
            $setModel->setAuthCacheDir($tempDirPath);

            $setModel->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            $model = AuthCacheUtil::readFromFile($tempDirPath);

            $this->assertJsonStringEqualsJsonString($setModel->__toString(), $model->__toString(),
                "Auth cache util should deserialize data to the same value as the original cache file.");


            $this->assertJsonStringEqualsJsonFile($tempCacheFilePath, $model->__toString(),
                "Cache file should serialize data to the same value as was written to disk.");
        }
        finally {
            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }

            rmdir($tempDirPath);
        }
    }

    /**
     * Tests empty initialization when user-supplied cache directory exists with a valid cache file
     * @throws ConfigurationException
     * @expectedException \Agave\Client\Exceptions\ConfigurationException
     */
    public function testReadFromFileThrowsExceptionWhenConfigPathIsFileNotNamedCurrent()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
        $tempCacheFilePath = $tempDirPath . "/current";
        $renamedCacheFilePath = $tempDirPath . "/myCacheFileName";
        try {
            $setModel = new AuthCacheUtil($this->_getDefaultModelTestData());
            $setModel->setAuthCacheDir($tempDirPath);

            $setModel->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            rename($tempCacheFilePath, $renamedCacheFilePath);

            AuthCacheUtil::readFromFile($renamedCacheFilePath);

            $this->fail("Exception should be thrown when a path is given to a file not named 'current'");
        }
        finally {
            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }

            // delete the written cache file
            if (file_exists($renamedCacheFilePath)) {
                unlink($renamedCacheFilePath);
            }

            rmdir($tempDirPath);
        }
    }

    /**
     * Tests empty initialization when user-supplied cache directory exists with a valid cache file
     */
    public function testReadFromFileConfigPathIsFileNamedCurrent()
    {
        $tempDirPath = sys_get_temp_dir() . "/" . uniqid();
        $tempCacheFilePath = $tempDirPath . "/current";
        try {
            $setModel = new AuthCacheUtil($this->_getDefaultModelTestData());
            $setModel->setAuthCacheDir($tempDirPath);

            $setModel->write();

            $this->assertFileExists($tempCacheFilePath,
                "Cache file should existing in the newly created cache file path after writing.");

            $model = AuthCacheUtil::readFromFile($tempCacheFilePath);

            $this->assertJsonStringEqualsJsonString($setModel->__toString(), $model->__toString(),
                "Deserialized cache file values should be the same as the initial data.");
        }
        catch (ConfigurationException $e) {
            // should throw a config exception for the misnamed file
        }
        finally {
            // delete the written cache file
            if (file_exists($tempCacheFilePath)) {
                unlink($tempCacheFilePath);
            }

            rmdir($tempDirPath);
        }
    }


}
