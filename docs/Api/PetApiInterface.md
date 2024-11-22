# OpenAPI\Server\Api\PetApiInterface

All URIs are relative to */api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPet**](PetApiInterface.md#addPet) | **POST** /pet | Add a new pet to the store
[**deletePet**](PetApiInterface.md#deletePet) | **DELETE** /pet/{petId} | Deletes a pet
[**findPetsByStatus**](PetApiInterface.md#findPetsByStatus) | **GET** /pet/findByStatus | Finds Pets by status
[**findPetsByTags**](PetApiInterface.md#findPetsByTags) | **GET** /pet/findByTags | Finds Pets by tags
[**getPetById**](PetApiInterface.md#getPetById) | **GET** /pet/{petId} | Find pet by ID
[**updatePet**](PetApiInterface.md#updatePet) | **PUT** /pet | Update an existing pet
[**updatePetWithForm**](PetApiInterface.md#updatePetWithForm) | **POST** /pet/{petId} | Updates a pet in the store with form data
[**uploadFile**](PetApiInterface.md#uploadFile) | **POST** /pet/{petId}/uploadImage | uploads an image


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\PetApi:
        tags:
            - { name: "open_api_server.api", api: "pet" }
    # ...
```

## **addPet**
> OpenAPI\Server\Model\Pet addPet($pet)

Add a new pet to the store

Add a new pet to the store

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#addPet
     */
    public function addPet(Pet $pet, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet** | [**OpenAPI\Server\Model\Pet**](../Model/Pet.md)| Create a new pet in the store |

### Return type

[**OpenAPI\Server\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deletePet**
> deletePet($petId, $apiKey)

Deletes a pet



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#deletePet
     */
    public function deletePet(int $petId, ?string $apiKey, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| Pet id to delete |
 **apiKey** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **findPetsByStatus**
> OpenAPI\Server\Model\Pet findPetsByStatus($status)

Finds Pets by status

Multiple status values can be provided with comma separated strings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#findPetsByStatus
     */
    public function findPetsByStatus(string $status, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status values that need to be considered for filter | [optional] [default to &#39;available&#39;]

### Return type

[**OpenAPI\Server\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **findPetsByTags**
> OpenAPI\Server\Model\Pet findPetsByTags($tags)

Finds Pets by tags

Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#findPetsByTags
     */
    public function findPetsByTags(?array $tags, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**string**](../Model/string.md)| Tags to filter by | [optional]

### Return type

[**OpenAPI\Server\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPetById**
> OpenAPI\Server\Model\Pet getPetById($petId)

Find pet by ID

Returns a single pet

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#getPetById
     */
    public function getPetById(int $petId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet to return |

### Return type

[**OpenAPI\Server\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updatePet**
> OpenAPI\Server\Model\Pet updatePet($pet)

Update an existing pet

Update an existing pet by Id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#updatePet
     */
    public function updatePet(Pet $pet, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet** | [**OpenAPI\Server\Model\Pet**](../Model/Pet.md)| Update an existent pet in the store |

### Return type

[**OpenAPI\Server\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updatePetWithForm**
> updatePetWithForm($petId, $name, $status)

Updates a pet in the store with form data



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#updatePetWithForm
     */
    public function updatePetWithForm(int $petId, ?string $name, ?string $status, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet that needs to be updated |
 **name** | **string**| Name of pet that needs to be updated | [optional]
 **status** | **string**| Status of pet that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **uploadFile**
> OpenAPI\Server\Model\ApiResponse uploadFile($petId, $additionalMetadata, $body)

uploads an image



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\PetApiInterface;

class PetApi implements PetApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: petstore_auth
     */
    public function setpetstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of PetApiInterface#uploadFile
     */
    public function uploadFile(int $petId, ?string $additionalMetadata, ?UploadedFile $body, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet to update |
 **additionalMetadata** | **string**| Additional Metadata | [optional]
 **body** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

