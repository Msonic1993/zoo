
# Zoo Application

Zoo Application is an application for managing animals in a zoo. It allows you to add various types of animals to the zoo, feed them, and take care of them.

## Requirements

To run the application, you need:
```bash
- PHP 8.1 or higher
- Composer
```
## Installation
1. Clone the repository:
```bash
git clone https://github.com/Msonic1993/zoo.git
```
2. Navigate to the project directory:
```bash
cd zoo
```
3. Install dependencies using Composer on Docker container

```bash
docker-compose up -d
```

```bash
docker exec zoo_php_1 composer install
```
4. Run the application:

```bash
docker exec zoo_php_1 php index.php
```