# 🌐 Web Personal — Portafolio Profesional

Este es mi proyecto de **web personal**, desarrollado con **Laravel** y **Vite**, donde presento mis servicios, proyectos, experiencia y una breve información sobre mí.

El objetivo de este sitio es contar con un lugar centralizado para mostrar quién soy, qué hago y cómo puedo ayudar a mis clientes o empleadores potenciales.

---

## 🚀 Tecnologías Utilizadas

- **Laravel 10** — Framework backend
- **Vite** — Compilación moderna de assets (CSS/JS)
- **PHP 8+**
- **MySQL / MariaDB** (opcional, dependiendo del contenido dinámico)
- **TailwindCSS / Bootstrap** (según tu proyecto)
- **JavaScript ES Modules**

---

## 📂 Estructura Principal del Proyecto
/app
/public
/resources
/routes
/config

Los assets front-end (CSS/JS) se manejan mediante **Vite** y se compilan dentro de:

public/build/


---

## ⚙️ Instalación y Configuración

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/CCAYCHOG/webpersonal
cd tu-repo

2️⃣ Instalar dependencias de PHP
composer install

3️⃣ Instalar dependencias de Node
npm install

4️⃣ Crear archivo .env
cp .env.example .env

Configura la base de datos y APP_URL dentro del .env.

5️⃣ Generar key de Laravel
php artisan key:generate

6️⃣ Compilar assets

Modo desarrollo:
npm run dev

Modo producción:
npm run build

🖥️ Despliegue en Producción

Para entorno de producción:

composer install --no-dev
php artisan optimize
npm run build

Luego asegúrate de que:

El contenido de /public se publique en el directorio público del servidor (public_html).

El resto del proyecto esté fuera del alcance público por seguridad.

index.php apunte correctamente a /vendor/autoload.php y /bootstrap/app.php.

🧠 Características del Sitio

Información personal y profesional

Portafolio de proyectos

Sección de contacto

Diseño responsive

Optimización con Vite

Código organizado para escalabilidad

🤝 Contribuciones

Este es un proyecto personal, pero estoy abierto a ideas, mejoras o reportes de bugs mediante issues o pull requests.

📬 Contacto

Si deseas comunicarte conmigo, puedes contactarme vía:

Email: ing@cesarcaycho.com

Web: https://cesarcaycho.com

LinkedIn: https://www.linkedin.com/in/juliocesarcaychogarcia/

📝 Licencia

Este proyecto está bajo la licencia MIT, lo cual permite su uso, distribución y modificación libremente.

✨ Gracias por visitar este proyecto.
Si te gusta, ¡no olvides dejar una estrella ⭐ en GitHub!
---