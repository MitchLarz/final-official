# API

## Requests

### **POST** - /messages/cs3620

#### Description
Send a message to a joined existing chatrooms on the chat web-service

#### CURL

```sh
curl -X POST "http://localhost:80/messages/cs3620" \
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
  "default": "{\n  \"message\": \"Maxime sit autem laboriosam cumque veritatis omnis qui alias. Aut explicabo beatae optio dolores sunt hic. Sunt quis aut et exercitationem et.Eligendi velit consectetur aliquam quaerat officia. Asperiores corrupti perspiciatis qui voluptates aut. Sit dolor et est maiores suscipit nulla similique ut. Doloremque excepturi sunt ipsum nesciunt quasi sapiente iste. Non et repellendus at eum modi asperiores a iusto. Qui quas tenetur quia ea sint labore et.Doloribus deserunt aut eaque labore rerum. Quod sit sint fuga ipsa et eius ut facere. Voluptas rerum et perspiciatis. Ea est doloremque facere ratione.\"\n}"
}
```

## References


