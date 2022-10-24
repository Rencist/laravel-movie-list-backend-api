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
GET /api/get_movies
```

-   Request Params

```javascript
{
  "page"     : int,
  "per_page" : int,
}
```

-   Response

```javascript
{
    "data"  : {
        "id"           : uuid,
        "poster_link"  : string,
        "series_title" : string,
        "overview"     : string
    }
}
```

<br >

```http
GET /api/detail_movie
```

-   Request Params

```javascript
{
  "id"     : uuid,
}
```

-   Response

```javascript
{
    "data"  : {
        "id"            : uuid,
        "poster_link"   : string,
        "series_title"  : string,
        "released_year" : string,
        "runtime"       : string,
        "genre"         : string,
        "imdb_rating"   : string,
        "overview"      : string,
        "director"      : string,
        "star1"         : string,
        "star2"         : string,
        "star3"         : string
    }
}
```
