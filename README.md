# grillkylling.nu

```sh
docker compose up -d
# Start the local web server in the background. Use `symfony local:server:stop` to stop it.
symfony local:server:start --daemon
```

## Development

### Coding standards

```sh
docker run --volume ${PWD}:/app --workdir /app node:16 yarn install
docker run --volume ${PWD}:/app --workdir /app node:16 yarn coding-standards-check
```

```sh
docker run --volume ${PWD}:/app --workdir /app node:16 yarn coding-standards-apply
```
