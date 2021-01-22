# MiniWhatsaapp-CH-L

# PrySeguridades
***
Proyecto de encriptación y desencriptación Seguridades Informáticas
****
Para el desarrollo del proyecto se utilizo Laragon, para poder utilizar el Framework de Larave, tambien es necesario tener instalado nodejs

## Para hacer correr el proyecto
#### 1. Clonar el proyecto
git clone https://github.com/mxchacha/PrySeguridades.git

#### 2. Entrar en el proyecto
cd Messenger-App-VueJS-and-Laravel

#### 3. Crear el archivo .env 
cp .env.example .env

#### 4. Instalar las dependencias de  composer 
composer update

#### 5. Instalar todas las dependencia para que funcione el proyecto
npm install

#### 6. Generar un KEY para la aplicacion 
php artisan key:generate

#### 7. Crer un base de datos local en MySQL
##### mysql -u root

##### > create database chat_db;
##### > exit;

#### 8. Agregue la configuración de conexión de la base de datos .env file
##### DB_CONNECTION=mysql
##### DB_DATABASE=chat_db
##### DB_USERNAME=root
##### DB_PASSWORD=

#### 9. ejecutar los archivos de migración para generar el esquema
php artisan migrate

#### 10. Visitar https://pusher.com y crear un free app y copiar los dato que proporciona pusher dentro del archivo .env file
##### PUSHER_APP_ID=your_pusher_app_id
##### PUSHER_APP_KEY=your_pusher_app_key
##### PUSHER_APP_SECRET=your_pusher_app_secret
##### PUSHER_APP_CLUSTER=your_pusher_cluster


#### 11. Cambiar BROADCAST_DRIVER dentro del archivo .env poner  pusher
BROADCAST_DRIVER=pusher

#### 12. Enviar los datos de usuarios y mensajes a la DB
php artisan db:seed

#### 13. Finalmente correr el proyecto
npm run watch



## Posibles errores al compilar
Los siguientes comando se deben instalar  en casode que no funcione correctamente la aplicacion debido a las diferentes versiones de Laravel.
##### npm install cross-env-no-bin-links
##### npm i laravel-mix
##### npm i vue-template-compiler@latest --save
##### npm i vue -server-renderer@latest --save

Dentro del archivo package.json en el apartado de devDependencies agregar o sustuir las siguientes lineas
##### "vue": "^2.6.12",
##### "vue-template-compiler": "^2.6.12"

Posteriormente ejecutar 
##### npm install
Correr nuevamente el proyecto
##### npm run watch

