# Contacts App

Un sistema simple de gestión de contactos construido con **PHP** y **MySQL**. 

Este proyecto ha sido creado como parte del plan de estudios de [Mastermind.ac](https://mastermind.ac) ("Todo sobre la web con PHP" por Antonio Sarosi) por **JUAN BAUTISTA DELORME**.

## 🚀 Características

- **Autenticación de usuarios:** Registro, inicio de sesión (Login) y cierre de sesión (Logout).
- **Gestión de contactos (CRUD):** 
  - Añadir nuevos contactos.
  - Ver lista de contactos guardados.
  - Editar información de un contacto existente.
  - Eliminar contactos.
- **Privacidad:** Cada usuario solo puede ver y gestionar sus propios contactos.
- **Alertas y Notificaciones:** Mensajes "flash" al realizar acciones (añadir, editar, borrar).

## 🛠️ Tecnologías utilizadas

- **Backend:** PHP 8+
- **Base de Datos:** MySQL (conexión mediante PDO)
- **Frontend:** HTML5, CSS3, JavaScript
- **Estilos / Framework UI:** [Bootswatch Darkly](https://bootswatch.com/darkly/) (basado en Bootstrap 5)

## ⚙️ Configuración e Instalación

Para ejecutar este proyecto en tu entorno local (localhost), sigue estos pasos:

1. **Clonar o descargar el proyecto** en tu entorno local.
2. **Configurar la base de datos:**
   - Asegúrate de tener tu servidor MySQL encendido (mediante XAMPP, MAMP o nativo).
   - Ejecuta el script provisto en `sql/setup.sql` para crear la base de datos `contacts_app` y las tablas necesarias (`users` y `contacts`).
3. **Configurar la conexión:**
   - Si tu configuración de base de datos local no usa el usuario `root` sin contraseña, ajusta las credenciales en el archivo `database.php`.
4. **Iniciar el servidor web:**
   - Si utilizas **XAMPP**, asegúrate de colocar el proyecto dentro de la carpeta `htdocs`, o crear un enlace simbólico, e ingresa desde `http://localhost/contacts-app`.
   - Si prefieres el **servidor nativo de PHP**, abre una terminal en la raíz del proyecto y ejecuta: `php -S 127.0.0.1:8080`. Luego, abre en tu navegador `http://127.0.0.1:8080`.