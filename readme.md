# Getting Started with Doctrine

This is only a basic startup project structure to create to aim people start to paly with Doctrine. Doctrine entities and codes are from (Getting Started with Doctrine)[http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html]
I've create a sample structure and add some codes. This project contains some advantages and features of PHP 7.


## Installation
After cloning the repository, run composer install

```bash

composer install

```

Rename .env.example file to .env . Open and update with your database settings.

To load environment settings, I've used (phpdotenv)[https://github.com/vlucas/phpdotenv]


## Entities
Create your first database table from Product entity located in entities folder.


```bash

vendor/bin/doctrine orm:schema-tool:create

```
