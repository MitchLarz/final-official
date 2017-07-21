# API

## Requests

### **DELETE** - /chatrooms/cs3620/darkmist

#### Description
Leave an existing chatrooms on the chat web-service

#### CURL

```sh
curl -X DELETE "http://localhost:80/chatrooms/cs3620/darkmist" \
    -H "Chat-Client-Token: a380822e-2709-419e-883a-a73fc80368b3" \
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


