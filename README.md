# API Documentation

<br >
 
```http
POST /api/create_user
```
- Request
```javascript
{
  "email"    : string,
  "password" : string,
  "name"     : string,
  "no_telp"  : string
}
```
- Response
  
```javascript
{
  "success"  : bool
}
```
<br >

```http
POST /api/login_user
```

-   Request

```javascript
{
  "email"    : string,
  "password" : string,
}
```

-   Response

```javascript
{
  "success" : bool,
    "data"  : {
        "token"     : string,
        "user_type" : string
    }
}
```
