# API

## Requests

### **POST** - /chatrooms/cs3620

#### Description
Join an existing chatrooms on the chat web-service

#### CURL

```sh
curl -X POST "http://localhost:80/chatrooms/cs3620" \
    -H "Chat-Client-Token: a380822e-2709-419e-883a-a73fc80368b3" \
    -H "Content-Type: application/json" \
    --data-raw "$body"
```

#### Header Parameters

- **Chat-Client-Token** should respect the following schema:

```
{
  "type": "string",
  "enum": [
    "a380822e-2709-419e-883a-a73fc80368b3"
  ],
  "default": "a380822e-2709-419e-883a-a73fc80368b3"
}
```
- **Content-Type** should respect the following schema:

```
{
  "type": "string",
  "enum": [
    "application/json"
  ],
  "default": "application/json"
}
```

#### Body Parameters

- **body** should respect the following schema:

```
{
  "type": "string",
  "default": "{\n  \"email\": \"mitchlarz@gmail.com\",\n  \"alias\": \"gotcha!\"\n}"
}
```

## References

#### Example Body Parameters

```
{
  "email": "mitchlarz@gmail.com",
  "alias": "gotcha!"
}
```
