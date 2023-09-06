<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="80">
<img src="https://www.ovhcloud.com/sites/default/files/styles/text_media_horizontal/public/2021-09/ECX-1909_Hero_PostgreSQL_600x400%402x.png" width="120">

# PHP | PostgreSQL
## 👉 Deploy
✅ Clone Repository
```bash
git clone https://github.com/ezynook/php-postgresql.git
```
✅ Change path to project
```bash
cd php-postgresql
```
✅ Start container
```bash
docker-compose up -d --build
```
✅ Access on Browser
```javascript
http://localhost <- Frontend
http://localhost:8080 <- Database Management
```
Check Services ```Running```
```bash
docker ps
```
```bash
9311d913c3f6   php-pgsql-web "docker-php-entrypoi…"   7 seconds ago   0.0.0.0:80->80/tcp     web
de10144285ca   postgres      "docker-entrypoint.s…"   7 seconds ago   0.0.0.0:5432->5432/tcp php-pgsql-pgsql-1
d34fecaf786a   adminer       "entrypoint.sh php -…"   7 seconds ago   0.0.0.0:8080->8080/tcp hp-pgsql-adminer-1
```

---

Author: ```Pasit Y.```