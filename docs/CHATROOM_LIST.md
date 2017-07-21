# API

## Requests

### **GET** - /chatrooms

#### Description
List all existing chatrooms on the chat web-service

#### CURL

```sh
curl -X GET "http://localhost:80/chatrooms" \
    -H "Chat-Client-Token: a380822e-2709-419e-883a-a73fc80368b3" \
    -H "Accept: application/json" \
    -H "Content-Type: text/plain"
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
- **Accept** should respect the following schema:

```
{
  "type": "string",
  "enum": [
    "application/json"
  ],
  "default": "application/json"
}
```
- **Content-Type** should respect the following schema:

```
{
  "type": "string",
  "enum": [
    "text/plain"
  ],
  "default": "text/plain"
}
```

## References


