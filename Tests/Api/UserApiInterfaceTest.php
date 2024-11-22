<?php
/**
 * UserApiInterfaceTest
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Swagger Petstore - OpenAPI 3.0
 *
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [http://swagger.io](http://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 *
 * The version of the OpenAPI document: 1.0.19
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * UserApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Api\UserApiInterface
 */
class UserApiInterfaceTest extends WebTestCase
{
    private static ?KernelBrowser $client = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        if (null === self::$client) {
            self::$client = static::createClient();
        }
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        static::ensureKernelShutdown();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createUser
     *
     * Create user.
     *
     */
    public function testCreateUser(): void
    {
        $client = self::$client;

        $path = '/user';

        $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
        $this->markTestSkipped('Test for createUser not implemented');
    }

    /**
     * Test case for createUsersWithListInput
     *
     * Creates list of users with given input array.
     *
     */
    public function testCreateUsersWithListInput(): void
    {
        $client = self::$client;

        $path = '/user/createWithList';

        $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
        $this->markTestSkipped('Test for createUsersWithListInput not implemented');
    }

    /**
     * Test case for deleteUser
     *
     * Delete user.
     *
     */
    public function testDeleteUser(): void
    {
        $client = self::$client;

        $path = '/user/{username}';
        $pattern = '{username}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
        $this->markTestSkipped('Test for deleteUser not implemented');
    }

    /**
     * Test case for getUserByName
     *
     * Get user by user name.
     *
     */
    public function testGetUserByName(): void
    {
        $client = self::$client;

        $path = '/user/{username}';
        $pattern = '{username}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for getUserByName not implemented');
    }

    /**
     * Test case for loginUser
     *
     * Logs user into the system.
     *
     */
    public function testLoginUser(): void
    {
        $client = self::$client;

        $path = '/user/login';

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for loginUser not implemented');
    }

    /**
     * Test case for logoutUser
     *
     * Logs out current logged in user session.
     *
     */
    public function testLogoutUser(): void
    {
        $client = self::$client;

        $path = '/user/logout';

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for logoutUser not implemented');
    }

    /**
     * Test case for updateUser
     *
     * Update user.
     *
     */
    public function testUpdateUser(): void
    {
        $client = self::$client;

        $path = '/user/{username}';
        $pattern = '{username}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
        $this->markTestSkipped('Test for updateUser not implemented');
    }

    /**
     * @param string $regexp
     * @return mixed
     */
    protected function genTestData(string $regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast);
    }
}
