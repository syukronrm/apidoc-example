# API Plan

```
Base URL: https://example.tubestream.com
Headers:
   Content-Type: application/json
   Authorization: Bearer <token>
```

## User

### Create a user
```
POST /api/users
PAYLOAD
{
    "email": "johndoe@example.com",
    "name": "John Doe"
}

RESPONSE
HTTP/1.1 200
{
    "id": "bc780f99-e004-4be3-a2dc-33658ac2f7cc",
    "email": "johndoe@example.com",
    "name": "John Doe"
}
```

### Get users
```
GET /api/users?with_company=1

RESPONSE
HTTP/1.1 200
{
    "total": 2,
    "data": [
        {
            "id": "bc780f99-e004-4be3-a2dc-33658ac2f7cc",
            "email": "johndoe@example.com",
            "name": "John Doe"
        },
        {
            "id": "6f5a32a2-cba2-4f1a-b43f-5c12c4b94dbf",
            "email": "dave@example.com",
            "name": "Dave"
        }
    ]
}
```

## Company
### Get a company
```
GET /api/company/:id

RESPONSE
HTTP/1.1 200
{
    "id": "a866e8cc-8131-491b-a672-286d49368d67",
    "name": "Shell Co. Ltd",
    "location": "Denver, CO"
}
```

## Common Error Responses:
### 401 Unauthorized
```
HTTP/1.1 401 Unauthorized
{
   "type": "https://example.net/auth-error",
   "title": "Invalid authorization"
}
```

### 400 Bad Request
```
HTTP/1.1 401 Bad Request
{
    "type": "https://example.net/validation-error",
    "title": "Your request parameters didn't validate.",
    "invalid-params": [
        {
            "name": "age",
            "reason": "must be a positive integer"
        },
        {
            "name": "color",
            "reason": "must be 'green', 'red' or 'blue'"
        }
    ]
}
```

# Meta

Langkah-langkah:

1. Definisikan `apidoc.json`.
2. Buat spesifikasinya

    Header dan Common Error ada di `_apidoc.js`.

    Per-endpoint API ada di `UserController.php` dan `CompanyController.php`.

3. Jalankan apidoc, exclude `/vendor` dan `/apidoc`, output-kan di `/apidoc`.

    ```
    apidoc -e ./vendor -e ./apidoc -o apidoc
    ```
