## Start the stack with docker compose

```bash
$ ./run.sh
```

## Stop the stack with docker compose

```bash
$ ./stop.sh
```

### PHP script

Get with cache
```text
http://localhost:8081/image-1.png
```

Delete cache and get without cache
```text
http://localhost:8081/image-1.png?nocache=true
```