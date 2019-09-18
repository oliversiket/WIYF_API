# WIYF_API

## Follow these instructions to get it all setup and running

First you need to clone our repository:

```
git clone git@github.com:oliversiket/WIYF_API.git
```

Change directory to the project folder

```
cd WIYF_API/
```

Install Composer:

```
composer install
```

Create Homestead:

```
vendor/bin/homestead make
```

Rename your env.example file:
```
mv .env.example .env
```
Edit your .env file:
```
DB_CONNECTION = mysql
DB_HOST = 127.0.0.1
DB_PORT = 3306
DB_DATABASE = homestead
DB_USERNAME = homestead
DB_PASSWORD = secret
```
---
### Make sure you edit your Homestead.yaml file too and change the memory from 2048mb to 512mb
---

Now you can fire up your virtual machine:

```
vagrant up
```
After installation - SSH into your virtual box:
```
vagrant ssh
```
Change directory:
```
cd code
```

Use artisan to generate a key:
```
artisan key:generate
```
Now you can create your database structure:
```
artisan migrate
```
Populate your database:
```
artisan db:seed
```