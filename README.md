# Contacts App

Proyecto final para el curso "Todo sobre la web con PHP" de [Mastermind.ac](https://mastermind.ac) (Antonio Sarosi), realizado por **JUAN BAUTISTA DELORME**.

Se trata de un sistema de gestión de contactos hecho con PHP y MySQL.

## Qué hace el proyecto

Básicamente es una agenda donde cada usuario se tiene que registrar e iniciar sesión para ver sus cosas (los datos son privados por usuario). 
El proyecto incluye todo el CRUD de los contactos, y como reto final del curso, le he añadido también la posibilidad de gestionar múltiples direcciones para cada contacto.

Características principales:
- **Usuarios:** Registro, login, logout.
- **Contactos:** Crear, editar, borrar y listar contactos.
- **Direcciones (NUEVO RETO):**
  - Cada contacto puede tener varias direcciones asociadas.
  - Pantalla para añadir direcciones a un contacto específico.
  - El listado en `home` ahora muestra también las direcciones.
  - Pantalla global de direcciones para ver, editar o eliminar cualquiera de ellas.
- Mensajes flash (verdes/rojos) para avisar cuando las acciones salen bien o dan error.

## Tecnologías

- PHP puro (PDO para la BBDD)
- MySQL
- HTML, CSS, JavaScript básico
- Bootswatch (Darkly) para no complicarme con los estilos.

## Cómo probarlo en tu ordenador

1. Clona o descárgate la carpeta entera.
2. Sube la base de datos:
   - He dejado un archivo llamado `sql/contacts_app_export.sql` que ya incluye la estructura completa (tablas `users`, `contacts` y `addresses`) junto con datos de prueba. Importa este archivo en tu MySQL.
3. Conexión:
   - Si tu MySQL no usa el usuario `root` por defecto (sin contraseña), vas a tener que cambiar los datos en el archivo `database.php`.
4. Levanta el proyecto:
   - Desde la terminal en la raíz del proyecto, ejecuta: `php -S 127.0.0.1:8000`
   - O mételo en la carpeta htdocs si usas XAMPP.
5. Abre `http://localhost:8000` en tu navegador y listo.