# OpenAPI\Server\Api\UserApiInterface

All URIs are relative to */api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UserApiInterface.md#createUser) | **POST** /user | Create user
[**createUsersWithListInput**](UserApiInterface.md#createUsersWithListInput) | **POST** /user/createWithList | Creates list of users with given input array
[**deleteUser**](UserApiInterface.md#deleteUser) | **DELETE** /user/{username} | Delete user
[**getUserByName**](UserApiInterface.md#getUserByName) | **GET** /user/{username} | Get user by user name
[**loginUser**](UserApiInterface.md#loginUser) | **GET** /user/login | Logs user into the system
[**logoutUser**](UserApiInterface.md#logoutUser) | **GET** /user/logout | Logs out current logged in user session
[**updateUser**](UserApiInterface.md#updateUser) | **PUT** /user/{username} | Update user


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\UserApi:
        tags:
            - { name: "open_api_server.api", api: "user" }
    # ...
```

## **createUser**
> OpenAPI\Server\Model\User createUser($user)

Create user

This can only be done by the logged in user.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#createUser
     */
    public function createUser(?User $user, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**OpenAPI\Server\Model\User**](../Model/User.md)| Created user object | [optional]

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createUsersWithListInput**
> OpenAPI\Server\Model\User createUsersWithListInput($user)

Creates list of users with given input array

Creates list of users with given input array

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#createUsersWithListInput
     */
    public function createUsersWithListInput(?array $user, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**OpenAPI\Server\Model\User**](../Model/User.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteUser**
> deleteUser($username)

Delete user

This can only be done by the logged in user.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#deleteUser
     */
    public function deleteUser(string $username, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The name that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getUserByName**
> OpenAPI\Server\Model\User getUserByName($username)

Get user by user name



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#getUserByName
     */
    public function getUserByName(string $username, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The name that needs to be fetched. Use user1 for testing. |

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **loginUser**
> string loginUser($username, $password)

Logs user into the system



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#loginUser
     */
    public function loginUser(?string $username, ?string $password, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The user name for login | [optional]
 **password** | **string**| The password for login in clear text | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **logoutUser**
> logoutUser()

Logs out current logged in user session



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#logoutUser
     */
    public function logoutUser(int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateUser**
> updateUser($username, $user)

Update user

This can only be done by the logged in user.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#updateUser
     */
    public function updateUser(string $username, ?User $user, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| name that needs to be updated |
 **user** | [**OpenAPI\Server\Model\User**](../Model/User.md)| Update an existent user in the store | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

