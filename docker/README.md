# Build steps

```
cd ..
```

```
npm i
```

```
npm run build
```

```
docker build -f docker/php-nginx-base.Dockerfile -t php-nginx-base:php8.1.3-fpm-nginx1.20.2-alpine3.15 .
```

```
docker build -f docker/Dockerfile -t laravel:latest .
```

References
- https://adevait.com/laravel/containerizing-laravel-applications-with-docker
