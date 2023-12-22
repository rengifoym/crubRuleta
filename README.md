# crubRuleta
Requisitos:

Versión de PHP mayor o igual a la 7.5.5 
Tener instalado composer en tu equipo: https://getcomposer.org/
• En Windows puedes descargar el programa composer desde la página oficial: https://getcomposer.org/Composer-Setup.exe

• Linux

- Debian: sudo get install composer. - Ubuntu: sudo apt-get install composer. - Arch Linux: sudo pacman -S composer. - Fedora: sudo dnf install composer
• En Mac puedes instalar composer con el siguiente comando

- Mac: brew install composer 3. Tener instalado git: https://gitforwindows.org/
• En Windows puedes descargar el programa git desde la página oficial: https://git-scm.com/

• Linux:

- Debian: sudo get install git.

- Ubuntu: sudo apt-get install git.

- Arch Linux: sudo pacman -S git.

- Fedora: sudo yum install git.

• En Mac puedes descargar el programa git desde la página oficial: https://git-scm.com/download/mac

4. Tener instalado un servidor local:
• XAMPP: https://www.apachefriends.org/es/index.html (Todas plataformas).

• WampServer: https://www.wampserver.com/en/ (Solo Windows).

• Laragon: https://laragon.org/download/index.html (Solo windows).

Listo ya podrás instalar este proyecto. **Instalación de proyecto correctamente:** 1. Descarga o clónalo el proyecto:
• git clone git://github.com/driosoft-pro/Ruleta_Phpt

2. Ejecuta el comando:
• composer install

3. para copiar el archivo .env.example y pegarlo con el nombre. env. ejecuta siguiente comando:
• cp .env.example .env

• copy .env.example .env (Solo windows)

4. Debes crear una nueva llave para proyecto ejecuta el siguiente comando:
• php artisan key:generate

5. Configura la base de datos modificando el archivo .env DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=la_ruleta DB_USERNAME=root DB_PASSWORD= 6. Para efectuar los cambios previamente realizados ejecuta el siguiente comando
• Crea una base de datos con el siguiente nombre: ruleta

• php artisan migrate

7. Añadir dependencias de npm con el siguiente comando
• composer require laravel/ui

• php artisan ui bootstrap

• npm install && npm run dev

8. Navega desde una consola hasta la carpeta del proyecto (No importa el sistema operativo) y ejecuta el siguiente comando.
• php artisan serve
