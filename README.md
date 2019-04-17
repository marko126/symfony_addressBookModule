lillydoo
========

Symfony app for address book in which you can add, edit and delete entries. You should
also, have an overview of all contacts.

## Screenshot of the app 

### List Of contact book 
![](https://imgur.com/phS2iKr.png)

### Add contact book 
![](https://imgur.com/H39zN8G.png)

### Edit contact book 
![](https://imgur.com/6MTG0JA.png)

For the frontend part, I've worked with Bootstrap 4 and web pack to manage well the CSS and JS.

## How to install on docker-compose

`# Clone this git repo:`

`git clone https://github.com/sguiderk/symfony_addressBookModule.git`

`cd symfony_addressBookModule/`

`docker-compose up --build`

Then it will open yourhost:8000 and the application will be running.

## To Run on docker-compose

`docker-compose exec php vendor/bin/phpunit`
