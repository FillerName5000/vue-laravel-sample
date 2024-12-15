# Imd-c

Imd-c is an original movie database.

## Simple-app

This contains a more basic sample Vue app.

## Backend

Launching the api can be done by cloning the "api" folder and implementing in Laragon or whatever similar program you use. If you use laragon, make sure the api folder is in laragon's "www" folder. 

For laragon, the following commands must be run from its terminal. PS, Bash,... won't work.

Then running: 

    composer install
    php artisan key:generate 
    php artisan migrate # create the db & tables. If you get query errors it's probably this
    php artisan db:seed # populate the tables
    php artisan jwt:secret

Data sources, the csv's, should be available in storage/datasets.

Data is hosted on a local sqlite db, add the absolute link to the .env.

## Frontend

Launching the vue app can be done by cloning the app folder, then running:

    npm install
    npm run dev

The current configuration assumes (for a windows & laragon environment) that the backend folder will be called "api". 

Laragon prefers to host local sites on [folderName].test .

Also add "127.0.0.1 app.api.test" to hosts file. 

Communication is over https so you will need to trust the server's (api.test) certificate.
